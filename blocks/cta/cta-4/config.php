<?php

return array(

	'slug'      => 'cta-4', // Must be unique and singular
	'groups'    => array('Call To Actions'), // Blocks group for filter and plural

  // Fields - $contents available on view file to access the option
	'contents' => array(
		array(
			'name' => 'title',
			'value' => 'We Care About You',
		),
		array(
			'name' => 'description',
			'type' => 'editor',
			'value' => 'We waited until we could do it right. Then we did! Instead of creating a carbon copy. This <br> template has enough pages and blocks to let you create an awesome landing page',
		),
		array('name'=>'link', 'type' => 'link', 'text' => 'Book Now', 'placeholder'=> home_url()),
		array('name'=>'link_2', 'type' => 'link', 'text' => 'Get Started', 'placeholder'=> home_url()),
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
			'value' => '44',
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

	),

	// Fields - $styles available on view file to access the option
	'styles' => array(
		array(
			'name'    => 'bg_image',
			'label'   => 'Background',
			'type'    => 'image',
			'value'   => 'https://demo.wponepager.com/wp-content/uploads/2019/08/about-bg09.jpg
',
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
			'value' => 'rgba(200,200,200,0.17)',
		),

		array(
			'name'  => 'title_color',
			'label' => 'Title Color',
			'type'  => 'colorpicker',
			'value' => '#fff',
		),
		array(
			'name'  => 'desc_color',
			'label' => 'Desc Color',
			'type'  => 'colorpicker',
			'value' => '#ddd',
		),


		array('label' => 'Button', 'type' => 'divider'), // Divider - Text

		array(
			'name'    => 'button_text_color',
			'label'   => 'Left Button Text',
			'type'    => 'colorpicker',
			'value'   => '#fff',
		),
		array(
			'name'    => 'button_bg_color',
			'label'   => 'Left Button Bg',
			'type'    => 'colorpicker',
			'value'   => '#56CCF2',
		),

		array(
			'name'    => 'button_border_color',
			'label'   => 'Left Button Border',
			'type'    => 'colorpicker',
			'value'   => '#56CCF2',
		),

		array(
			'name'    => 'button_text_color_right',
			'label'   => 'Right Button Text',
			'type'    => 'colorpicker',
			'value'   => '#fff',
		),
		array(
			'name'    => 'button_bg_color_right',
			'label'   => 'Right Button Bg',
			'type'    => 'colorpicker',
			'value'   => 'rgba(86,204,242,0)',
		),

		array(
			'name'    => 'button_border_color_right',
			'label'   => 'Right Button Border',
			'type'    => 'colorpicker',
			'value'   => '#fff',
		),
	),

);
