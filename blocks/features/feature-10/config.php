<?php

return array(
    'slug' => 'features-10',
    'groups' => array('features'),
    'contents' => array(
        array(
            'name' => 'section_image',
            'label' => 'Section Image',
            'type' => 'image',
            'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/block-1.jpg',
        ),
        array(
            'name' => 'heading_text',
            'label' => 'Heading Text',
            'type' => 'text',
            'value' => 'We are among the leading Law Firms in Sydney and have
            the expertise and skill to assist you with any large,
            complicated and serious matters.',
        ),
        array(
            'name' => 'tab_items',
            'type' => 'repeater',
            'fields' => array(
                array(
                    array(
                        'name' => 'title',
                        'label' => 'Title',
                        'type' => 'text',
                        'value' => 'General Practice',
                    ),
                    array(
                        'name' => 'desc',
                        'label' => 'Description',
                        'type' => 'editor',
                        'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.',
                    ),
                    array(
                        'name' => 'tab_btn',
                        'text' => 'Get Help Now',
                        'type' => 'link',
                        'placeholder' => home_url()),
                ),
                array(
                    array(
                        'name' => 'title',
                        'label' => 'Title',
                        'type' => 'text',
                        'value' => 'Business Solution',
                    ),
                    array(
                        'name' => 'desc',
                        'label' => 'Description',
                        'type' => 'editor',
                        'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.',
                    ),
                    array(
                        'name' => 'tab_btn',
                        'text' => 'Get Help Now',
                        'type' => 'link',
                        'placeholder' => home_url(),
                    ),
                ),
                array(
                    array(
                        'name' => 'title',
                        'label' => 'Title',
                        'type' => 'text',
                        'value' => 'Wide Experience ',
                    ),
                    array(
                        'name' => 'desc',
                        'label' => 'Description',
                        'type' => 'editor',
                        'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.',
                    ),
                    array(
                        'name' => 'tab_btn',
                        'text' => 'Get Help Now',
                        'type' => 'link',
                        'placeholder' => home_url(),
                    ),
                ),
                array(
                    array(
                        'name' => 'title',
                        'label' => 'Title',
                        'type' => 'text',
                        'value' => 'Planning',
                    ),
                    array(
                        'name' => 'desc',
                        'label' => 'Description',
                        'type' => 'editor',
                        'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.',
                    ),
                    array(
                        'name' => 'tab_btn',
                        'text' => 'Get Help Now',
                        'type' => 'link',
                        'placeholder' => home_url(),
                    ),
                ),
            ),
        ),
    ),
    'settings' => array(
        array('label' => 'Media Animation', 'type' => 'divider'), // Divider - Text
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

        array('label' => 'Heading Options', 'type' => 'divider'), // Divider - Text

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
            'value' => '36',
        ),
        array(
            'name' => 'title_font_weight',
            'label' => 'Font Weight',
            'type' => 'select',
            'value' => '700',
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
        array('label' => 'Tab Options', 'type' => 'divider'), // Divider - Text
        array(
            'name' => 'tab_title_size',
            'label' => 'Tab Title Size',
            'append' => 'px',
            'value' => '20',
        ),
        array(
            'name' => 'tab_font_weight',
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
            'name' => 'tab_text_transformation',
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
            'name' => 'tab_desc_size',
            'label' => 'Tab Description Size',
            'append' => 'px',
            'value' => '16',
        ),
        array(
            'name' => 'tab_desc_font_weight',
            'label' => 'Description Font Weight',
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
            'name' => 'button_font',
            'type' => 'font',
            'label' => 'Button Fonts',
        ),
        array(
            'name' => 'btn_font_size',
            'label' => 'Button Font Size',
            'append' => 'px',
            'value' => '18',
        ),
        array(
            'name' => 'btn_font_weight',
            'label' => 'Button Font Weight',
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
            'name' => 'btn_text_transform',
            'label' => 'Button Text Transformation',
            'type' => 'select',
            'value' => '0',
            'options' => array(
                '0' => 'Default',
                'lowercase' => 'Lowercase',
                'uppercase' => 'Uppercase',
                'capitalize' => 'Capitalized',
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
            'name' => 'title_color',
            'label' => 'Title Color',
            'type' => 'colorpicker',
            'value' => '#132a46',

        ),
        array(
            'name' => 'tab_color',
            'label' => 'Tab Button Color',
            'type' => 'colorpicker',
            'value' => '#132a46',

        ),
        array(
            'name' => 'tab_color_hover',
            'label' => 'Tab Button Hover Color',
            'type' => 'colorpicker',
            'value' => '#dd5344',

        ),
        array(
            'name' => 'text_color',
            'label' => 'Text Color',
            'type' => 'colorpicker',
            'value' => '#132a46',

        ),
        array(
            'name' => 'button_bg_color',
            'label' => 'Button Background Color',
            'type' => 'colorpicker',
            'value' => '#29cb8b',

        ),
        array(
            'name' => 'button_bg_color_hover',
            'label' => 'Button Background Hover Color',
            'type' => 'colorpicker',
            'value' => '#ffffff',

        ),
        array(
            'name' => 'button_text_color',
            'label' => 'Button Text Color',
            'type' => 'colorpicker',
            'value' => '#ffffff',

        ),
        array(
            'name' => 'button_text_color_hover',
            'label' => 'Button Text Color Hover',
            'type' => 'colorpicker',
            'value' => '#29cb8b',

        ),
    ),
);
