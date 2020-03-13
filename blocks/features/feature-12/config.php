<?php

return array(
    'slug' => 'features-12',
    'groups' => array('features'),
    'contents' => array(
        array(
            'name' => 'title',
            'label' => 'Title',
            'type' => 'textarea',
            'value' => 'We work as part of your team, helping solve your toughest and most complex legal issues. Wherever you are.',
        ),
        array(
            'name' => 'section_btn',
            'text' => 'Request a free Consultation',
            'type' => 'link',
            'placeholder' => home_url(),
        ),
    ),
    'settings' => array(
        array(
            'name' => 'section_heading_type',
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
            'name' => 'title_font_size',
            'label' => 'Title Font Size',
            'append' => 'px',
            'value' => '50',
        ),
        array(
            'name' => 'title_font_weight',
            'label' => 'Title Font Weight',
            'type' => 'select',
            'value' => '700',
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

        array('label' => 'Button', 'type' => 'divider'), // Divider - Text
        array(
            'name' => 'section_button_size',
            'label' => 'Button font Size',
            'append' => 'px',
            'value' => '17',
        ),
        array(
            'name' => 'section_btn_font_weight',
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
    ),
    'styles' => array(
        array(
            'name' => 'bg_image',
            'label' => 'Background Image',
            'type' => 'image',
            'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/Hero-Block.jpg',
        ),
        array(
            'name' => 'bg_color',
            'label' => 'Background Color',
            'type' => 'colorpicker',
            'value' => '#ffffff',
        ),
        array(
            'name' => 'section_title_color',
            'label' => 'Section Title Color',
            'type' => 'colorpicker',
            'value' => '#ffffff',
        ),
        array(
            'name' => 'button_bg',
            'label' => 'Button Background',
            'type' => 'colorpicker',
            'value' => '#ffffff',

        ),
        array(
            'name' => 'button_bg_hover',
            'label' => 'Button Hover Background',
            'type' => 'colorpicker',
            'value' => '#29cb8b',
        ),
        array(
            'name' => 'button_color',
            'label' => 'Button Color',
            'type' => 'colorpicker',
            'value' => '#29cb8b',

        ),
        array(
            'name' => 'button_color_hover',
            'label' => 'Button Color Hover',
            'type' => 'colorpicker',
            'value' => '#ffffff',

        ),

    ),
);
