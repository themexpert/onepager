<?php

return array(

	'slug'      => 'coming-soon-02', // Must be unique and singular
	'groups'    => array('Coming Soon'), // Blocks group for filter and plural

  // Fields - $contents available on view file to access the option
	'contents' => array(
		array(
			'name'    => 'logo',
			'label'   => 'Logo',
			'type'    => 'image',
			'value'   => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/MUTCD_CW21-1.svg/1024px-MUTCD_CW21-1.svg.png',
		),
		array(
			'name' => 'title',
			'value' => 'Website Under Construction',
		),
		array(
			'name' => 'description',
			'type' => 'editor',
			'value' => "Our website is under construction, We'll be here soon with new awesome site",
		),
	),
	// Settings - $settings available on view file to access the option
	'settings' => array(

		array('label' => 'Logo', 'type' => 'divider'), // Divider - Text

		array(
		  'name' => 'logo_size',
		  'label' => 'Logo Size',
		  'append' => 'px',
		  'value' => '260',
		),
		array(
		  'name'     => 'logo_animation',
		  'label'    => 'Logo Animation',
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

	),

	// Fields - $styles available on view file to access the option
	'styles' => array(
		array(
			'name'    => 'bg_image',
			'label'   => 'Background',
			'type'    => 'image',
			'value'   => 'https://images.pexels.com/photos/880873/pexels-photo-880873.jpeg?cs=srgb&dl=bay-boats-city-880873.jpg&fm=jpg',
		),
		array(
			'name'    => 'overlay_color',
			'label'   => 'Overlay Color',
			'type'    => 'colorpicker',
			'value' => 'rgba(0,0,0,0.53)',
		),
		array('label' => 'Content', 'type' => 'divider'), // Divider - Text

		array(
			'name'  => 'title_color',
			'label' => 'Title Color',
			'type'  => 'colorpicker',
			'value' => '#f59c1f',
		),
		array(
			'name'  => 'desc_color',
			'label' => 'Content Color',
			'type'  => 'colorpicker',
			'value' => '#f59c1f',
		),

	),
);
