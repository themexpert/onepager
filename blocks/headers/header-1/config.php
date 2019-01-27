<?php

return array(

  'slug'      => 'header-1', // Must be unique
  'groups'    => array('headers'), // Blocks group for filter

  // Fields - $contents available on view file to access the option
  'contents' => array(
  array('label'=> 'Slider Content' , 'type'=> 'divider'),
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
   array('label'=> 'Slider Settings' , 'type'=> 'divider'),
    array(
      'name'     => 'animation',
      'label'    => 'Animation',
      'type'     => 'select',
      'value'    => 'slide',
      'options'  => array(
        'slide'   => 'Slide',
        'fade'   => 'Fade',
        'scale'  => 'Scale',
        'pull'  => 'Pull',
        'push'  => 'Push'
      ),
    ),
    array(
      'name' => 'autoplay',
      'label' => 'Autoplay',
      'type' => 'switch',
      'value' => true
    ),
    array(
      'name' => 'slider_height',
      'label' => 'Slider Height',
      'append' => 'px',
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
  ),


  'styles' => array(
    array('label'=> 'Slider Style' , 'type'=> 'divider'),
    array(
      'name'=>'slider_bg',
      'label' => 'Slider Background',
      'type'  => 'image',
      'value' => 'http://s3.amazonaws.com/quantum-assets/bg/bg3.jpg'
    ),

  array(
      'name'    => 'bg_color',
      'label'   => 'Background Color',
      'type'    => 'colorpicker',
      'value'   => '#ebeff2'
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

  ),

  'assets' => function( $path ){
    Onepager::addStyle('header-1', $path . '/style.css');
  }
);
