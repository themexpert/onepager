<?php

return array(

  'slug'      => 'portfolio-1', // Must be unique
  'groups'    => ['portfolios'], // Blocks group for filter

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array('name'=>'title', 'value'=> 'Our Works'),

    array(
      'name'=>'items',
      'type'=>'repeater',
      'fields' => array(
        array(
          array('name'=>'title', 'value' => 'Unity'),
          array('name'=>'description', 'type'=> 'textarea', 'value' => 'Onepage Joomla Template'),
          array('name'=>'thumb','type'=>'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/icons/headphone-big.png'),
          array('name'=>'image','type'=>'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/icons/headphone-big.png'),
        )
      )
    )
  ),

  // Settings - $settings available on view file to access the option
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
    )
  ),

  'styles' => array(
    array(
      'name'=>'slider_bg',
      'label' => 'Slider Background',
      'type'  => 'image',
      'value' => 'http://s3.amazonaws.com/quantum-assets/bg/bg2.jpg'
    ),
    array(
      'name'    => 'button_color',
      'label'   => 'Button Color',
      'type'    => 'colorpicker',
      'value'   => '#323232'
    ),
    array(
      'name'    => 'button_hover_color',
      'label'   => 'Button Hover Color',
      'type'    => 'colorpicker',
      'value'   => '#2196F3'
    ),
  ),

  'assets' => function( $path ){
     // Magnefic popup 
    onepager()->asset()->script( 'tx-magnific-popup', asset('assets/js/jquery.magnific-popup.js'), array( 'jquery' ) );
    onepager()->asset()->style( 'tx-magnific-popup', asset( 'assets/css/magnific-popup.css' ) );
    
    onepager()->asset()->style( 'portfolio-1', $path . 'style.css' );
  }
);
