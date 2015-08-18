<?php namespace ThemeXpert\Asset;

use Assetic\Asset\AssetCollection;
use Assetic\Asset\FileAsset;

class AssetsCompiler {
  public function addCollection( $name, $assets ) {
    $collection = new AssetCollection(
      array_map( function ( $asset ) {
        return new FileAsset( $this->guessPath( $asset['src'] ) );
      }, $assets )
    );

    $collection->setTargetPath( $name );

    if ( endsWith( $name, '.css' ) ) {
      $collection->ensureFilter( new CssRewriteFilter() );
    }

    $this->write( $name, $collection->dump() );
  }

  protected function write( $path, $contents ) {
    if ( ! is_dir( $dir = dirname( $path ) ) && false === @mkdir( $dir, 0777, true ) ) {
      throw new \RuntimeException( 'Unable to create directory ' . $dir );
    }
    if ( false === @file_put_contents( $path, $contents ) ) {
      throw new \RuntimeException( 'Unable to write file ' . $path );
    }
  }

  /**
   * Guess absolute path from file URL
   *
   * @param string $file_url File's url
   *
   * @return string
   */
  public function guessPath( $file_url ) {
    $components = parse_url( $file_url );

    // Check we have at least a path
    if ( ! isset( $components['path'] ) ) {
      return false;
    }

    $file_path      = false;
    $wp_plugin_url  = plugins_url();
    $wp_content_url = content_url();

    // Script is enqueued from a plugin
    $url_regex = $this->getUrlRegex( $wp_plugin_url );
    if ( preg_match( $url_regex, $file_url ) > 0 ) {
      $file_path = WP_PLUGIN_DIR . preg_replace( $url_regex, '', $file_url );
    }

    // Script is enqueued from a theme
    $url_regex = $this->getUrlRegex( $wp_content_url );
    if ( preg_match( $url_regex, $file_url ) > 0 ) {
      $file_path = WP_CONTENT_DIR . preg_replace( $url_regex, '', $file_url );
    }

    // Script is enqueued from wordpress
    if ( strpos( $file_url, WPINC ) !== false ) {
      $file_path = untrailingslashit( ABSPATH ) . $file_url;
    }

    return $file_path;
  }

  /**
   * Returns Regular Expression string to match an URL.
   *
   * @param string $url The URL to be matched.
   *
   * @return string The regular expression matching the URL.
   */
  protected function getUrlRegex( $url ) {
    $regex = '@^' . str_replace( 'http\://', '(https?\:)?\/\/', preg_quote( $url ) ) . '@';

    return $regex;
  }
}
