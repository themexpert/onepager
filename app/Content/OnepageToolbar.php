<?php namespace App\Content;

class OnepageToolbar {
  public function __construct(  ) {
    add_action('wp', [$this, 'addToolbar']);
  }

  function addToolbar() {
    $isOnepage  = onepager()->content()->isOnepage();
    $isLiveMode = onepager()->content()->isBuildMode();

    if ($isOnepage && !$isLiveMode) {
      $url = getOpBuildModeUrl(getCurrentPageURL(), true);

      onepager()->toolbar()->addMenu(
        'op-enable-livemode',
        $url,
        '<span class="fa fa-circle"></span> Enable Build Mode'
      );
    }

    //hide the navbar when livemode
    if ($isLiveMode) {
      show_admin_bar(false);
    }
  }
}
