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
    $pageId   = array_get( $_POST, 'pageId', false );
    $layoutId = array_get( $_POST, 'layoutId', false );

    $layouts = onepager()->presetManager()->all();
    $layout  = array_find_by( $layouts, 'id', $layoutId );

    if ( $layout ) {
      onepager()->section()->save( $pageId, $layout['sections'] );
      $this->buildOnepageScripts($layout['sections'], $pageId);
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
