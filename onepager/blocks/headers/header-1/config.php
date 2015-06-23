<?php

return array(
  
  'slug'      => 'header-1', // Must be unique
  'groups'    => ['headers'], // Blocks group for filter

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array('name'=>'logo', 'type'=> 'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/logo-white.png'),
    array('name'=>'menu','type'=>'menu'),

    array(
      'name'=>'sliders',
      'type'=>'repeater',
      'fields' => array(
        array('name'=>'title', 'value' => 'Onepage Website Builder for WordPress'),
        array('name'=>'description', 'type'=> 'textarea', 'value' => 'Build website quickly and efficiently with simple easy to use page builder'),
        array('name'=>'image','type'=>'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/browser-1.png'),
        array('name'=>'link', 'value' => 'http://getonepager.com'),
        array('name'=>'link_text', 'label'=> 'Link Text', 'placeholder'=> 'Download Now', 'value'=> 'Download Now'),
      )
    )

  ),
  
  // Settings - $settings available on view file to access the option
  'settings' => array(    
    array(
      'name'     => 'title_transformation',
      'label'    => 'Title Transformation',
      'type'     => 'select',
      'value'    => 'text-uppercase',
      'options'  => array(
        'text-lowercase'   => 'Lowercase',
        'text-uppercase'   => 'Uppercase',
        'text-capitalize'  => 'Capitalized'
      ),
    ),
    array(
      'name' => 'slider_height',
      'label' => 'Slider Height',
      'append' => 'px',
      'value' => '550'
    ),
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
  'styles' => array(
     array(
      'name'=>'slider_bg',
      'label' => 'Slider Background',
      'type'  => 'image',
      'value' => 'http://s3.amazonaws.com/quantum-assets/hero-bg3.jpg'
    ),

    array(
      'name'  => 'link_color',
      'label' => 'Link Color',
      'type'  => 'colorpicker',
      'value' => '#fff'
    ),
    array(
      'name'  => 'link_hover_color',
      'label' => 'Link Hover Color',
      'type'  => 'colorpicker',
      'value' => '#232323'
    ),
    array(
      'name'    => 'cta_bg',
      'label'   => 'Button Background',
      'type'    => 'colorpicker',
      'value'   => '#ee534f'
    ),
    array(
      'name'    => 'cta_color',
      'label'   => 'Button Text Color',
      'type'    => 'colorpicker',
      'value'   => '#fff'
    ),
  ),

  'assets' => function( $path ){
    onepager()->asset()->style( 'header-1', $path . 'style.css' );
  }
);
