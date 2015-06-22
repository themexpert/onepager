<?php

return array(
  
  'slug'      => 'content-1', // Must be unique and singular
  'groups'    => ['contents'], // Blocks group for filter and plural

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array(
      'name'=>'title', 
      'value' => 'Lets make a better website together'
    ),
    array(
      'name'=>'description',
      'type'=>'editor', 
      'value'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam elit sem, semper nec pellentesque ut, aliquet aliquam justo. Praesent fermentum odio molestie erat cursus, a elementum nunc consequat.'
    ),
    array(
      'name'=>'image', 
      'type'=>'image', 
      'valur'=> 'http://s3.amazonaws.com/quantum-assets/img-1.png'
    ),
    array('name'=>'link'),
  ),
  
  // Settings - $settings available on view file to access the option
  'settings' => array(    
    array(
      'name'     => 'media_alignment',
      'label'    => 'Meida Alignment',
      'type'     => 'select',
      'value'    => 'right',
      'options'  => array(
        'left'    => 'Left',
        'right'   => 'Right'
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
      'name'     => 'title_size',
      'label'    => 'Title Size',
      'type'     => 'select',
      'value'    => 'title-sm',
      'options'  => array(
        'title-sm'      => 'Small',
        'title-md'      => 'Medium',
        'title-lg'      => 'Large'
      ),
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
      'name'     => 'content_alignment',
      'label'    => 'Items Alignment',
      'type'     => 'select',
      'value'    => 'middle',
      'options'  => array(
        'top'      => 'Top',
        'middle'   => 'Middle',
        'bottom'   => 'Bottom'
      ),
    ),
    
    array(
      'name'  => 'link_text', 
      'label' => 'Link Text',
      'value' => 'Readmore', 
    ),

    array(
      'name'     => 'animation_content',
      'label'    => 'Animation Content',
      'type'     => 'select',
      'value'    => 'fadeInLeft',
      'options'  => array(
        '0'           => 'None',
        'fadeIn'      => 'Fade',
        'fadeInLeft'  => 'Slide Left',
        'fadeInRight' => 'Slide Right',
        'fadeInUp'    => 'Slide Up',
        'fadeInDown'  => 'Slide Down',
      ),
    ),

   array(
    'name'     => 'animation_media',
    'label'    => 'Animation Media',
    'type'     => 'select',
    'value'    => 'fadeInRight',
    'options'  => array(
        '0'             => 'None',
        'fadeIn'        => 'Fade',
        'fadeInLeft'    => 'Slide Left',
        'fadeInRight'   => 'Slide Right',
        'fadeInUp'      => 'Slide Up',
        'fadeInDown'    => 'Slide Down',
      ),
    ),
  ),

  // Fields - $styles available on view file to access the option
  'styles' => array(
    array('label'=>'Background', 'type'=>'divider'), // Divider - Background
    array(
      'name'  => 'bg_image', 
      'label' => 'Image', 
      'type'  => 'image'
    ),
    array(
      'name'     => 'bg_repeat',
      'label'    => 'Repeat',
      'type'     => 'select',
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
    array('label'=>'Text', 'type'=>'divider'), // Divider - Text
    array(
      'name'  => 'title_color',
      'label' => 'Title Color',
      'type'  => 'colorpicker',
      'value' => '#323232'
    ),
    array(
      'name'  => 'text_color',
      'label' => 'Text Color',
      'type'  => 'colorpicker',
      'value' => '#323232'
    ),
    array(
      'name'    => 'button_bg_color',
      'label'   => 'Button Background',
      'type'    => 'colorpicker',
      'value'   => '#4cb257'
    ),
    array(
      'name'    => 'button_text_color',
      'label'   => 'Button Text',
      'type'    => 'colorpicker',
      'value'   => '#fff'
    ),
  ),

  'assets' => function( $path ){
    onepager()->asset()->style( 'content-1', $path . 'style.css' );
  }
);