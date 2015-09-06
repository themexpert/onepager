<?php

return array(

  'slug'      => 'slider-1', // Must be unique
  'groups'    => array('sliders'), // Blocks group for filter

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array(
      'name'=>'sliders',
      'type'=>'repeater',
      'fields' => array(
        array(
          array('name'=>'title', 'value' => 'Onepage Builder for WordPress'),
          array('name'=>'description', 'type'=> 'textarea', 'value' => 'Building onepage website has never been easier before'),
          array('name'=>'image','type'=>'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/icons/headphone-big.png'),
          array('name'=>'link', 'type' => 'link', 'text' => 'Download Now', 'url' => 'http://getonepager.com'),
        ),
        array(
          array('name'=>'title', 'value' => 'Revolutionary Website Builder'),
          array('name'=>'description', 'type'=> 'textarea', 'value' => 'Ridiculously easy and built for tomorrows internet in mind'),
          array('name'=>'image','type'=>'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/icons/responsive-big.png'),
          array('name'=>'link', 'type' => 'link', 'text' => 'Download Now', 'url' => 'http://getonepager.com'),
        )
      )
    )
  ),

  // Settings - $settings available on view file to access the option
  'settings' => array(
    array(
      'name' => 'title_size',
      'label' => 'Title Size',
      'append' => 'px',
      'value' => '@section_title_size'
    ),
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
      'name'    => 'title_color',
      'label'   => 'Title Color',
      'type'    => 'colorpicker',
      'value'   => '#323232'
    ),
    array(
      'name'=>'slider_bg',
      'label' => 'Slider Background',
      'type'  => 'image',
      'value' => 'http://s3.amazonaws.com/quantum-assets/bg/bg2.jpg'
    ),
    array(
      'name'    => 'button_bg',
      'label'   => 'Button Background',
      'type'    => 'colorpicker',
      'value'   => '@color.primary'
    ),
    array(
      'name'    => 'button_color',
      'label'   => 'Button Color',
      'type'    => 'colorpicker',
      'value'   => '#fff'
    ),
    array(
      'name'    => 'button_hover_color',
      'label'   => 'Button Hover Color',
      'type'    => 'colorpicker',
      'value'   => '@color.accent'
    ),
  ),

  'assets' => function( $path ){
    Onepager::addStyle('slider-1', $path . '/style.css');
  }
);
