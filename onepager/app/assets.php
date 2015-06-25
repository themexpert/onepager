<?php
function getOnepagerData( $pageId ) {
	$onepager = onepager();

	$ajaxUrl   = $onepager->api()->getAjaxUrl();
	$nav_arr   = $onepager->content()->getMenus();
	$cat_arr   = $onepager->content()->getCategories();
	$pages_arr = $onepager->content()->getPages();
	$blocks    = array_values( (array) $onepager->blockManager()->all() );

	$sections = array_map( function ( $section ) {
		$section['content'] = onepager()->render()->section( $section );
		$section['style']   = onepager()->render()->style( $section );

		return $section;
	}, onepager()->section()->all( $pageId ) );

	return array(
		'ajaxUrl'    => $ajaxUrl,
		'blocks'     => $blocks,
		'pageId'     => $pageId,
		'sections'   => $sections,
		'menus'      => $nav_arr,
		'pages'      => $pages_arr,
		'categories' => $cat_arr
	);
}

function enqueueOnepagerAssets() {
	$q = onepager()->asset();

	$q->style( 'tx-bootstrap', asset( 'assets/css/bootstrap.css' ) );
	$q->style( 'tx-animatecss', asset( 'assets/css/animate.css' ) );
	$q->style( 'tx-fontawesome', asset( 'assets/css/font-awesome.css' ) );
	$q->style( 'op-blocks', asset( 'assets/css/blocks.css' ) );
	$q->script( 'tx-bootstrap', asset( 'assets/js/bootstrap.js' ), [ 'jquery' ] );
	$q->script( 'tx-wow', asset('assets/js/wow.js'), array( 'jquery' ) );
	$q->script( 'tx-nicescroll', asset('assets/js/jquery.nicescroll.js'), array( 'jquery' ) );
	$q->script( 'tx-magnific-popup', asset('assets/js/jquery.magnific-popup.js'), array( 'jquery' ) );

	$q->style( 'tx-flexbox', asset( 'assets/css/flex.css' ) );
	$q->style( 'tx-magnific-popup', asset( 'assets/css/magnific-popup.css' ) );
	
	$q->style( 'lithium', asset( 'assets/css/lithium.css' ) );

	if ( onepager()->content()->isLiveMode() ) {
		if ( function_exists( 'wp_enqueue_media' ) ) {
			wp_enqueue_media();
		}

		$q->style( 'tx-colorpicker', asset( 'bower_components/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css' ) );
		$q->style( 'tx-iconselector', asset( 'assets/css/icon-selector.min.css' ) );
		$q->style( 'tx-sweetalert', asset( 'assets/css/sweetalert.css' ) );
		$q->style( 'tx-toastr', asset( 'assets/css/toastr.css' ) );

		$q->script( 'tx-iconselector', asset( 'assets/js/icon-selector.min.js' ), [ 'jquery' ] );
		$q->script( 'tx-colorpicker', asset( 'assets/js/bootstrap-colorpicker.js' ), [ 'jquery' ] );
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

	$q->style( 'tx-animatecss', asset( 'assets/css/animate.css' ) );
	$q->style( 'tx-fontawesome', asset( 'assets/css/font-awesome.css' ) );
	$q->script( 'tx-bootstrap', asset( 'assets/js/bootstrap.js' ), [ 'jquery' ] );

	$q->script( 'admin-bundle', asset('assets/admin.bundle.js'), ['jquery']);

	$q->style( 'tx-colorpicker', asset( 'bower_components/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css' ) );
	$q->style( 'tx-iconselector', asset( 'assets/css/icon-selector.min.css' ) );
	$q->style( 'tx-sweetalert', asset( 'assets/css/sweetalert.css' ) );
	$q->style( 'tx-toastr', asset( 'assets/css/toastr.css' ) );

	$q->script( 'tx-iconselector', asset( 'assets/js/icon-selector.min.js' ), [ 'jquery' ] );
	$q->script( 'tx-colorpicker', asset( 'assets/js/bootstrap-colorpicker.js' ), [ 'jquery' ] );
	$q->script( 'tx-toastr', asset( 'assets/js/toastr.js' ), [ 'jquery' ] );
}

//frontend
add_action( 'wp_enqueue_scripts', 'enqueueOnepagerAssets' );
