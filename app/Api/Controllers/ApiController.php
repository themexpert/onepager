<?php namespace App\Api\Controllers;


class ApiController {
  protected $data;

  /**
   * @param $input
   *
   * @return mixed
   *
   */
  protected function filterInput( &$input ) {
    array_walk_recursive( $input, function ( &$value ) {
      $value = stripslashes( $value );

      if ( $value === "true" ) {
        $value = true;
      }
      if ( $value === "false" ) {
        $value = false;
      }
    } );

    return $input;
  }

  /**
   * @param $data
   *
   * @return $this
   */
  private function response( $data ) {
    $this->data = $data;

    return $this;
  }

  private function send() {
    wp_send_json($this->data);

    die();
  }

  protected function responseFailed( $data = [ ] ) {
    $response = array_merge( $data, array( 'success' => false ) );
    $this->response( $response )->send();
  }

  protected function responseSuccess( $data = [ ] ) {
    $response = array_merge( $data, array( 'success' => true ) );
    $this->response( $response )->send();
  }

}
