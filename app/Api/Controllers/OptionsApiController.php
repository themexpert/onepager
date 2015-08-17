<?php
/**
 * Created by IntelliJ IDEA.
 * User: na
 * Date: 8/18/15
 * Time: 12:35 AM
 */

namespace App\Api\Controllers;


class OptionsApiController extends ApiController {
  public function saveOptions() {
    $page    = array_get($_POST, 'page', false);
    $options = array_get($_POST, 'options', []) ?: []; //making sure its an array
    $options = $this->filterInput($options);

    update_option($page, $options);

    $this->responseSuccess();
  }
}
