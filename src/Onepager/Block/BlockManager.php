<?php namespace ThemeXpert\Onepager\Block;

use ThemeXpert\FileSystem\FileSystem as FS;
use ThemeXpert\Onepager\Block\Transformers\ConfigTransformer;

class BlockManager {

	public function __construct( ConfigTransformer $configTransformer, Collection $blocksCollection) {
		$this->configTransformer = $configTransformer;
		$this->blocksCollection  = $blocksCollection;
	}

	public function loadAllFromPath( $path, $url ) {
		$folders = FS::folders( $path );

		foreach ( $folders as $folder ) {
			$config_file = untrailingslashit($path) . DIRECTORY_SEPARATOR . $folder . DIRECTORY_SEPARATOR . "config.php";


      if ( ! FS::exists( $config_file ) ) {
      	$this->loadAllFromPath($path . DIRECTORY_SEPARATOR . $folder, $url."/".$folder);

        continue;
      }

      $this->add( $config_file, trailingslashit( $url ) . $folder );
		}
	}

	public function add( $file, $url ) {
		$url    = trailingslashit( $url );
		$config = require( $file );


		$config = $this->configTransformer->transform( $config, $file, $url );
		$this->blocksCollection->set( $config['slug'], $config );
	}

	public function get( $key ) {
		return $this->blocksCollection->get( $key );
	}

	public function all() {
		return $this->blocksCollection;
	}
}
