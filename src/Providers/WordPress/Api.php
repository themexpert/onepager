<?php namespace ThemeXpert\Providers\WordPress;

use ThemeXpert\Providers\Contracts\ApiInterface;

class Api implements ApiInterface {
  public function getAjaxUrl() {
    return admin_url( 'admin-ajax.php' );
  }

  public function get( $action, $callback ) {
    if ( 'GET' == $_SERVER['REQUEST_METHOD'] ) {
      $this->action( $action, $callback );
    }
  }

  public function action( $action, $callback ) {
    $callback   = explode( '@', $callback );
    $controller = new $callback[0];
    $method     = $callback[1];

    add_action( 'wp_ajax_' . $action, array( $controller, $method ) );
  }

  public function post( $action, $callback ) {
    if ( 'POST' == $_SERVER['REQUEST_METHOD'] ) {
      $this->action( $action, $callback );
    }
  }
}
