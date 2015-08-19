<?php namespace ThemeXpert\Providers\WordPress;


use ThemeXpert\Asset\AssetsCompiler;
use ThemeXpert\Providers\Contracts\AssetInterface;

class Asset implements AssetInterface {
  protected $scripts = array();
  protected $styles = array();
  protected $localize = array();

  public function script( $name, $src = false, $dependency = [ ], $version = 1, $footer = true ) {
    $this->scripts[ $name ] = array(
      "name"       => $name,
      "src"        => $src,
      "dependency" => $dependency,
      "version"    => $version,
      "footer "    => $footer,
    );
  }

  public function style( $name, $src = false, $dependency = [ ], $version = 1, $media = 'all' ) {
    $this->styles[ $name ] = array(
      "name"       => $name,
      "src"        => $src,
      "dependency" => $dependency,
      "version"    => $version,
      "media "     => $media,
    );
  }

  public function enqueueScripts() {
    array_map( function ( $script ) {
      call_user_func_array( 'wp_enqueue_script', $script );
    }, $this->scripts );
  }

  public function enqueueStyles() {
    array_map( function ( $style ) {
      call_user_func_array( 'wp_enqueue_style', $style );
    }, $this->styles );
  }

  public function enqueueLocalizations() {
    array_map( function ( $loc ) {
      call_user_func_array( 'wp_localize_script', $loc );
    }, $this->localize );
  }

  public function enqueue() {
      $this->enqueueStyles();
      $this->enqueueScripts();
      $this->enqueueLocalizations();
  }

  public function compileScriptsAndEnqueue($pageId){
    $js_file  = content_url( 'cache/onepager.build' . $pageId . '.js' );
    $css_file = content_url( 'cache/onepager.build' . $pageId . '.css' );

    if ( ! file_exists( $js_file ) || ! file_exists( $css_file ) ) {
      add_action( 'wp_head', function () use ( $pageId ) {
        $this->compilePageAssets( $pageId );
      }, 5 );
    }

    wp_enqueue_script( 'onepager', $js_file, $this->getDependencies( $this->scripts ) );
    wp_enqueue_style( 'onepager', $css_file, $this->getDependencies( $this->styles ) );
  }

  public function getDependencies( $assets ) {
    return array_reduce( $assets, function ( $carry, $asset ) {
      return array_merge( $carry, $asset['dependency'] );
    }, [ ] );
  }

  public function localizeScript( $name, $data, $handle = "" ) {
    $this->localize[ $name ] = array(
      "handle" => $handle,
      "name"   => $name,
      "data"   => $data,
    );
  }

  public function compilePageAssets( $pageId ) {
    $compiler = new AssetsCompiler();
    $compiler->addCollection( WP_CONTENT_DIR . '/cache/onepager.build' . $pageId . '.css', $this->styles );
    $compiler->addCollection( WP_CONTENT_DIR . '/cache/onepager.build' . $pageId . '.js', $this->scripts );
  }
}
