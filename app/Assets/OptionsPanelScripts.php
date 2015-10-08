<?php namespace App\Assets;

use App\Assets\Traits\FormEngineScripts;

class OptionsPanelScripts {
  use FormEngineScripts;

  public function enqueue() {
    $this->enqueueFormEngineScripts();

    $asset = onepager()->asset();
    $asset->style( 'lithium-ui', op_asset( 'assets/css/lithium-builder.css' ) );
    $asset->script( 'admin-bundle', op_asset( 'assets/optionspanel.bundle.js' ), [ 'jquery' ] );
    $asset->enqueue();
  }
}
