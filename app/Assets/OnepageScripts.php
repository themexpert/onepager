<?php namespace App\Assets;

class OnepageScripts {
  public function __construct() {
    add_action( 'wp_enqueue_scripts', [ $this, 'enqueueScripts' ] );
  }

  public function enqueueScripts() {
    if ( ! onepager()->content()->isOnepage() || onepager()->content()->isBuildMode() ) {
      return;
    }

    $this->enqueueCommonScripts();
    $this->enqueuePageScripts();
  }

  public function enqueuePageScripts() {
    $asset = onepager()->asset();

    $asset->script( 'lithium', op_asset( 'assets/lithium.js' ), [ 'jquery' ] );
    $asset->style( 'lithium', op_asset( 'assets/css/lithium.css' ) );

    if ( is_super_admin() && ! onepager()->content()->isBuildMode() ) {
      $asset->style( 'lithium-ui', op_asset( 'assets/css/lithium-builder.css' ) );
    }
  }

  public function enqueueCommonScripts() {
    $asset = onepager()->asset();

    // $asset->script( 'tx-wow', op_asset( 'assets/js/wow.js' ), [ 'jquery' ] );

    // if ( $this->shouldLoadTwitterBootstrap() ) {
    //   $asset->script( 'tx-bootstrap', op_asset( 'assets/js/bootstrap.js' ), [ 'jquery' ] );
    //   $asset->style( 'tx-bootstrap', op_asset( 'assets/css/bootstrap.css' ) );
    // }

    // $asset->style( 'tx-animate', op_asset( 'assets/css/animate.css' ) );
    $asset->style( 'tx-fontawesome', op_asset( 'assets/css/font-awesome.css' ) );

    // Load UIKit
    $asset->script( 'op-uikit', op_asset( 'assets/js/uikit.js' ) );
    $asset->style( 'op-uikit', op_asset( 'assets/css/uikit.css' ) );
  }

  // protected function shouldLoadTwitterBootstrap() {
  //   return ! defined( 'ONEPAGER_BOOTSTRAP' ) ? true : ONEPAGER_BOOTSTRAP;
  // }
}
