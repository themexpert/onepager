<?php namespace App\Assets\Traits;

use _WP_Editors;

trait FormEngineScripts {
  public function enqueueFormEngineScripts() {
    $this->jsWpEditor();
    $this->formEngineScripts();

    wp_enqueue_media();
  }

  protected function formEngineScripts() {
    $asset = onepager()->asset();

    // tx namespaced assets to avoid multiple assets loading from other ThemeXpert product
    $asset->script( 'tx-bootstrap-switch', asset( 'assets/js/bootstrap-switch.js' ), [ 'jquery' ] );
    $asset->script( 'tx-bootstrap-select', asset( 'assets/js/bootstrap-select.js' ), [ 'jquery' ] );
    $asset->script( 'tx-iconselector', asset( 'assets/js/icon-selector-bootstrap.js' ), [ 'jquery' ] );

    $asset->script( 'tx-colorpicker', asset( 'assets/js/bootstrap-colorpicker.js' ), [ 'jquery' ] );
    $asset->style( 'tx-colorpicker', asset( "assets/css/bootstrap-colorpicker.css" ) );

    $asset->script( 'tx-toastr', asset( 'assets/js/toastr.js' ), [ 'jquery' ] );
  }

  protected function jsWpEditor( $settings = array() ) {
    if ( ! class_exists( '_WP_Editors' ) ) {
      require( ABSPATH . WPINC . '/class-wp-editor.php' );
    }

    $set = _WP_Editors::parse_settings( 'apid', $settings );
    if ( ! current_user_can( 'upload_files' ) ) {
      $set['media_buttons'] = false;
    }
    if ( $set['media_buttons'] ) {
      wp_enqueue_script( 'thickbox' );
      wp_enqueue_style( 'thickbox' );
      wp_enqueue_script( 'media-upload' );
      $post = get_post();
      if ( ! $post && ! empty( $GLOBALS['post_ID'] ) ) {
        $post = $GLOBALS['post_ID'];
      }
      wp_enqueue_media( array(
        'post' => $post,
      ) );
    }
    _WP_Editors::editor_settings( 'apid', $set );
  }
}
