<?php

return array(
    'slug' => 'features-8',
    'groups' => array('features'),

    'contents' => array(
        array(
            'name' => 'title',
            'type' => 'editor',
            'value' => 'Lawyers in Melbourne can be complex and, at times, intimidating. From business to family law, our legal experts make complicated decisions easy to understand.',
        ),
        array(
            'name' => 'sub_heading',
            'type' => 'repeater',
            'fields' => array(
                array(
                    array('name' => 'heading', 'value' => '60'),
                    array('name' => 'tagline', 'value' => 'K Trusted by 60,000 clients'),
                ),
                array(
                    array('name' => 'heading', 'value' => '30'),
                    array('name' => 'tagline', 'value' => '+ Years experience'),
                ),
            ),
        ),
        array(
            'name' => 'list_items',
            'type' => 'repeater',
            'fields' => array(
                array(
                    array('name' => 'title', 'value' => 'Trusted by 1000s of clients with over 99% success rate'),
                    array('name' => 'media', 'type' => 'icon', 'size' => 'fa-2x', 'value' => 'fa fa-check fa-2x'),
                ),
                array(
                    array('name' => 'title', 'value' => '30+ Years experience'),
                    array('name' => 'media', 'type' => 'icon', 'size' => 'fa-2x', 'value' => 'fa fa-check fa-2x'),
                ),
                array(
                    array('name' => 'title', 'value' => 'Family Law, Criminal Law, Busines Law, Conveyancing & more'),
                    array('name' => 'media', 'type' => 'icon', 'size' => 'fa-2x', 'value' => 'fa fa-check fa-2x'),
                ),
            ),
        ),
        array('name' => 'link', 'type' => 'link', 'text' => 'CALL (02) 8084 2764'),
        array('name' => 'link_2', 'type' => 'link', 'text' => 'Free Consultation'),
    ),
    'settings' => array(
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

        array('label' => 'Content', 'type' => 'divider'), // Divider - Text

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
            'value' => '40',
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

        array('label' => 'Sub Heading', 'type' => 'divider'), // Divider - Text
        array(
            'name' => 'subheading_bigger_size',
            'label' => 'Big Font Size',
            'append' => 'px',
            'value' => '70',
        ),

        array(
            'name' => 'subheading_smaller_size',
            'label' => 'Small Font Size',
            'append' => 'px',
            'value' => '26',
        ),

        array(
            'name' => 'subheading_font_weight',
            'label' => 'Sub-Heading Font Weight',
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
            'name' => 'subheading_transformation',
            'label' => 'Sub-Heading Transformation',
            'type' => 'select',
            'value' => '0',
            'options' => array(
                '0' => 'Default',
                'lowercase' => 'Lowercase',
                'uppercase' => 'Uppercase',
                'capitalize' => 'Capitalized',
            ),
        ),

        array('label' => 'Items', 'type' => 'divider'), // Divider - Text

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
            'name' => 'item_title_size',
            'label' => 'Item Font Size',
            'append' => 'px',
            'value' => '24',
        ),
        array(
            'name' => 'item_title_transformation',
            'label' => 'Item Title Transformation',
            'type' => 'select',
            'value' => 'inherit',
            'options' => array(
                'inherit' => 'Default',
                'lowercase' => 'Lowercase',
                'uppercase' => 'Uppercase',
                'capitalize' => 'Capitalized',
            ),
        ),

    ),

    'styles' => array(
        array(
            'name' => 'bg_image',
            'label' => 'Image',
            'type' => 'image',
        ),
        array(
            'name' => 'bg_parallax',
            'type' => 'switch',
            'label' => 'Parallax Background',
        ),
        array(
            'name' => 'bg_size',
            'label' => 'Background Size',
            'type' => 'select',
            'value' => 'inherit',
            'options' => array(
                'inherit' => 'Inherit',
                'auto' => 'Auto',
                'contain' => 'Contain',
                'cover' => 'Cover',
            ),
        ),
        array(
            'name' => 'bg_color',
            'label' => 'Background Color',
            'type' => 'colorpicker',
            'value' => '#f1f1f1',
        ),

        array('label' => 'Title', 'type' => 'divider'), // Divider - Text

        array(
            'name' => 'title_color',
            'label' => 'Title Color',
            'type' => 'colorpicker',
            'value' => '#132a46',

        ),
        array(
            'name' => 'sub_heading_primary',
            'label' => 'Counter Primary Color',
            'type' => 'colorpicker',
            'value' => '#29cb8b',
        ),

        array(
            'name' => 'sub_heading_secondary',
            'label' => 'Counter Secondary Color',
            'type' => 'colorpicker',
            'value' => '#dd5346',
        ),

        array('label' => 'List Item', 'type' => 'divider'), // Divider - Text

        array(
            'name' => 'icon_color',
            'label' => 'Icon Color',
            'type' => 'colorpicker',
            'value' => '#132a46',
        ),

        array(
            'name' => 'item_text_color',
            'label' => 'Text Color',
            'type' => 'colorpicker',
            'value' => '#132a46',

        ),
        array('label' => 'Button', 'type' => 'divider'), // Divider - Text

        array(
            'name' => 'btn_bg1',
            'label' => 'First Button BG',
            'type' => 'colorpicker',
            'value' => '#29cb8b',
        ),
        array(
            'name' => 'btn_text1',
            'label' => 'First Button Text',
            'type' => 'colorpicker',
            'value' => '#ffffff',
        ),
        array(
            'name' => 'btn_bg2',
            'label' => 'Second Button BG',
            'type' => 'colorpicker',
            'value' => '#fff',
        ),
        array(
            'name' => 'btn_text2',
            'label' => 'Second Button Text',
            'type' => 'colorpicker',
            'value' => '#dd5346',
        ),

    ),

);
