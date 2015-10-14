<?php
use App\Application;
use Pimple\Container;
use ThemeXpert\Onepager\Adapters\WordPress;
use ThemeXpert\Onepager\Onepager;

function onepager() {
  static $onepager;

  if ( ! $onepager ) {
    $onepager = new Onepager(
      new WordPress( new Container, ONEPAGER_PATH, ONEPAGER_URL ),
      new Container
    );
  }

  return $onepager;
}

new Application( onepager() );
do_action('onepager_init');
