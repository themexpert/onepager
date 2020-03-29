<?php namespace App\Content;

class OnepageInternalScripts {
	public function __construct() {
		add_action( 'wp_head', [ $this, 'injectInternalScripts' ] );
		add_filter( 'body_class', [ $this, 'injectBodyClass' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_page_scripts' ] );
	}
	public function enqueue_page_scripts(){
		if ( ! $this->isOnepage() || $this->isBuildMode() ) {
			return;
		}
		$pageId   = $this->getCurrentPageId();
		$sections = $this->getAllValidSectionsFromPageId( $pageId );
		$pageOptionPanel = $this->getPageOptionPanelFromPageId( $pageId );
		$page_settings_general = $pageOptionPanel['general'];
		$full_page_status = array_get($page_settings_general, 'full_screen');
		
		if($full_page_status){
			$asset = onepager()->asset();
			$asset->script( 'op-fullpage-ext-overflow', op_asset( 'assets/js/scrolloverflow.js' ) );
			$asset->script('op-fullpage', op_asset('assets/js/fullpage.js'));
			$asset->style( 'op-fullpage', op_asset( 'assets/css/fullpage.css' ) );
		}
        
	}

	public function injectInternalScripts() {
		if ( ! $this->isOnepage() || $this->isBuildMode() ) {
			return;
		}

		$pageId   = $this->getCurrentPageId();
		$sections = $this->getAllValidSectionsFromPageId( $pageId );
		$pageOptionPanel = $this->getPageOptionPanelFromPageId( $pageId );

		$this->renderStylesFromSections( $sections );
		$this->renderStylesForPageSettings(  $sections, $pageId, $pageOptionPanel );
		$this->loadPageFonts( $pageOptionPanel );

		$page_settings_general = $pageOptionPanel['general'];
		$full_page_status = array_get($page_settings_general, 'full_screen');
		?>
		<script>
			jQuery(document).ready(function ($) {
				$("#fullpage").fullpage({
					css3: true,
					navigation: true,
					scrollOverflow: true,
					lazyLoading: false,
					v2compatible: true,
				});
			});
		</script>
		<?php

	}
	/**
	 * Load fonts for page settings option panel
	 */
	public function loadPageFonts($pageOptionPanel){
		$option_panel_general = $pageOptionPanel['general'];
		$section_heading_font = $option_panel_general['section_heading_font']; 
		\Onepager::fonts($section_heading_font);
	}
	/**
	 * add onepager class to body 
	 * for frontend view. 
	 */
	public function injectBodyClass($classes){
		$pageId   = $this->getCurrentPageId();
		$classes[] = 'txop-page-'.$pageId;
		return $classes;
	}

	/**
	 * @return mixed
	 */
	protected function isBuildMode() {
		return onepager()->content()->isBuildMode();
	}

	/**
	 * @return mixed
	 */
	protected function isOnepage() {
		return onepager()->content()->isOnepage();
	}

	/**
	 * @return mixed
	 */
	protected function getCurrentPageId() {
		return onepager()->content()->getCurrentPageId();
	}

	/**
	 * @param $pageId
	 *
	 * @return mixed
	 */
	protected function getAllValidSectionsFromPageId( $pageId ) {
		return onepager()->section()->getAllValid( $pageId );
	}
	/**
	 * @return page option panel data
	 */
	protected function getPageOptionPanelFromPageId($pageId){
		$pageOptionPanelData = onepager()->optionsPanel('onepager')->getAllSavedPageOptions($pageId);
		return $pageOptionPanelData;
	}

	/**
	 * @param $sections
	 */
	protected function renderStylesFromSections( $sections ) {
		onepager()->render()->styles( $sections );
	}
	/**
	 * @param $pageId
	 * @param $sections
	 * @param $pageOptionPanel
	 */
	protected function renderStylesForPageSettings( $sections, $pageId, $pageOptionPanel ) {
		onepager()->render()->pageStyles( $sections, $pageId, $pageOptionPanel );
	}
}
