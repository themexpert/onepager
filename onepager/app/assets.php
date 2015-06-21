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


	$q->style( 'tx-bootstrap', asset( 'dist/vendor/css/bootstrap.css' ) );
	$q->style( 'tx-animatecss', asset( 'dist/vendor/css/animate.css' ) );
	$q->style( 'tx-fontawesome', asset( 'dist/vendor/css/font-awesome.css' ) );
	$q->script( 'tx-bootstrap', asset( 'dist/vendor/js/bootstrap.js' ), [ 'jquery' ] );
	$q->script( 'tx-mixitup', asset( 'dist/vendor/js/jquery.mixitup.js' ), [ 'jquery' ] );
	$q->script( 'tx-wow', asset('/dist/vendor/js/wow.js'), array( 'jquery' ) );
	$q->script( 'tx-nicescroll', asset('/dist/vendor/js/jquery.nicescroll.js'), array( 'jquery' ) );

	if ( onepager()->content()->isLiveMode() ) {
		if ( function_exists( 'wp_enqueue_media' ) ) {
			wp_enqueue_media();
		}

		$q->style( 'tx-colorpicker', asset( 'vendor/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.css' ) );
		$q->style( 'tx-iconselector', asset( 'dist/vendor/css/icon-selector.min.css' ) );
		$q->style( 'tx-sweetalert', asset( 'dist/vendor/css/sweetalert.css' ) );
		$q->style( 'tx-toastr', asset( 'dist/vendor/css/toastr.css' ) );
		$q->style( 'op-blocks', asset( 'dist/styles/blocks.css' ) );

		$q->script( 'tx-iconselector', asset( 'dist/vendor/js/icon-selector.min.js' ), [ 'jquery' ] );
		$q->script( 'tx-colorpicker', asset( 'dist/vendor/js/bootstrap-colorpicker.js' ), [ 'jquery' ] );
		$q->script( 'tx-toastr', asset( 'dist/vendor/js/toastr.js' ), [ 'jquery' ] );
		$q->script( 'onepager', asset( 'dist/js/index.js' ), [ 'jquery' ] );
		$q->localizeScript( 'onepager', getOnepagerData( onepager()->content()->getCurrentPageId() ), 'onepager' );
	}

	$q->style( 'tx-flexbox', asset( 'dist/styles/flex.css' ) );
	$q->style( 'lithium', asset( 'dist/styles/lithium.css' ) );
}


add_action( 'wp_enqueue_scripts', 'enqueueOnepagerAssets' );
