<?php

return array(
  
  'slug'      => 'header-1', // Must be unique
  'groups'    => ['headers'], // Blocks group for filter

  // Fields - $contents available on view file to access the option
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
  
  // Styles - $styles available on view file to access the option
  'styles' => array(    
    array(
      'name'    => 'bg_color',
      'label'   => 'Background Color',
      'type'    => 'colorpicker',
      'value'   => '#ffffff'
    ),
    array(
      'name'  => 'link_color',
      'label' => 'Link Color',
      'type'  => 'colorpicker',
      'value' => '#777'
    ),
    array(
      'name'  => 'link_hover_color',
      'label' => 'Link Hover Color',
      'type'  => 'colorpicker',
      'value' => '#222',
    ),
    array(
      'name'    => 'cta_bg',
      'label'   => 'Button Background',
      'type'    => 'colorpicker',
      'value'   => '#4CAF50',
    ),
    array(
      'name'    => 'cta_color',
      'label'   => 'Button Text Color',
      'type'    => 'colorpicker',
      'value'   => '#fff',
    ),
  ),

  // "assets" => function( $path ){
  //   onepager()->asset()->style( 'blurb', $path . "style.css" );
  // }
);
