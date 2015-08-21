<?php

return array(

  'slug'      => 'content-5', // Must be unique and singular
  'groups'    => array('contents'), // Blocks group for filter and plural

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array(
      'name'=>'title',
      'value' => 'Modern and ridiculusly easy page builder for all'
    ),
    array(
      'name'=>'description',
      'type'=>'editor',
      'value'=> 'I dream my painting and I paint my dream'
    ),
    array('name'=>'image', 'type' => 'image', 'value'=> 'http://s3.amazonaws.com/quantum-assets/icons/download.png'),
    array('name'=>'link', 'type' => 'link'),
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
      'name'     => 'animation',
      'label'    => 'Animation',
      'type'     => 'select',
      'value'    => 'fadeInUp',
      'options'  => array(
        '0'           => 'None',
        'fadeIn'      => 'Fade',
        'fadeInLeft'  => 'Slide Left',
        'fadeInRight' => 'Slide Right',
        'fadeInUp'    => 'Slide Up',
        'fadeInDown'  => 'Slide Down',
      ),
    ),
  ),

  // Fields - $styles available on view file to access the option
  'styles' => array(
    array(
      'name'    => 'bg_image',
      'label'   => 'Background',
      'type'    => 'image',
      'value'   => 'http://s3.amazonaws.com/quantum-assets/bg/bg6.jpg'
    ),
    array(
      'name'=>'bg_parallax',
      'type'=> 'switch',
      'label'=>'Parallax Background'
    ),
    array(
      'name'  => 'title_color',
      'label' => 'Title Color',
      'type'  => 'colorpicker',
      'value' => '#fff'
    ),
    array(
      'name'  => 'text_color',
      'label' => 'Text Color',
      'type'  => 'colorpicker',
      'value' => '#ddd'
    ),
    array(
      'name'    => 'button_border_color',
      'label'   => 'Button Border Color',
      'type'    => 'colorpicker',
      'value'   => '@color.primary'
    ),
    array(
      'name'    => 'button_text_color',
      'label'   => 'Button Text',
      'type'    => 'colorpicker',
      'value'   => '#fff'
    ),
  ),

  'assets' => function( $path ){
    Onepager::addStyle('content-5', $path . '/style.css');
  }
);
