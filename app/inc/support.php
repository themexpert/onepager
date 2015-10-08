<?php

/**
 * EDITOR SECTION LIST FOOTER
 * example use case:
 * add_filter('section_list_footer', function($footer){
 *  return "{$footer} <br> <h2>hello world</h2>";
 * });
 *
 * @return mixed
 */
function get_editor_section_list_footer() {
  $footer = '<a href="https://www.youtube.com/watch?v=pwKcmckBZD4" target="_blank">
    <span class="fa fa-video-camera"></span> Video Tutorial
  </a>';

  $footer .= '<a href="https://docs.getonepager.com" target="_blank">
    <span class="fa fa-book"></span> Documentation
  </a>';


  return apply_filters( 'editor_section_list_footer', $footer );
}

add_filter( 'upload_mimes', function ( $mimes ) {
  $mimes['svg'] = 'image/svg+xml';

  return $mimes;
} );
