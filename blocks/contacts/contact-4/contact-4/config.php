<?php

return array(
    'slug' => 'contact-4',
    'groups' => array('contact'),
    'contents' => array(
        array(
            'name' => 'section_title',
            'label' => 'Section Title',
            'type' => 'text',
            'value' => 'Get The Defense You Need From A Law Firm.',
        ),
        array(
            'name' => 'section_blocks',
            'type' => 'repeater',
            'fields' => array(
                array(
                    array(
                        'name' => 'title',
                        'label' => 'Title',
                        'type' => 'text',
                        'value' => '30+ Years experience',
                    ),
                    array(
                        'name' => 'media',
                        'type' => 'icon',
                        'value' => 'fa fa-check',
                    ),
                    array(
                        'name' => 'desc',
                        'label' => 'Description',
                        'type' => 'editor',
                        'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text.',
                    ),
                ),
                array(
                    array(
                        'name' => 'title',
                        'label' => 'Title',
                        'type' => 'text',
                        'value' => 'Trusted by 1000s of clients with
                        over 99% success rate',
                    ),
                    array(
                        'name' => 'media',
                        'type' => 'icon',
                        'value' => 'fa fa-check',
                    ),
                    array(
                        'name' => 'desc',
                        'label' => 'Description',
                        'type' => 'editor',
                        'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text.',
                    ),
                ),
            ),

        ),
        array(
            'name' => 'contact_heading',
            'label' => 'Contact Heading',
            'type' => 'text',
            'value' => 'How Can We Help?',
        ),
        array(
            'name' => 'contact_shortcode',
            'label' => 'Contact ShortCode',
            'type' => 'textarea',
        ),
        array(
            'name' => 'section_btn',
            'text' => 'Download The Guide',
            'type' => 'link',
            'placeholder' => home_url(),
        ),
    ),
    'settings' => array(
        array('label' => 'Section Heading', 'type' => 'divider'), // Divider - Text
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
            'value' => '40',
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
            'name' => 'title_alignment',
            'label' => 'Title Alignment',
            'type' => 'select',
            'value' => 'left',
            'options' => array(
                'left' => 'Left',
                'center' => 'Center',
                'right' => 'Right',
                'justify' => 'Justify',
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
        array('label' => 'Block Heading', 'type' => 'divider'), // Divider - Text
        array(
            'name' => 'block_title_size',
            'label' => 'Item Heading Size',
            'append' => 'px',
            'value' => '24',
        ),
        array(
            'name' => 'block_title_font_weight',
            'label' => 'Item Heading Font Weight',
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
            'name' => 'block_title_transformation',
            'label' => 'Item Heading Transformation',
            'type' => 'select',
            'value' => '0',
            'options' => array(
                '0' => 'Default',
                'lowercase' => 'Lowercase',
                'uppercase' => 'Uppercase',
                'capitalize' => 'Capitalized',
            ),
        ),
        array('label' => 'Block Text', 'type' => 'divider'), // Divider - Text
        array(
            'name' => 'block_text_size',
            'label' => 'Item Text Size',
            'append' => 'px',
            'value' => '@section_text_size',
        ),
        array(
            'name' => 'block_text_font_weight',
            'label' => 'Item Text Font Weight',
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
    ),
    'styles' => array(
        array('label' => 'Background', 'type' => 'divider'), // Divider - Text
        array(
            'name' => 'bg_image',
            'label' => 'Contact Area BG Image',
            'type' => 'image',
            'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/contact-bg.jpg',
        ),
        array('label' => 'Section Color', 'type' => 'divider'), // Divider - Text
        array(
            'name' => 'bg_color',
            'label' => 'Background Color',
            'type' => 'colorpicker',
            'value' => '#f1f1f1',
        ),
        array(
            'name' => 'heading_color',
            'label' => 'Section Heading Color',
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
            'label' => 'Button BG Color',
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
            'label' => 'Button BG Hover Color',
            'type' => 'colorpicker',
            'value' => '#ffffff',
        ),
        array(
            'name' => 'btn_text_hover',
            'label' => 'Button Text Hover Color',
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
