<?php

return array(

	'slug'      => 'coming-soon-01', // Must be unique and singular
	'groups'    => array('Coming Soon'), // Blocks group for filter and plural

  // Fields - $contents available on view file to access the option
	'contents' => array(
		array(
			'name' => 'title',
			'value' => 'This Website Is Coming Soon',
		),
		array(
			'name' => 'description',
			'type' => 'editor',
			'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
		),
		array(
			'name' => 'social',
			'label' => 'Social Links',
			'value' => array('http://facebook.com/themesgrove', 'http://twitter.com/themesgrove', 'http://linkedin.com/themesgrove', 'http://www.instagram.com/themesgrove'),
		),
		array(
			'name' => 'date',
			'type' => 'date',
		),
	),
	// Settings - $settings available on view file to access the option
	'settings' => array(

		array('label' => 'Title', 'type' => 'divider'), // Divider - Text
		array(
		  'name' => 'title_size',
		  'label' => 'Title Size',
		  'append' => 'px',
		  'value' => '@section_title_size',
		), array(
		'name'     => 'title_transformation',
		'label'    => 'Title Transformation',
		'type'     => 'select',
		'value'    => 0,
		'options'  => array(
		  '0'   => 'Default',
		  'lowercase'   => 'Lowercase',
		  'uppercase'   => 'Uppercase',
		  'capitalize'  => 'Capitalized',
		),
	  ),
	  array(
		'name'     => 'title_animation',
		'label'    => 'Title Animation',
		'type'     => 'select',
		'value'    => '0',
		'options'  => array(
		  '0'                     => 'None',
		  'fade'                  => 'Fade',
		  'scale-up'              => 'Scale Up',
		  'scale-down'            => 'Scale Down',
		  'slide-top-medium'      => 'Slide Top Medium',
		  'slide-bottom-medium'   => 'Slide Bottom Medium',
		  'slide-left-medium'     => 'Slide Left Medium',
		  'slide-right-medium'    => 'Slide Right Medium',
		),
	  ),
	  array('label' => 'Description', 'type' => 'divider'), // Divider - Text
	  array(
		'name' => 'desc_size',
		'label' => 'Desc Size',
		'append' => 'px',
		'value' => '16',
	  ), array(
		'name'     => 'content_animation',
		'label'    => 'Content Animation',
		'type'     => 'select',
		'value'    => '0',
		'options'  => array(
		  '0'                     => 'None',
		  'fade'                  => 'Fade',
		  'scale-up'              => 'Scale Up',
		  'scale-down'            => 'Scale Down',
		  'slide-top-medium'      => 'Slide Top Medium',
		  'slide-bottom-medium'   => 'Slide Bottom Medium',
		  'slide-left-medium'     => 'Slide Left Medium',
		  'slide-right-medium'    => 'Slide Right Medium',
		),
	  ),

	  array('label' => 'Countdown', 'type' => 'divider'), // Divider - Text
	  array(
		'name' => 'countdown_size',
		'label' => 'Countdown Size',
		'append' => 'px',
		'value' => '165',
	  ),

	  array(
		'name' => 'countdown_number_size',
		'label' => 'Countdown Number Size',
		'append' => 'px',
		'value' => '56',
	  ),

	  array(
		'name' => 'countdown_label',
		'label' => 'Countdown Label Size',
		'append' => 'px',
		'value' => '16',
	  ),
	  array(
		'name'     => 'countdown_animation',
		'label'    => 'Countdown Animation',
		'type'     => 'select',
		'value'    => '0',
		'options'  => array(
		  '0'                     => 'None',
		  'fade'                  => 'Fade',
		  'scale-up'              => 'Scale Up',
		  'scale-down'            => 'Scale Down',
		  'slide-top-medium'      => 'Slide Top Medium',
		  'slide-bottom-medium'   => 'Slide Bottom Medium',
		  'slide-left-medium'     => 'Slide Left Medium',
		  'slide-right-medium'    => 'Slide Right Medium',

		),
	  ),
	  array('label' => 'Social', 'type' => 'divider'), // Divider - Text
	  array(
		'name' => 'icon_size',
		'label' => 'Icon Size',
		'append' => 'px',
		'value' => '30',
	  ),
	  array(
		'name'     => 'social_animation',
		'label'    => 'Social Animation',
		'type'     => 'select',
		'value'    => '0',
		'options'  => array(
		  '0'                     => 'None',
		  'fade'                  => 'Fade',
		  'scale-up'              => 'Scale Up',
		  'scale-down'            => 'Scale Down',
		  'slide-top-medium'      => 'Slide Top Medium',
		  'slide-bottom-medium'   => 'Slide Bottom Medium',
		  'slide-left-medium'     => 'Slide Left Medium',
		  'slide-right-medium'    => 'Slide Right Medium',

		),
	  ),


	),

	// Fields - $styles available on view file to access the option
	'styles' => array(
		array(
			'name'    => 'bg_image',
			'label'   => 'Background',
			'type'    => 'image',
			'value'   => 'https://images.unsplash.com/photo-1479215932585-5eafc5b0c83a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80',
		),
		array(
			'name'    => 'overlay_color',
			'label'   => 'Overlay Color',
			'type'    => 'colorpicker',
			'value' => 'rgba(20,11,5,0.17)',
		),
		array('label' => 'Content', 'type' => 'divider'), // Divider - Text

		array(
			'name'  => 'title_color',
			'label' => 'Title Color',
			'type'  => 'colorpicker',
			'value' => '#ffffff',
		),
		array(
			'name'  => 'desc_color',
			'label' => 'description Color',
			'type'  => 'colorpicker',
			'value' => '#ffffff',
		),
		array('label' => 'Countdown', 'type' => 'divider'), // Divider - Text
		array(
			'name'  => 'countdown_color',
			'label' => 'Countdown Color',
			'type'  => 'colorpicker',
			'value' => '#4d3d31',
		),
		array(
			'name'  => 'countdown_bg_color',
			'label' => 'Countdown Background Color',
			'type'  => 'colorpicker',
			'value' => 'rgba(255,255,255,0.7)',
		),
		array('label' => 'Social', 'type' => 'divider'), // Divider - Text
		array(
			'name'    => 'icon_color',
			'label'   => 'Icon Color',
			'type'    => 'colorpicker',
			'value' => '#4d3d31',
		),
	),
);
