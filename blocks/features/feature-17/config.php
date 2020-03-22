<?php

return array(
    'slug'      => 'feature-17',
    'groups'    => array('features'),
    'type'    => 'sexy',
    'contents'  => array(
        array(
            'name'  => 'section_image',
            'label' => 'Section Image',
            'type'  => 'image',
            'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/newsletter-icon.png'
        ),
        array(
            'name'  => 'main_title',
            'label' => 'Section Title',
            'value' => 'Sign up for Our Newsletter'
        ),
        array(
            'name'  => 'section_desc',
            'type'  => 'textarea',
            'value' => 'Proin ac lobortis arcu, a vestibulum augue. Vivamus ipsum neque, facilisis vel<br/> 
            mollis vitae, mollis nec ante. Quisque aliquam dictum condim.'
        ),
        array(
            'name'  => 'form_shortcode',
            'label' => 'Form ShortCode',
            'type'  => 'textarea',
        ),
        array(
            'name' => 'social_icons',
            'type' => 'repeater',
            'fields' => array(
                array(
                    array('name' => 'social_icon', 'label' => 'Social Icon', 'type' => 'icon', 'value' => 'fa fa-facebook fa-2x'),
                    array('name' => 'social_link', 'label' => 'Icon Link', 'prepend' => 'url', 'type' => 'text', 'value' => '#')
                ),
                array(
                    array('name' => 'social_icon', 'label' => 'Social Icon', 'type' => 'icon', 'size' => 'fa-2x', 'value' => 'fa fa-twitter fa-2x'),
                    array('name' => 'social_link', 'label' => 'Icon Link', 'prepend' => 'url', 'type' => 'text', 'value' => '#')
                ),
                array(
                    array('name' => 'social_icon', 'label' => 'Social Icon', 'type' => 'icon', 'size' => 'fa-2x', 'value' => 'fa fa-youtube fa-2x'),
                    array('name' => 'social_link', 'label' => 'Icon Link', 'prepend' => 'url', 'type' => 'text', 'value' => '#')
                ),
            )
        )
    ),
    'settings'  => array(
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
            'name' => 'animation_content',
            'label' => 'Content Animation',
            'type' => 'select',
            'value' => '0',
            'options' => array(
                '0' => 'None',
                'fade' => 'Fade',
                'scale-up' => 'Scale Up',
                'scale-down' => 'Scale Down',
                'slide-top-small' => 'Slide Top Small',
                'slide-bottom-small' => 'Slide Bottom Small',
                'slide-left-small' => 'Slide Left Small',
                'slide-right-small' => 'Slide Right Small',
                'slide-top-medium' => 'Slide Top Medium',
                'slide-bottom-medium' => 'Slide Bottom Medium',
                'slide-left-medium' => 'Slide Left Medium',
                'slide-right-medium' => 'Slide Right Medium',
                'slide-top' => 'Slide Top 100%',
                'slide-bottom' => 'Slide Bottom 100%',
                'slide-left' => 'Slide Left 100%',
                'slide-right' => 'Slide Right 100%',

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
            'name' => 'desc_font_size',
            'label' => 'Description Font Size',
            'append' => 'px',
            'value' => '18',
        ),
        array(
            'name' => 'desc_font_weight',
            'label' => 'Description Font Weight',
            'type' => 'select',
            'value' => '400',
            'options' => array(
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),
        array('label' => 'Subscribe Form', 'type' => 'divider'), // Divider - Form
        array(
            'name' => 'form_font_size',
            'label' => 'Form Font Size',
            'append' => 'px',
            'value' => '16',
        ),
        array(
            'name' => 'form_font_weight',
            'label' => 'Form Font Weight',
            'type' => 'select',
            'value' => '400',
            'options' => array(
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),
        array(
            'name'      => 'field_border_radius',
            'label'     => 'Border Radius',
            'append'    => 'px',
            'value'     => '10'
        )
    ),
    'styles'  => array(
        array(
            'name' => 'bg_color',
            'label' => 'Background Color',
            'type' => 'colorpicker',
            'value' => '#fee7eb',
        ),

        array('label' => 'Form Styles', 'type' => 'divider'), // Divider - Form

        array(
            'name' => 'field_bg',
            'label' => 'Fields Background Color',
            'type' => 'colorpicker',
            'value' => 'rgb(255, 255, 255)',
        ),
        array(
            'name' => 'field_shadow',
            'label' => 'Fields Shadow Color',
            'type' => 'colorpicker',
            'value' => 'rgba(251, 136, 159, 0.35)',
        ),
        array(
            'name' => 'field_border',
            'label' => 'Fields Border Color',
            'type' => 'colorpicker',
            'value' => '#ffffff',
        ),
        array('label' => 'Social Icons', 'type' => 'divider'), // Divider - Social
        array(
            'name' => 'social_bg',
            'label' => 'Social Icon Background',
            'type' => 'colorpicker',
            'value' => '#ffffff',
        ),
        array(
            'name' => 'social_color',
            'label' => 'Social Icon Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),
    )

);