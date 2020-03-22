<?php
return array(
    'slug'      => 'feature-15',
    'groups'    => array('features'),
    'type'    => 'new',
    'contents'  => array(
        array(
            'name'  => 'section_title',
            'label' => 'Section Title',
            'value' => 'Our Services'
        ),
        array(
            'name'  => 'section_desc',
            'label' => 'Section Description',
            'type'  => 'textarea',
            'value' => 'Proin ac lobortis arcu, a vestibulum augue. Vivamus ipsum neque, facilisis vel<br/> mollis vitae, mollis nec ante. Quisque aliquam dictum condim.'
        ),
        array(
            'name'      => 'services',
            'type'      => 'repeater',
            'fields'    => array(
                array(
                    array('name' => 'media_image', 'label'  => 'Image', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/item-1.png'),
                    array('name' => 'service_title', 'label' => 'Item Title', 'value' => 'Scholarship Facility'),
                    array('name' => 'service_desc', 'label' => 'Item Description', 'type' => 'textarea', 'value' => 'The precursor to The Secret, The<br/> Power of Positive Thinking has<br/> helped millions of men.' )
                ),
                array(
                    array('name' => 'media_image', 'label'  => 'Image', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/item-2.png'),
                    array('name' => 'service_title', 'label' => 'Item Title', 'value' => 'Skilled Lecturers'),
                    array('name' => 'service_desc', 'label' => 'Item Description', 'type' => 'textarea', 'value' => 'The precursor to The Secret, The<br/> Power of Positive Thinking has<br/> helped millions of men.' )
                ),
                array(
                    array('name' => 'media_image', 'label'  => 'Image', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/item-3.png'),
                    array('name' => 'service_title', 'label' => 'Item Title', 'value' => 'Online & Offline courses'),
                    array('name' => 'service_desc', 'label' => 'Item Description', 'type' => 'textarea', 'value' => 'The precursor to The Secret, The<br/> Power of Positive Thinking has<br/> helped millions of men.' )
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
            'name' => 'section_title_size',
            'label' => 'Section Font Size',
            'append' => 'px',
            'value' => '52',
        ),
        array(
            'name' => 'section_description_size',
            'label' => 'Description Font Size',
            'append' => 'px',
            'value' => '18',
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
            'name' => 'section_title_transformation',
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

        array('label' => 'Service Item', 'type' => 'divider'),
        array(
            'name' => 'item_font_size',
            'label' => 'item Title Font Size',
            'append' => 'px',
            'value' => '32',
        ),
        array(
            'name' => 'item_font_weight',
            'label' => 'Item Title Font Weight',
            'type' => 'select',
            'value' => '700',
            'options' => array(
                '300' => '300',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
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

        array(
            'name' => 'item_desc_font',
            'label' => 'Description Font Size',
            'append' => 'px',
            'value' => '18',
        ),
        array(
            'name' => 'item_desc_font_weight',
            'label' => 'Description Font Weight',
            'type' => 'select',
            'value' => '300',
            'options' => array(
                '300' => '300',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),

        array(
            'name' => 'content_animation',
            'label' => 'Content Animation',
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


    ),
    'styles'    => array(
        array(
            'name' => 'bg_color',
            'label' => 'Background Color',
            'type' => 'colorpicker',
            'value' => '#ffffff',
        ),
        array(
            'name' => 'section_title_color',
            'label' => 'Section Font Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),
        array(
            'name' => 'section_desc_color',
            'label' => 'Section Desc Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),

        array(
            'name' => 'item_title_color',
            'label' => 'Item Title Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),
        array(
            'name' => 'item_desc_color',
            'label' => 'Item Description Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),
    )
);