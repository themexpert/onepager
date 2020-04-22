<?php

return array(
    'slug' => 'features-11',
    'groups' => array('features'),
    'contents' => array(
        array(
            'name' => 'section_title',
            'label' => 'Section Title',
            'value' => 'Here\'s what some clients wonderful experience',
        ),
        array(
            'name' => 'heading',
            'lable' => 'Heading',
            'value' => 'Hear it from our customer',
        ),
        array(
            'name' => 'section_desc',
            'label' => 'desc',
            'type' => 'editor',
            'value' => '"we\'ve seen amazing results already. I made back the purchase price in just 48 hours! Man, this thing is getting better and better as I learn more about it. Thanks to software, we\'ve just launched our 5th website!"',
        ),
        array(
            'name' => 'section_image',
            'label' => 'Section Image',
            'type' => 'media',
            'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/side-image-feature.jpg',
        ),
        array(
            'name' => 'image_icon',
            'label' => 'Image Icon',
            'type' => 'icon',
            'value' => 'fa fa-play-circle fa-5x',
        ),
        array(
            'name' => 'video_source',
            'label' => 'Youtube Video Source',
            'prepend' => 'URL',
            'type' => 'text',
            'value' => 'https://youtu.be/DG6USXbTsW0',
        ),
        array(
            'name' => 'logo_items',
            'type' => 'repeater',
            'label' => 'Customer Logo',
            'fields' => array(
                array(
                    array(
                        'name' => 'single_logo',
                        'label' => 'Logo',
                        'type' => 'media',
                        'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/logo-1.png',
                    ),
                ),
                array(
                    array(
                        'name' => 'single_logo',
                        'label' => 'Logo',
                        'type' => 'media',
                        'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/logo-2.png',
                    ),
                ),
                array(
                    array(
                        'name' => 'single_logo',
                        'label' => 'Logo',
                        'type' => 'media',
                        'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/logo-3.png',
                    ),
                ),
            ),
        ),

        array(
            'name' => 'section_btn',
            'text' => 'See More Customer Stories',
            'type' => 'link',
            'placeholder' => home_url(),
        ),

    ),
    'settings' => array(
        array('label' => 'Media Animation', 'type' => 'divider'),
        array(
            'name' => 'animation_media',
            'label' => 'Media Animation',
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
        array('label' => 'Section Heading', 'type' => 'divider'), // Divider - Section Heading
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
            'name' => 'section_title_size',
            'label' => 'Section Title Size',
            'append' => 'px',
            'value' => '60',
        ),
        array(
            'name' => 'section_title_font_weight',
            'label' => 'Section Font Weight',
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
            'name' => 'section_title_transformation',
            'label' => 'Section Title Transformation',
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
        array('label' => 'Heading', 'type' => 'divider'), // Divider - Heading

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
            'value' => '42',
        ),
        array(
            'name' => 'title_font_weight',
            'label' => 'Font Weight',
            'type' => 'select',
            'value' => '300',
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

        array('label' => 'Heading', 'type' => 'divider'), // Divider - Text

        array(
            'name' => 'text_size',
            'label' => 'Text Size',
            'append' => 'px',
            'value' => '@section_text_size',
        ),
        array(
            'name' => 'text_font_weight',
            'label' => 'Text Font Weight',
            'type' => 'select',
            'value' => '300',
            'options' => array(
                '300' => '300',
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),

        array('label' => 'Button', 'type' => 'divider'), // Divider - Button

        array(
            'name' => 'btn_font_size',
            'label' => 'Button Font Size',
            'append' => 'px',
            'value' => '16',
        ),
        array(
            'name' => 'btn_font_weight',
            'label' => 'Button Font Weight',
            'type' => 'select',
            'value' => '300',
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
            'name' => 'bg_color',
            'label' => 'Background Color',
            'type' => 'colorpicker',
            'value' => '#ffffff',
        ),

        array(
            'name' => 'section_title_color',
            'label' => 'Section Title Color',
            'type' => 'colorpicker',
            'value' => '#192330',

        ),
        array(
            'name' => 'title_color',
            'label' => 'Title Color',
            'type' => 'colorpicker',
            'value' => '#132a46',

        ),
        array(
            'name' => 'text_color',
            'label' => 'Text Color',
            'type' => 'colorpicker',
            'value' => '#132a46',

        ),
        array(
            'name' => 'btn_bg',
            'label' => 'Button Background Color',
            'type' => 'colorpicker',
            'value' => '#29cb8b',
        ),
        array(
            'name' => 'btn_text',
            'label' => 'Button Text Color',
            'type' => 'colorpicker',
            'value' => '#ffffff',
        ),
        array(
            'name' => 'btn_bg_hover',
            'label' => 'Button Hover BG Color',
            'type' => 'colorpicker',
            'value' => '#ffffff',
        ),
        array(
            'name' => 'btn_bg_hover_text',
            'label' => 'Button Hover Text Color',
            'type' => 'colorpicker',
            'value' => '#29cb8b',
        ),
        array(
            'name' => 'btn_border_color',
            'label' => 'Button Border Color',
            'type' => 'colorpicker',
            'value' => '#29cb8b',
        ),

    ),
);
