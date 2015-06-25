<?php

return array(

  'slug'      => 'slider-1', // Must be unique
  'groups'    => ['sliders'], // Blocks group for filter

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array("name"=>"test"),
    array("name"=>"show_title", "type"=>"switch", "value"=>true),
    array(
      'name'=>'sliders',
      'type'=>'repeater',
      'fields' => array(
        array(
          array('name'=>'title', 'value' => 'Onepage Builder for WordPress'),
          array('name'=>'description', 'type'=> 'textarea', 'value' => 'Building onepage website has never been easier before'),
          array('name'=>'image','type'=>'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/icons/headphone-big.png'),
          array('name'=>'link', 'value' => 'http://getonepager.com'),
          array('name'=>'link_text', 'label'=> 'Link Text', 'placeholder'=> 'Download Now', 'value'=> 'Download Now'),
        ),
        array(
          array('name'=>'title', 'value' => 'Revolutionary Website Builder'),
          array('name'=>'description', 'type'=> 'textarea', 'value' => 'Ridiculously easy and built for tomorrows internet in mind'),
          array('name'=>'image','type'=>'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/icons/responsive-big.png'),
          array('name'=>'link', 'value' => 'http://getonepager.com'),
          array('name'=>'link_text', 'label'=> 'Link Text', 'placeholder'=> 'Download Now', 'value'=> 'Download Now'),
        )
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
      'value' => '600'
    ),
  ),

  'styles' => array(
    array(
      'name'=>'slider_bg',
      'label' => 'Slider Background',
      'type'  => 'image',
      'value' => 'http://s3.amazonaws.com/quantum-assets/bg/bg2.jpg'
    ),
    array(
      'name'    => 'button_color',
      'label'   => 'Button Color',
      'type'    => 'colorpicker',
      'value'   => '#323232'
    ),
    array(
      'name'    => 'button_hover_color',
      'label'   => 'Button Hover Color',
      'type'    => 'colorpicker',
      'value'   => '#2196F3'
    ),
  ),

  'assets' => function( $path ){
    onepager()->asset()->style( 'slider-1', $path . 'style.css' );
  }
);
