<?php

// Wrapper function for link
if( !function_exists('op_link') )
{
  function op_link($link, $class)
  {
    if( $link['url'] OR $link['text'] ){
      $target = ($link['target']) ? '_blank' : '_self';
      return '<a class="'.$class.'" href="'. $link['url'] .'" target="'.$target.'">'. $link['text'] .'</a>';
    }
    return;
  }
}
