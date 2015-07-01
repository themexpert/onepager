<?php
use League\Url\Url;

//LIVE MODE TOOLBAR
add_action( 'wp', function () {
  $isOnepage = onepager()->content()->isOnepage();
  $isLiveMode = onepager()->content()->isLiveMode();

  if (  $isOnepage && !$isLiveMode){
    $url = Url::createFromUrl( getCurrentPageURL() );
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

} );

// Add svg upload support
add_filter('upload_mimes', function($mimes){
  $mimes['svg'] = 'image/svg+xml';
    return $mimes;
});

$pageTemplater = new ThemeXpert\WordPress\PageTemplater();
$pageTemplater->addTemplate('OnePage Template', ONEPAGER_PATH."/app/Templates/onepage.php");