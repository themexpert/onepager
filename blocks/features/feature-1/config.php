<?php

return array(

	'slug'      => 'feature-1', // Must be unique and singular
	'groups'    => array('features'), // Blocks group for filter and plural

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
		array(
			'name' => 'image',
			'type' => 'image',
			'value' => 'http://s3.amazonaws.com/quantum-assets/img-1.png',
		),
		array( 'name' => 'link', 'type' => 'link'),
	),

	// Settings - $settings available on view file to access the option
	'settings' => array(
		array('label' => 'Content', 'type' => 'divider'), // Divider - Text
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
		array(
			'name'     => 'media_alignment',
			'label'    => 'Meida Alignment',
			'type'     => 'select',
			'value'    => 'right',
			'options'  => array(
				'left'    => 'Left',
				'right'   => 'Right',
			),
		),
		array(
			'name'     => 'media_grid',
			'label'    => 'Meida Grid',
			'type'     => 'select',
			'value'    => 'width-1-3',
			'options'  => array(
				'width-1-2'   => 'Half',
				'width-1-3'   => 'One Thrids',
				'width-1-4'   => 'One Fourth',
				'width-2-3'   => 'Two Thirds',
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
				'0'           => 'Default',
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
			'name'     => 'animation_content',
			'label'    => 'Animation Content',
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
			'name'     => 'animation_media',
			'label'    => 'Animation Media',
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
		array('label' => 'Background', 'type' => 'divider'), // Divider - Background
		array(
			'name'  => 'bg_image',
			'label' => 'Image',
			'type'  => 'image',
		),
		array(
			'name'     => 'bg_repeat',
			'label'    => 'Repeat',
			'type'     => 'select',
			'options'  => array(
				'no-repeat'     => 'No Repeat',
				'repeat-x'      => 'Repeat X',
				'repeat-y'      => 'Repeat Y',
			),
		),
		array(
			'name'    => 'bg_color',
			'label'   => 'Bg Color',
			'type'    => 'colorpicker',
			'value'   => '#ebeff2',
		),
		array('label' => 'Text', 'type' => 'divider'), // Divider - Text
		array(
			'name'  => 'title_color',
			'label' => 'Title Color',
			'type'  => 'colorpicker',
			'value' => '#323232',
		),
		array(
			'name'  => 'text_color',
			'label' => 'Text Color',
			'type'  => 'colorpicker',
			'value' => '#323232',
		),
		array(
			'name'    => 'button_bg_color',
			'label'   => 'Button Background',
			'type'    => 'colorpicker',
			'value'   => '@color.primary',
		),
		array(
			'name'    => 'button_text_color',
			'label'   => 'Button Text',
			'type'    => 'colorpicker',
			'value'   => '#fff',
		),
	),

  // 'assets' => function( $path ){
  // Onepager::addStyle('content-1', $path . '/style.css');
  // }
);
