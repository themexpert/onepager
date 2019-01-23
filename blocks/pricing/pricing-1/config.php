<?php

return array(
  'slug'=>'pricing-1',
  'name'=>'Pricing 1',
  'groups'=> array('pricing'),
  'contents'=> array(
    array('name'=>'title', 'value'=>'Price'),
    array('name'=>'description', 'value'=>'Our pricing is awesome', 'type'=>'editor'),
    array(
      'name'=>'pricings',
      'type'=>'repeater',
      'fields'=> array(
        array(
          array('name'=>'title', 'value'=>'Silver'),
          array('name'=>'featured', 'type'=>'switch'),
          array('name'=>'price', 'value'=>'24'),
          array('name'=>'money', 'value'=>'$'),
          array('name'=>'period', 'value'=>'month'),
          array('name'=>'features', 'value'=> array('Limited space', 'Limited support', '5h support')),
          array('name'=>'link', 'type'=>'link', 'url'=>'#', 'text'=>'sign up'),
        ),
        array(
          array('name'=>'title', 'value'=>'Gold'),
          array('name'=>'featured', 'type'=>'switch', 'value'=>true),
          array('name'=>'price', 'value'=>'40'),
          array('name'=>'money', 'value'=>'$'),
          array('name'=>'period', 'value'=>'month'),
          array('name'=>'features', 'value'=> array('Limited space', 'Limited support', '12h support')),
          array('name'=>'link', 'type'=>'link', 'url'=>'#', 'text'=>'sign up'),
        ),
        array(
          array('name'=>'title', 'value'=>'Platinum'),
          array('name'=>'featured', 'type'=>'switch'),
          array('name'=>'price', 'value'=>'60'),
          array('name'=>'money', 'value'=>'$'),
          array('name'=>'period', 'value'=>'month'),
          array('name'=>'features', 'value'=> array('Unlimited space', 'Unlimited support', '24h support')),
          array('name'=>'link', 'type'=>'link', 'url'=>'#', 'text'=>'sign up'),
        ),
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

  ),

  'styles' => array(
    array(
      'name'  =>'bg_color',
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
      'name'=>'feature_text_color',
      'label' => 'Featured Text Color',
      'type'  => 'colorpicker',
      'value' => '#fff'
    ),


    array(
      'name'=>'feature_bg_color',
      'label' => 'Featured Bg Color',
      'type'  => 'colorpicker',
      'value' => '@color.primary'
    ),
  ),

    'assets' => function( $path ){
    // Local file
    Onepager::addStyle('pricing-1', $path . '/style.css');
  }
);
