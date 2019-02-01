<?php

return array(

  'slug'      => 'portfolio-1', // Must be unique
  'groups'    => array('portfolios'), // Blocks group for filter

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array('name'=>'title', 'value'=> 'Our Works'),
    array(
      'name'=>'description',
      'type'=>'textarea',
      'value' => 'A fool thinks himself to be wise, but a wise man knows himself to be a fool.'
    ),

    array(
      'name'=>'portfolios',
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
    array('label'=>'Heading', 'type'=>'divider'), // Divider - Text
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
      'value'    => 'inherit',
      'options'  => array(
        'inherit' => 'Default',
        'lowercase'   => 'Lowercase',
        'uppercase'   => 'Uppercase',
        'capitalize'  => 'Capitalized'
      )
    ),

    array(
      'name'     => 'title_alignment',
      'label'    => 'Title Alignment',
      'type'     => 'select',
      'value'    => 'center',
      'options'  => array(
        'left'      => 'Left',
        'center'    => 'Center',
        'right'     => 'Right',
        'justify'   => 'Justify',
      )
    ),

    array(
      'name' => 'desc_size',
      'label' => 'Desc Size',
      'append' => 'px',
      'value' => '18'
    ),

    array(
      'name'     => 'title_animation',
      'label'    => 'Animation',
      'type'     => 'select',
      'value'    => '0',
      'options'  => array(        
        '0'                     =>  'None',
        'fade'                  =>  'Fade',
        'scale-up'              =>  'Scale Up',
        'scale-down'            =>  'Scale Down',
        'slide-top-small'       =>  'Slide Top Small',
        'slide-bottom-small'    =>  'Slide Bottom Small',
        'slide-left-small'      =>  'Slide Left Small',
        'slide-right-small'     =>  'Slide Right Small',
        'slide-top-medium'      =>  'Slide Top Medium',
        'slide-bottom-medium'   =>  'Slide Bottom Medium',
        'slide-left-medium'     =>  'Slide Left Medium',
        'slide-right-medium'    =>  'Slide Right Medium',
        'slide-top'             =>  'Slide Top 100%',
        'slide-bottom'          =>  'Slide Bottom 100%',
        'slide-left'            =>  'Slide Left 100%',
        'slide-right'           =>  'Slide Right 100%'

      ),
    ),

    array('label'=>'Items', 'type'=>'divider'), // Divider - Text

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
    ),
    array(
      'name'     => 'items_columns',
      'label'    => 'Columns',
      'type'     => 'select',
      'value'    => '3',
      'options'  => array(
        '2'   => '2',
        '3'   => '3',
        '4'   => '4',

      ),
    ),

    array(
      'name'     => 'lightbox_animation',
      'label'    => 'LightBox Animation',
      'type'     => 'select',
      'value'    => 'scale',
      'options'  => array(
        'fade'          => 'Fade',
        'scale'         => 'Scale',
        'slide'          => 'Slide',
      )
    ),
  ),

  'styles' => array(
    array(
      'name'=>'bg_color',
      'label' => 'Background Color',
      'type'  => 'colorpicker',
      'value' => '#fff'
    ),

    array('label'=>'Heading', 'type'=>'divider'), // Divider - Text
    array(
      'name'=>'title_color',
      'label' => 'Title Color',
      'type'  => 'colorpicker',
      'value' => '#323232'
    ),

    array(
      'name'=>'desc_color',
      'label' => 'Desc Color',
      'type'  => 'colorpicker',
      'value' => '#323232'
    ),

    array('label'=>'Items', 'type'=>'divider'), // Divider - Text

      array(
      'name'=>'overlay_color',
      'label' => 'Overlay Color',
      'type'  => 'colorpicker',
      'value' => 'rgba(0, 0, 0, 0.5)'
    ),

    array(
      'name'=>'icon_color',
      'label' => 'Icon Color',
      'type'  => 'colorpicker',
      'value' => '#fff'
    ),
    array(
      'name'=>'icon_bg',
      'label' => 'Icon Background',
      'type'  => 'colorpicker',
      'value' => '@color.primary'
    ),
  ),

  // 'assets' => function( $path ){
  //   // Local file
  //   Onepager::addStyle('portfolio-1', $path . '/style.css');
  // }
);
