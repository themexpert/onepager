<?php

return array(

	'slug'      => 'slider-1', // Must be unique
	'groups'    => array('sliders'), // Blocks group for filter

  // Fields - $contents available on view file to access the option
	'contents' => array(
		array(
			'name' => 'sliders',
			'type' => 'repeater',
			'fields' => array(
				array(
					array('name' => 'title', 'value' => 'Onepage Builder for WordPress'),
					array('name' => 'description', 'type' => 'textarea', 'value' => 'Building onepage website has never been easier before'),
					array('name' => 'image', 'type' => 'image', 'value' => 'https://image.freepik.com/free-photo/abstract-background-blue-yellow-texture-paper-backdrop_23-2147981611.jpg'),
					array('name' => 'link', 'type' => 'link', 'text' => 'Download Now', 'url' => 'http://getonepager.com'),
				),
				array(
					array('name' => 'title', 'value' => 'Revolutionary Website Builder'),
					array('name' => 'description', 'type' => 'textarea', 'value' => 'Ridiculously easy and built for tomorrows internet in mind'),
					array('name' => 'image', 'type' => 'image', 'value' => 'https://image.freepik.com/free-vector/abstract-background-with-geometric-style_23-2147823364.jpg'),
					array('name' => 'link', 'type' => 'link', 'text' => 'Download Now', 'url' => 'http://getonepager.com'),
				),
			),
		),
	),

	'styles' => array(
		array(
			'name'    => 'overlay_color',
			'label'   => 'Overlay Color',
			'type'    => 'colorpicker',
			'value'   => 'rgba(4,4,4,0.54)',
		),
		array(
			'name'    => 'title_color',
			'label'   => 'Title Color',
			'type'    => 'colorpicker',
		),

		array(
			'name'    => 'desc_color',
			'label'   => 'Desc Color',
			'type'    => 'colorpicker',
		),

		array('label' => 'Button', 'type' => 'divider'),
		array(
			'name'    => 'button_color',
			'label'   => 'Button Color',
			'type'    => 'colorpicker',
		),
		array(
			'name'    => 'button_bg',
			'label'   => 'Button Background',
			'type'    => 'colorpicker',
		),
	// array(
	// 'name'    => 'button_hover_color',
	// 'label'   => 'Button Hover Color',
	// 'type'    => 'colorpicker',
	// ),
	),

	// Settings - $settings available on view file to access the option
	'settings' => array(
		array(
			'name'     => 'animation',
			'label'    => 'Animation',
			'type'     => 'select',
			'value'    => 'scale',
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
				0 => 'Default',
				'lowercase'   => 'Lowercase',
				'uppercase'   => 'Uppercase',
				'capitalize'  => 'Capitalized',
			),
		),
		array(
			'name' => 'desc_size',
			'label' => 'Desc Size',
			'append' => 'px',
			'value' => '26',
		),

	),

  // 'assets' => function( $path ){
  // Onepager::addStyle('slider-1', $path . '/style.css');
  // }
);
