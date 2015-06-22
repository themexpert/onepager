<?php

return array(
  'slug'    => 'content-2',
  'groups'    => ['contents'],

  'contents' => array(
    array(
      'name'=>'title', 
      'value'=>'Modern and Ridiculously Easy Page Builder for All'
    ),
    array(
      'name'=>'description', 
      'type'=>'textarea', 
      'value' => 'A fool thinks himself to be wise, but a wise man knows himself to be a fool.'
    ),

    array(
      'name'=>'items',
      'type'=>'repeater',
      'fields' => array(
        array('name'=>'title', 'value' => 'Awesome Design'),
        array('name'=>'description', 'type'=> 'textarea', 'value'=>'Beautiful crafted design for all devices'),
        array('name'=>'media', 'type'=>'media', 'value'=> 'http://s3.amazonaws.com/quantum-assets/icon-tools.png'),
      )
    )
  ),

  'settings' => array(
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
      'name'     => 'columns',
      'label'    => 'Columns',
      'type'     => 'select',
      'value'    => '4',
      'options'  => array(
        '4'   => '3',
        '3'   => '4'
      ),
    ),
    array(
      'name'     => 'animation_title',
      'label'    => 'Animation Title',
      'type'     => 'select',
      'value'    => 'fadeInDown',
      'options'  => array(
        '0'           => 'None',
        'fadeIn'      => 'Fade',
        'fadeInLeft'  => 'Slide Left',
        'fadeInRight' => 'Slide Right',
        'fadeInUp'    => 'Slide Up',
        'fadeInDown'  => 'Slide Down',
      )
    ),

     array(
      'name'     => 'animation_item',
      'label'    => 'Animation Items',
      'type'     => 'select',
      'value'    => 'zoomIn',
      'options'  => array(
        '0'             => 'None',
        'fadeIn'        => 'Fade',
        'zoomIn'        => 'Zoom In',
        'fadeInLeft'    => 'Slide Left',
        'fadeInRight'   => 'Slide Right',
        'fadeInUp'      => 'Slide Up',
        'fadeInDown'    => 'Slide Down',  
      )
    ),
  ),

  'styles' => array(
    array(
      'name' => 'bg_color',
      'label' => 'Background Color',
      'type' => 'colorpicker',
      'value' => '#fff'
    ),
    array(
      'name' => 'title_color',
      'label' => 'Title Color',
      'type' => 'colorpicker',
      'value' => '#323232'

    ),
    array(
      'name' => 'text_color',
      'label' => 'Text Color',
      'type' => 'colorpicker',
      'value' => '#727272'
    ),
    array(
      'name' => 'icon_color',
      'label' => 'Icon Color',
      'type' => 'colorpicker'
    ),
  ),

  'assets' => function( $path ){
    onepager()->asset()->style( 'content-2', $path . 'style.css' );
  }
);

