<?php namespace ThemeXpert\Providers\WordPress;


use ThemeXpert\Providers\Contracts\ToolbarInterface;

class Toolbar implements ToolbarInterface {

  public function addMenu( $id, $href, $title ) {
    // Hook into the 'wp_before_admin_bar_render' action
    add_action( 'wp_before_admin_bar_render', function () use ( $id, $href, $title ) {
      global $wp_admin_bar;

      $args = array(
        'id'    => $id,
        'href'  => $href,
        'title' => $title,
        'group' => false,
      );

      $wp_admin_bar->add_menu( $args );
    } );
  }
}
