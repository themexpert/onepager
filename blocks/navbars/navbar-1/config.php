<?php

return array(

  'slug'      => 'navbar-1', // Must be unique
  'groups'    => array('navbars'), // Blocks group for filter

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array('name'=>'logo', 'type'=> 'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/logo-dark.png'),
    array('name'=>'menu','type'=>'menu'),
    array( 'name'=>'link', 'type' => 'link', 'label'=> 'Call To Action Link')
  ),

  // Settings
  'settings' => array(
    array(
      'name' => 'sticky_nav',
      'label' => 'Sticky Nav',
      'type' => 'select',
      'value' => 1,
      'options' => array(
        1 => 'Enabled',
        0 => 'Disabled'
      )
    )
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
      'value'   => '@color.primary',
    ),
    array(
      'name'    => 'cta_color',
      'label'   => 'Button Text Color',
      'type'    => 'colorpicker',
      'value'   => '#fff',
    ),
  ),
);
