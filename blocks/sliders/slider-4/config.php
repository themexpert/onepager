<?php

return array(

'slug'      => 'slider-4', // Must be unique
'tag'    => 'new',
'groups'    => array('sliders'), // Blocks group for filter
    // Fields - $contents available on view file to access the option
    'contents' => array(
        array(
            'name'      => 'sliders',
            'type'      => 'repeater',
            'fields'    => array(
                array(
                    array('name' => 'slide_image', 'label' => 'Single Slide', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/slide-item-1.jpg')
                ),
                array(
                    array('name' => 'slide_image', 'label' => 'Single Slide', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/slide-item-2.jpg')
                ),
                array(
                    array('name' => 'slide_image', 'label' => 'Single Slide', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/slide-item-3.jpg')
                ),
                array(
                    array('name' => 'slide_image', 'label' => 'Single Slide', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/slide-item-4.jpg')
                ),
                array(
                    array('name' => 'slide_image', 'label' => 'Single Slide', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/slide-item-5.jpg')
                ),
                array(
                    array('name' => 'slide_image', 'label' => 'Single Slide', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/slide-item-1.jpg')
                ),
                array(
                    array('name' => 'slide_image', 'label' => 'Single Slide', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/slide-item-2.jpg')
                )
            )
        ),
        array('name' => 'social_button', 'label' => 'Button', 'text' => 'FOLLOW US', 'type' => 'link')
    ),
    'settings'  => array(
        array(
            'name' => 'btn_font',
            'label' => 'Button Font Size',
            'append' => 'px',
            'value' => '14',
        ),
        array(
            'name' => 'btn_font_weight',
            'label' => 'Button Font Weight',
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
            'name' => 'btn_border_radius',
            'label' => 'Button Border Radius',
            'append' => 'px',
            'value' => '10',
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
    ),
    'styles'    => array(
        array(
			'name'    => 'bg_color',
			'label'   => 'Section Background',
			'type'    => 'colorpicker',
			'value'   => '#ff5678',
        ),
        array(
            'name'    => 'item_overlay_BG',
			'label'   => 'Image Overlay',
			'type'    => 'colorpicker',
			'value'   => 'rgba(255, 255, 255, 0.6)',
        ),
        array(
            'name'    => 'btn_bg_color',
			'label'   => 'Button Background',
			'type'    => 'colorpicker',
			'value'   => 'rgb(255, 255, 255)',
        ),
        array(
            'name'    => 'btn_text_color',
			'label'   => 'Button Text',
			'type'    => 'colorpicker',
			'value'   => '#142b45',
        ),
        array(
            'name'    => 'btn_box_shadow',
			'label'   => 'Button Box Shadow',
			'type'    => 'colorpicker',
			'value'   => 'rgba(251, 136, 159, 0.35)',
        ),
    )

);