<?php

return array(
  
  'slug'      => 'content-1', // Must be unique and singular
  'groups'    => ['contents'], // Blocks group for filter and plural

  // Fields - $fields available on view file to access the option
  'fields' => array(
    array('name'=>'title', 'value' => 'Lets make a better website together'),
    array('name'=>'editor', 'type'=>'editor', 'value' => 'Lets make a better website together'),
    array('name'=>'description','type'=>'textarea', 'value'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam elit sem, semper nec pellentesque ut, aliquet aliquam justo. Praesent fermentum odio molestie erat cursus, a elementum nunc consequat.'),
    array('name'=>'image', 'type'=>'image'),
    array('name'=>'link', 'class' => 'input-link'),
  ),
  
  // Settings - $settings available on view file to access the option
  'settings' => array(    
    array(
      'name'     => 'media_alignment',
      'label'    => 'Meida Alignment',
      'type'     => 'select',
      'value'    => 'left',
      'options'  => array(
        'left'    => 'Left',
        'right'   => 'Right'
      ),
      'tab' => 'layout' // Define the tab where the settings belongs too. Default - General 
    ),
    array(
      'name'     => 'media_grid',
      'label'    => 'Meida Grid',
      'type'     => 'select',
      'value'    => '6',
      'options'  => array(
        '3'   => '3',
        '4'   => '4',
        '5'   => '5',
        '6'   => '6',
        '7'   => '7',
        '8'   => '8'
      ),
      'tab' => 'layout'
    ),
    array('label'=>'Items', 'type'=>'divider', 'tab'=>'layout'), // Divider - Items
      array(
        'name'     => 'title_size',
        'label'    => 'Title Size',
        'type'     => 'select',
        'value'    => '3.5em',
        'options'  => array(
          '2em'     => 'Small',
          '3.5em'   => 'Medium',
          '5em'     => 'large'
        ),
        'tab' => 'layout'
      ),
      array(
        'name'     => 'content_alignment',
        'label'    => 'Items Alignment',
        'type'     => 'select',
        'value'    => 'top',
        'options'  => array(
          'top'      => 'Top',
          'middle'   => 'Middle',
          'bottom'   => 'Bottom'
        ),
        'tab' => 'layout'
      ),
    
    array(
      'name'  => 'link_text', 
      'value' => 'Readmore', 
      'tab'   => 'layout'
    ),

    array(
      'name'     => 'animation_content',
      'label'    => 'Animation Content',
      'type'     => 'select',
      'value'    => 'none',
      'options'  => array(
        '0'           => 'None',
        'fadeIn'      => 'Fade',
        'fadeInLeft'  => 'Slide Left',
        'fadeInRight' => 'Slide Right',
        'fadeInUp'    => 'Slide Up',
        'fadeInDown'  => 'Slide Down',
      ),
      'tab'     => 'layout'
    ),

     array(
      'name'     => 'animation_media',
      'label'    => 'Animation Media',
      'type'     => 'select',
      'value'    => 'none',
      'options'  => array(
        '0'             => 'None',
        'fadeIn'        => 'Fade',
        'fadeInLeft'    => 'Slide Left',
        'fadeInRight'   => 'Slide Right',
        'fadeInUp'      => 'Slide Up',
        'fadeInDown'    => 'Slide Down',
      ),
      'tab' => 'layout'
    ),
    array('label'=>'Background', 'type'=>'divider', 'tab'=>'styles'), // Divider - Background
    array(
      'name'  => 'bg_image', 
      'label' => 'Image', 
      'type'  => 'image', 
      'tab'   => 'styles'
    ),
    array(
      'name'     => 'bg_repeat',
      'label'    => 'Repeat',
      'type'     => 'select',
      'options'  => array(
        'no-repeat'     => 'No Repeat',
        'repeat-x'      => 'Repeat X',
        'repeat-y'      => 'Repeat Y',
      ),
      'tab' => 'styles'
    ),
    array(
      'name'    => 'bg_color',
      'label'   => 'Color',
      'type'    => 'colorpicker',
      'tab'     => 'styles'
    ),
    array('label'=>'Text', 'type'=>'divider', 'tab'=>'styles'), // Divider - Text
    array(
      'name'  => 'text_color',
      'label' => 'Text Color',
      'type'  => 'colorpicker',
      'tab'   => 'styles'
    ),
    array(
      'name'    => 'button_bg_color',
      'label'   => 'Button Background Color',
      'type'    => 'colorpicker',
      'tab'     => 'styles'
    ),
    array(
      'name'    => 'button_text_color',
      'label'   => 'Button Background Color',
      'type'    => 'colorpicker',
      'tab'     => 'styles'
    ),
  ),

  'assets' => function( $path ){
    onepager()->asset()->style( 'content-1', $path . 'style.css' );
  }
);