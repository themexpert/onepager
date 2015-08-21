<?php

return array(

  'slug'      => 'header-1', // Must be unique
  'groups'    => array('headers'), // Blocks group for filter

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array('name'=>'logo', 'type'=> 'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/logo-white.png'),
    array('name'=>'menu','type'=>'menu'),
    array(
      'name'=>'link',
      'type' => 'link',
      'label' => 'Navbar Link'
    ),

    array(
      'name'=>'sliders',
      'type'=>'repeater',
      'fields' => array(
        array(
          array('name'=>'title', 'value' => 'Onepage Website Builder for WordPress'),
          array('name'=>'description', 'type'=> 'editor', 'value' => 'Build website quickly and efficiently with simple easy to use page builder'),
          array('name'=>'image','type'=>'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/browser-1.png'),
          array('name'=>'link', 'type' => 'link'),
        ),
        array(
          array('name'=>'title', 'value' => 'Revolutionary Way of Building OnePage Website'),
          array('name'=>'description', 'type'=> 'editor', 'value' => 'Ridiculously easy and built for tomorrows internet in mind'),
          array('name'=>'image','type'=>'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/browser-1.png'),
          array('name'=>'link', 'type' => 'link'),
        )
      )
    )

  ),

  // Settings - $settings available on view file to access the option
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
    ),
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
      'value' => '550'
    ),
  ),
  'styles' => array(
    array('label'=> 'Nav Style' , 'type'=> 'divider'),
    array(
      'name'  => 'nav_bg',
      'label' => 'Sticky Background',
      'type'  => 'colorpicker',
      'value' => 'rgba(0,0,0,0.5)'
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
      'value' => '@color.primary'
    ),
    array(
      'name'    => 'cta_bg',
      'label'   => 'Button Background',
      'type'    => 'colorpicker',
      'value'   => '@color.primary'
    ),
    array(
      'name'    => 'cta_color',
      'label'   => 'Button Text Color',
      'type'    => 'colorpicker',
      'value'   => '#fff'
    ),
    array('label'=> 'Slider Style' , 'type'=> 'divider'),
    array(
      'name'    => 'text_color',
      'label'   => 'Text Color',
      'type'    => 'colorpicker',
      'value'   => '#fff'
    ),
    array(
      'name'=>'slider_bg',
      'label' => 'Slider Background',
      'type'  => 'image',
      'value' => 'http://s3.amazonaws.com/quantum-assets/bg/bg3.jpg'
    ),
  ),

  'assets' => function( $path ){
    Onepager::addStyle('header-1', $path . '/style.css');
  }
);
