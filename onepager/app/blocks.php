<?php
do_action( 'onepager_blocks' );

//LOAD ALL BLOCKS BEFOREHAND
//WE WILL NEED THEM IN OUR AJAX REQUESTS
onepager()->blockManager()->loadAllFromPath(
	onepager()->path( "blocks" ),
	onepager()->url( "blocks" )
);


add_action( 'onepager', function () {
	if ( ! onepager()->content()->isOnepage() ) {
		return;
	}

	$blocks = (array) onepager()->blockManager()->all();

	array_walk( $blocks, function ( $block ) {
		$initCb = $block['init'];

		if ( ! $initCb ) {
			return;
		}
		//TODO: pass section variables
		$initCb( 1, 2, 3 );
	} );
} );


add_action( 'wp_head', function () {
	if ( ! onepager()->content()->isOnepage() ) {
		return;
	}

	$pageId   = onepager()->content()->getCurrentPageId();
	$sections = onepager()->section()->all( $pageId );
	onepager()->render()->styles( $sections );
} );


//TODO: optimize
add_action( 'wp_enqueue_scripts', function () {
	if ( ! onepager()->content()->isOnepage() ) {
		return;
	}

	$blocks = (array) onepager()->blockManager()->all();

	array_walk( $blocks, function ( $block ) {
		$enqueueCb = $block['enqueue'];

		if ( ! $enqueueCb ) {
			return;
		}

		$blockUrl = $block['url'];
		$enqueueCb( $blockUrl );
	} );
} );

