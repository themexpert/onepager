<?php

//LIVE MODE TOOLBAR
add_action( 'wp', function () {
	$url   = League\Url\Url::createFromUrl( getCurrentPageURL() );
	$query = $url->getQuery();

	if ( onepager()->content()->isLiveMode() ) {
		$query->modify( array( 'livemode' => false ) );

		show_admin_bar(false);

		onepager()->toolbar()->addMenu( 'op-disable-livemode', $url, '<span class="fa fa-circle"></span> Disable Build Mode</span>' );
	} else {
    if(!onepager()->content()->isOnepage()){
      return;
    }
		$query->modify( array( 'livemode' => true ) );

		onepager()->toolbar()->addMenu( 'op-enable-livemode', $url, '<span class="fa fa-circle"></span> Enable Build Mode' );
	}
} );

//inject onepager
add_filter( 'the_content', function ( $content ) {
	$pageId = onepager()->content()->getCurrentPageId();

	if ( onepager()->content()->isLiveMode() ) {
		return '<div class="wrap"> <div id="onepager-mount"></div> </div>';
	}

	if ( onepager()->content()->isOnepage() ) {
		$sections = onepager()->section()->all( $pageId );

		return onepager()->render()->sections( $sections );
	}

} );

// Add svg upload support
add_filter('upload_mimes', function($mimes){
	$mimes['svg'] = 'image/svg+xml';
  	return $mimes;
});
