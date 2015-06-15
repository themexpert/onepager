<?php

return array(
  
  'slug'      => 'header-4', // Must be unique
  'groups'    => ['headers'], // Blocks group for filter

  // Fields - $fields available on view file to access the option
  'fields' => array(
    array('name'=>'logo', 'type'=> 'image'),
    array('name'=>'menu','type'=>'menu'),
    array(
      "name"=>"sliders",
      "type"=>"repeater",
      "fields" => array(
        array("name"=>"title"),
        array("name"=>"description", 'type'=> 'textarea'),
        array("name"=>"image","type"=>"image"),
        array("name"=>"link"),
        array("name"=>"link_text", 'label'=> 'Link Text', 'placeholder'=> 'Download Now'),
      )
    )
  ),
  
  // Settings - $settings available on view file to access the option
  'settings' => array(    
     array(
      'name' => 'menu_type',
      'label' => 'Menu Type',
      'type' => 'select',
      'value' => 'normal',
      'options' => array(
        'normal' => 'Normal',
        'offcanvas' => 'Offcanvas'
      )
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
    
    array(
      'name'  => 'link_color',
      'label' => 'Link Color',
      'type'  => 'colorpicker',
      'value' => '#fff',
      'tab'   => 'styles'
    ),
    array(
      'name'  => 'link_hover_color',
      'label' => 'Link Hover Color',
      'type'  => 'colorpicker',
      'value' => '#000',
      'tab'   => 'styles'
    ),
    array(
      'name'    => 'cta_bg',
      'label'   => 'Button Background',
      'type'    => 'colorpicker',
      'value'   => '#4CAF50',
      'tab'     => 'styles'
    ),
    array(
      'name'    => 'cta_color',
      'label'   => 'Button Text Color',
      'type'    => 'colorpicker',
      'value'   => '#fff',
      'tab'     => 'styles'
    ),
  ),

  "assets" => function( $path ){
    onepager()->asset()->style( 'header-3', $path . "style.css" );
  }
);
