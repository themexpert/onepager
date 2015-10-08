<?php namespace App\Content;

class OnepageToolbar {
  public function __construct() {
    add_action( 'wp', [ $this, 'addToolbar' ] );
  }

  function addToolbar() {
    $isOnepage   = onepager()->content()->isOnepage();
    $isPreview   = onepager()->content()->isPreview();
    $isBuildMode = onepager()->content()->isBuildMode();

    if ( $isOnepage && ! $isPreview ) {
      $url = onepager_get_edit_mode_url( get_current_page_url(), true );

      onepager()->toolbar()->addMenu(
        'op-enable-livemode',
        $url,
        '<span class="fa fa-circle"></span> Enable Onepage Editor'
      );
    }

    //hide the navbar when livemode
    if ( $isPreview || $isBuildMode ) {
      show_admin_bar( false );
    }
  }
}
