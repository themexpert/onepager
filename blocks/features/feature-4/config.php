<?php

return array(
	'slug'    => 'feature-4',
	'groups'    => array('features'),

	'contents' => array(
		array(
			'name' => 'title',
			'value' => 'OUR SERVICES',
		),
		array(
			'name' => 'description',
			'type' => 'textarea',
			'value' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
		),
		array('label' => 'Items', 'type' => 'divider'), // Divider - Text


		array(
			'name' => 'items',
			'type' => 'repeater',
			'fields' => array(
				array(
					array('name' => 'title', 'value' => 'Responsive Design'),
					array('name' => 'description', 'type' => 'textarea', 'value' => ''),
					array('name' => 'media', 'type' => 'media', 'size' => 'fa-5x', 'value' => 'http://try.getonepager.com/wp-content/uploads/2019/03/01.jpg'),
					array('name' => 'link', 'placeholder' => home_url()),
					array('name' => 'target', 'label' => 'open in new window', 'type' => 'switch'),
				),
				array(
					array('name' => 'title', 'value' => 'WYSIWYG Editor'),
					array('name' => 'description', 'type' => 'textarea', 'value' => ''),
					array('name' => 'media', 'type' => 'media', 'size' => 'fa-5x', 'value' => 'http://try.getonepager.com/wp-content/uploads/2019/03/02.jpg'),
					array('name' => 'link', 'placeholder' => home_url()),
					array('name' => 'target', 'label' => 'open in new window', 'type' => 'switch'),
				),
				array(
					array('name' => 'title', 'value' => 'Intuitive Configuration'),
					array('name' => 'description', 'type' => 'textarea', 'value' => ''),
					array('name' => 'media', 'type' => 'media', 'size' => 'fa-5x', 'value' => 'http://try.getonepager.com/wp-content/uploads/2019/03/03.jpg'),
					array('name' => 'link', 'placeholder' => home_url()),
					array('name' => 'target', 'label' => 'open in new window', 'type' => 'switch'),
				),
			),

		),
	),

	'settings' => array(
		array('label' => 'Title Settings', 'type' => 'divider'), // Divider - Text
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
			'name' => 'title_size',
			'label' => 'Title Size',
			'append' => 'px',
			'value' => '@section_title_size',
		),


		array(
			'name'     => 'title_transformation',
			'label'    => 'Title Transformation',
			'type'     => 'select',
			'value'    => 0,
			'options'  => array(
				0   => 'Default',
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
			'label'    => 'Title Animation ',
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

		array('label' => 'Items Settings', 'type' => 'divider'), // Divider - Text

		array(
			'name'     => 'items_columns',
			'label'    => 'Items Columns',
			'type'     => 'select',
			'value'    => '3',
			'options'  => array(
				'2'   => '2',
				'3'   => '3',
				'4'   => '4',

			),
		),

		array(
			'name' => 'item_title_size',
			'label' => 'Title Size',
			'append' => 'px',
			'value' => '22',
		),

		array(
			'name' => 'item_desc_size',
			'label' => 'Desc Size',
			'append' => 'px',
			'value' => '16',
		),

		array(
			'name'     => 'items_alignment',
			'label'    => 'Items Alignment',
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
			'name'     => 'items_animation',
			'label'    => 'Items Animation ',
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
			'name' => 'section_margin',
			'label' => 'Article Margin',
			'append' => 'px',
			'value' => '-140',
		),

	),




	'styles' => array(
		array(
			'name' => 'bg_color',
			'label' => 'Background Color',
			'type' => 'colorpicker',
			'value' => '#fff',
		),
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
			'value' => '#323232',

		),

		array('label' => 'Items Style', 'type' => 'divider'), // Divider - Text

		array(
			'name' => 'item_title_color',
			'label' => 'Item Title Color',
			'type' => 'colorpicker',
			'value' => '#727272',
		),

		array(
			'name' => 'item_desc_color',
			'label' => 'Item Desc Color',
			'type' => 'colorpicker',
			'value' => '#727272',
		),

		array(
			'name' => 'icon_color',
			'label' => 'Icon Color',
			'type' => 'colorpicker',
		),
	),

  // 'assets' => function( $path ){
  // Onepager::addStyle('content-2', $path . '/style.css');
  // }
);
