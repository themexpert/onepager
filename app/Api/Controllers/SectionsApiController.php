<?php namespace App\Api\Controllers;

use App\Assets\BlocksScripts;
use App\Assets\OnepageScripts;

class SectionsApiController extends ApiController {
  public function saveSections() {
    $sections = array_get( $_POST, 'sections', [ ] ) ?: [ ]; //making sure its an array
    $updated  = array_get( $_POST, 'updated', false );
    $pageId   = array_get( $_POST, 'pageId', false );

    $sections = $this->filterInput( $sections );

    if ( $pageId ) {

      onepager()->section()->save( $pageId, $sections );
      $this->buildOnepageScripts( $sections, $pageId );

      $this->responseSuccess(['message'=>'compiled assets']);
    } else {
      $section  = array_get( $sections, $updated, false );
      $response = $this->prepareSectionWithContentAndStyle( $section );
      $this->responseSuccess( $response );
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

  public function reloadSections() {
    $sections = array_get( $_POST, 'sections', [ ] ) ?: [ ]; //making sure its an array

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
    $sections = array_map( function ( $section ) {
      return $this->prepareSectionWithContentAndStyle( $section );
    }, $sections );

    return $sections;
  }

  /**
   * @param $section
   *
   * @return mixed
   */
  protected function prepareSectionWithContentAndStyle( $section ) {
    $render = onepager()->render();

    $section            = $render->sectionBlockDataMerge( $section );
    $section['content'] = $render->section( $section );
    $section['style']   = $render->style( $section );

    return $section;
  }

  /**
   * @param $sections
   * @param $pageId
   */
  protected function buildOnepageScripts( $sections, $pageId ) {
    $blockScripts   = new BlocksScripts();
    $onepageScripts = new OnepageScripts();

    $onepageScripts->enqueueCommonScripts();
    $onepageScripts->enqueuePageScripts();
    $blockScripts->enqueueSectionBlocks( $sections );

    if(wp_is_writable( ONEPAGER_CACHE_DIR )){
      onepager()->asset()->compilePageAssets( $pageId );
    }
  }
}
