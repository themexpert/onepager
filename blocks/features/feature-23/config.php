<?php

return array(
    'slug'      => 'feature-23',
    'tag'      => 'new',
    'groups'    => array('features'),
    'contents'  => array(
        array(
            'name'  => 'background_title',
            'label' => 'Background Title',
            'value' => 'Reasons 01'
        ),
        array(
            'name'  => 'section-image',
            'label' => 'Right Image',
            'type'  => 'image',
            'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/reason-book-side.png'
        ),
        array(
            'name'  => 'section_title',
            'label' => 'Section Title',
            'value' => '8 Reasons to read this book'
        ),
        array(
            'name'  => 'section_desc',
            'label' => 'Section Description',
            'type'  => 'textarea',
            'value' => 'The precursor to The Secret, The Power of Positive Thinking has helped millions of men and women to achieve fulfillment in their lives. In this phenomenal bestseller, Dr. Peale demonstrates the power of faith in action. With the practical techniques outlined in this book, you can energize your life -- and give yourself the initiative needed to carry out your ambitions and hopes.'
        ),
        array(
            'name'  => "feature_title",
            'label' => "Features Title",
            'value' => "You\'ll learn how to:"
        ),
        array(
            'name'      => 'features',
            'labels'    => 'Feature Items',
            'type'      => 'repeater',
            'fields'    => array(
                array(
                    array('name' => 'feature_text', 'label' => 'Featured Item Text', 'type' => 'text', 'value'  => 'Believe in yourself and in everything you do')
                ),
                array(
                    array('name' => 'feature_text', 'label' => 'Featured Item Text', 'type' => 'text', 'value'  => 'Develop the power to reach your goals')
                ),
                array(
                    array('name' => 'feature_text', 'label' => 'Featured Item Text', 'type' => 'text', 'value'  => 'Break the worry habit and achieve a relaxed life')
                ),
                array(
                    array('name' => 'feature_text', 'label' => 'Featured Item Text', 'type' => 'text', 'value'  => 'Improve your personal and professional relationships')
                ),
                array(
                    array('name' => 'feature_text', 'label' => 'Featured Item Text', 'type' => 'text', 'value'  => 'Assume control over your circumstances')
                ),
                array(
                    array('name' => 'feature_text', 'label' => 'Featured Item Text', 'type' => 'text', 'value'  => 'Be kind to yourself')
                )
            ),
        ),
        array('name'    => 'feature_icon', 'label' => 'Feature Icon', 'type' => 'icon','icon-size' => 'fa fa-2x', 'value' => 'fa fa-check fa-2x'),
    ),
    'settings'  => array(
        array(
            'name' => 'section_bg_font_size',
            'label' => 'Section Font Size',
            'append' => 'px',
            'value' => '120',
        ),
        array(
            'name' => 'section_bg_font_weight',
            'label' => 'Section Font Weight',
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
            'name' => 'title_font_size',
            'label' => 'Title Font Size',
            'append' => 'px',
            'value' => '46',
        ),
        array(
            'name' => 'title_font_weight',
            'label' => 'Title Font Weight',
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
            'value' => 'lowercase',
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

        array(
            'name' => 'list_font_size',
            'label' => 'List Font Size',
            'append' => 'px',
            'value' => '18',
        ),
        array(
            'name' => 'list_title_font_weight',
            'label' => 'List Heading Font Weight',
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
            'name' => 'list_font_weight',
            'label' => 'List Font Weight',
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
            'label' => 'Section Background',
            'type' => 'colorpicker',
            'value' => '#4bb93e',
        ),
        array(
            'name' => 'section_bg_title',
            'label' => 'Section Title',
            'type' => 'colorpicker',
            'value' => '#ffffff',
        ),
        array(
            'name' => 'section_title',
            'label' => 'Section Title',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),

        array(
            'name' => 'section_desc',
            'label' => 'Section Description',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),

        array(
            'name' => 'section_list_title',
            'label' => 'Section List Title',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),

        array(
            'name' => 'section_list',
            'label' => 'Section List text',
            'type' => 'colorpicker',
            'value' => '#ffffff',
        ),

        
    )
);

?>