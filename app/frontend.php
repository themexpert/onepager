<?php

add_action( 'wp_head',  'onepager_inject_inline_styles');
add_filter( 'the_content',  'onepager_inject_content');
add_action( 'wp_enqueue_scripts', 'onepager_enqueue_assets' );

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
    $sections = onepager()->section()->all( $pageId );

    //render its styles on head section
    onepager()->render()->styles( $sections );
}

//TODO: optimize
//block have external stylesheets and scripts
//if its onepager page enqueue onepager block scripts on initialization
function onepager_enqueue_assets() {
  //if requested page is not onepager then get out right away
  if ( ! onepager()->content()->isOnepage() ) {
    return;
  }

  //get page sections
  $pageId   = onepager()->content()->getCurrentPageId();
  $sections = onepager()->section()->all( $pageId );
  $blocks = (array) onepager()->blockManager()->all();

  if(onepager()->content()->isBuildMode()){
    onepager_build_mode_load_all_assets($blocks);

    return;
  }

  //if onepager then get all the blocks that were used in this page
  //walk all the used blocks to enqueue their styles
  onepager_enqueue_section_assets($sections);
}

function onepager_build_mode_load_all_assets($blocks){
  array_walk( $blocks, function ( $block ) {
    $enqueueCb = $block['enqueue'];

    if ( ! $enqueueCb ) {
      return;
    }

    $blockUrl = $block['url'];
    $enqueueCb( $blockUrl );
  } );

  onepager_compile_assets();
}

function onepager_enqueue_section_assets($sections){

  array_map(function($section){
    $block = onepager()->blockManager()->get($section['slug']);

    //if its an invalid block return immediately
    //TODO: need a better exception handling
    if(!$block) return;

    //get the enqueue callback
    $enqueueCb = $block['enqueue'];

    //if this block does not have styles attached to
    //return right away
    if ( ! $enqueueCb ) {
      return;
    }

    //get the blocks folder url
    $blockUrl = $block['url'];

    //call the enqueue callback with block folder url
    $enqueueCb( $blockUrl );
  }, $sections);

  onepager_compile_assets();

}

function onepager_compile_assets(){
  onepager()->asset()->enqueue();
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
      $sections = onepager()->section()->all( $pageId );

      return onepager()->render()->sections( $sections );
    }
  }

  return $content;
}
