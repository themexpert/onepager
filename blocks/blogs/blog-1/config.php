<?php

return array(
  
  'slug'      => 'blog-1', // Must be unique and singular
  'groups'    => array('blogs'), // Blocks group for filter and plural

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array(
      'name'=>'title', 
      'value' => 'Latest Thoughts'
    ),
    array(
      'name'=>'description',
      'type'=>'textarea', 
      'value'=> 'Latest posts from our blog'
    ),
    array(
      'name'=>'category', 
      'type'=>'category'
    ),
    array(
      'name' => 'total_posts',
      'label' => 'Total Posts',
      'value' => '3'
    ),
    array(
      'name' => 'text_limit',
      'label' => 'Excerpt Length',
      'value' => 20
    )

  ),
  
  // Settings - $settings available on view file to access the option
  'settings' => array(    
    
    array(
      'name'     => 'media_grid',
      'label'    => 'Meida Grid',
      'type'     => 'select',
      'value'    => '3',
      'options'  => array(
        '3'   => '3',
        '4'   => '4',
        '5'   => '5',
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
      'name'  => 'readmore_text', 
      'label' => 'Readmore Text',
      'value' => 'Readmore', 
    ),

   array(
    'name'     => 'animation_item',
    'label'    => 'Animation Item',
    'type'     => 'select',
    'value'    => 'fadeInUp',
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
      'value'   => '#ebeff2'
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
      'name'    => 'button_bg_color',
      'label'   => 'Button Background',
      'type'    => 'colorpicker',
      'value'   => '#4cb257'
    ),
    array(
      'name'    => 'button_text_color',
      'label'   => 'Button Text',
      'type'    => 'colorpicker',
      'value'   => '#fff'
    ),
  ),
  // 'assets' => function( $path ){
  //   onepager()->asset()->style( 'content-1', $path . 'style.css' );
  // }
);