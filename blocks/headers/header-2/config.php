<?php

return array(

  'slug'      => 'header-2', // Must be unique
  'groups'    => array('headers'), // Blocks group for filter

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array('name'=>'logo', 'type'=> 'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/logo-white.png'),
    array('name'=>'menu','type'=>'menu'),
    array('name'=>'link', 'type' => 'link', 'label'=> 'Navbar Link'),

    array(
      'name'=>'sliders',
      'type'=>'repeater',
      'fields' => array(
        array(
          array('name'=>'title', 'value' => 'Onepage Website Builder for WordPress'),
          array('name'=>'description', 'type'=> 'editor', 'value' => 'Learn from yesterday, live for today, hope for tomorrow. The important thing is not to stop questioning.'),
          array('name'=>'link', 'type' => 'link', 'text' => 'Download Now', 'url' => 'http://getonepager.com'),
          array('name'=>'image','type'=>'image', 'value' => 'https://s3.amazonaws.com/quantum-assets/video-thumb.jpg'),
          array('name'=> 'video_url', 'label' => 'Video URL', 'value' => 'https://www.youtube.com/watch?v=SSrvuFgYc-g')
        ),
        array(
          array('name'=>'title', 'value' => 'First Page Builder for WordPress & Joomla'),
          array('name'=>'description', 'type'=> 'editor', 'value' => 'Learn from yesterday, live for today, hope for tomorrow. The important thing is not to stop questioning.'),
          array('name'=>'link', 'type' => 'link', 'text' => 'Download Now', 'url' => 'http://getonepager.com'),
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
      'name' => 'title_size',
      'label' => 'Title Size',
      'append' => 'px',
      'value' => '@section_title_size'
    ),
    array(
      'name' => 'text_size',
      'label' => 'Text Size',
      'append' => 'px',
      'value' => '18'
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
      'name'     => 'media_grid',
      'label'    => 'Meida Grid',
      'type'     => 'select',
      'value'    => '5',
      'options'  => array(
        '3'   => '3',
        '4'   => '4',
        '5'   => '5',
        '6'   => '6',
        '7'   => '7',
        '8'   => '8'
      ),
    ),
    array(
      'name' => 'slider_height',
      'label' => 'Slider Height',
      'append' => 'px',
      'value' => '450'
    ),

  ),
  'styles' => array(
    array('label'=> 'Nav Style' , 'type'=> 'divider'),
    array(
      'name'  => 'nav_bg',
      'label' => 'Sticky Background',
      'type'  => 'colorpicker',
      'value' => 'rgba(0,0,0,0.5)'
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
      'value' => '@color.primary'
    ),
    array(
      'name'    => 'cta_bg',
      'label'   => 'Button Background',
      'type'    => 'colorpicker',
      'value'   => '@color.primary'
    ),
    array(
      'name'    => 'cta_color',
      'label'   => 'Button Text Color',
      'type'    => 'colorpicker',
      'value'   => '#fff'
    ),
    array('label'=> 'Slider Style' , 'type'=> 'divider'),
    array(
      'name'  => 'bg_image',
      'label' => 'Image',
      'type'  => 'image',
      'value' => 'http://s3.amazonaws.com/quantum-assets/bg/bg4.jpg'
    ),
    array(
      'name'     => 'bg_repeat',
      'label'    => 'Repeat',
      'type'     => 'select',
      'value'    => 'no-repeat',
      'options'  => array(
        'no-repeat'     => 'No Repeat',
        'repeat-x'      => 'Repeat X',
        'repeat-y'      => 'Repeat Y',
      )
    ),
    array(
      'name'    => 'bg_color',
      'label'   => 'Color',
      'type'    => 'colorpicker',
      'value'   => '#ebeff2'
    ),
    array(
      'name'  => 'text_color',
      'label' => 'Text Color',
      'type'  => 'colorpicker',
      'value' => '#fff'
    ),

  ),

  'assets' => function( $path ){
    // Magnefic popup load from onepager assets
    Onepager::addScript( 'tx-magnific-popup', op_asset('assets/js/jquery.magnific-popup.js'), array( 'jquery' ) );
    Onepager::addStyle('tx-magnific-popup', op_asset( 'assets/css/magnific-popup.css' ) );
    // Local assets
    Onepager::addStyle('header-2', $path . '/style.css');
  }
);
