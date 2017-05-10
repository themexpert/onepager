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
    $asset->style( 'tx-bootstrap', op_asset( 'assets/css/bootstrap.css' ) );
    $asset->style( 'tx-fontawesome', op_asset( 'assets/css/font-awesome.css' ) );

    $asset->script( 'tx-bootstrap', op_asset( 'assets/js/bootstrap.js' ), [ 'jquery' ], ONEPAGER_VERSION, false );
    $asset->script( 'tx-bootstrap-switch', op_asset( 'assets/js/bootstrap-switch.js' ), [ 'jquery' ], ONEPAGER_VERSION, false );
    $asset->script( 'tx-bootstrap-select', op_asset( 'assets/js/bootstrap-select.js' ), [ 'jquery' ], ONEPAGER_VERSION, false );
    $asset->script( 'tx-iconselector', op_asset( 'assets/js/icon-selector-bootstrap.js' ), [ 'jquery' ], ONEPAGER_VERSION, false );
    $asset->script( 'tx-colorpicker', op_asset( 'assets/js/bootstrap-colorpicker.js' ), [ 'jquery' ], ONEPAGER_VERSION, false );
    $asset->script( 'tx-nicescroll', op_asset( 'assets/js/jquery.nicescroll.min.js' ), [ 'jquery' ], ONEPAGER_VERSION, false );
    $asset->script( 'tx-toastr', op_asset( 'assets/js/toastr.js' ), [ 'jquery' ], ONEPAGER_VERSION, false );

    $asset->style( 'tx-colorpicker', op_asset( "assets/css/bootstrap-colorpicker.css" ) );
    $asset->style( 'tx-lithium-ui', op_asset( 'assets/css/lithium-builder.css' ) );
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
