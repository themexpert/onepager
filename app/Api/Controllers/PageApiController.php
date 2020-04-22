<?php
/**
 * Created by IntelliJ IDEA.
 * User: na
 * Date: 8/18/15
 * Time: 1:22 AM
 */

namespace App\Api\Controllers;

use App\Assets\BlocksScripts;
use App\Assets\OnepageScripts;

class PageApiController extends ApiController {

	public function selectLayout() {
		$pageId = array_get( $_POST, 'pageId', false );
		$layoutId = array_get( $_POST, 'layoutId', false );

		$layouts = onepager()->presetManager()->all();
		$layout = array_find_by( $layouts, 'id', $layoutId );

		if ( $layout ) {
			onepager()->section()->save( $pageId, $layout['sections'] );
			$this->buildOnepageScripts( $layout['sections'], $pageId );
			$this->responseSuccess();
		} else {
			$this->responseFailed();
		}
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

	public function addPage() {
		$title = array_get( $_POST, 'pageTitle', 'OnePage #' . rand( 999, 9999 ) );
		$layoutId = array_get( $_POST, 'layoutId', false );

		
		/**
		 * wp_insert_post syntax
		 * wp_insert_post($postarr, $wp_error)
		 */
		$new_page_id = wp_insert_post(
			[
				'post_title' => $title,
				'post_type' => 'page',
				'post_name' => $title,
				'comment_status' => 'closed',
				'ping_status' => 'closed',
				'post_content' => '',
				'post_status' => 'publish',
				'post_author' => get_user_by( 'id', 1 )->user_id,
				'menu_order' => 0,
				'page_template' => 'onepage.php',
				'template' => 'onepage.php',
			]
		);

		$pageId = $new_page_id;

		$layouts = onepager()->presetManager()->all();
		$layout = array_find_by( $layouts, 'id', $layoutId );

		if ( $layout ) {
			onepager()->section()->save( $pageId, $layout['sections'] );
			$this->buildOnepageScripts( $layout['sections'], $pageId );

			$response = ['success' => true, 'url' => get_site_url() . "?page_id={$pageId}&onepager=1"];
			$this->responseSuccess( $response );
		} else {
			$this->responseFailed();
		}

		// $this->responseSuccess($response);
	}
}
