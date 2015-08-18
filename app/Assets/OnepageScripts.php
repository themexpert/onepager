<?php namespace App\Assets;

use App\Assets\Traits\CommonAssets;

class OnepageScripts {
  use CommonAssets;

  public function __construct() {
    add_action( 'wp_enqueue_scripts', [$this, 'enqueueScripts']);
  }

  public function enqueueScripts() {
    if ( ! onepager()->content()->isOnepage() ) {
      return;
    }

    $this->enqueueCommonScripts();
    $this->enqueuePageScripts();
  }

  protected function enqueuePageScripts(){
    $asset = onepager()->asset();

    $asset->script( 'wow', asset( 'assets/js/wow.js' ), [ 'jquery' ] );
    $asset->script( 'nicescroll', asset( 'assets/js/jquery.nicescroll.js' ), [ 'jquery' ] );
    $asset->script( 'lithium', asset( 'assets/lithium.js' ), [ 'jquery' ] );
    $asset->style( 'lithium', asset( 'assets/css/lithium.css' ) );
  }
}
