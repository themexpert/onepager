<?php namespace App;

use App\Assets\BlocksScripts;
use App\Assets\BuildModeScripts;
use App\Assets\OnepageScripts;
use App\Assets\PreviewScripts;
use App\Assets\WpConflictResolver;
use App\Content\OnepageContent;
use App\Content\OnepageInternalScripts;
use App\Content\OnepageToolbar;
use App\Loaders\BlocksLoader;
use App\Loaders\PresetsLoader;
use App\Loaders\TemplateLoader;
use ThemeXpert\WordPress\PageTemplater;

class Application {
	protected $onepager;

	public function __construct( $onepager ) {
		$this->onepager = $onepager;

		$this->init_loaders();

		if ( is_admin() ) {
			return;
		}

		/**
		 * We do not want them to be loaded when in dashboard
		 */
		$this->enqueue_assets();
		$this->inject_page_contents();

		// if(!$this->isCacheDirWritable()){
		// add_action( 'admin_notices', [$this, 'cache_dir_notice'] );
		// }
	}

	public function cache_dir_notice() {
		?>
	<div class="error">
	  <p>'<?php echo ONEPAGER_CACHE_DIR; ?>' <?php esc_html_e('is used to store compiled assets. But its not writable by server. Making it writable will increase the performance of your website', 'tx-onepager');?></p>
	</div>
		<?php
	}

	protected function enqueue_assets() {
		// stops core assets
		new WpConflictResolver();

		// one pager css/js
		// todo: fix the conflict with template
		new OnepageScripts();

		// load all blocks assets
		new BlocksScripts();

		// load only on builder
		new BuildModeScripts();

		// build js for
		new PreviewScripts();

		add_action( 'wp_enqueue_scripts', [ $this, 'compile_assets' ], 1000 );
	}

	public function compile_assets() {
		if ( is_search() ) {
			return;
		}

		if ( $this->shouldCompileScripts() ) {
			$page_id = $this->getCurrentPageId();
			$this->onepager->asset()->compileScriptsAndEnqueue( $page_id );
		} else {
			$this->onepager->asset()->enqueue();
		}
	}

	protected function inject_page_contents() {
		new OnepageToolbar();
		new OnepageContent();
		new OnepageInternalScripts();
	}

	protected function init_loaders() {
		$presetManager       = $this->getPresetManager();
		new PresetsLoader( $presetManager );

		$pageTemplateManager = new PageTemplater();
		new TemplateLoader( $pageTemplateManager );

		/** No need to load them in dashboard */
		if ( is_admin() && ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
			return;
		}
		$blockManager        = $this->getBlockManager();
		new BlocksLoader( $blockManager );
	}

	/**
	 * @return mixed
	 */
	protected function getCurrentPageId() {
		return $this->onepager->content()->getCurrentPageId();
	}

	/**
	 * @return mixed
	 */
	protected function getBlockManager() {
		return $this->onepager->blockManager();
	}

	/**
	 * @return mixed
	 */
	protected function getPresetManager() {
		return $this->onepager->presetManager();
	}

	/**
	 * @return bool
	 */
	private function shouldCompileScripts() {
		return $this->onepager->content()->isBuildMode() || $this->onepager->content()->isPreview() ?
		false : ! $this->isDebugMode() && $this->isCacheDirWritable();
	}

	private function isCacheDirWritable() {
		return wp_is_writable( ONEPAGER_CACHE_DIR );
	}

	/**
	 * @return bool
	 */
	private function isDebugMode() {
		return ( defined( 'ONEPAGER_DEBUG' ) && ONEPAGER_DEBUG ) || \Onepager::getOption( 'onepager_debug', false );
	}
}
