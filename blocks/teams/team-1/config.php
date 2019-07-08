<?php

return array(

	'slug'      => 'team-1', // Must be unique
	'groups'    => array('teams'), // Blocks group for filter

  // Fields - $contents available on view file to access the option
	'contents' => array(
		array('name' => 'title', 'value' => 'Meet The Team'),
		array(
			'name' => 'description',
			'type' => 'textarea',
			'value' => 'A fool thinks himself to be wise, but a wise man knows himself to be a fool.',
		),

		array(
			'name' => 'items',
			'type' => 'repeater',
			'fields' => array(
				array(
					array('name' => 'title', 'label' => 'Name', 'value' => 'Steve Jobs'),
					array('name' => 'designation', 'value' => 'CEO, Apple Inc'),
					array('name' => 'image', 'type' => 'image', 'value' => 'https://images.unsplash.com/photo-1500048993953-d23a436266cf?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=649&q=80'),
					array('name' => 'social', 'label' => 'Social Profiles', 'value' => array('http://facebook.com/ThemeXpert', 'http://twitter.com/themexpert', 'http://linkedin.com/themexpert')),
					array('name' => 'link', 'placeholder' => home_url()),
					array('name' => 'target', 'label' => 'open in new window', 'type' => 'switch'),
				),
				array(
					array('name' => 'title', 'label' => 'Name', 'value' => 'Nikola Tesla'),
					array('name' => 'designation', 'value' => 'Scientist'),
					array('name' => 'image', 'type' => 'image', 'value' => 'https://images.unsplash.com/photo-1519838255388-73be30bda0e5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=650&q=80'),
					array('name' => 'social', 'label' => 'Social Profiles', 'value' => array('http://behance.net/ThemeXpert', 'http://dribbble.com/themexpert', 'http://twitter.com/themexpert.com')),
					array('name' => 'link', 'placeholder' => home_url()),
					array('name' => 'target', 'label' => 'open in new window', 'type' => 'switch'),
				),
				array(
					array('name' => 'title', 'label' => 'Name', 'value' => 'Elon Musk'),
					array('name' => 'designation', 'value' => 'CEO, Tesla Motors'),
					array('name' => 'image', 'type' => 'image', 'value' => 'https://images.unsplash.com/photo-1504593811423-6dd665756598?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=650&q=80'),
					array('name' => 'social', 'label' => 'Social Profiles', 'value' => array('http://github.com/ThemeXpert', 'http://codepen.io/themexpert')),
					array('name' => 'link', 'placeholder' => home_url()),
					array('name' => 'target', 'label' => 'open in new window', 'type' => 'switch'),
				),
			),
		),
	),

	// Settings - $settings available on view file to access the option
	'settings' => array(
		array(
	      'name'     => 'heading_type',
	      'label'    => 'Heading Type',
	      'type'     => 'select',
	      'value'    => 'h1',
	      'options'  => array(
	        'h1'   => 'h1',
	        'h2'   => 'h2',
	        'h3'   => 'h3',
	        'h4'   => 'h4',
	        'h5'   => 'h5',
	        'h6'   => 'h6',
	      ),
	    ),
		array('label' => 'Title', 'type' => 'divider'), // Divider - Text
		array(
			'name' => 'title_size',
			'label' => 'Title Size',
			'append' => 'px',
			'value' => '@section_title_size',
		),
		array(
			'name'     => 'title_transformation',
			'label'    => 'Title Transformation',
			'type'     => 'select',
			'value'    => 'inherit',
			'options'  => array(
				'inherit'   => 'Default',
				'lowercase'   => 'Lowercase',
				'uppercase'   => 'Uppercase',
				'capitalize'  => 'Capitalized',
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
			),
		),

		array(
			'name' => 'desc_size',
			'label' => 'Desc Size',
			'append' => 'px',
			'value' => '18',
		),

		array(
			'name'     => 'title_animation',
			'label'    => 'Animation',
			'type'     => 'select',
			'value'    => '0',
			'options'  => array(
				'0'                     => 'None',
				'fade'                  => 'Fade',
				'scale-up'              => 'Scale Up',
				'scale-down'            => 'Scale Down',
				'slide-top-small'       => 'Slide Top Small',
				'slide-bottom-small'    => 'Slide Bottom Small',
				'slide-left-small'      => 'Slide Left Small',
				'slide-right-small'     => 'Slide Right Small',
				'slide-top-medium'      => 'Slide Top Medium',
				'slide-bottom-medium'   => 'Slide Bottom Medium',
				'slide-left-medium'     => 'Slide Left Medium',
				'slide-right-medium'    => 'Slide Right Medium',
				'slide-top'             => 'Slide Top 100%',
				'slide-bottom'          => 'Slide Bottom 100%',
				'slide-left'            => 'Slide Left 100%',
				'slide-right'           => 'Slide Right 100%',

			),
		),
		// array(
		// 'name'     => 'overlay_animation',
		// 'label'    => 'Overlay Animation',
		// 'type'     => 'select',
		// 'value'    => 'scale',
		// 'options'  => array(
		// 'slide-top'     => 'Slide Top',
		// 'slide-bottom'  => 'Slide Bottom',
		// 'slide-left'    => 'Slide Left',
		// 'slide-right'   => 'Slide Right',
		// 'fade'          => 'Fade',
		// 'scale'         => 'Scale',
		// 'spin'          => 'Spin',
		// )
		// ),
		array('label' => 'Items', 'type' => 'divider'), // Divider - Text

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

		array(
			'name' => 'item_name_size',
			'label' => 'Name Size',
			'append' => 'px',
			'value' => '24',
		),

		array(
			'name' => 'item_designation_size',
			'label' => 'Designation Size',
			'append' => 'px',
			'value' => '14',
		),

		array(
			'name' => 'item_icon_size',
			'label' => 'Icon Size',
			'append' => 'px',
			'value' => '14',
		),

		array(
			'name'     => 'item_animation',
			'label'    => 'Animation',
			'type'     => 'select',
			'value'    => '0',
			'options'  => array(
				'0'                     => 'None',
				'fade'                  => 'Fade',
				'scale-up'              => 'Scale Up',
				'scale-down'            => 'Scale Down',
				'slide-top-small'       => 'Slide Top Small',
				'slide-bottom-small'    => 'Slide Bottom Small',
				'slide-left-small'      => 'Slide Left Small',
				'slide-right-small'     => 'Slide Right Small',
				'slide-top-medium'      => 'Slide Top Medium',
				'slide-bottom-medium'   => 'Slide Bottom Medium',
				'slide-left-medium'     => 'Slide Left Medium',
				'slide-right-medium'    => 'Slide Right Medium',
				'slide-top'             => 'Slide Top 100%',
				'slide-bottom'          => 'Slide Bottom 100%',
				'slide-left'            => 'Slide Left 100%',
				'slide-right'           => 'Slide Right 100%',

			),
		),

	),

	'styles' => array(
		array(
			'name' => 'bg_color',
			'label' => 'Background Color',
			'type'  => 'colorpicker',
			'value' => '#fff',
		),
		array(
			'name' => 'title_color',
			'label' => 'Title Color',
			'type'  => 'colorpicker',
			'value' => '#323232',
		),

		array(
			'name' => 'desc_color',
			'label' => 'Desc Color',
			'type'  => 'colorpicker',
			'value' => '#323232',
		),



		array('label' => 'Items', 'type' => 'divider'), // Divider - Text
		array(
			'name' => 'item_overlay_color',
			'label' => 'Overlay Color',
			'type'  => 'colorpicker',
			'value' => 'rgba(0, 0, 0, 0.5)',
		),

		array(
			'name' => 'item_name_color',
			'label' => 'Name Color',
			'type'  => 'colorpicker',
			'value' => '#fff',
		),

		array(
			'name' => 'item_designation_color',
			'label' => 'Designation Color',
			'type'  => 'colorpicker',
			'value' => '#fff',
		),


		array(
			'name' => 'item_icon_color',
			'label' => 'Icon Color',
			'type'  => 'colorpicker',
			'value' => '#fff',
		),

		array(
			'name' => 'item_icon_hover_color',
			'label' => 'Icon Hover Color',
			'type'  => 'colorpicker',
			'value' => '@color.primary',
		),
	),

  // 'assets' => function( $path ){
  // Onepager::addStyle('team-1', $path . '/style.css');
  // }
);
