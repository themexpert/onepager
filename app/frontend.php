<?php

//block have internal stylesheets
//if its onepager page render onepager block styles on header
add_action( 'wp_head', function () {
	//if requested page is not onepager then get out right away
	if ( ! onepager()->content()->isOnepage() ) {
		return;
	}
	//get page id
	$pageId   = onepager()->content()->getCurrentPageId();

	//get page sections
	$sections = onepager()->section()->all( $pageId );
	
	//render its styles on head section
	onepager()->render()->styles( $sections );
} );


//TODO: optimize
//block have external stylesheets and scripts  
//if its onepager page enqueue onepager block scripts on initialization
add_action( 'wp_enqueue_scripts', function () {
	//if requested page is not onepager then get out right away
	if ( ! onepager()->content()->isOnepage() ) {
		return;
	}

	//get page sections
	$pageId   = onepager()->content()->getCurrentPageId();
	$sections = onepager()->section()->all( $pageId );
	$blocks = (array) onepager()->blockManager()->all();

	//if onepager then get all the blocks that were used in this page
	//walk all the used blocks to enqueue their styles
	array_map(function($section){
		$block = onepager()->blockManager()->get($section['slug']);

		//if its an invalid block return immediately
		//TODO: need a better exception handling
		if(!$block) return;

		//get the enqueue callback
		$enqueueCb = $block['enqueue'];
		
		//if this block does not have styles attached to 
		//reurn right away
		if ( ! $enqueueCb ) {
			return;
		}

		//get the blocks folder url
		$blockUrl = $block['url'];

		//call the enqueue callback with block folder url
		$enqueueCb( $blockUrl );
	}, $sections);
	

} );

//inject onepager
add_filter( 'the_content', function ( $content ) {
  $pageId = onepager()->content()->getCurrentPageId();
  $isOnepage = onepager()->content()->isOnepage();
  $isLiveMode = onepager()->content()->isLiveMode();

  if ( $isLiveMode ) {
    return '<div class="wrap"> <div id="onepager-mount"></div> </div>';
  }

  if ( $isOnepage ) {
    $sections = onepager()->section()->all( $pageId );

    return onepager()->render()->sections( $sections );
  }

  return $content;
} );