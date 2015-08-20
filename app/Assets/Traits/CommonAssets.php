<?php namespace App\Assets\Traits;
define('ONEPAGER_BOOTSTRAP', true);

trait CommonAssets {
  public function enqueueCommonScripts() {
    $asset = onepager()->asset();

    if ( $this->shouldLoadTwitterBootstrap() ) {
      $asset->style( 'bootstrap', asset( 'assets/css/bootstrap.css' ) );
      $asset->script( 'bootstrap', asset( 'assets/js/bootstrap.js' ), [ 'jquery' ] );
    }

    $asset->style( 'animatecss', asset( 'assets/css/animate.css' ) );
    $asset->style( 'fontawesome', asset( 'assets/css/font-awesome.css' ) );
  }

  protected function shouldLoadTwitterBootstrap() {
    return ( defined( 'ONEPAGER_BOOTSTRAP' ) && ONEPAGER_BOOTSTRAP ) || \Onepager::getOption( 'onepager_bootstrap', true );
  }
}
