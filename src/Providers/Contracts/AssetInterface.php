<?php namespace ThemeXpert\Providers\Contracts;

interface AssetInterface {
  // public function footer();

  // public function header();

  // public function admin();

  // public function frontend();

  //  public function registerScript( $name, $src, $dependency = [ ], $version = 1, $footer = true );

  //  public function registerStyle( $name, $src, $dependency = [ ], $version = 1, $media = 'all' );
  public function localizeScript( $name, $data, $handle = "" );

  public function script( $name, $src = false, $dependency = [ ], $version = 1, $footer = true );

  // public function dequeueJs( $name );

  public function style( $name, $src = false, $dependency = [ ], $version = 1, $media = 'all' );

  // public function dequeueCss( $name );

  // public function js( $src );

  // public function css( $src );

  // public function add( $src );
}
