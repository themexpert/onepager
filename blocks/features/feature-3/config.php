<?php

return array(
	'slug'    => 'feature-3',
	'groups'    => array('features'),

	'contents' => array(
		array(
			'name' => 'title',
			'value' => 'Onepage Makes Website Building Easy and Fun',
		),
		array(
			'name' => 'description',
			'type' => 'textarea',
			'value' => 'Dont limit yourself. Many people limit themselves to what they think they can do. You can go as far as your mind lets you. What you believe, remember, you can achieve',
		),
		array(
			'name' => 'image',
			'type' => 'image',
			'value' => 'https://s3.amazonaws.com/quantum-assets/phone-light.png',
		),

		array(
			'name' => 'items',
			'type' => 'repeater',
			'fields' => array(
				array(
					array('name' => 'title', 'value' => 'Beautiful and Responsive Design'),
					array('name' => 'description', 'type' => 'textarea', 'value' => 'The best and most beautiful things in the world cannot be seen or even touched - they must be felt with the heart'),
					array('name' => 'media', 'type' => 'media', 'size' => 'fa-5x', 'value' => 'http://s3.amazonaws.com/quantum-assets/icons/camera.png'),
					array('name' => 'link', 'placeholder' => home_url()),
					array('name' => 'target', 'label' => 'open in new window', 'type' => 'switch'),
				),
				array(
					array('name' => 'title', 'value' => 'Cross Browser Compatibility'),
					array('name' => 'description', 'type' => 'textarea', 'value' => 'TDesign is not how it looks like of feels lie, design is how its works'),
					array('name' => 'media', 'type' => 'media', 'size' => 'fa-5x', 'value' => 'http://s3.amazonaws.com/quantum-assets/icons/browser.png'),
					array('name' => 'link', 'placeholder' => home_url()),
					array('name' => 'target', 'label' => 'open in new window', 'type' => 'switch'),
				),
				array(
					array('name' => 'title', 'value' => 'Well Documentation'),
					array('name' => 'description', 'type' => 'textarea', 'value' => 'Start by doing whats necessary; then do whats possible; and suddenly you are doing the impossible.'),
					array('name' => 'media', 'type' => 'media', 'size' => 'fa-5x', 'value' => 'http://s3.amazonaws.com/quantum-assets/icons/documents.png'),
					array('name' => 'link', 'placeholder' => home_url()),
					array('name' => 'target', 'label' => 'open in new window', 'type' => 'switch'),
				),
			),
		),
	),

	'settings' => array(
		array('label' => 'Media', 'type' => 'divider'), // Divider - Text
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
			'label'    => 'Content Alignment',
			'type'     => 'select',
			'value'    => 'right',
			'options'  => array(
				'left'    => 'Left',
				'right'   => 'Right',
			),
		),

		array(
			'name'     => 'media_grid',
			'label'    => 'Media Grid',
			'type'     => 'select',
			'value'    => 'width-1-3',
			'options'  => array(
				'width-1-2'   => 'Half',
				'width-1-3'   => 'One Thrids',
				'width-1-4'   => 'One Fourth',
			),
		),

		array(
			'name'     => 'animation_media',
			'label'    => 'Media Animation',
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

		array('label' => 'Content', 'type' => 'divider'), // Divider - Text
		array(
			'name'     => 'item_columns',
			'label'    => 'Items Colmuns',
			'type'     => 'select',
			'value'    => '1',
			'options'  => array(
				'1'   => '1',
				'2'   => '2',
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

		array(
			'name'     => 'animation_content',
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

		array('label' => 'Items', 'type' => 'divider'), // Divider - Text

		array(
			'name' => 'item_title_size',
			'label' => 'Item Title Size',
			'append' => 'px',
			'value' => '24',
		),
		array(
			'name'     => 'item_title_transformation',
			'label'    => 'Item Title Transformation',
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
			'name' => 'item_desc_size',
			'label' => 'Item Desc Size',
			'append' => 'px',
			'value' => '16',
		),

	),

	'styles' => array(
		array(
			'name'  => 'bg_image',
			'label' => 'Background Image',
			'type'  => 'image',
		),
		array(
			'name' => 'bg_color',
			'label' => 'Background Color',
			'type' => 'colorpicker',
			'value' => '#fff',
		),

		array('label' => 'Title', 'type' => 'divider'), // Divider - Text

		array(
			'name' => 'title_color',
			'label' => 'Title Color',
			'type' => 'colorpicker',
			'value' => '#323232',

		),
		array(
			'name' => 'desc_color',
			'label' => 'Desc Color',
			'type' => 'colorpicker',
			'value' => '#727272',
		),

		array('label' => 'Items', 'type' => 'divider'), // Divider - Text

		array(
			'name' => 'icon_color',
			'label' => 'Icon Color',
			'type' => 'colorpicker',
		),

		array(
			'name' => 'item_title_color',
			'label' => 'Title Color',
			'type' => 'colorpicker',
			'value' => '#323232',

		),
		array(
			'name' => 'item_desc_color',
			'label' => 'Desc Color',
			'type' => 'colorpicker',
			'value' => '#727272',
		),


	),

  // 'assets' => function( $path ){
  // Onepager::addStyle('content-3', $path . '/style.css');
  // }
);
