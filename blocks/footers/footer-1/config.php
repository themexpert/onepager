<?php

return array(
	'slug'      => 'footer-1', // Must be unique
	'groups'    => array('footers'), // Blocks group for filter

	'contents' => array(
		array('name' => 'social', 'label' => 'Social Links', 'value' => array('http://facebook.com/ThemeXpert', 'http://twitter.com/themexpert', 'http://linkedin.com/themexpert', 'http://behance.net/ThemeXpert', 'http://dribbble.com/themexpert') ),
		array('name' => 'menu', 'type' => 'menu'),
		array('name' => 'copyright', 'type' => 'textarea', 'value' => 'Copyright &copy; 2019 OnePager, All Rights Reserved'),
	),


	'styles' => array(
		array(
			'name'    => 'bg_color',
			'label'   => 'Background Color',
			'type'    => 'colorpicker',
			'value'   => '#323232',
		),

		array(
			'name'    => 'text_color',
			'label'   => 'Color',
			'type'    => 'colorpicker',
			'value'   => '#f2f2f2',
		),

		array(
			'name'    => 'text_hover_color',
			'label'   => 'Hover Color',
			'type'    => 'colorpicker',
			'value'   => '@color.primary',
		),

		array(
			'name'     => 'item_alignment',
			'label'    => 'Alignment',
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
			'name'     => 'section_animation',
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


		array(
			'name'     => 'menu_transformation',
			'label'    => 'Menu Transformation',
			'type'     => 'select',
			'value'    => 'inherit',
			'options'  => array(
				'inherit'   => 'Default',
				'lowercase'   => 'Lowercase',
				'uppercase'   => 'Uppercase',
				'capitalize'  => 'Capitalized',
			),
		),
	),

);
