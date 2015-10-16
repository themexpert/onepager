<?php namespace ThemeXpert\Onepager\Block;

use ThemeXpert\FileSystem\FileSystem as FS;
use ThemeXpert\Onepager\Block\Transformers\ConfigTransformer;

class PresetManager {
  protected $templates = [];
  protected $paths = [];
  protected $ignoredGroups = array();

  public function loadAllFromPath( $path, $url, $groups = array() ) {
    $this->paths[] = compact( "path", "url", "groups" );
  }

  public function add( $file, $url, $groups = array() ) {
    $config = json_decode( file_get_contents( $file ), true );
    if ( ! is_array( $config ) ) {
      return;
    }

    $filename = basename( $file );

    if ( ! array_key_exists( 'screenshot', $config ) ) {
      $imageName            = str_replace( '.json', '.jpg', $filename );
      $config['screenshot'] = trailingslashit( $url ) . $imageName;
    }

    if ( ! array_key_exists( 'group', $config ) ) {
      $config['group'] = [ ];
    }

    if ( ! array_key_exists( 'id', $config ) ) {
      $config['id'] = $filename;
    }

    if ( ! is_array( $config['group'] ) ) {
      $config['group'] = (array) $config['group'];
    }

    $config['group'] = array_merge( $config['group'], (array) $groups );


    $this->templates[] = $config;
  }

  public function loadAll() {
    $this->templates = [];

    foreach ( $this->paths as $path ) {
      $files = FS::files($path['path'], 'json');

      foreach ( $files as $file ) {
        $config_file = untrailingslashit( $path['path'] ) . DIRECTORY_SEPARATOR . $file;
        $this->add( $config_file, $path['url'], $path['groups'] );
      }
    }
  }

  public function all() {
    $this->loadAll();
    $ignoredGroups = $this->getIgnoredGroups();

    return array_filter( $this->templates, function ( $template ) use ( $ignoredGroups ) {
      return ! count( array_intersect( $template['group'], $ignoredGroups ) );
    } );
  }

  /**
   * @return array
   */
  public function getIgnoredGroups() {
    return $this->ignoredGroups;
  }

  /**
   * @param array $ignoredGroups
   */
  public function setIgnoredGroups( $ignoredGroups ) {
    $this->ignoredGroups = array_unique(array_merge((array) $ignoredGroups, $this->ignoredGroups));
  }
}
