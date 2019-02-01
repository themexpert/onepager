<?php

return array(

  'slug'      => 'contact-1', // Must be unique and singular
  'groups'    => array('contact'), // Blocks group for filter and plural

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array('label'=>'Contact Info', 'type'=>'divider'), // Divider - Background
      array(
      'name'  =>  'hotline_title',
      'label' => 'Hotline Title',
      'type'  =>  'text',
      'value' =>  'Hotline'
    ),
    array(
      'name'  =>  'hotline_number',
      'label' => 'Hotline Number',
      'type'  =>  'text',
      'value' =>  '+1 222 333 2132'
    ),
    array(
      'name'=>'address',
      'type' => 'textarea',
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
      'value' => array('http://facebook.com/themexpert', 'http://twitter.com/themexpert', 'http://linkedin.com/themexpert')
    ),
    array('label'=>'Contact Form', 'type'=>'divider'), // Divider - Background
      array(
      'name'  =>  'contact_title',
      'label' =>  'Contact Title',
      'type'  =>  'text',
      'value' =>  'Send Feedback'
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
      'value'    => 'inherit',
      'options'  => array(
        'inherit' => 'Default',
        'lowercase'   => 'Lowercase',
        'uppercase'   => 'Uppercase',
        'capitalize'  => 'Capitalized'
      ),
    ),

    array(
      'name'     => 'info_animation',
      'label'    => 'Info Animation',
      'type'     => 'select',
      'value'    => '0',
      'options'  => array(        
        '0'                     =>  'None',
        'fade'                  =>  'Fade',
        'scale-up'              =>  'Scale Up',
        'scale-down'            =>  'Scale Down',
        'slide-top-small'       =>  'Slide Top Small',
        'slide-bottom-small'    =>  'Slide Bottom Small',
        'slide-left-small'      =>  'Slide Left Small',
        'slide-right-small'     =>  'Slide Right Small',
        'slide-top-medium'      =>  'Slide Top Medium',
        'slide-bottom-medium'   =>  'Slide Bottom Medium',
        'slide-left-medium'     =>  'Slide Left Medium',
        'slide-right-medium'    =>  'Slide Right Medium',
        'slide-top'             =>  'Slide Top 100%',
        'slide-bottom'          =>  'Slide Bottom 100%',
        'slide-left'            =>  'Slide Left 100%',
        'slide-right'           =>  'Slide Right 100%'

      ),
    ),

    array(
      'name'     => 'form_animation',
      'label'    => 'Form Animation',
      'type'     => 'select',
      'value'    => '0',
      'options'  => array(        
        '0'                     =>  'None',
        'fade'                  =>  'Fade',
        'scale-up'              =>  'Scale Up',
        'scale-down'            =>  'Scale Down',
        'slide-top-small'       =>  'Slide Top Small',
        'slide-bottom-small'    =>  'Slide Bottom Small',
        'slide-left-small'      =>  'Slide Left Small',
        'slide-right-small'     =>  'Slide Right Small',
        'slide-top-medium'      =>  'Slide Top Medium',
        'slide-bottom-medium'   =>  'Slide Bottom Medium',
        'slide-left-medium'     =>  'Slide Left Medium',
        'slide-right-medium'    =>  'Slide Right Medium',
        'slide-top'             =>  'Slide Top 100%',
        'slide-bottom'          =>  'Slide Bottom 100%',
        'slide-left'            =>  'Slide Left 100%',
        'slide-right'           =>  'Slide Right 100%'

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

    // array(
    //   'name'=>'bg_parallax',
    //   'type'=> 'switch',
    //   'label'=>'Parallax Background'
    // ),

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
      'label'   => 'Bg Color',
      'type'    => 'colorpicker',
      'value'   => '#fff'
    ),
    array('label'=>'Items', 'type'=>'divider'), // Divider - Text
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
      'label'   => 'Icon Color',
      'type'    => 'colorpicker',
      'value'   => '@color.accent'
    ),
    array(
      'name'    => 'button_text_color',
      'label'   => 'Button Color',
      'type'    => 'colorpicker',
      'value'   => '#fff'
    ),
  ),

  // 'assets' => function( $path ){
  //   Onepager::addStyle('contact-1', $path . '/style.css');
  // }
);
