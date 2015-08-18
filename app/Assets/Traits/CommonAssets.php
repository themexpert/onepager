<?php namespace App\Assets\Traits;

trait CommonAssets {
  public function enqueueCommonScripts(  ) {
    $asset = onepager()->asset();

    $asset->style( 'bootstrap', asset( 'assets/css/bootstrap.css' ) );
    $asset->script( 'bootstrap', asset( 'assets/js/bootstrap.js' ), [ 'jquery' ] );
    $asset->style( 'animatecss', asset( 'assets/css/animate.css' ) );
    $asset->style( 'fontawesome', asset( 'assets/css/font-awesome.css' ) );

    if ( is_super_admin() ) {
      $asset->style( 'lithium-ui', asset( 'assets/css/lithium-builder.css' ) );
    }
  }
}
