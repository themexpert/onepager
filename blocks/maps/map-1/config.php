<?php 

    return array(
        
        'slug'          => 'map-1',
        'groups'        => array('maps'),

        'contents'      => array(
            array( 
                'name'          => 'gmap_iframe', 
                'type'          => 'text',
                'placeholder'   => 'Enter Just Iframe src url',
                'value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.2749790395205!2d90.3645923149682!3d23.77322049382117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0afbf7aaaab%3A0x32f99a91ddd34680!2sSEL%20HUQ%20SKYPARK!5e0!3m2!1sen!2sbd!4v1586851025024!5m2!1sen!2sbd'),

            array(
                'name'      => 'title',
                'label'     => 'Heading',
                'value'     => 'ThemesGrove',
            ),
            array(
                'name'      => 'location',
                'label'     => 'Location',
                'type'      => 'textarea',
                'value'     => 'Level - 12, Suite - 1202,<br/> SEL HUQ SKYPARK,<br/> 23/2 Mirpur Rd, Dhaka 1207'
            )
        ),
        'settings'      => array(
            array(
                'name'     => 'animation_contact',
                'label'    => 'Animation Contact Area',
                'type'     => 'select',
                'value'    => '0',
                'options'  => array(
                    '0'                     => 'None',
                    'fade'                  => 'Fade',
                    'scale-up'              => 'Scale Up',
                    'scale-down'            => 'Scale Down',
                    'slide-top-small'       => 'Slide Top Small',
                    'slide-bottom-small'    => 'Slide Bottom Small',
                    'slide-left-small'      => 'Slide Left Small',
                    'slide-right-small'     => 'Slide Right Small',
                    'slide-top-medium'      => 'Slide Top Medium',
                    'slide-bottom-medium'   => 'Slide Bottom Medium',
                    'slide-left-medium'     => 'Slide Left Medium',
                    'slide-right-medium'    => 'Slide Right Medium',
                    'slide-top'             => 'Slide Top 100%',
                    'slide-bottom'          => 'Slide Bottom 100%',
                    'slide-left'            => 'Slide Left 100%',
                    'slide-right'           => 'Slide Right 100%',
                ),
            ),
            array(
                'name'      => 'contact_position',
                'label'     => 'Map Text area Position',
                'type'      => 'select',
                'value'     => 'bottom',
                'options'   => array(
                    'top'       => 'Top',
                    'bottom'    => 'Bottom'
                )
            ),
            array(
                'name'      => 'text_alignment',
                'label'     => 'Text Alignment',
                'type'      => 'select',
                'value'     => 'center',
                'options'   => array(
                    'center'    => 'Center',
                    'left'      => 'Left',
                    'right'     => 'Right',
                )
            ),
            array(
                'name' => 'title_size',
                'label' => 'Title Size',
                'append' => 'px',
                'value' => '44',
            ),
            array(
                'name'     => 'title_transformation',
                'label'    => 'Title Transformation',
                'type'     => 'select',
                'value'    => '0',
                'options'  => array(
                    '0'           => 'Default',
                    'lowercase'   => 'Lowercase',
                    'uppercase'   => 'Uppercase',
                    'capitalize'  => 'Capitalized',
                ),
            ),
            array(
                'name' => 'contact_size',
                'label' => 'Contact Text Size',
                'append' => 'px',
                'value' => '18',
            ),
        ),
        'styles'        => array(
            array(
                'name'    => 'title_text_color',
                'label'   => 'Title Color',
                'type'    => 'colorpicker',
                'value'   => '#ffffff',
            ),
            array(
                'name'    => 'text_color',
                'label'   => 'Contact Text Color',
                'type'    => 'colorpicker',
                'value'   => '#ffffff',
            ),
        )


    );
