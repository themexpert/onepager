<?php namespace App\Assets;

class WpConflictResolver {
  public function __construct() {
    add_action( 'wp_enqueue_scripts', [ $this, 'dequeue_default_template_stylesheet' ], 999 );
  }

  public function dequeue_default_template_stylesheet() {
    if ( get_theme_support( 'onepager' ) ) {
      return;
    }

    if ( ! onepager()->content()->isOnepage() ) {
      return;
    }

    global $wp_styles;

    $wp_styles->remove( get_default_template_stylesheet_handle() );
  }
}
