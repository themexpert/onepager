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
    array(
      'name'    => 'bg_color',
      'label'   => 'Background Color',
      'type'    => 'colorpicker',
      'value'   => '#fff'
    ),
    array(
      'name'  => 'title_color',
      'label' => 'Title Color',
      'type'  => 'colorpicker',
      'value' => '#232323'
    ),
    array(
      'name'  => 'text_color',
      'label' => 'Text Color',
      'type'  => 'colorpicker',
      'value' => '#323232'
    ),
    array(
      'name'    => 'link_color',
      'label'   => 'Link Color',
      'type'    => 'colorpicker',
      'value'   => '#4cb257'
    ),
  ),
  // 'assets' => function( $path ){
  //   onepager()->asset()->style( 'content-1', $path . '/style.css' );
  // }
);
