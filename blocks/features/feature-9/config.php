<?php

return array(
    'slug' => 'features-9',
    'groups' => array('features'),
    'contents' => array(
        array('name' => 'section_image', 'label' => 'Section Image', 'type' => 'media', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/another-block.jpg'),
        array(
            'name' => 'section_title',
            'label' => 'Title',
            'value' => 'Our approach reduces the need for complicated legal tangles. Rose Lawyers Melbourne will save you time, money and stress.',
        ),
        array(
            'name' => 'main_text',
            'label' => 'Content',
            'type' => 'editor',
            'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.',
        ),
        array(
            'name' => 'sponser_award',
            'label' => 'Sponser and Awards',
            'value' => 'Award',
        ),
        array(
            'name' => 'awards',
            'type' => 'repeater',
            'fields' => array(
                array(
                    array('name' => 'awardImage', 'label' => 'Awards Image', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/award-1.png'),
                ),
                array(
                    array('name' => 'awardImage', 'label' => 'Awards Image', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/award-2.png'),
                ),
                array(
                    array('name' => 'awardImage', 'label' => 'Awards Image', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/award-3.png'),
                ),
                array(
                    array('name' => 'awardImage', 'label' => 'Awards Image', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/award-4.png'),
                ),
                array(
                    array('name' => 'awardImage', 'label' => 'Awards Image', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/award-5.png'),
                ),
            ),
        ),
    ),
    'settings' => array(
        array('label' => 'Animation', 'type' => 'divider'), // Divider - Text
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

        array('label' => 'Title', 'type' => 'divider'), // Divider - Text

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
            'name' => 'title_alignment',
            'label' => 'Title Alignment',
            'type' => 'select',
            'value' => '0',
            'options' => array(
                '0' => 'default',
                'left' => 'Left',
                'right' => 'Right',
                'center' => 'Center',
            ),
        ),
        array('label' => 'Content', 'type' => 'divider'), // Divider - Text

        array(
            'name' => 'text_size',
            'label' => 'Text Size',
            'append' => 'px',
            'value' => '16',
        ),

        array(
            'name' => 'text_font_weight',
            'label' => 'Font Weight',
            'type' => 'select',
            'value' => '300',
            'options' => array(
                '300' => '300',
                '400' => '400',
                '300' => '300',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),
        array('label' => 'Award', 'type' => 'divider'), // Divider - Text
        array(
            'name' => 'award_text_size',
            'label' => 'Text Size',
            'append' => 'px',
            'value' => '24',
        ),

        array(
            'name' => 'award_font_weight',
            'label' => 'Font Weight',
            'type' => 'select',
            'value' => '600',
            'options' => array(
                '400' => '400',
                '300' => '300',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),
        array(
            'name' => 'award_text_transformation',
            'label' => 'Award Text Transformation',
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
            'value' => '#f1f1f1',
        ),

        array(
            'name' => 'right_box_bg',
            'label' => 'Right Column Background Color',
            'type' => 'colorpicker',
            'value' => '#ffffff',
        ),

        array(
            'name' => 'title_color',
            'label' => 'Title Color',
            'type' => 'colorpicker',
            'value' => '#29cb8b',

        ),
        array(
            'name' => 'text_color',
            'label' => 'Text Color',
            'type' => 'colorpicker',
            'value' => '#132a46',

        ),
        array(
            'name' => 'award_color',
            'label' => 'Award and Sponser Color',
            'type' => 'colorpicker',
            'value' => '#132a46',

        ),
        array(
            'name' => 'award_border_color',
            'label' => 'Award Border Color',
            'type' => 'colorpicker',
            'value' => '#dddddd',

        ),
    ),
);
