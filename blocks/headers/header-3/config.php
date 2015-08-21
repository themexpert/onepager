<?php

return array(

  'slug'      => 'header-3', // Must be unique and singular
  'groups'    => array('headers'), // Blocks group for filter and plural

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array(
      'name'=>'logo',
      'type'=>'image',
      'value'=> 'http://s3.amazonaws.com/quantum-assets/logo-black-mid.png'
    ),
    array(
      'name'=>'title',
      'value' => 'Lets make a better website together'
    ),
    array(
      'name'=>'description',
      'type'=>'editor',
      'value'=> 'The world is a dangerous place to live; not because of the people who are evil, but because of the people who dont do anything about it.'
    ),

    array('name'=>'link', 'type' => 'link',),

    array(
      'name'=>'image',
      'type'=>'image',
      'value'=> 'http://s3.amazonaws.com/quantum-assets/phone-dark.png'
    ),

  ),

  // Settings - $settings available on view file to access the option
  'settings' => array(
    array(
      'name'     => 'media_alignment',
      'label'    => 'Meida Alignment',
      'type'     => 'select',
      'value'    => 'right',
      'options'  => array(
        'left'    => 'Left',
        'right'   => 'Right'
      ),
    ),
    array(
      'name'     => 'media_grid',
      'label'    => 'Meida Grid',
      'type'     => 'select',
      'value'    => '4',
      'options'  => array(
        '3'   => '3',
        '4'   => '4',
        '5'   => '5',
        '6'   => '6',
        '7'   => '7',
        '8'   => '8'
      ),
    ),
    array(
      'name' => 'title_size',
      'label' => 'Title Size',
      'append' => 'px',
      'value' => '@section_title_size'
    ),
    array(
      'name' => 'text_size',
      'label' => 'Text Size',
      'append' => 'px',
      'value' => '18'
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
      'name'     => 'content_alignment',
      'label'    => 'Items Alignment',
      'type'     => 'select',
      'value'    => 'middle',
      'options'  => array(
        'top'      => 'Top',
        'middle'   => 'Middle',
        'bottom'   => 'Bottom'
      ),
    ),
    array(
      'name'     => 'animation_content',
      'label'    => 'Animation Content',
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

   array(
    'name'     => 'animation_media',
    'label'    => 'Animation Media',
    'type'     => 'select',
    'value'    => 'fadeInRight',
    'options'  => array(
        '0'             => 'None',
        'fadeIn'        => 'Fade',
        'fadeInLeft'    => 'Slide Left',
        'fadeInRight'   => 'Slide Right',
        'fadeInUp'      => 'Slide Up',
        'fadeInDown'    => 'Slide Down',
      ),
    ),
  ),

  // Fields - $styles available on view file to access the option
  'styles' => array(
    array('label'=>'Background', 'type'=>'divider'), // Divider - Background
    array(
      'name'  => 'bg_image',
      'label' => 'Image',
      'type'  => 'image',
      'value' => 'http://s3.amazonaws.com/quantum-assets/bg/bg5.jpg'
    ),
    array(
      'name'     => 'bg_repeat',
      'label'    => 'Repeat',
      'type'     => 'select',
      'value'    => 'no-repeat',
      'options'  => array(
        'no-repeat'     => 'No Repeat',
        'repeat-x'      => 'Repeat X',
        'repeat-y'      => 'Repeat Y',
      )
    ),
    array(
      'name'    => 'bg_color',
      'label'   => 'Color',
      'type'    => 'colorpicker',
      'value'   => '#ebeff2'
    ),
    array(
      'name'=>'bg_parallax',
      'type'=> 'switch',
      'label'=>'Parallax Background'
    ),
    array('label'=>'Text', 'type'=>'divider'), // Divider - Text
    array(
      'name'  => 'title_color',
      'label' => 'Title Color',
      'type'  => 'colorpicker',
      'value' => '#323232'
    ),
    array(
      'name'  => 'text_color',
      'label' => 'Text Color',
      'type'  => 'colorpicker',
      'value' => '#323232'
    ),
    array(
      'name'    => 'button_border_color',
      'label'   => 'Button Border',
      'type'    => 'colorpicker',
      'value'   => '#323232'
    ),
    array(
      'name'    => 'button_text_color',
      'label'   => 'Button Text',
      'type'    => 'colorpicker',
      'value'   => '#323232'
    ),
  ),

  'assets' => function( $path ){
    Onepager::addStyle( 'header-3', $path . '/style.css' );
  }
);
