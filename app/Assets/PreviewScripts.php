<?php namespace App\Assets;

class PreviewScripts {
  public function __construct() {
    add_action( 'wp_enqueue_scripts', [ $this, 'enqueue' ] );
  }

  public function enqueue() {
    $asset = onepager()->asset();

    if ( ! $this->isPreview() ) {
      return;
    }

    $asset->script( 'onepager-preview', op_asset( 'assets/onepager-preview.bundle.js' ), [ 'jquery' ] );
  }

  /**
   * @return mixed
   */
  protected function isPreview() {
    return onepager()->content()->isPreview();
  }
}
