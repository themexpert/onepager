<?php

function getOnepagerData( $pageId ) {
	$onepager = onepager();

	$ajaxUrl   = $onepager->api()->getAjaxUrl();
	$nav_arr   = $onepager->content()->getMenus();
	$cat_arr   = $onepager->content()->getCategories();
	$pages_arr = $onepager->content()->getPages();
	$blocks    = array_values( (array) $onepager->blockManager()->all() );
  $groupOrder = $onepager->blockManager()->getGroupOrder();

	$sections = array_map( function ( $section ) {
		$section = onepager()->render()->sectionBlockDataMerge($section);
		$section['content'] = onepager()->render()->section( $section );
		$section['style']   = onepager()->render()->style( $section );

		return $section;
	}, onepager()->section()->all( $pageId ) );

	$url   = League\Url\Url::createFromUrl( getCurrentPageURL() );
	$query = $url->getQuery();
	$query->modify( array( 'livemode' => false ) );

	return array(
		'ajaxUrl'    	=> $ajaxUrl,
		'optionPanel'   => onepager()->optionsPanel("onepager")->getOptions(),
		'options'	    => get_option('onepager'),
		'page'     		=> 'onepager',
		'blocks'     => $blocks,
		'pageId'     => $pageId,
		'sections'   => $sections,
		'menus'      => $nav_arr,
		'pages'      => $pages_arr,
		'categories' => $cat_arr,
    'groupOrder' => $groupOrder,
		'disable'		=> $url->__toString()
	);
}

function enqueueOnepagerAssets() {
	$q = onepager()->asset();

	// TX Namespaced assets to avoid multiple assets loading from other ThemeXpert product
	$q->style( 'tx-bootstrap', asset( 'assets/css/bootstrap.css' ) );
	$q->style( 'tx-animatecss', asset( 'assets/css/animate.css' ) );
	$q->style( 'tx-fontawesome', asset( 'assets/css/font-awesome.css' ) );

	$q->script( 'tx-bootstrap', asset( 'assets/js/bootstrap.js' ), [ 'jquery' ] );
	$q->script( 'tx-wow', asset('assets/js/wow.js'), array( 'jquery' ) );
	$q->script( 'tx-nicescroll', asset('assets/js/jquery.nicescroll.js'), array( 'jquery' ) );
	$q->script( 'lithium', asset('assets/lithium.js'), array( 'jquery' ) );

	$q->style( 'lithium', asset( 'assets/css/lithium.css' ) );

	if ( onepager()->content()->isLiveMode() ) {
		if ( function_exists( 'wp_enqueue_media' ) ) {
			wp_enqueue_media();
		}

		$q->script( 'tx-iconselector', asset( 'assets/js/icon-selector.min.js' ), [ 'jquery' ] );
		$q->script( 'tx-colorpicker', asset( 'assets/js/bootstrap-colorpicker.js' ), [ 'jquery' ] );
		$q->script( 'tx-bootstrap-switch', asset( 'assets/js/bootstrap-switch.js' ), [ 'jquery' ] );
		$q->script( 'tx-toastr', asset( 'assets/js/toastr.js' ), [ 'jquery' ] );

		$q->script( 'onepager', asset('assets/app.bundle.js'), ['jquery']);

		$q->localizeScript( 'onepager', getOnepagerData( onepager()->content()->getCurrentPageId() ), 'onepager' );
	}

}

function enqueueOnepagerAdminAssets(){
	$q = onepager()->asset();

	if ( function_exists( 'wp_enqueue_media' ) ) {
		wp_enqueue_media();
	}
	$q->style( 'tx-bootstrap', asset( 'assets/css/bootstrap.css' ) );
	$q->style( 'tx-animatecss', asset( 'assets/css/animate.css' ) );
	$q->style( 'tx-fontawesome', asset( 'assets/css/font-awesome.css' ) );
	$q->style( 'lithium-ui', asset( 'assets/css/lithium-builder.css' ) );

	$q->script( 'tx-bootstrap', asset( 'assets/js/bootstrap.js' ), [ 'jquery' ] );

	$q->script( 'tx-iconselector', asset( 'assets/js/icon-selector.min.js' ), [ 'jquery' ] );
	$q->script( 'tx-colorpicker', asset( 'assets/js/bootstrap-colorpicker.js' ), [ 'jquery' ] );
	$q->script( 'tx-toastr', asset( 'assets/js/toastr.js' ), [ 'jquery' ] );

	$q->script( 'admin-bundle', asset('assets/optionspanel.bundle.js'), ['jquery']);
}

//live edit mode
add_action( 'wp_enqueue_scripts', 'enqueueOnepagerAssets' );
