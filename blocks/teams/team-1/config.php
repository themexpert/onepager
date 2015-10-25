<?php

return array(

  'slug'      => 'team-1', // Must be unique
  'groups'    => array('teams'), // Blocks group for filter

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array('name'=>'title', 'value'=> 'Meet The Team'),

    array(
      'name'=>'items',
      'type'=>'repeater',
      'fields' => array(
        array(
          array('name'=>'title', 'label' => 'Name', 'value' => 'Steve Jobs'),
          array('name'=>'designation', 'value' => 'CEO, Apple Inc'),
          array('name'=>'image','type'=>'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/images/4-thumb.jpg'),
          array('name'=> 'social', 'label' => 'Social Profiles', 'value' => array('http://facebook.com/ThemeXpert', 'http://twitter.com/themexpert', 'http://linkedin.com/themexpert')),
          array('name'=>'link', 'placeholder'=> home_url()),
          array('name'=>'target', 'label'=>'open in new window', 'type'=>'switch'),
        ),
        array(
          array('name'=>'title', 'label' => 'Name', 'value' => 'Nikola Tesla'),
          array('name'=>'designation', 'value' => 'Scientist'),
          array('name'=>'image','type'=>'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/images/5-thumb.jpg'),
          array('name'=> 'social', 'label' => 'Social Profiles', 'value' => array('http://behance.net/ThemeXpert', 'http://dribbble.com/themexpert', 'http://twitter.com/themexpert.com')),
          array('name'=>'link', 'placeholder'=> home_url()),
          array('name'=>'target', 'label'=>'open in new window', 'type'=>'switch'),
        ),
        array(
          array('name'=>'title', 'label' => 'Name', 'value' => 'Elon Musk'),
          array('name'=>'designation', 'value' => 'CEO, Tesla Motors'),
          array('name'=>'image','type'=>'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/images/6-thumb.jpg'),
          array('name'=> 'social', 'label' => 'Social Profiles', 'value' => array('http://github.com/ThemeXpert', 'http://codepen.io/themexpert')),
          array('name'=>'link', 'placeholder'=> home_url()),
          array('name'=>'target', 'label'=>'open in new window', 'type'=>'switch'),
        ),
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
        'slide-right'   => 'Slide Right',
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
    )
  ),

  'assets' => function( $path ){
      Onepager::addStyle('team-1', $path . '/style.css');
  }
);
