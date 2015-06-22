<?php

return array(
  'slug'    => 'content-3',
  'groups'    => ['contents'],

  'contents' => array(
    array(
      'name'=>'title', 
      'value'=>'Onepage Makes Website Building Easy and Fun'
    ),
    array(
      'name'=>'description', 
      'type'=>'textarea', 
      'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pellentesque eget metus a vulputate. Nam non neque tempus, venenatis nisl vitae, viverra nulla.'
    ),
    array(
      'name' => 'image',
      'type' => 'image',
      'value' => 'https://s3.amazonaws.com/quantum-assets/phone-light.png'
    ),

    array(
      'name'=>'items',
      'type'=>'repeater',
      'fields' => array(
        array('name'=>'title', 'value' => 'Beautiful and Responsive Design'),
        array('name'=>'description', 'type'=> 'textarea', 'value'=>'Phasellus tempus tortor at placerat suscipit. Sed porttitor ut nibh et finibus. Curabitur cursus pulvinar metus quis vehicula.'),
        array('name'=>'media', 'type'=>'media', 'value'=> 'https://s3.amazonaws.com/quantum-assets/icon-camera.png'),
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
      'name'     => 'animation_media',
      'label'    => 'Animation Media',
      'type'     => 'select',
      'value'    => 'fadeInRight',
      'options'  => array(
        '0'           => 'None',
        'fadeIn'      => 'Fade',
        'fadeInLeft'  => 'Slide Left',
        'fadeInRight' => 'Slide Right',
        'fadeInUp'    => 'Slide Up',
        'fadeInDown'  => 'Slide Down',
      )
    ), array(
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
      'value'    => 'fadeInLeft',
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
    onepager()->asset()->style( 'content-3', $path . 'style.css' );
  }
);

