<?php

add_action( 'wp_head',  'onepager_inject_inline_styles');
add_action( 'wp_enqueue_scripts', 'onepager_enqueue_block_assets' );

//resolves conflict with yoast and similar plugins who work on the_content in wp_head
add_action('wp_head', function(){
  wp_reset_query();
  add_filter( 'the_content',  'onepager_inject_content');
}, 999);


//block have internal stylesheets
//if its onepager page render onepager block styles on header
function onepager_inject_inline_styles(){
    //if requested page is not onepager then get out right away
    if ( ! onepager()->content()->isOnepage() ) {
      return;
    }

    //get page id
    $pageId   = onepager()->content()->getCurrentPageId();

    //get page sections
    $sections = onepager()->section()->getAllValid($pageId);

    //render its styles on head section
    onepager()->render()->styles( $sections );
}

//block have external stylesheets and scripts
//if its onepager page enqueue onepager block scripts on initialization
function onepager_enqueue_block_assets() {
  //if requested page is not onepager then get out right away
  if ( ! onepager()->content()->isOnepage() ) {
    return;
  }

  $isBuildMode = onepager()->content()->isBuildMode();

  /**
   * if build mode load everything
   * if in normal mode load only required assets
   */
  if($isBuildMode){
    $blocks = (array) onepager()->blockManager()->all();
    $pageId = '';
  } else {
    //get page sections
    $pageId   = onepager()->content()->getCurrentPageId();
    $sections = onepager()->section()->getAllValid( $pageId );
    $blocks   = array_map(function($section){
      $block = onepager()->blockManager()->get($section['slug']);
      return $block?:false;
    }, $sections);
  }

  array_walk( $blocks, function ( $block ) {
    $enqueueCb = $block['enqueue'];

    if ( ! $enqueueCb ) {
      return;
    }

    $blockUrl = $block['url'];
    $enqueueCb( $blockUrl );
  } );

  $pageId   = onepager()->content()->getCurrentPageId();

  onepager()->asset()->enqueue(!$isBuildMode, $pageId);
}

//inject onepager
function onepager_inject_content($content){
  $isOnepage = onepager()->content()->isOnepage();

  if(!defined('ONEPAGE_CONTENT_LOADED') && $isOnepage){
    define('ONEPAGE_CONTENT_LOADED', true);
    $isLiveMode = onepager()->content()->isBuildMode();

    if ( $isLiveMode ) {
      return '<div class="wrap"> <div id="onepager-mount"></div> </div>';
    } else {
      $pageId = onepager()->content()->getCurrentPageId();
      $sections = onepager()->section()->getAllValid($pageId);

      return onepager()->render()->sections( $sections );
    }
  }

  return $content;
}
