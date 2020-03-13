<?php

return array(
    'slug' => 'blog-5',
    'groups' => array('blogs'),
    // Fields - $contents available on view file to access the option
    'contents' => array(
        array(
            'name' => 'title',
            'value' => 'Legal Advice',
        ),
        array(
            'name' => 'category',
            'type' => 'category',
        ),
        array(
            'name' => 'total_posts',
            'label' => 'Total Posts',
            'value' => '2',
        ),
        array(
            'name' => 'text_limit',
            'label' => 'Excerpt Length',
            'value' => 20,
        ),
        array(
            'name' => 'readmore_text',
            'label' => 'Read More',
            'value' => 'Read More',
        ),
    ),
    'settings' => array(
        array('label' => 'Heading', 'type' => 'divider'),
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
            'name' => 'section_title_size',
            'label' => 'Title Size',
            'append' => 'px',
            'value' => '40',
        ),
        array(
            'name' => 'section_title_font_weight',
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
            'value' => 'inherit',
            'options' => array(
                'inherit' => 'Default',
                'lowercase' => 'Lowercase',
                'uppercase' => 'Uppercase',
                'capitalize' => 'Capitalized',
            ),
        ),

        array(
            'name' => 'title_alignment',
            'label' => 'Title Alignment',
            'type' => 'select',
            'value' => 'center',
            'options' => array(
                'left' => 'Left',
                'center' => 'Center',
                'right' => 'Right',
                'justify' => 'Justify',
            ),
        ),
        array(
            'name' => 'title_animation',
            'label' => 'Animation',
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

        array('label' => 'Items', 'type' => 'divider'),

        array(
            'name' => 'item_title_size',
            'label' => 'Title Size',
            'append' => 'px',
            'value' => '22',
        ),
        array(
            'name' => 'item_font_weight',
            'label' => 'Item Font Weight',
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
            'name' => 'item_desc_size',
            'label' => 'Item Desc Size',
            'append' => 'px',
            'value' => '16',
        ),

        array(
            'name' => 'item_title_transformation',
            'label' => 'Transformation',
            'type' => 'select',
            'value' => 'uppercase',
            'options' => array(
                'inherit' => 'Default',
                'lowercase' => 'Lowercase',
                'uppercase' => 'Uppercase',
                'capitalize' => 'Capitalized',
            ),
        ),

        array(
            'name' => 'item_animation',
            'label' => 'Animation Item',
            'type' => 'select',
            'value' => 'fadeInUp',
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

        array('label' => 'Button', 'type' => 'divider'),

        array(
            'name' => 'item_btn_size',
            'label' => 'Title Size',
            'append' => 'px',
            'value' => '16',
        ),
        array(
            'name' => 'item_btn_font_weight',
            'label' => 'Item Font Weight',
            'type' => 'select',
            'value' => '400',
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
            'value' => '#f1f1f1',
        ),
        array(
            'name' => 'section_title_color',
            'label' => 'Section Title Color',
            'type' => 'colorpicker',
            'value' => '#132a46',
        ),
        array('label' => 'Attorney', 'type' => 'divider'), // Divider - Text
        array(
            'name' => 'title_color',
            'label' => 'Title Color',
            'type' => 'colorpicker',
            'value' => '#132a46',
        ),
        array(
            'name' => 'designation_color',
            'label' => 'Designation Color',
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
            'name' => 'counter_num',
            'label' => 'Item Count Color',
            'type' => 'colorpicker',
            'value' => '#dd5346',
        ),
        array(
            'name' => 'btn_bg',
            'label' => 'Button Background',
            'type' => 'colorpicker',
            'value' => '#29cb8b',
        ),
        array(
            'name' => 'btn_text',
            'label' => 'Button Text',
            'type' => 'colorpicker',
            'value' => '#ffffff',
        ),
        array(
            'name' => 'btn_bg_hover',
            'label' => 'Button Hover Background',
            'type' => 'colorpicker',
            'value' => '#ffffff',
        ),
        array(
            'name' => 'btn_text_hover',
            'label' => 'Button Hover Text',
            'type' => 'colorpicker',
            'value' => '#dd5346',
        ),
    ),
);
