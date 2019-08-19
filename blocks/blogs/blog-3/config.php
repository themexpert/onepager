<?php

return array(

	'slug'      => 'blog-3', // Must be unique and singular
	'groups'    => array('blogs'), // Blocks group for filter and plural

  // Fields - $contents available on view file to access the option
	'contents' => array(
		array(
			'name' => 'title',
			'value' => 'Our Blogs',
		),
		array(
			'name' => 'description',
			'type' => 'textarea',
			'value' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humor or randomized words which don\'t look even slightly believable.',
		),
		array(
			'name' => 'category',
			'type' => 'category',
		),
		array(
			'name' => 'total_posts',
			'label' => 'Total Posts',
			'value' => '3',
		),
		array(
			'name' => 'text_limit',
			'label' => 'Excerpt Length',
			'value' => 20,
		),
		array('name' => 'thumbnail_enable',
		  'label' => 'Thumbnail',
		  'type' => 'switch',
		  'value' => 'yes',
		),

		array(
			'name'  => 'readmore_text',
			'label' => 'Read More',
			'value' => 'Read More',
		),


	),

	// Settings - $settings available on view file to access the option
	'settings' => array(
		array('label' => 'Heading', 'type' => 'divider'),
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
			'name'   => 'section_title_size',
			'label'  => 'Title Size',
			'append' => 'px',
			'value'  => '@section_title_size',
		),
		array(
			'name'     => 'title_transformation',
			'label'    => 'Title Transformation',
			'type'     => 'select',
			'value'    => 'uppercase',
			'options'  => array(
				'inherit' => 'Default',
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

		array('label' => 'Items', 'type' => 'divider'),

		array(
			'name' => 'item_title_size',
			'label' => 'Title Size',
			'append' => 'px',
			'value' => '32',
		),

		array(
			'name' => 'item_desc_size',
			'label' => 'Item Desc Size',
			'append' => 'px',
			'value' => '16',
		),

		array(
			'name'     => 'item_title_transformation',
			'label'    => 'Transformation',
			'type'     => 'select',
			'value'    => 'uppercase',
			'options'  => array(
				'inherit' => 'Default',
				'lowercase'   => 'Lowercase',
				'uppercase'   => 'Uppercase',
				'capitalize'  => 'Capitalized',
			),
		),

		array(
			'name'     => 'item_animation',
			'label'    => 'Animation Item',
			'type'     => 'select',
			'value'    => 'fadeInUp',
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
			'value'   => '#fff',
		),

		array(
	      'name'    => 'bg_image',
	      'label'   => 'Background',
	      'type'    => 'image',
	      'value'   => ''
	    ),

		array('label' => 'Heading', 'type' => 'divider'),
		array(
			'name'  => 'section_title_color',
			'label' => 'Title Color',
			'type'  => 'colorpicker',
			'value' => '#323232',
		),

		array(
			'name'  => 'desc_color',
			'label' => 'Desc Color',
			'type'  => 'colorpicker',
			'value' => '#323232',
		),

		array('label' => 'Items', 'type' => 'divider'),
		array(
			'name'  => 'item_title_color',
			'label' => 'Item Title Color',
			'type'  => 'colorpicker',
			'value' => '#323232',
		),
		array(
			'name'  => 'item_desc_color',
			'label' => 'Item Desc Color',
			'type'  => 'colorpicker',
			'value' => '#323232',
		),
		array(
			'name'    => 'link_color',
			'label'   => 'Link Color',
			'type'    => 'colorpicker',
			'value'   => '#4cb257',
		),
	),


  // 'assets' => function( $path ){
  // Onepager::addStyle('blog-1', $path . '/style.css');
  // }
);
