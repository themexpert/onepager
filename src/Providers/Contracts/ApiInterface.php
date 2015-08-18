<?php
namespace ThemeXpert\Providers\Contracts;
interface ApiInterface {
  public function getAjaxUrl();

  public function get( $action, $callback );

  public function post( $action, $callback );

  public function action( $action, $callback );
}
