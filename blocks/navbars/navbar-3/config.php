<?php

return array(

    'slug' => 'navbar-3', // Must be unique
    'tag'    => 'new',
    'groups' => array('navbars'), // Blocks group for filter
     // Fields - $contents available on view file to access the option
     'contents' => array(
        array('name' => 'logo', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/education-logo.png'),
        array('name' => 'main_menu', 'type' => 'menu'),
        array('name' => 'right_menu', 'type' => 'menu'),
    ),
    'settings'  => array(
        array(
			'name' => 'sticky_nav',
			'label' => 'Sticky Nav',
			'type' => 'select',
			'value' => 1,
			'options' => array(
				1 => 'Enabled',
				0 => 'Disabled',
			),
		),
        array(
            'name' => 'menu_font_size',
            'label' => 'Menu Font Size',
            'append' => 'px',
            'value' => '15',
        ),
        array(
            'name' => 'menu_font_weight',
            'label' => 'Font Weight',
            'type' => 'select',
            'value' => '600',
            'options' => array(
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),
    ),
    'styles' => array(
        array(
            'name' => 'bg_color',
            'label' => 'Background Color',
            'type' => 'colorpicker',
            'value' => '#fff3f5',
        ),
        array(
            'name' => 'menu_font_color',
            'label' => 'Menu Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),
        array(
            'name' => 'menu_font_hover_color',
            'label' => 'Menu Hover Color',
            'type' => 'colorpicker',
            'value' => '#ff8099',
        ),
        array(
            'name' => 'btn_box_shadow',
            'label' => 'Menu Button Shadow',
            'type' => 'colorpicker',
            'value' => 'rgba(251, 136, 159, 0.35)',
        ),
        array(
            'name'      => 'menu_bottom_border',
            'label'     => 'Menu Bottom Border',
            'type'      => 'colorpicker',
            'value'     => '#dddddd'
        )
    )

);