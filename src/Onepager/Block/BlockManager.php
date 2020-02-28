<?php namespace ThemeXpert\Onepager\Block;

use ThemeXpert\FileSystem\FileSystem as FS;
use ThemeXpert\Onepager\Block\Transformers\ConfigTransformer;

class BlockManager {

	protected $groupOrder = array();
	protected $ignoredGroups = array();
	protected $blockCount = 0;

	public function __construct( ConfigTransformer $configTransformer, Collection $blocksCollection ) {
		$op_settings_panel = [];
		$op_settings_panel['general'] = get_option('op_settings_general') ?: [];
		$op_settings_panel['styles']['color'] = get_option('op_setting_styles') ?: [];
		$op_settings_panel['advanced'] = get_option('op_setting_advanced') ?: [];
		update_option( 'onepager', $op_settings_panel ); // data comes from setting option panel of onepager dashboard
		
		$this->configTransformer = $configTransformer;
		$this->blocksCollection  = $blocksCollection;


	}

	public function loadAllFromPath( $path, $url, $groups = array() ) {
		try {
			if ( ! FS::exists( $path ) ) {
				$msg = __(
					'You were trying to add blocks from ' . $path .
					' but this path does not exist. Please create this folder.',
					'onepager'
				);
				throw new \Exception( $msg );
			}

			$folders = FS::folders( $path );
			
			foreach ( $folders as $folder ) {
				$config_file = untrailingslashit( $path ) . DIRECTORY_SEPARATOR . $folder . DIRECTORY_SEPARATOR . 'config.php';

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

	/**
	 * load all blocks from 
	 * created by Anam
	 */
	public function loadBlocksFromPath($path, $url, $groups = array()){
		$blocks = FS::folders( $path );
		if($blocks){
			foreach ( $blocks as $folder ) {
				$config_file = untrailingslashit( $path ) . DIRECTORY_SEPARATOR . $folder . DIRECTORY_SEPARATOR . 'block.jpg';
				if ( ! FS::exists( $config_file ) ) {
					$this->loadBlocksFromPath( $path . DIRECTORY_SEPARATOR . $folder, trailingslashit( $url ) . $folder, $groups );
					continue;
				}
			}
			$this->blockCount += count($blocks);
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
		// ignore group means those category what are duplicated
		$ignoredGroups = $this->getIgnoredGroups(); 
		
		return array_filter(
			(array) $this->blocksCollection,
			function ( $block ) use ( $ignoredGroups ) {
				return ! count( array_intersect( $block['groups'], $ignoredGroups ) );
			}
		);
	}
	public function showAllBlocks(){
		$blocks = $this->loadBlocksFromPath(
			ONEPAGER_BLOCKS_PATH,
			ONEPAGER_BLOCKS_URL,
			'Core Blocks'
		);
		return 'blocks - '. $this->blockCount;
	}
	/**
	 * Display block for dashboard
	 * create by anam
	 */
	public function showAllBlocksCollection(){
		$blocksCollection = $this->loadAllFromPath(
			ONEPAGER_BLOCKS_PATH,
			ONEPAGER_BLOCKS_URL,
			'Core Blocks'
		);
		return (array) $this->blocksCollection;
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
		$this->ignoredGroups = array_unique( array_merge( (array) $ignoredGroups, $this->ignoredGroups ) );
	}
}
