<?php

return array(

    'slug'     => 'contact-2', // Must be unique and singular
    'groups'   => array('contact'), // Blocks group for filter and plural

    // Fields - $contents available on view file to access the option
    'contents' => array(

        array(
            'name'  => 'title',
            'value' => 'Join The Community',
        ),
        array(
            'name'  => 'description',
            'type'  => 'textarea',
            'value' => 'We waited until we could do it right. Then we did! Instead of creating a carbon copy. This <br>template has enough pages and blocks to let you create an awesome landing page. ',
        ),

        array('label' => 'Subscribe Shortcode', 'type' => 'divider'), // Divider - Text

        array(
            'name'  => 'form',
            'label' => 'WPFrom Shortcode',
            'type'  => 'textarea',
            'value' => '',
        ),
    ),

    // Settings - $settings available on view file to access the option
    'settings' => array(
        array('label' => 'Heading', 'type' => 'divider'), // Divider - Text
        array(
            'name'    => 'heading_type',
            'label'   => 'Heading Type',
            'type'    => 'select',
            'value'   => 'h1',
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
            'name'   => 'section_title_size',
            'label'  => 'Title Size',
            'append' => 'px',
            'value'  => '@section_title_size',
        ),
        array(
            'name'  => 'title_font',
            'type'  => 'font',
            'label' => 'Title Fonts',
        ),
        array(
            'name'    => 'title_font_weight',
            'label'   => 'Font Weight',
            'type'    => 'select',
            'value'   => '700',
            'options' => array(
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),
        array(
            'name'    => 'title_transformation',
            'label'   => 'Title Transformation',
            'type'    => 'select',
            'value'   => 'inherit',
            'options' => array(
                'inherit'    => 'Default',
                'lowercase'  => 'Lowercase',
                'uppercase'  => 'Uppercase',
                'capitalize' => 'Capitalized',
            ),
        ),

        array(
            'name'    => 'title_alignment',
            'label'   => 'Title Alignment',
            'type'    => 'select',
            'value'   => 'center',
            'options' => array(
                'left'    => 'Left',
                'center'  => 'Center',
                'right'   => 'Right',
                'justify' => 'Justify',
            ),
        ),

        array(
            'name'   => 'desc_size',
            'label'  => 'Desc Size',
            'append' => 'px',
            'value'  => '18',
        ),
        array(
            'name'    => 'content_alignment',
            'label'   => 'Content Alignment',
            'type'    => 'select',
            'value'   => 'center',
            'options' => array(
                'left'    => 'Left',
                'center'  => 'Center',
                'right'   => 'Right',
                'justify' => 'Justify',
            ),
        ),
        array(
            'name'    => 'title_animation',
            'label'   => 'Animation',
            'type'    => 'select',
            'value'   => '0',
            'options' => array(
                '0'                   => 'None',
                'fade'                => 'Fade',
                'scale-up'            => 'Scale Up',
                'scale-down'          => 'Scale Down',
                'slide-top-small'     => 'Slide Top Small',
                'slide-bottom-small'  => 'Slide Bottom Small',
                'slide-left-small'    => 'Slide Left Small',
                'slide-right-small'   => 'Slide Right Small',
                'slide-top-medium'    => 'Slide Top Medium',
                'slide-bottom-medium' => 'Slide Bottom Medium',
                'slide-left-medium'   => 'Slide Left Medium',
                'slide-right-medium'  => 'Slide Right Medium',
                'slide-top'           => 'Slide Top 100%',
                'slide-bottom'        => 'Slide Bottom 100%',
                'slide-left'          => 'Slide Left 100%',
                'slide-right'         => 'Slide Right 100%',

            ),

        ),   
        array(
            'name'   => 'form_border_radius',
            'label'  => 'Border Radius',
            'append' => 'px',
            'value'  => '5',
        ),
        array(
            'name'    => 'form_transformation',
            'label'   => 'Transformation',
            'type'    => 'select',
            'value'   => 'inherit',
            'options' => array(
                'inherit'    => 'Default',
                'lowercase'  => 'Lowercase',
                'uppercase'  => 'Uppercase',
                'capitalize' => 'Capitalized',
            ),
        ),
        array(
            'name'    => 'form_animation',
            'label'   => 'From Animation ',
            'type'    => 'select',
            'value'   => '0',
            'options' => array(
                '0'                   => 'None',
                'fade'                => 'Fade',
                'scale-up'            => 'Scale Up',
                'scale-down'          => 'Scale Down',
                'slide-top-small'     => 'Slide Top Small',
                'slide-bottom-small'  => 'Slide Bottom Small',
                'slide-left-small'    => 'Slide Left Small',
                'slide-right-small'   => 'Slide Right Small',
                'slide-top-medium'    => 'Slide Top Medium',
                'slide-bottom-medium' => 'Slide Bottom Medium',
                'slide-left-medium'   => 'Slide Left Medium',
                'slide-right-medium'  => 'Slide Right Medium',
                'slide-top'           => 'Slide Top 100%',
                'slide-bottom'        => 'Slide Bottom 100%',
                'slide-left'          => 'Slide Left 100%',
                'slide-right'         => 'Slide Right 100%',

            ),
        ),
    ),

    // Fields - $styles available on view file to access the option
    'styles'   => array(
        array(
            'name'  => 'bg_image',
            'label' => 'Background',
            'type'  => 'image',
            'value' => '',
        ),

        array(
            'name'    => 'bg_image_size',
            'label'   => 'Size',
            'type'    => 'select',
            'value'   => 'uk-background-contain',
            'options' => array(
                'uk-background-contain' => 'Contain',
                'uk-background-cover'   => 'Cover',
            ),
        ),

        array(
            'name'  => 'bg_color',
            'label' => 'Bg Color',
            'type'  => 'colorpicker',
            'value' => '#ffffff',
        ),

        array(
            'name'  => 'overlay_color',
            'label' => 'Overlay Color',
            'type'  => 'colorpicker',
            'value' => 'rgba(255,255,255,0)',
        ),

        array('label' => 'Title', 'type' => 'divider'), // Divider - Text
        array(
            'name'  => 'title_color',
            'label' => 'Title Color',
            'type'  => 'colorpicker',
            'value' => '#333',
        ),
        array(
            'name'  => 'desc_color',
            'label' => 'Desc Color',
            'type'  => 'colorpicker',
            'value' => 'rgba(38, 59, 94, 0.54);
            ',
        ),

        array('label' => 'Form', 'type' => 'divider'), // Divider - Text

        array(
            'name'  => 'submit_text_color',
            'label' => 'Submit Text Color',
            'type'  => 'colorpicker',
            'value' => '#fff',
        ),
        array(
            'name'  => 'submit_bg_color',
            'label' => 'Submit Bg Color',
            'type'  => 'colorpicker',
            'value' => '#F2994A',
        ),
        array(
            'name'  => 'submit_hover_text_color',
            'label' => 'Submit Hover Text Color',
            'type'  => 'colorpicker',
            'value' => '#fff',
        ),
        array(
            'name'  => 'submit_hover_bg_color',
            'label' => 'Submit Hover Bg Color',
            'type'  => 'colorpicker',
            'value' => '#eb6f02',
        ),
        array(
            'name'  => 'border_color',
            'label' => 'Border Color',
            'type'  => 'colorpicker',
            'value' => '#ddd',
        ),
        array(
            'name'  => 'border_hover_color',
            'label' => 'Border Hover Color',
            'type'  => 'colorpicker',
            'value' => '#F2994A',
        ),
        array(
            'name'  => 'placeholder_color',
            'label' => 'Placholder Color',
            'type'  => 'colorpicker',
            'value' => '#ddd',
        ),
    ),
);
