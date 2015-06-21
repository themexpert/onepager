<?php

return array(
  
  'slug'      => 'navbar-2', // Must be unique
  'groups'    => ['navbars'], // Blocks group for filter

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array('name'=>'logo', 'type'=> 'image'),
    array('name'=>'menu','type'=>'menu')
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
      'name'    => 'bg_offcanvas',
      'label'   => 'Offcanvas Background',
      'type'    => 'colorpicker',
      'value'   => '#2B2D42'
    ),
    array(
      'name'  => 'link_color',
      'label' => 'Link Color',
      'type'  => 'colorpicker',
      'value' => '#EDF2F4'
    ),
    array(
      'name'  => 'link_hover_color',
      'label' => 'Link Hover Color',
      'type'  => 'colorpicker',
      'value' => '#fb5323',
    ),
  ),

  "assets" => function( $path ){
    onepager()->asset()->style( 'op-navbar-2', $path . "style.css" );
  }
);
