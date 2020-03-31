<?php namespace App\Content;

class OnepageInternalScripts {
	public function __construct() {
		add_action( 'wp_head', [ $this, 'injectInternalScripts' ] );
		add_filter( 'body_class', [ $this, 'injectBodyClass' ] );
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueue_page_scripts' ] );
	}
	/**
	 * enqueue full page scripts 
	 * for preview mode. 
	 * Need to fix for build mode.
	 */
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
			if(! onepager()->content()->isPreview()):
			wp_enqueue_script('op-full-page-ext-overflow', op_asset( 'assets/js/scrolloverflow.js' ), 'jquery', time());
			wp_enqueue_script('op-full-page', op_asset('assets/js/fullpage.js'), 'jquery', time());
			wp_enqueue_style('op-full-page', op_asset( 'assets/css/fullpage.css' ), '', time());
			endif;
		}
        
	}
	/**
	 * create an array 
	 * for section ID 
	 * from all sections
	 */
	public function full_page_section_id_arr($sections){
		$sections_arr = [];
		foreach($sections as $section){
			array_push($sections_arr, $section['id']);
		}
		return $sections_arr;
	}
	/**
	 * create an array
	 * for section title 
	 * from all sections
	 */
	public function full_page_section_name_arr($sections){
		$sections_name_arr = [];
		foreach($sections as $section){
			array_push($sections_name_arr, $section['title']);
		}
		return $sections_name_arr;
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

		/**
		 * for full page script
		 * need to fix it for build mode. 
		 * preview mode is ok. 
		 */
		$page_settings_general = $pageOptionPanel['general'];
		$full_page_status = array_get($page_settings_general, 'full_screen');
		$fullpage_section_ids_arr = $this->full_page_section_id_arr($sections);
		$fullpage_section_name_arr = $this->full_page_section_name_arr($sections);
		
		if(onepager()->content()->isPreview()):
			if($full_page_status):
		?>
		
				<script>
					jQuery(document).ready(function ($) {
						$("#fullpage").fullpage({
							sectionSelector: ".op-section-view",
							anchors: <?php print(json_encode($fullpage_section_ids_arr)); ?>,
							css3: true,
							navigation: true,
							scrollOverflow: false,
							lazyLoading: false,
							navigationTooltips: <?php print(json_encode($fullpage_section_ids_arr)); ?>,
						});
					});
				</script>
		<?php
			endif;
		else:
			if($full_page_status):
			?>
				<script>
					jQuery(document).ready(function ($) {
						$(".op-sections").fullpage({
							sectionSelector: ".fp-section",
							anchors: <?php print(json_encode($fullpage_section_ids_arr)); ?>,
							css3: true,
							navigation: true,
							scrollOverflow: false,
							lazyLoading: false,
							navigationTooltips: <?php print(json_encode($fullpage_section_name_arr)); ?>,


							afterLoad: function(origin, destination, direction){
								UIkit.scrollspy('#' + destination.item.id + ' [uk-scrollspy]', {inview: true, outview: true});
							}
						});
					});
				</script>
			<?php 
			endif;
		endif;

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
