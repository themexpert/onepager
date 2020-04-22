<?php

return array(

    'slug' => 'navbar-2', // Must be unique
    'groups' => array('navbars'), // Blocks group for filter

    // Fields - $contents available on view file to access the option
    'contents' => array(
        array('name' => 'logo', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/logo.jpg'),
        array('name' => 'menu', 'type' => 'menu'),
        array('name' => 'link', 'type' => 'link', 'label' => 'Phone', 'text' => '(546) 400 769 - 444', 'url' => 'tel:+546400769444'),
    ),
    'settings' => array(
        array(
            'name' => 'menu_font_size',
            'label' => 'Menu Font Size',
            'append' => 'px',
            'value' => '14',
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
            'value' => '#ffffff',
        ),
        array(
            'name' => 'link_color',
            'label' => 'Link Color',
            'type' => 'colorpicker',
            'value' => '#ffffff',
        ),
        array(
            'name' => 'link_hover_color',
            'label' => 'Link Hover Color',
            'type' => 'colorpicker',
            'value' => '#29cb8b',
        ),
        array(
            'name' => 'link_active_color',
            'label' => 'Link Active Color',
            'type' => 'colorpicker',
            'value' => '@color.primary',
        ),
        array(
            'name' => 'cta_bg',
            'label' => 'Button Background',
            'type' => 'colorpicker',
            'value' => '@color.primary',
        ),
        array(
            'name' => 'cta_color',
            'label' => 'Button Text Color',
            'type' => 'colorpicker',
            'value' => '#fff',
        ),
    ),
);
