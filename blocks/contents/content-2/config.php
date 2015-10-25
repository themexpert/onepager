<?php

return array(
  'slug'    => 'content-2',
  'groups'    => array('contents'),

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
        array(
          array('name'=>'title', 'value' => 'Responsive Design'),
          array('name'=>'description', 'type'=> 'textarea', 'value'=>'Blocks fit all devices'),
          array('name'=>'media', 'type'=>'media', 'size'=>'fa-5x', 'value'=> 'http://s3.amazonaws.com/quantum-assets/icons/presentation.png'),
          array('name'=>'link', 'placeholder'=> home_url()),
          array('name'=>'target', 'label'=>'open in new window', 'type'=>'switch'),
        ),
        array(
          array('name'=>'title', 'value' => 'WYSIWYG Editor'),
          array('name'=>'description', 'type'=> 'textarea', 'value'=>'Do Everything In One Place'),
          array('name'=>'media', 'type'=>'media', 'size'=>'fa-5x', 'value'=> 'http://s3.amazonaws.com/quantum-assets/icons/tools.png'),
          array('name'=>'link', 'placeholder'=> home_url()),
          array('name'=>'target', 'label'=>'open in new window', 'type'=>'switch'),
        ),
        array(
          array('name'=>'title', 'value' => 'Intuitive Configuration'),
          array('name'=>'description', 'type'=> 'textarea', 'value'=>'No more boalted configuration panel'),
          array('name'=>'media', 'type'=>'media', 'size'=>'fa-5x', 'value'=> 'http://s3.amazonaws.com/quantum-assets/icons/gear.png'),
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
    Onepager::addStyle('content-2', $path . '/style.css');
  }
);
