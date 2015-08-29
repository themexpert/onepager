<?php

return array(

  'slug'      => 'contact-1', // Must be unique and singular
  'groups'    => array('contact'), // Blocks group for filter and plural

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array(
      'name'  =>  'hotline',
      'type'  =>  'text',
      'value' =>  '+1 222 333 2132'
    ),
    array(
      'name'=>'address',
      'type' => 'editor',
      'value' => '23 Salient Road, London, United Kingdom, PO-LDN 123'
    ),
    array(
      'name'=>'phone',
      'value'=> '+1(555)666.777.8888'
    ),
    array(
      'name'=>'email',
      'type'=>'text',
      'value'=> 'example@demo.com'
    ),
    array(
      'name'=> 'social',
      'label' => 'Social Links',
      'value' => array('http://facebook.com/ThemeXpert', 'http://twitter.com/themexpert', 'http://linkedin.com/themexpert')
    ),
    array(
      'name' => 'form',
      'label' => 'Contact Form Shortcode',
      'type' => 'textarea'
    )
  ),

  // Settings - $settings available on view file to access the option
  'settings' => array(

    array(
      'name' => 'title_size',
      'label' => 'Title Size',
      'append' => 'px',
      'value' => '22'
    ),
    array(
      'name'     => 'title_transformation',
      'label'    => 'Title Transformation',
      'type'     => 'select',
      'value'    => 'text-capitalize',
      'options'  => array(
        'text-lowercase'   => 'Lowercase',
        'text-uppercase'   => 'Uppercase',
        'text-capitalize'  => 'Capitalized'
      ),
    ),

    array(
      'name'     => 'animation_info',
      'label'    => 'Animation Info',
      'type'     => 'select',
      'value'    => 'fadeInLeft',
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
    'name'     => 'animation_form',
    'label'    => 'Animation Form',
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
      'type'  => 'image'
    ),
    array(
      'name'     => 'bg_repeat',
      'label'    => 'Repeat',
      'type'     => 'select',
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
      'value'   => '#fff'
    ),
    array('label'=>'Text', 'type'=>'divider'), // Divider - Text
    array(
      'name'  => 'title_color',
      'label' => 'Title Color',
      'type'  => 'colorpicker',
      'value' => '#222'
    ),
    array(
      'name'  => 'text_color',
      'label' => 'Text Color',
      'type'  => 'colorpicker',
      'value' => '#323232'
    ),
    array(
      'name'    => 'accent_color',
      'label'   => 'Accent Color',
      'type'    => 'colorpicker',
      'value'   => '@color.accent'
    ),
    array(
      'name'    => 'button_text_color',
      'label'   => 'Button Text Color',
      'type'    => 'colorpicker',
      'value'   => '#fff'
    ),
  ),

  'assets' => function( $path ){
    Onepager::addStyle('contact-1', $path . '/style.css');
  }
);
