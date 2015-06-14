<?php

return array(
  "slug"    => "blurb-1",
  "groups"    => ["blurb"],

  "fields" => array(
    array("name"=>"title", 'value'=>'Ready for the launch of our new website'),
    array("name"=>"description", "type"=>"textarea"),

    array(
      "name"=>"items",
      "type"=>"repeater",
      "fields" => array(
        array("name"=>"title"),
        array("name"=>"description", 'type'=> 'textarea'),
        array("name"=>"icon","type"=>"imicon"),
      )
    )
  ),

  "settings" => array(
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
      'value'    => 'none',
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
      'value'    => 'none',
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
    array(
      'name' => 'bg_color',
      'label' => 'Background Color',
      'type' => 'colorpicker',
      'tab' => 'Styles'
    ),
    array(
      'name' => 'title_color',
      'label' => 'Section Title Color',
      'type' => 'colorpicker',
      'tab' => 'Styles'
    ),
    array(
      'name' => 'text_color',
      'label' => 'Text Color',
      'type' => 'colorpicker',
      'tab' => 'Styles'
    ),
    array(
      'name' => 'icon_color',
      'label' => 'Icon Color',
      'type' => 'colorpicker',
      'tab' => 'Styles'
    ),

  ),

  "assets" => function( $path ){
    onepager()->asset()->style( 'blurb', $path . "style.css" );
  }
);

