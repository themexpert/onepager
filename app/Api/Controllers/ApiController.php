<?php namespace App\Api\Controllers;

use Symfony\Component\HttpFoundation\Response;

class ApiController {
  protected $response;

  public function __construct() {
    $this->response = new Response();
  }

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
  protected function response( $data ) {
    @header( 'Content-Type: application/json; charset=' . get_option( 'blog_charset' ) );
    $this->response->setContent( json_encode( $data ) );
    $this->response->headers->set( 'Content-Type', 'application/json' );

    return $this;
  }

  protected function send() {
    $this->response->send();
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
