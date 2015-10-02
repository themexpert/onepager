<?php namespace ThemeXpert\Onepager\Block;

use ThemeXpert\FileSystem\FileSystem as FS;
use ThemeXpert\Onepager\Block\Transformers\ConfigTransformer;

class BlockManager {

  protected $groupOrder = array();
  protected $ignoredGroups = array();

  public function __construct( ConfigTransformer $configTransformer, Collection $blocksCollection ) {
    $this->configTransformer = $configTransformer;
    $this->blocksCollection  = $blocksCollection;
  }

  public function loadAllFromPath( $path, $url, $groups = array() ) {
    try {
      if ( ! FS::exists( $path ) ) {
        $msg = __(
          "You were trying to add blocks from " . $path .
          " but this path does not exist. Please create this folder.", "onepager" );
        throw new \Exception( $msg );
      }

      $folders = FS::folders( $path );

      foreach ( $folders as $folder ) {
        $config_file = untrailingslashit( $path ) . DIRECTORY_SEPARATOR . $folder . DIRECTORY_SEPARATOR . "config.php";


        if ( ! FS::exists( $config_file ) ) {
          $this->loadAllFromPath( $path . DIRECTORY_SEPARATOR . $folder, trailingslashit( $url ) . $folder, $groups );

          continue;
        }

        $this->add( $config_file, trailingslashit( $url ) . $folder, $groups );
      }
    } catch ( \Exception $e ) {
      print( 'Caught exception: ' . $e->getMessage() . "\n<br>" );
    }
  }

  public function add( $file, $url, $groups = array() ) {
    $url    = untrailingslashit( $url );
    $config = require( $file );


    $config           = $this->configTransformer->transform( $config, $file, $url );
    $config['groups'] = array_merge( $config['groups'], (array) $groups );
    $this->blocksCollection->set( $config['slug'], $config );
  }

  public function get( $key ) {
    return $this->blocksCollection->get( $key );
  }

  public function all() {
    $ignoredGroups = $this->getIgnoredGroups();

    return array_filter( (array) $this->blocksCollection, function ( $block ) use ( $ignoredGroups ) {
      return ! count( array_intersect( $block['groups'], $ignoredGroups ) );
    } );
  }

  /**
   * @return array
   */
  public function getGroupOrder() {
    return $this->groupOrder;
  }

  /**
   * @param array $groupOrder
   */
  public function setGroupOrder( $groupOrder ) {
    $this->groupOrder = $groupOrder;
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
