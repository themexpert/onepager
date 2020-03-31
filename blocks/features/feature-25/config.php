<?php

return array(
    'slug'      => 'feature-25',
    'type'      => 'new',
    'groups'    => array('features'),
    'contents'  => array(
            array(
                'name'      => 'right_side_logo',
                'label'     => 'Featured Photo',
                'type'      => 'image',
                'value'     => 'https://demo.wponepager.com/wp-content/uploads/2020/03/onepager-normand-logo.png'
            ),
            array(
                'name'      => 'author_name',
                'label'     => 'Author',
                'value'     => 'Norman Vincent Peale'
            ),
            array(
                'name'      => 'title_tag',
                'label'     => 'Before Title Text',
                'value'     => 'international bestseller <span class="highlight">More than 5 million copies sold</span>'
            ),
            array(
                'name'      => 'section_title',
                'label'     => 'Section Title',
                'value'     => 'The Power of Positive Thinking'
            ),
            array(
                'name'      => 'section_desc',
                'label'     => 'Section Description',
                'type'      => 'textarea',
                'value'     => '"This book is written with the sole objective of helping the reader achieve a happy, satisfying, and worthwhile life."'
            ),
            array(
                'name'      => 'logos',
                'label'     => 'Company Logo',
                'type'      => 'repeater',
                'fields'    => array(
                    array(
                        array('name' => 'company_logo', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/sponser-1.png')
                    ),
                    array(
                        array('name' => 'company_logo', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/sponser-2.png')
                    ),
                    array(
                        array('name' => 'company_logo', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/sponser-3.png')
                    ),
                    array(
                        array('name' => 'company_logo', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/sponser-4.png')
                    ),
                    array(
                        array('name' => 'company_logo', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/sponser-5.png')
                    )
                )

            ),

            array(
                'name'      => 'hero_btn',
                'label'     => 'Section Button',
                'type'      => 'link',
                'text'      => 'GET THE BOOK!'
            )


    ),
    'settings'  => array(
        array(
            'name' => 'author_font_size',
            'label' => 'Author Font Size',
            'append' => 'px',
            'value' => '26',
        ),
        array(
            'name' => 'author_font_weight',
            'label' => 'Author Font Weight',
            'type' => 'select',
            'value' => '500',
            'options' => array(
                '300' => '300',
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),
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
            'name' => 'Title_font_size',
            'label' => 'Title Font Size',
            'append' => 'px',
            'value' => '52',
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
            'value' => 'capitalize',
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

        array(
            'name' => 'Title_before_font_size',
            'label' => 'Title Before Font Size',
            'append' => 'px',
            'value' => '16',
        ),
        array(
            'name' => 'title_before_font_weight',
            'label' => 'Title Before Font Weight',
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
                '300' => '300',
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
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
            'name' => 'animation_media',
            'label' => 'media Animation',
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
    ),
    'styles'    => array(
        array(
            'name' => 'section_bg',
            'label' => 'Section Background Color',
            'type' => 'colorpicker',
            'value' => '#fff004',
        ),
        array(
            'name' => 'author_color',
            'label' => 'Author Color',
            'type' => 'colorpicker',
            'value' => '#4bb93e',
        ),
        array(
            'name' => 'title_before_color',
            'label' => 'Title Before Text',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),
        array(
            'name' => 'title_before_highlight_color',
            'label' => 'Title Before Highlight',
            'type' => 'colorpicker',
            'value' => '#4bb93e',
        ),

        array(
            'name' => 'title_color',
            'label' => 'Title Text',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),

        array(
            'name' => 'desc_color',
            'label' => 'Description Text',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),

        array(
            'name' => 'btn_color',
            'label' => 'Button Text',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),
        array(
            'name' => 'btn_bg_color',
            'label' => 'Button Background',
            'type' => 'colorpicker',
            'value' => '#4bb93e',
        ),
    )
);