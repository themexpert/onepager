<?php

return array(
  
  'slug'      => 'header-3', // Must be unique
  'groups'    => ['headers'], // Blocks group for filter

  // Fields - $fields available on view file to access the option
  'contents' => array(
    array('name'=>'logo', 'type'=> 'image'),
    array('name'=>'menu','type'=>'menu'),
    array(
      'name'=>'cta', 
      'label'=> 'Call To Action Link',
      'placeholder' => 'http://doamin.com'
    ),
    array(
      'name'=>'cta_text', 
      'label'=> 'Call To Action Text',  
      'value'=> 'Call To Action',
      'placeholder'=> 'Call To Action'
    ),
  ),
  
  // Settings - $settings available on view file to access the option
  'settings' => array(    
    array(
      'name'    => 'bg_color',
      'label'   => 'Background Color',
      'type'    => 'colorpicker',
      'value'   => '#1f262b'
    ),
    array(
      'name'  => 'link_color',
      'label' => 'Link Color',
      'type'  => 'colorpicker',
      'value' => '#999'
    ),
    array(
      'name'  => 'link_hover_color',
      'label' => 'Link Hover Color',
      'type'  => 'colorpicker',
      'value' => '#fff'
    ),
    array(
      'name'    => 'cta_bg',
      'label'   => 'Button Background',
      'type'    => 'colorpicker',
      'value'   => '#4CAF50'
    ),
    array(
      'name'    => 'cta_color',
      'label'   => 'Button Text Color',
      'type'    => 'colorpicker',
      'value'   => '#fff'
    ),
  ),

  // Pass everything when WP initialize useful for handling settings from plugin/theme
  // 'init'  => function($fields, $settings, $id){},
  // Style file for live reload
  // 'style' => 'style.php',

  // "assets" => function( $path ){
  //   onepager()->asset()->style( 'blurb', $path . "style.css" );
  // }
);
