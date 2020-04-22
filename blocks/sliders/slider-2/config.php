<?php

return array(

	'slug'      => 'slider-2', // Must be unique
	'groups'    => array('sliders'), // Blocks group for filter

  // Fields - $contents available on view file to access the option
	'contents' => array(
		array('label' => 'Slider Content', 'type' => 'divider'),
		array(
			'name' => 'sliders',
			'type' => 'repeater',
			'fields' => array(
				array(
					array('name' => 'title', 'value' => 'Onepage Website Builder for WordPress'),
					array('name' => 'description', 'type' => 'textarea', 'value' => 'Build website quickly and efficiently with simple easy to use page builder'),
					array('name' => 'image', 'type' => 'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/browser-1.png'),
					array('name' => 'link', 'type' => 'link'),
				),
				array(
					array('name' => 'title', 'value' => 'Revolutionary Way of Building OnePage Website'),
					array('name' => 'description', 'type' => 'textarea', 'value' => 'Ridiculously easy and built for tomorrows internet in mind'),
					array('name' => 'image', 'type' => 'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/browser-1.png'),
					array('name' => 'link', 'type' => 'link'),
				),
			),
		),

	),

	// Settings - $settings available on view file to access the option
	'settings' => array(
		array('label' => 'Slider Settings', 'type' => 'divider'),
		array(
			'name'     => 'animation',
			'label'    => 'Animation',
			'type'     => 'select',
			'value'    => 'fade',
			'options'  => array(
				'slide'   => 'Slide',
				'fade'   => 'Fade',
				'scale'  => 'Scale',
				'pull'  => 'Pull',
				'push'  => 'Push',
			),
		),
		array(
			'name' => 'autoplay',
			'label' => 'Autoplay',
			'type' => 'switch',
			'value' => true,
		),
		array(
			'name' => 'slider_height',
			'label' => 'Slider Height',
			'append' => 'px',
			'value' => 900,
		),

		array(
			'name' => 'media_size',
			'label' => 'Image Size',
			'append' => 'px',
			'value' => '500',
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
			'value'    => 'inherit',
			'options'  => array(
				'inherit'   => 'Default',
				'lowercase'   => 'Lowercase',
				'uppercase'   => 'Uppercase',
				'capitalize'  => 'Capitalized',
			),
		),

		array('label' => 'Button Settings', 'type' => 'divider'),

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


	'styles' => array(
		array('label' => 'Slider Style', 'type' => 'divider'),
		array(
			'name' => 'slider_bg',
			'label' => 'Background Image',
			'type'  => 'image',
			'value' => 'http://s3.amazonaws.com/quantum-assets/bg/bg3.jpg',
		),

		array(
			'name'    => 'bg_color_2',
			'label'   => 'Overlay Color',
			'type'    => 'colorpicker',
		),
		array(
			'name'    => 'text_color',
			'label'   => 'Text Color',
			'type'    => 'colorpicker',
			'value'   => '#fff',
		),


		array('label' => 'Button Style', 'type' => 'divider'),
		array(
			'name'    => 'cta_color',
			'label'   => 'Color',
			'type'    => 'colorpicker',
			'value'   => '#fff',
		),
		array(
			'name'    => 'cta_bg',
			'label'   => 'Background',
			'type'    => 'colorpicker',
			'value'   => '@color.primary',
		),



	),

);
