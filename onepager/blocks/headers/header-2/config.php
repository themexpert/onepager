<?php

return array(

  'slug'      => 'header-2', // Must be unique
  'groups'    => ['headers'], // Blocks group for filter

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array('name'=>'logo', 'type'=> 'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/logo-white.png'),
    array('name'=>'menu','type'=>'menu'),
    array(
      'name'=>'sliders',
      'type'=>'repeater',
      'fields' => array(
        array(
          array('name'=>'title', 'value' => 'Onepage Website Builder for WordPress'),
          array('name'=>'description', 'type'=> 'editor', 'value' => 'Learn from yesterday, live for today, hope for tomorrow. The important thing is not to stop questioning.'),
          array('name'=>'link', 'value' => '#'),
          array('name'=>'link_text', 'label'=> 'Link Text', 'placeholder'=> 'Button Text', 'value'=> 'Download Now'),
          array('name'=>'image','type'=>'image', 'value' => 'https://s3.amazonaws.com/quantum-assets/video-thumb.jpg'),
          array('name'=> 'video_url', 'label' => 'Video URL', 'value' => 'https://www.youtube.com/watch?v=SSrvuFgYc-g')
        ),
        array(
          array('name'=>'title', 'value' => 'First Page Builder for WordPress & Joomla'),
          array('name'=>'description', 'type'=> 'editor', 'value' => 'Learn from yesterday, live for today, hope for tomorrow. The important thing is not to stop questioning.'),
          array('name'=>'link', 'value' => '#'),
          array('name'=>'link_text', 'label'=> 'Link Text', 'placeholder'=> 'Button Text', 'value'=> 'Download Now'),
          array('name'=>'image','type'=>'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/video-thumb-2.jpg'),
          array('name'=> 'video_url', 'label' => 'Video URL', 'value' => 'https://vimeo.com/channels/staffpicks/128807157')
        )
      )
    )
    
  ),

  // Settings - $settings available on view file to access the option
  'settings' => array(
    array(
      'name' => 'sticky_nav',
      'label' => 'Sticky Nav',
      'type' => 'select',
      'value' => 1,
      'options' => array(
        1 => 'Enabled',
        0 => 'Disabled'
      )
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
      'name' => 'slider_height',
      'label' => 'Slider Height',
      'append' => 'px',
      'value' => '450'
    ),
    array(
      'name'=>'cta',
      'label'=> 'Call To Action Link',
      'placeholder' => 'http://doamin.com'
    ),
    array(
      'name'=>'cta_text',
      'label'=> 'Call To Action Text',
      'value'=> 'Call To Action',
      'placeholder'=> 'Call To Action'
    ),
  ),
  'styles' => array(
    array('label'=> 'Nav Style' , 'type'=> 'divider'),
    array(
      'name'  => 'nav_bg',
      'label' => 'Sticky Background',
      'type'  => 'colorpicker',
      'value' => '#6A6B83'
    ),
    array(
      'name'  => 'link_color',
      'label' => 'Link Color',
      'type'  => 'colorpicker',
      'value' => '#fff'
    ),
    array(
      'name'  => 'link_hover_color',
      'label' => 'Link Hover Color',
      'type'  => 'colorpicker',
      'value' => '#232323'
    ),
    array(
      'name'    => 'cta_bg',
      'label'   => 'Button Background',
      'type'    => 'colorpicker',
      'value'   => '#ee534f'
    ),
    array(
      'name'    => 'cta_color',
      'label'   => 'Button Text Color',
      'type'    => 'colorpicker',
      'value'   => '#fff'
    ),
    array('label'=> 'Slider Style' , 'type'=> 'divider'),
    array(
      'name'=>'slider_bg',
      'label' => 'Slider Background',
      'type'  => 'image',
      'value' => 'http://s3.amazonaws.com/quantum-assets/bg/bg4.jpg'
    ),
    
  ),

  'assets' => function( $path ){
    // Magnefic popup 
    onepager()->asset()->script( 'tx-magnific-popup', asset('assets/js/jquery.magnific-popup.js'), array( 'jquery' ) );
    onepager()->asset()->style( 'tx-magnific-popup', asset( 'assets/css/magnific-popup.css' ) );
    
    onepager()->asset()->style( 'header-2', $path . 'style.css' );
  }
);
