<?php

return array(
  
  'slug'      => 'content-4', // Must be unique and singular
  'groups'    => array('contents'), // Blocks group for filter and plural

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array(
      'name'=>'title', 
      'value' => 'Lets make a better website together'
    ),
    array(
      'name'=>'description',
      'type'=>'editor', 
      'value'=> 'The world is a dangerous place to live; not because of the people who are evil, but because of the people who dont do anything about it.'
    ),
    array(
      'name'=>'link', 
      'label'=> 'Button', 
      'placeholder'=> 'http://example.com',
      'value'=> '#'
    ),
    array(
      'name'  => 'link_text', 
      'label' => 'Button Text',
      'value' => 'Download Now', 
    ),
  ),
  
  // Settings - $settings available on view file to access the option
  'settings' => array(    
    array(
      'name'     => 'title_size',
      'label'    => 'Title Size',
      'type'     => 'select',
      'value'    => 'title-sm',
      'options'  => array(
        'title-sm'      => 'Small',
        'title-md'      => 'Medium',
        'title-lg'      => 'Large'
      ),
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
      'value'    => 'fadeInDown',
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
      'name'    => 'bg_color',
      'label'   => 'Color',
      'type'    => 'colorpicker',
      'value'   => '#262624'
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
      'value'   => '#fff'
    ),
    array(
      'name'    => 'button_text_color',
      'label'   => 'Button Text',
      'type'    => 'colorpicker',
      'value'   => '#fff'
    ),
  ),

  'assets' => function( $path ){
    onepager()->asset()->style( 'content-4', $path . 'style.css' );
  }
);