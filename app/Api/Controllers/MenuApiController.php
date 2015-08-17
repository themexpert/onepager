<?php
/**
 * Created by IntelliJ IDEA.
 * User: na
 * Date: 8/18/15
 * Time: 12:37 AM
 */

namespace App\Api\Controllers;


class MenuApiController extends ApiController {
  public function addMenu() {
    $menuId    = array_get( $_POST, 'menuId', false );
    $itemId    = array_get( $_POST, 'itemId', false );
    $itemTitle = array_get( $_POST, 'itemTitle', false );

    onepager()
      ->navigationMenu()
      ->addItem( $menuId, $itemTitle, $itemId );

    $this->responseSuccess();
  }
}
