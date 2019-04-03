<?php

return array(

	'slug'      => 'cta-1', // Must be unique and singular
	'groups'    => array('Call To Actions'), // Blocks group for filter and plural

  // Fields - $contents available on view file to access the option
	'contents' => array(
		array(
			'name' => 'title',
			'value' => 'Lets make a better website together',
		),
		array(
			'name' => 'description',
			'type' => 'editor',
			'value' => 'The world is a dangerous place to live; not because of the people who are evil, but because of the people who dont do anything about it.',
		),
		array( 'name' => 'link', 'type' => 'link'),
	),

	// Settings - $settings available on view file to access the option
	'settings' => array(

		array('label' => 'Content', 'type' => 'divider'), // Divider - Text
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

		array(
			'name'     => 'content_animation',
			'label'    => 'Content Animation',
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


		array('label' => 'Button', 'type' => 'divider'), // Divider - Text

		array(
			'name' => 'button_font_size',
			'label' => 'Font Size',
			'append' => 'px',
			'value' => '16',
		),

		array(
			'name'     => 'button_transformation',
			'label'    => 'Transformation',
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
			'name'     => 'button_animation',
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

	// Fields - $styles available on view file to access the option
	'styles' => array(
		array(
			'name'    => 'bg_color',
			'label'   => 'Background Color',
			'type'    => 'colorpicker',
			'value'   => '@color.secondary',
		),

		array('label' => 'Content', 'type' => 'divider'), // Divider - Text

		array(
			'name'  => 'title_color',
			'label' => 'Title Color',
			'type'  => 'colorpicker',
			'value' => '#fff',
		),
		array(
			'name'  => 'desc_color',
			'label' => 'Text Color',
			'type'  => 'colorpicker',
			'value' => '#f5f5f5',
		),

		array('label' => 'Button', 'type' => 'divider'), // Divider - Text

		array(
			'name'    => 'button_text_color',
			'label'   => 'Text Color',
			'type'    => 'colorpicker',
			'value'   => '#fff',
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
	),

  // 'assets' => function( $path ){
  // Onepager::addStyle('content-4', $path . '/style.css');
  // }
);
