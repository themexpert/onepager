<?php

return array(
    'slug'     => 'features-7',
    'groups'   => array('features'),

    'contents' => array(
        array(
            'name'  => 'title',
            'value' => 'We Offer Your Needs',
        ),
        array(
            'name'  => 'description',
            'type'  => 'textarea',
            'value' => "So delightful up dissimilar by unreserved it connection frequently. Do an high room so in paid. Up on cousin ye dinner should in. Sex stood tried walls manor truth shy and three his. Their to years so child truth. Honoured peculiar families sensible up likewise by on in.",
        ),
        array('label' => 'Items', 'type' => 'divider'), // Divider - Text

        array(
            'name'   => 'items',
            'type'   => 'repeater',
            'fields' => array(
                array(
                    array('name' => 'media', 'type' => 'media', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2019/08/responsive-icon.png'),
                    array('name' => 'title', 'value' => 'Web Design'),
                    array('name' => 'desc', 'value' => 'Written enquire painful to offices forming it. Then so does over sent dull. Likewise offended humour mrs fat trifling answered.'),
                    array('name' => 'link', 'placeholder' => home_url()),
                ),
                array(
                    array('name' => 'media', 'type' => 'media', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2019/08/service-cion.png'),
                    array('name' => 'title', 'value' => 'Mobile App'),
                    array('name' => 'desc', 'value' => 'Written enquire painful to offices forming it. Then so does over sent dull. Likewise offended humour mrs fat trifling answered.'),
                    array('name' => 'link', 'placeholder' => home_url()),
                ),
                array(
                    array('name' => 'media', 'type' => 'media', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2019/08/graphic-design-cion.png'),
                    array('name' => 'title', 'value' => 'Digital Marketing'),
                    array('name' => 'desc', 'value' => 'Written enquire painful to offices forming it. Then so does over sent dull. Likewise offended humour mrs fat trifling answered.'),
                    array('name' => 'link', 'placeholder' => home_url()),
                ),
                array(
                    array('name' => 'media', 'type' => 'media', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2019/08/group-icon.png'),
                    array('name' => 'title', 'value' => 'Branding Package'),
                    array('name' => 'desc', 'value' => 'Written enquire painful to offices forming it. Then so does over sent dull. Likewise offended humour mrs fat trifling answered.'),
                    array('name' => 'link', 'placeholder' => home_url()),
                ),
            ),

        ),
    ),

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
            'value'   => 'left',
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
            'value'  => '16',
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

        array('label' => 'Items Settings', 'type' => 'divider'), // Divider - Text

        array(
            'name'   => 'item_title_size',
            'label'  => 'Title Size',
            'append' => 'px',
            'value'  => '22',
        ),

        array(
            'name'   => 'item_desc_size',
            'label'  => 'Desc Size',
            'append' => 'px',
            'value'  => '16',
        ),

        array(
            'name'    => 'item_alignment',
            'label'   => 'Item Alignment',
            'type'    => 'select',
            'value'   => 'left',
            'options' => array(
                'left'    => 'Left',
                'center'  => 'Center',
                'right'   => 'Right',
            ),
        ),

        array(
            'name'    => 'items_animation',
            'label'   => 'Items Animation ',
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

    'styles'   => array(
        array(
            'name'  => 'bg_image',
            'label' => 'Background',
            'type'  => 'image',
            'value' => '',
        ),

        array(
            'name'  => 'overlay_color',
            'label' => 'Overlay Color',
            'type'  => 'colorpicker',
            'value' => 'rgba(255,255,255,0)',
        ),
        array(
            'name'  => 'bg_color',
            'label' => 'Background Color',
            'type'  => 'colorpicker',
            'value' => '#fff',
        ),

        array('label' => 'Title Style', 'type' => 'divider'), // Divider - Text
        array(
            'name'  => 'title_color',
            'label' => 'Title Color',
            'type'  => 'colorpicker',
            'value' => '#263B5E',

        ),

        array(
            'name'  => 'desc_color',
            'label' => 'Desc Color',
            'type'  => 'colorpicker',
            'value' => 'rgba(38, 59, 94, 0.54)',

        ),

        array('label' => 'Items Style', 'type' => 'divider'), // Divider - Text

        array(
            'name'  => 'item_title_color',
            'label' => 'Item Title Color',
            'type'  => 'colorpicker',
            'value' => '#263B5E',
        ),

        array(
            'name'  => 'item_title_link_color',
            'label' => 'Item Title Link Color',
            'type'  => 'colorpicker',
            'value' => '#000',
        ),

        array(
            'name'  => 'item_desc_color',
            'label' => 'Item Desc Color',
            'type'  => 'colorpicker',
            'value' => 'rgba(38, 59, 94, 0.54)',
        ),

    ),
);
