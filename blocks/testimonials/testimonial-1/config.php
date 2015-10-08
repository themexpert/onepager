<?php

return array(

  'slug'      => 'testimonial-1', // Must be unique
  'groups'    => array('testimonials'), // Blocks group for filter

  // Fields - $contents available on view file to access the option
  'contents' => array(
    array(
      'name' => 'title',
      'value' => 'People Love Us'
    ),
    array(
      'name'=>'testimonials',
      'type'=>'repeater',
      'fields' => array(
        array(
          array('name'=>'name', 'value' => 'John Resig'),
          array('name'=>'designation', 'value' => 'Creator of jQuery'),
          array('name'=>'image', 'label' => 'Image', 'type'=>'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/images/8-thumb.jpg' ),
          array('name'=>'testimony', 'type'=> 'textarea', 'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis ex risus. Vivamus hendrerit nec ex vitae varius. Aliquam sollicitudin dapibus dapibus. Duis lacus diam, lacinia a fringilla semper, laoreet eget tellus. Vestibulum sed nisi rutrum, efficitur odio et, varius mi.'),
        ),
        array(
          array('name'=>'name', 'value' => 'Elon Musk'),
          array('name'=>'designation', 'value' => 'CEO and CTO of SpaceX'),
          array('name'=>'image','type'=>'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/images/7-thumb.jpg'),
          array('name'=>'testimony', 'type'=> 'textarea', 'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis ex risus. Vivamus hendrerit nec ex vitae varius. Aliquam sollicitudin dapibus dapibus. Duis lacus diam, lacinia a fringilla semper, laoreet eget tellus. Vestibulum sed nisi rutrum, efficitur odio et, varius mi.'),
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
      'name' => 'interval',
      'label' => 'Slider Interval',
      'value' => 3
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
    )
  ),

  'styles' => array(
    array(
      'name'  => 'bg_image',
      'label' => 'Background Image',
      'type'  => 'image'
    ),
    array(
      'name'     => 'bg_repeat',
      'label'    => 'Image Repeat',
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
      'label'   => 'Background Color',
      'type'    => 'colorpicker',
      'value'   => '#f5f5f5'
    ),

    array(
      'name'=>'bg_parallax',
      'type'=> 'switch',
      'label'=>'Parallax Background'
    ),
    array(
      'name'    => 'text_color',
      'label'   => 'Color',
      'type'    => 'colorpicker',
    ),
  ),

  'assets' => function( $path ){
    onepager()->asset()->style( 'testimonial-1', $path . '/style.css' );
  }
);
