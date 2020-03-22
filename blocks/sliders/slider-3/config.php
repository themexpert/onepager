<?php

return array(

	'slug'      => 'slider-3', // Must be unique
	'groups'    => array('sliders'), // Blocks group for filter
    'type'    => 'new',
  // Fields - $contents available on view file to access the option
  'contents' => array(
    array('label' => 'Slider Content', 'type' => 'divider'),
	array(
		'name'	=> 'section_title',
		'label'	=> 'Section Title',
		'value'	=> 'Success Stories'
	),
	array(
		'name'	=> 'section_desc',
		'label'	=> 'Section Description',
		'type'	=> 'text-area',
		'value'	=> 'Proin ac lobortis arcu, a vestibulum augue. Vivamus ipsum neque, facilisis vel<br/> mollis vitae, mollis nec ante. Quisque aliquam dictum condim.'
	),
	array(
        'name' => 'sliders',
        'type' => 'repeater',
        'fields' => array(
            array(
                  array('name' => 'description', 'type' => 'textarea', 'value' => '"Wow! I have the exact same personality, the only thing that has changed is my mindset and a few behaviors.I gained so much confidence in my ability to connect and deepen my relationships with people. It’s amazing how much easier it has been to meet new people and create instant connections"'),
                  array('name' => 'name', 'label' => 'Name', 'value' => 'Jack Stevens'),
                  array('name' => 'designation', 'label' => 'Designation', 'value' => 'Students'),
                  array('name' => 'slide_image', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2019/03/img1.jpg'),
                ),
            
            array(
                  array('name' => 'description', 'type' => 'textarea', 'value' => '"Wow! I have the exact same personality, the only thing that has changed is my mindset and a few behaviors.I gained so much confidence in my ability to connect and deepen my relationships with people. It’s amazing how much easier it has been to meet new people and create instant connections"'),
                  array('name' => 'name', 'label' => 'Name', 'value' => 'Jack Stevens'),
                  array('name' => 'designation', 'label' => 'Designation', 'value' => 'Students'),
                  array('name' => 'slide_image', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2019/03/img2.jpg'),
                ),
            
            array(
                  array('name' => 'description', 'type' => 'textarea', 'value' => '"Wow! I have the exact same personality, the only thing that has changed is my mindset and a few behaviors.I gained so much confidence in my ability to connect and deepen my relationships with people. It’s amazing how much easier it has been to meet new people and create instant connections"'),
                  array('name' => 'name', 'label' => 'Name', 'value' => 'Jack Stevens'),
                  array('name' => 'designation', 'label' => 'Designation', 'value' => 'Students'),
                  array('name' => 'slide_image', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2019/03/client.png'),
				),
			array(
				array('name' => 'description', 'type' => 'textarea', 'value' => '"Wow! I have the exact same personality, the only thing that has changed is my mindset and a few behaviors.I gained so much confidence in my ability to connect and deepen my relationships with people. It’s amazing how much easier it has been to meet new people and create instant connections"'),
				array('name' => 'name', 'label' => 'Name', 'value' => 'Jack Stevens'),
				array('name' => 'designation', 'label' => 'Designation', 'value' => 'Students'),
				array('name' => 'slide_image', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2019/03/img2.jpg'),
				),
			array(
				array('name' => 'description', 'type' => 'textarea', 'value' => '"Wow! I have the exact same personality, the only thing that has changed is my mindset and a few behaviors.I gained so much confidence in my ability to connect and deepen my relationships with people. It’s amazing how much easier it has been to meet new people and create instant connections"'),
				array('name' => 'name', 'label' => 'Name', 'value' => 'Jack Stevens'),
				array('name' => 'designation', 'label' => 'Designation', 'value' => 'Students'),
				array('name' => 'slide_image', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2019/03/img1.jpg'),
				),
			array(
				array('name' => 'description', 'type' => 'textarea', 'value' => '"Wow! I have the exact same personality, the only thing that has changed is my mindset and a few behaviors.I gained so much confidence in my ability to connect and deepen my relationships with people. It’s amazing how much easier it has been to meet new people and create instant connections"'),
				array('name' => 'name', 'label' => 'Name', 'value' => 'Jack Stevens'),
				array('name' => 'designation', 'label' => 'Designation', 'value' => 'Students'),
				array('name' => 'slide_image', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2019/03/img2.jpg'),
				),
                
            ),
        ),
    ),
    // Settings - $settings available on view file to access the option
	'settings' => array(
		array('label' => 'Section Settings', 'type' => 'divider'),
		array(
            'name' => 'heading_type',
            'label' => 'Heading Type',
            'type' => 'select',
            'value' => 'h1',
            'options' => array(
                'h1' => 'h1',
                'h2' => 'h2',
                'h3' => 'h3',
                'h4' => 'h4',
                'h5' => 'h5',
                'h6' => 'h6',
            ),
		),
		array(
            'name' => 'title_size',
            'label' => 'Title Size',
            'append' => 'px',
            'value' => '52',
        ),
        array(
            'name' => 'title_font_weight',
            'label' => 'Font Weight',
            'type' => 'select',
            'value' => '600',
            'options' => array(
				'300' => '300',
				'400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),
        array(
            'name' => 'title_transformation',
            'label' => 'Title Transformation',
            'type' => 'select',
            'value' => '0',
            'options' => array(
                '0' => 'Default',
                'lowercase' => 'Lowercase',
                'uppercase' => 'Uppercase',
                'capitalize' => 'Capitalized',
            ),
		),
		
		array(
            'name' => 'section_desc_size',
            'label' => 'Description Font Size',
            'append' => 'px',
            'value' => '20',
        ),
        array(
            'name' => 'section_desc_font_weight',
            'label' => 'Description Font Weight',
            'type' => 'select',
            'value' => '400',
            'options' => array(
				'300' => '300',
				'400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
		),
		array('label' => 'Slider Content', 'type' => 'divider'),
		array(
            'name' => 'slide_title_font',
            'label' => 'Slide Title Font Size',
            'append' => 'px',
            'value' => '26',
        ),
        array(
            'name' => 'slide_title_font_weight',
            'label' => 'Slide Title Font Weight',
            'type' => 'select',
            'value' => '600',
            'options' => array(
				'300' => '300',
				'400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
		),
		array(
            'name' => 'slide_desc_font',
            'label' => 'Slide Desc Font Size',
            'append' => 'px',
            'value' => '20',
        ),
        array(
            'name' => 'slide_desc_font_weight',
            'label' => 'Slide Desc Font Weight',
            'type' => 'select',
            'value' => '400',
            'options' => array(
                '300' => '300',
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
		),

		array(
            'name' => 'slide_designation_font',
            'label' => 'Slide Designation Font Size',
            'append' => 'px',
            'value' => '14',
        ),
        array(
            'name' => 'slide_designation_font_weight',
            'label' => 'Slide Designation Font Weight',
            'type' => 'select',
            'value' => '300',
            'options' => array(
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
		),
		
		array('label' => 'Slider Settings', 'type' => 'divider'),
		array(
			'name' => 'autoplay',
			'label' => 'Autoplay',
			'type' => 'switch',
			'value' => true,
		),
		array(
			'name' => 'infinite_sliding',
			'label' => 'Infinite Sliding',
			'type' => 'switch',
			'value' => true,
		),
		array(
			'name' => 'autoplay_interval',
			'label' => 'Slide Time',
			'append' => 'ms',
			'value' => 3000,
		),
		array(
            'name' => 'slide_animation',
            'label' => 'Slide Animate',
            'type' => 'select',
            'value' => 'ease-in-out',
            'options' => array(
                'ease-in-out' => 'ease-in-out',
                'ease-in' => 'ease-in',
                'ease-out' => 'ease-out',
                'linear' => 'linear',
            ),
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
		array(
			'name'    => 'bg_color',
			'label'   => 'Section Background',
			'type'    => 'colorpicker',
			'value'   => '#ff5678',
		),
		array(
			'name'    => 'section_heading_color',
			'label'   => 'Section Heading Color',
			'type'    => 'colorpicker',
			'value'   => '#ffffff',
		),
		array(
			'name'    => 'section_desc_color',
			'label'   => 'Section Desc Color',
			'type'    => 'colorpicker',
			'value'   => '#ffffff',
		),
		array(
			'name'    => 'slide_title_color',
			'label'   => 'Slider Title',
			'type'    => 'colorpicker',
			'value'   => '#142b45',
		),
		array(
			'name'    => 'slide_desc_color',
			'label'   => 'Slider Description',
			'type'    => 'colorpicker',
			'value'   => '#142b45',
		),
		array(
			'name'    => 'slide_designation_color',
			'label'   => 'Slider Designation',
			'type'    => 'colorpicker',
			'value'   => '#142b45',
		),
		array(
			'name'    => 'slide_nav_bg',
			'label'   => 'Slider Navigation',
			'type'    => 'colorpicker',
			'value'   => '#ffffff',
		),
		array(
			'name'    => 'slide_img_box_shadow',
			'label'   => 'Slider Box-Shadow',
			'type'    => 'colorpicker',
			'value'   => '#dddddd',
		),
		array(
			'name'    => 'slide_nav_box_shadow',
			'label'   => 'Slider Navigation Box-Shadow',
			'type'    => 'colorpicker',
			'value'   => '#dddddd',
		),
	)
    
);
