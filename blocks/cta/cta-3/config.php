<?php

return array(

	'slug'      => 'cta-3', // Must be unique and singular
	'groups'    => array('Call To Actions'), // Blocks group for filter and plural

  // Fields - $contents available on view file to access the option
	'contents' => array(
		array(
			'name' => 'title',
			'value' => 'Updated in real time',
		),
		array(
			'name' => 'description',
			'type' => 'textarea',
			'value' => 'We’re building the best next-generation presentation tool and platform for students, teachers, creatives, <br>managers, startups and teams everywhere. We are looking for people with a strong passion for <br>delightful user experiences and innovative design and technology.',
		),
		array('name' => 'link', 'text' => 'Read More', 'type' => 'link'),

		array('label' => 'Items', 'type' => 'divider'), // Divider - Text
		array(
			'name' => 'items',
			'type' => 'repeater',
			'fields' => array(
				array(
					array('name' => 'title', 'label' => 'Name', 'value' => 'Powerful Dashboard'),
					array('name' => 'icon', 'type' => 'icon', 'value' => 'fa fa-angle-right fa-lg'),
					array('name' => 'link'),
				),
				array(
					array('name' => 'title', 'label' => 'Name', 'value' => 'Content Strategist'),
					array('name' => 'icon', 'type' => 'icon', 'value' => 'fa fa-angle-right fa-lg'),
					array('name' => 'link'),
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

		array('label' => 'Content', 'type' => 'divider'), // Divider - Text
		array(
			'name'     => 'content_alignment',
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
			'name'     => 'content_animation',
			'label'    => 'Animation ',
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
			'name' => 'title_size',
			'label' => 'Title Size',
			'append' => 'px',
			'value' => '@section_title_size',
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
				'capitalize'  => 'Capitalized',
			),
		),

		array(
			'name' => 'desc_size',
			'label' => 'Desc Size',
			'append' => 'px',
			'value' => '18',
		),

		array('label' => 'Button', 'type' => 'divider'), // Divider - Text

		array(
			'name' => 'button_font_size',
			'label' => 'Font Size',
			'append' => 'px',
			'value' => '16',
		),
		array(
			'name'     => 'button_transformation',
			'label'    => 'Text Transformation',
			'type'     => 'select',
			'value'    => 'inherit',
			'options'  => array(
				'inherit'   => 'Default',
				'lowercase'   => 'Lowercase',
				'uppercase'   => 'Uppercase',
				'capitalize'  => 'Capitalized',
			),
		),

		array('label' => 'Items', 'type' => 'divider'), // Divider - Text
		array(
			'name' => 'items_font_size',
			'label' => 'Font Size',
			'append' => 'px',
			'value' => '20',
		),

	),

	// Fields - $styles available on view file to access the option
	'styles' => array(
		array(
			'name'    => 'bg_image',
			'label'   => 'Background',
			'type'    => 'image',
			'value'   => '',
		),
		array(
			'name' => 'bg_parallax',
			'type' => 'switch',
			'label' => 'Parallax Background',
		),

		array(
			'name'    => 'overlay_color',
			'label'   => 'Overlay Color',
			'type'    => 'colorpicker',
			'value' => 'rgba(255,255,255,1)',
		),

		array(
			'name'  => 'title_color',
			'label' => 'Title Color',
			'type'  => 'colorpicker',
			'value' => '#1c1d1e',
		),
		array(
			'name'  => 'desc_color',
			'label' => 'Desc Color',
			'type'  => 'colorpicker',
			'value' => '#1c1d1e',
		),


		array('label' => 'Button', 'type' => 'divider'), // Divider - Text

		array(
			'name'    => 'button_text_color',
			'label'   => 'Text Color',
			'type'    => 'colorpicker',
			'value'   => '#1c1d1e',
		),
		array(
			'name'    => 'button_bg_color',
			'label'   => 'Bg Color',
			'type'    => 'colorpicker',
			'value'   => '@color.primary',
		),

		array(
			'name'    => 'button_border_color',
			'label'   => 'Border Color',
			'type'    => 'colorpicker',
			'value'   => '@color.primary',
		),

		array('label' => 'Items', 'type' => 'divider'), // Divider - Text
		array(
			'name'    => 'items_text_color',
			'label'   => 'Text Color',
			'type'    => 'colorpicker',
			'value'   => '#1c1d1e',
		),
		array(
			'name'    => 'items_bg_color',
			'label'   => 'Bg Color',
			'type'    => 'colorpicker',
			'value'   => '#fff',
		),

		array(
			'name'    => 'items_border_color',
			'label'   => 'Border Color',
			'type'    => 'colorpicker',
			'value'   => '#d5dbe0',
		),
	),

  // 'assets' => function( $path ){
  // Onepager::addStyle('content-5', $path . '/style.css');
  // }
);
