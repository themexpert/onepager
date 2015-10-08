<?php
/**
 * Created by IntelliJ IDEA.
 * User: na
 * Date: 8/18/15
 * Time: 1:20 AM
 */

namespace App\Api\Controllers;


class BlocksApiController extends ApiController {
  public function reloadBlocks() {
    $blocks = array_values( onepager()->blockManager()->all() );

    $this->responseSuccess( compact( 'blocks' ) );
  }
}
