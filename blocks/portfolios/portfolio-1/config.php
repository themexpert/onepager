<?php

return array(

  'slug'      => 'portfolio-1', // Must be unique
  'groups'    => array('portfolios'), // Blocks group for filter

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
          array('name'=>'thumb','type'=>'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/images/1-thumb.jpg'),
          array('name'=>'image','type'=>'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/images/1.jpg'),
          array('name'=>'link', 'placeholder'=> home_url()),
          array('name'=>'target', 'label'=>'open in new window', 'type'=>'switch'),
        ),
        array(
          array('name'=>'title', 'value' => 'BizCorp'),
          array('name'=>'description', 'type'=> 'textarea', 'value' => 'Onepage Joomla Template'),
          array('name'=>'thumb','type'=>'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/images/2-thumb.jpg'),
          array('name'=>'image','type'=>'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/images/2.jpg'),
          array('name'=>'link', 'placeholder'=> home_url()),
          array('name'=>'target', 'label'=>'open in new window', 'type'=>'switch'),
        ),
        array(
          array('name'=>'title', 'value' => 'Eventx'),
          array('name'=>'description', 'type'=> 'textarea', 'value' => 'Event Template for Joomla'),
          array('name'=>'thumb','type'=>'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/images/3-thumb.jpg'),
          array('name'=>'image','type'=>'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/images/3.jpg'),
          array('name'=>'link', 'placeholder'=> home_url()),
          array('name'=>'target', 'label'=>'open in new window', 'type'=>'switch'),
        )
      )
    )
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
      )
    ),
    array(
      'name'     => 'animation',
      'label'    => 'Animation Title',
      'type'     => 'select',
      'value'    => 'zoomIn',
      'options'  => array(
        '0'           => 'None',
        'fadeIn'      => 'Fade',
        'zoomIn'        => 'Zoom In',
        'fadeInLeft'  => 'Slide Left',
        'fadeInRight' => 'Slide Right',
        'fadeInUp'    => 'Slide Up',
        'fadeInDown'  => 'Slide Down',
      )
    ),
    array(
      'name'     => 'overlay_animation',
      'label'    => 'Overlay Animation',
      'type'     => 'select',
      'value'    => 'scale',
      'options'  => array(
        'slide-top'     => 'Slide Top',
        'slide-bottom'  => 'Slide Bottom',
        'slide-left'    => 'Slide Left',
        'slide-right'   => 'Slide RIght',
        'fade'          => 'Fade',
        'scale'         => 'Scale',
        'spin'          => 'Spin',
      )
    )
  ),

  'styles' => array(
    array(
      'name'=>'bg_color',
      'label' => 'Background Color',
      'type'  => 'colorpicker',
      'value' => '#fff'
    ),
    array(
      'name'=>'title_color',
      'label' => 'Title Color',
      'type'  => 'colorpicker',
      'value' => '#323232'
    ),
    array(
      'name'=>'icon_bg',
      'label' => 'Icon Background',
      'type'  => 'colorpicker',
      'value' => '@color.primary'
    ),
  ),

  'assets' => function( $path ){
     // Magnefic popup from Onepager assets dir
    Onepager::addScript('magnific-popup', op_asset('assets/js/jquery.magnific-popup.js'), array( 'jquery' ));
    Onepager::addStyle('magnific-popup', op_asset( 'assets/css/magnific-popup.css' ));
    // Local file
    Onepager::addStyle('portfolio-1', $path . '/style.css');
  }
);
