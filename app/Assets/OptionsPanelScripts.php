<?php namespace App\Assets;

use App\Assets\Traits\CommonAssets;
use App\Assets\Traits\FormEngineScripts;

class OptionsPanelScripts {
  use CommonAssets;
  use FormEngineScripts;

  public function enqueue(  ) {
    $this->enqueueCommonScripts();
    $this->enqueueFormEngineScripts();

    $asset = onepager()->asset();
    $asset->style( 'lithium-ui', asset( 'assets/css/lithium-builder.css' ) );
    $asset->script( 'admin-bundle', asset( 'assets/optionspanel.bundle.js' ), [ 'jquery' ] );
    $asset->enqueue();
  }
}
