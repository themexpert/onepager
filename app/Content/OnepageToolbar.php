<?php namespace App\Content;

class OnepageToolbar {
  public function __construct(  ) {
    add_action('wp', [$this, 'addToolbar']);
  }

  function addToolbar() {
    $isOnepage  = onepager()->content()->isOnepage();
    $isLiveMode = onepager()->content()->isBuildMode();

    if ($isOnepage && !$isLiveMode) {
      $url = onepager_get_edit_mode_url(get_current_page_url(), true);

      onepager()->toolbar()->addMenu(
        'op-enable-livemode',
        $url,
        '<span class="fa fa-circle"></span> Enable Onepage Editor'
      );
    }

    //hide the navbar when livemode
    if ($isLiveMode) {
      show_admin_bar(false);
    }
  }
}
