<?php

return array(

	'slug'      => 'testimonial-1', // Must be unique
	'groups'    => array('testimonials'), // Blocks group for filter

  // Fields - $contents available on view file to access the option
	'contents' => array(
		array(
			'name' => 'testimonials',
			'type' => 'repeater',
			'fields' => array(
				array(
					array('name' => 'image', 'label' => 'Image', 'type' => 'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/images/8-thumb.jpg' ),
					array('name' => 'testimony', 'type' => 'textarea', 'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis ex risus. Vivamus hendrerit nec ex vitae varius. Aliquam sollicitudin dapibus dapibus. Duis lacus diam, lacinia a fringilla semper, laoreet eget tellus. Vestibulum sed nisi rutrum, efficitur odio et, varius mi.'),
					array('name' => 'name', 'value' => 'John Resig'),
					array('name' => 'designation', 'value' => 'Creator of jQuery'),
				),
				array(
					array('name' => 'image', 'type' => 'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/images/7-thumb.jpg'),
					array('name' => 'testimony', 'type' => 'textarea', 'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis ex risus. Vivamus hendrerit nec ex vitae varius. Aliquam sollicitudin dapibus dapibus. Duis lacus diam, lacinia a fringilla semper, laoreet eget tellus. Vestibulum sed nisi rutrum, efficitur odio et, varius mi.'),
					array('name' => 'name', 'value' => 'Elon Musk'),
					array('name' => 'designation', 'value' => 'CEO and CTO of SpaceX'),
				),
			),
		),
	),

	'styles' => array(

		array(
			'name'  => 'bg_image',
			'label' => 'Background Image',
			'type'  => 'image',
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
			'value' => '@color.primary',
		),

		array(
			'name'    => 'testimoni_color',
			'label'   => 'Testimoni Color',
			'type'    => 'colorpicker',
			'value' => '#fff',
		),
		array(
			'name'    => 'name_color',
			'label'   => 'Name Color',
			'type'    => 'colorpicker',
			'value' => '#fff',
		),
		array(
			'name'    => 'designation_color',
			'label'   => 'Designation Color',
			'type'    => 'colorpicker',
			'value' => '#fff',
		),

		array(
			'name'    => 'dot_color',
			'label'   => 'Dot Color',
			'type'    => 'colorpicker',
			'value' => '#fff',
		),
	),

	// Settings - $settings available on view file to access the option
	'settings' => array(
		array(
			'name'     => 'animation',
			'label'    => 'Animation',
			'type'     => 'select',
			'value'    => 'slide',
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
			'name' => 'testimonial_height',
			'label' => 'Min Height',
			'append' => 'px',
			'value' => 750,
		),

		array(
			'name' => 'text_size',
			'label' => 'Text Size',
			'append' => 'px',
			'value' => '18',
		),
		array(
			'name' => 'name_size',
			'label' => 'Name Size',
			'append' => 'px',
			'value' => '32',
		),
		array(
			'name'     => 'name_transformation',
			'label'    => ' Transformation',
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
			'name' => 'designation_size',
			'label' => 'Designation Size',
			'append' => 'px',
			'value' => '16',
		),

	),

);
