<?php

return array(
  'slug'    => 'content-3',
  'groups'    => array('contents'),

  'contents' => array(
    array(
      'name'=>'title',
      'value'=>'Onepage Makes Website Building Easy and Fun'
    ),
    array(
      'name'=>'description',
      'type'=>'textarea',
      'value' => 'Dont limit yourself. Many people limit themselves to what they think they can do. You can go as far as your mind lets you. What you believe, remember, you can achieve'
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
        array(
          array('name'=>'title', 'value' => 'Beautiful and Responsive Design'),
          array('name'=>'description', 'type'=> 'textarea', 'value'=>'The best and most beautiful things in the world cannot be seen or even touched - they must be felt with the heart'),
          array('name'=>'media', 'type'=>'media', 'size'=>'fa-5x', 'value'=> 'http://s3.amazonaws.com/quantum-assets/icons/camera.png'),
          array('name'=>'link', 'placeholder'=> home_url()),
          array('name'=>'target', 'label'=>'open in new window', 'type'=>'switch'),
        ),
        array(
          array('name'=>'title', 'value' => 'Cross Browser Compatibility'),
          array('name'=>'description', 'type'=> 'textarea', 'value'=>'TDesign is not how it looks like of feels lie, design is how its works'),
          array('name'=>'media', 'type'=>'media', 'size'=>'fa-5x', 'value'=> 'http://s3.amazonaws.com/quantum-assets/icons/browser.png'),
          array('name'=>'link', 'placeholder'=> home_url()),
          array('name'=>'target', 'label'=>'open in new window', 'type'=>'switch'),
        ),
        array(
          array('name'=>'title', 'value' => 'Well Documentation'),
          array('name'=>'description', 'type'=> 'textarea', 'value'=>'Start by doing whats necessary; then do whats possible; and suddenly you are doing the impossible.'),
          array('name'=>'media', 'type'=>'media', 'size'=>'fa-5x', 'value'=> 'http://s3.amazonaws.com/quantum-assets/icons/documents.png'),
          array('name'=>'link', 'placeholder'=> home_url()),
          array('name'=>'target', 'label'=>'open in new window', 'type'=>'switch'),
        )
      )
    )
  ),

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
    Onepager::addStyle('content-3', $path . '/style.css');
  }
);
