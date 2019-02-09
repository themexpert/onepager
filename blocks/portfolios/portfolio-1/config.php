<?php

return [
    'slug' => 'portfolio-1', // Must be unique
    'groups' => ['portfolios'], // Blocks group for filter

    // Fields - $contents available on view file to access the option
    'contents' => [
        ['name' => 'title', 'value' => 'Our Works'],
        ['name' => 'My Font', 'type' => 'font', 'value' => '696'],
        ['name' => 'My Date', 'type' => 'date', 'value' => '696'],
        [
            'name' => 'description',
            'type' => 'textarea',
            'value' => 'A fool thinks himself to be wise, but a wise man knows himself to be a fool.'
        ],

        [
            'name' => 'portfolios',
            'type' => 'repeater',
            'fields' => [
                [
                    ['name' => 'title', 'value' => 'Unity'],
                    ['name' => 'description', 'type' => 'textarea', 'value' => 'Onepage Joomla Template'],
                    ['name' => 'thumb', 'type' => 'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/images/1-thumb.jpg'],
                    ['name' => 'image', 'type' => 'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/images/1.jpg'],
                    ['name' => 'link', 'placeholder' => home_url()],
                    ['name' => 'target', 'label' => 'open in new window', 'type' => 'switch'],
                ],
                [
                    ['name' => 'title', 'value' => 'BizCorp'],
                    ['name' => 'description', 'type' => 'textarea', 'value' => 'Onepage Joomla Template'],
                    ['name' => 'thumb', 'type' => 'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/images/2-thumb.jpg'],
                    ['name' => 'image', 'type' => 'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/images/2.jpg'],
                    ['name' => 'link', 'placeholder' => home_url()],
                    ['name' => 'target', 'label' => 'open in new window', 'type' => 'switch'],
                ],
                [
                    ['name' => 'title', 'value' => 'Eventx'],
                    ['name' => 'description', 'type' => 'textarea', 'value' => 'Event Template for Joomla'],
                    ['name' => 'thumb', 'type' => 'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/images/3-thumb.jpg'],
                    ['name' => 'image', 'type' => 'image', 'value' => 'http://s3.amazonaws.com/quantum-assets/images/3.jpg'],
                    ['name' => 'link', 'placeholder' => home_url()],
                    ['name' => 'target', 'label' => 'open in new window', 'type' => 'switch'],
                ]
            ]
        ]
    ],

    // Settings - $settings available on view file to access the option
    'settings' => [
        ['label' => 'Heading', 'type' => 'divider'], // Divider - Text
        [
            'name' => 'title_size',
            'label' => 'Title Size',
            'append' => 'px',
            'value' => '@section_title_size'
        ],
        [
            'name' => 'title_transformation',
            'label' => 'Title Transformation',
            'type' => 'select',
            'value' => 'inherit',
            'options' => [
                'inherit' => 'Default',
                'lowercase' => 'Lowercase',
                'uppercase' => 'Uppercase',
                'capitalize' => 'Capitalized'
            ]
        ],

        [
            'name' => 'title_alignment',
            'label' => 'Title Alignment',
            'type' => 'select',
            'value' => 'center',
            'options' => [
                'left' => 'Left',
                'center' => 'Center',
                'right' => 'Right',
                'justify' => 'Justify',
            ]
        ],

        [
            'name' => 'desc_size',
            'label' => 'Desc Size',
            'append' => 'px',
            'value' => '18'
        ],

        [
            'name' => 'title_animation',
            'label' => 'Animation',
            'type' => 'select',
            'value' => '0',
            'options' => [
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
                'slide-right' => 'Slide Right 100%'
            ],
        ],

        ['label' => 'Items', 'type' => 'divider'], // Divider - Text

        [
            'name' => 'overlay_animation',
            'label' => 'Overlay Animation',
            'type' => 'select',
            'value' => 'scale',
            'options' => [
                'slide-top' => 'Slide Top',
                'slide-bottom' => 'Slide Bottom',
                'slide-left' => 'Slide Left',
                'slide-right' => 'Slide RIght',
                'fade' => 'Fade',
                'scale' => 'Scale',
                'spin' => 'Spin',
            ]
        ],
        [
            'name' => 'items_columns',
            'label' => 'Columns',
            'type' => 'select',
            'value' => '3',
            'options' => [
                '2' => '2',
                '3' => '3',
                '4' => '4',
            ],
        ],

        [
            'name' => 'lightbox_animation',
            'label' => 'LightBox Animation',
            'type' => 'select',
            'value' => 'scale',
            'options' => [
                'fade' => 'Fade',
                'scale' => 'Scale',
                'slide' => 'Slide',
            ]
        ],
    ],

    'styles' => [
        [
            'name' => 'bg_color',
            'label' => 'Background Color',
            'type' => 'colorpicker',
            'value' => '#fff'
        ],

        ['label' => 'Heading', 'type' => 'divider'], // Divider - Text
        [
            'name' => 'title_color',
            'label' => 'Title Color',
            'type' => 'colorpicker',
            'value' => '#323232'
        ],

        [
            'name' => 'desc_color',
            'label' => 'Desc Color',
            'type' => 'colorpicker',
            'value' => '#323232'
        ],

        ['label' => 'Items', 'type' => 'divider'], // Divider - Text

        [
            'name' => 'overlay_color',
            'label' => 'Overlay Color',
            'type' => 'colorpicker',
            'value' => 'rgba(0, 0, 0, 0.5)'
        ],

        [
            'name' => 'icon_color',
            'label' => 'Icon Color',
            'type' => 'colorpicker',
            'value' => '#fff'
        ],
        [
            'name' => 'icon_bg',
            'label' => 'Icon Background',
            'type' => 'colorpicker',
            'value' => '@color.primary'
        ],
    ],

    // 'assets' => function( $path ){
    //   // Local file
    //   Onepager::addStyle('portfolio-1', $path . '/style.css');
    // }
];
