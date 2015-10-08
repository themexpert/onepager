<?php namespace App\Assets;

class WpConflictResolver {
  public function __construct() {
    add_action( 'wp_enqueue_scripts', [ $this, 'dequeue_default_template_stylesheet' ], 999 );
    add_action( 'wp_print_scripts', [ $this, 'dequeue_conflicting_scripts' ], 100 );
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

  public function dequeue_conflicting_scripts() {
    if ( ! onepager()->content()->isOnepage() ) {
      return;
    }

    $this->support_twentyfifteen_theme();
    $this->support_nextgen_scroll_gallery();
  }

  protected function support_twentyfifteen_theme() {
    //2015 script uses bad selectors that override onepager
    wp_dequeue_script( 'twentyfifteen-script' );
  }

  protected function support_nextgen_scroll_gallery() {
    //conflicts with react modules
    wp_dequeue_script( 'mootools' );
    wp_dequeue_script( 'powertools' );
    wp_dequeue_script( 'scrollGallery' );
  }
}
