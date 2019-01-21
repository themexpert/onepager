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
      'name'=>'note_items',
      'type'=>'note',
      'label' => 'Items'
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
      'name' => 'desc_size',
      'label' => 'Desc Size',
      'append' => 'px',
      'value' => '18'
    ),


    array(
      'name'     => 'title_transformation',
      'label'    => 'Title Transformation',
      'type'     => 'select',
      'value'    => '0',
      'options'  => array(
        '0'   => 'Default',
        'lowercase'   => 'Lowercase',
        'uppercase'   => 'Uppercase',
        'capitalize'  => 'Capitalized'
      ),
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
      'name'     => 'title_animation',
      'label'    => 'Title Animation ',
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


    array(
      'name'     => 'items_columns',
      'label'    => 'Items Columns',
      'type'     => 'select',
      'value'    => '3',
      'options'  => array(
        '2'   => '2',
        '3'   => '3',
        '4'   => '4',

      ),
    ),




    array(
      'name'     => 'items_animation',
      'label'    => 'Items Animation ',
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

    array(
      'name'     => 'items_alignment',
      'label'    => 'Items Alignment',
      'type'     => 'select',
      'value'    => 'center',
      'options'  => array(
        'left'      => 'Left',
        'center'    => 'Center',
        'right'     => 'Right',
        'justify'   => 'Justify',
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
      'name' => 'desc_color',
      'label' => 'Desc Color',
      'type' => 'colorpicker',
      'value' => '#323232'

    ),


    array(
      'name' => 'item_title_color',
      'label' => 'Item Title Color',
      'type' => 'colorpicker',
      'value' => '#727272'
    ),

    array(
      'name' => 'item_desc_color',
      'label' => 'Item Desc Color',
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
