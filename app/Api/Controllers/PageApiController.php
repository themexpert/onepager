<?php
/**
 * Created by IntelliJ IDEA.
 * User: na
 * Date: 8/18/15
 * Time: 1:22 AM
 */

namespace App\Api\Controllers;


class PageApiController extends ApiController {
  public function selectLayout() {
    $pageId   = array_get( $_POST, 'pageId', false );
    $layoutId = array_get( $_POST, 'layoutId', false );

    $onepagerLayouts = onepager()->layoutManager()->all();
    $layout          = array_find_by( $onepagerLayouts, 'id', $layoutId );

    if ( $layout ) {
      onepager()->section()->save( $pageId, $layout['sections'] );
      $this->responseSuccess();
    } else {
      $this->responseFailed();
    }

  }
}
