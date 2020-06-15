<?php

namespace App\Api\Controllers;

use App\Assets\BlocksScripts;
use App\Assets\OnepageScripts;

class SectionsApiController extends ApiController {

	public function saveSections() {
		$sections = array_get( $_POST, 'sections', [] ) ?: []; // making sure its an array
		$updated = array_get( $_POST, 'updated', false );
		$pageId = array_get( $_POST, 'pageId', false );

		$sections = $this->filterInput( $sections );

		if ( $pageId ) {
			onepager()->section()->save( $pageId, $sections );
			$this->buildOnepageScripts( $sections, $pageId );

			$this->responseSuccess( ['message' => 'compiled assets'] );
		} else {
			$section = array_get( $sections, $updated, false );
			$response = $this->prepareSectionWithContentAndStyle( $section );
			$this->responseSuccess( $response );
		}
	}
	/**
	 * Merge section 
	 * for saved templates
	 * while insert from popup modal
	 */
	public function mergeSections() {
		$sections = array_get( $_POST, 'sections', [] ) ?: []; // making sure its an array
		$pageId = array_get( $_POST, 'pageId', false );

		/**
		 * return only id, name slug
		 */
		// $sections = $this->filterInput( $sections );


		if ( $pageId ) {
			onepager()->section()->save( $pageId, $sections );
			$this->buildOnepageScripts( $sections, $pageId );

			$this->responseSuccess( ['message' => 'compiled assets'] );
		}
		else {
			$finalOutput = [];
			foreach ($sections as $section ) {
				$response = $this->prepareSectionWithContentAndStyle( $section );
				array_push($finalOutput, $response);
			}
			$this->responseSuccess( $finalOutput );
		}
	}

	public function getSections() {
		$pageId = array_get( $_POST, 'pageId', false );

		if ( ! $pageId ) {
			$this->responseFailed();
		}

		$sections = onepager()->section()->getAllValid( $pageId );
		$this->responseSuccess( compact( 'sections' ) );
	}
	/**
	 * save layout from builder
	 */
	public function saveLayout() {
		$name = array_get( $_POST, 'name', false );
		$type = array_get( $_POST, 'type', false );
		$pageID = array_get( $_POST, 'pageID', false );

		if ( ! $pageID ) {
			$this->responseFailed();
		}

		$sections = onepager()->section()->getAllValid( $pageID );
		if(empty($sections)){
			$this->responseFailed(['message' => 'Page contains no sections to save']);
		}
		$data = serialize($sections);
		
		$insert_id = txop_insert_user_templates([
            'name'      => $name,
            'type'      => $type,
            'data'      => $data
		]);
		$inserted_data = txop_fetch_single_templates([
			'id' => $insert_id
		]);
		$unserialize_data = unserialize($inserted_data[0]->data);
		$inserted_data[0]->data = $unserialize_data;

		$this->responseSuccess( compact('insert_id', 'inserted_data') );
	}
	/**
	 * delete layout from builder
	 */
	public function deleteLayout() {
		$id = array_get( $_POST, 'id', false );
		$name = array_get( $_POST, 'name', false );
		$type = array_get( $_POST, 'type', false );

		if ( ! $id ) {
			$this->responseFailed();
		}
		/**
		 * check if the id exist
		 */
		$check_the_data = txop_fetch_single_templates([
			'id' => $id
		]);
		if($name == $check_the_data[0]->name){
			$delete_status = txop_delete_template($id);
			$this->responseSuccess( compact('delete_status') );
		}else{
			$mismatc_message = 'ID not matched';
			$this->responseFailed( compact('mismatc_message') );
		}
	}
	/**
	 * import layout from builder
	 */
	public function importLayout() {
		$json_data = array_get( $_POST, 'data', false );

		$name = array_key_exists('name', $json_data) ? sanitize_text_field($json_data['name']) : 'template';
        $type = array_key_exists('type', $json_data) ? sanitize_text_field($json_data['type']) : 'page';
		$data = serialize($json_data['sections']);

		$insert_id = txop_insert_user_templates([
            'name'      => $name,
            'type'      => $type,
            'data'      => $data
		]);
		$inserted_data = txop_fetch_single_templates([
			'id' => $insert_id
		]);
		$unserialize_data = unserialize($inserted_data[0]->data);
		$inserted_data[0]->data = $unserialize_data;
		
		$this->responseSuccess( compact('insert_id', 'inserted_data') );
		
	}

	public function reloadSections() {
		$sections = array_get( $_POST, 'sections', [] ) ?: []; // making sure its an array

		$sections = $this->filterInput( $sections );

		$sections = $this->prepareSectionsWithContentAndStyle( $sections );
		$this->responseSuccess( compact( 'sections' ) );
	}

	/**
	 * @param $sections
	 *
	 * @return array
	 */
	protected function prepareSectionsWithContentAndStyle( $sections ) {
		$sections = array_map(
			function ( $section ) {
				return $this->prepareSectionWithContentAndStyle( $section );
			},
			$sections
		);

		return $sections;
	}

	/**
	 * @param $section
	 *
	 * @return mixed
	 */
	protected function prepareSectionWithContentAndStyle( $section ) {
		$render = onepager()->render();

		$section = $render->sectionBlockDataMerge( $section );
		$section['content'] = $render->section( $section );
		$section['style'] = $render->style( $section );

		return $section;
	}

	/**
	 * @param $sections
	 * @param $pageId
	 */
	protected function buildOnepageScripts( $sections, $pageId ) {
		$blockScripts = new BlocksScripts();
		$onepageScripts = new OnepageScripts();

		$onepageScripts->enqueueCommonScripts();
		$onepageScripts->enqueuePageScripts();
		$blockScripts->enqueueSectionBlocks( $sections );

		if ( wp_is_writable( ONEPAGER_CACHE_DIR ) ) {
			onepager()->asset()->compilePageAssets( $pageId );
		}
	}
}
