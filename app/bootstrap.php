<?php
/**
* TABLE OF CONTENTS
*
* 1. if wp_debug is true run whoops
* 2. create $onepager
* 3. register livemode toolbar
* 4. register blocks
* 5. support svg upload mime
* 6. add onepage templates
* 
**/


//if we are on debug mode
//run whoops to give nice error messages
if(WP_DEBUG){
	//add whoops
	// $whoops = new \Whoops\Run;
	// $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
	// $whoops->register();
}


//create onepager instance
use Pimple\Container;
use ThemeXpert\Onepager\Adapters\WordPress;
use ThemeXpert\Onepager\Onepager;

function onepager() {
	static $onepager;

	if(!$onepager){
		$onepager = new Onepager(
			new WordPress( new Container, ONEPAGER_PATH, ONEPAGER_URL ),
			new Container
		);
	}

	return $onepager;
}



//LIVE MODE TOOLBAR
add_action( 'wp', function () {
  $isOnepage = onepager()->content()->isOnepage();
  $isLiveMode = onepager()->content()->isLiveMode();

  if (  $isOnepage && !$isLiveMode){
    $url = League\Url\Url::createFromUrl( getCurrentPageURL() );
    $url->getQuery()->modify( array( 'livemode' => true ) );
    
    onepager()->toolbar()->addMenu( 
      'op-enable-livemode', 
      $url->__toString(), 
      '<span class="fa fa-circle"></span> Enable Build Mode'
    );
  }

  //hide the navbar when livemode
  if($isLiveMode){
    show_admin_bar(false);
  }
} );


//this is the right time to add more blocks
do_action( 'onepager_blocks' );

//LOAD ALL BLOCKS BEFOREHAND
//WE WILL NEED THEM IN OUR AJAX REQUESTS
onepager()->blockManager()->loadAllFromPath(
  onepager()->path( "blocks" ),
  onepager()->url( "blocks" )
);


// Add svg upload support
add_filter('upload_mimes', function($mimes){
  $mimes['svg'] = 'image/svg+xml';
    return $mimes;
});


// Add page templates
$pageTemplater = new ThemeXpert\WordPress\PageTemplater();
$pageTemplater->addTemplate('onepage template', ONEPAGER_PATH."/app/Templates/onepage.php");
