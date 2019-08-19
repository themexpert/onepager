<?php

return array(

    'slug'     => 'coming-soon-02', // Must be unique and singular
    'groups'   => array('Coming Soon'), // Blocks group for filter and plural

    // Fields - $contents available on view file to access the option
    'contents' => array(
        array(
            'name'  => 'logo',
            'label' => 'Logo',
            'type'  => 'image',
            'value' => 'https://demo.wponepager.com/wp-content/uploads/2019/08/coming-soon-logo-2.png',
        ),
        array(
            'name'  => 'title',
            'value' => 'Website Under Construction',
        ),
        array(
            'name'  => 'desc',
            'type'  => 'editor',
            'value' => "Our website is under construction, We'll be here soon with new awesome site",
        ),
    ),
    'settings' => array(
        array('label' => 'Logo', 'type' => 'divider'), // Divider - Text
        array(
            'name'   => 'logo_size',
            'label'  => 'Logo Size',
            'append' => 'px',
            'value'  => '260',
        ),
        array(
            'name'    => 'logo_animation',
            'label'   => 'Logo Animation',
            'type'    => 'select',
            'value'   => '0',
            'options' => array(
                '0'                   => 'None',
                'fade'                => 'Fade',
                'scale-up'            => 'Scale Up',
                'scale-down'          => 'Scale Down',
                'slide-top-medium'    => 'Slide Top Medium',
                'slide-bottom-medium' => 'Slide Bottom Medium',
                'slide-left-medium'   => 'Slide Left Medium',
                'slide-right-medium'  => 'Slide Right Medium',

            ),
        ),
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

        array('label' => 'Description', 'type' => 'divider'), // Divider - Text
        array(
            'name'   => 'desc_size',
            'label'  => 'Desc Size',
            'append' => 'px',
            'value'  => '18',
        ),

        array(
            'name'    => 'content_animation',
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

    ),

    // Fields - $styles available on view file to access the option
    'styles'   => array(
        array(
            'name'  => 'bg_image',
            'label' => 'Background',
            'type'  => 'image',
            'value' => 'https://images.pexels.com/photos/880873/pexels-photo-880873.jpeg?cs=srgb&dl=bay-boats-city-880873.jpg&fm=jpg',
        ),
        array(
            'name'  => 'overlay_color',
            'label' => 'Overlay Color',
            'type'  => 'colorpicker',
            'value' => 'rgba(0,0,0,0.53)',
        ),
        array('label' => 'Content', 'type' => 'divider'), // Divider - Text

        array(
            'name'  => 'title_color',
            'label' => 'Title Color',
            'type'  => 'colorpicker',
            'value' => '#f59c1f',
        ),
        array(
            'name'  => 'desc_color',
            'label' => 'Content Color',
            'type'  => 'colorpicker',
            'value' => '#f59c1f',
        ),

    ),
);
