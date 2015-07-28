<?php

return array(
	'slug'      => 'footer-1', // Must be unique
  	'groups'    => array('footers'), // Blocks group for filter

  	'contents' => array(
  		array('name'=> 'social', 'label' => 'Social Links', 'value' => array('http://facebook.com/ThemeXpert', 'http://twitter.com/themexpert', 'http://linkedin.com/themexpert', 'http://behance.net/ThemeXpert', 'http://dribbble.com/themexpert') ),
  		array('name'=>'menu','type'=>'menu'),
  		array('name'=> 'copyright', 'type'=>'textarea', 'value'=> 'Copyright &copy; 2015 OnePager, All Rights Reserved')
	),


	'styles' => array(
		array(
	      'name'    => 'bg_color',
	      'label'   => 'Background Color',
	      'type'    => 'colorpicker',
	      'value'   => '#323232'
	    ),

	    array(
	      'name'    => 'text_color',
	      'label'   => 'Color',
	      'type'    => 'colorpicker',
	      'value'   => '#f2f2f2'
	    ),
	),

	'assets' => function( $path ){
    	onepager()->asset()->style( 'footer-1', $path . '/style.css' );
  	}
);
