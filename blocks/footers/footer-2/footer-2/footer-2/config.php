<?php

return array(
    'slug' => 'footer-2',
    'groups' => array('footers'),
    'contents' => array(
        array(
            'name' => 'section_heading',
            'label' => 'Section Heading',
            'type' => 'text',
            'value' => 'Are you having any problems but can’t consult to anyone?',
        ),
        array(
            'name' => 'subheading',
            'label' => 'Sub Heading',
            'type' => 'text',
            'value' => 'Talk to us! We promise we can help you! <span class"highlight">Call Now! (1)223-3344-334</span>',
        ),
        array(
            'name' => 'footer_media',
            'label' => 'Choose Icon',
            'type' => 'icon',
            'value' => 'fa fa-phone fa-4x',
        ),
        array(
            'name' => 'icon_url',
            'prepend' => 'URL',
            'value' => 'tel:+12233344334',
        ),
    ),
    'settings' => array(
        array(
            'name' => 'section_alignment',
            'label' => 'Section Alignment',
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
            'label' => 'Section Title Size',
            'append' => 'px',
            'value' => '42',
        ),
        array(
            'name' => 'title_font_weight',
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
            'name' => 'animation_title',
            'label' => 'Title Animation',
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

        array('label' => 'Sub Heading', 'type' => 'divider'), // Divider - Text

        array(
            'name' => 'subheading_size',
            'label' => 'Sub-Heading Size',
            'append' => 'px',
            'value' => '28',
        ),
        array(
            'name' => 'subhead_font_weight',
            'label' => 'Sub Heading Font Weight',
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
    ),
    'styles' => array(
        array('label' => 'Section Color', 'type' => 'divider'), // Divider - Text
        array(
            'name' => 'bg_color',
            'label' => 'Background Color',
            'type' => 'colorpicker',
            'value' => '#f1f1f1',
        ),
        array(
            'name' => 'section_heading_color',
            'label' => 'Section Heading Color',
            'type' => 'colorpicker',
            'value' => '#132a46',
        ),
        array(
            'name' => 'subheading_color',
            'label' => 'Sub Heading Color',
            'type' => 'colorpicker',
            'value' => '#29cb8b',
        ),
        array(
            'name' => 'subheading_highlighted',
            'label' => 'Sub-Heading Highlight',
            'type' => 'colorpicker',
            'value' => '#dd5346',
        ),
        array(
            'name' => 'icon_bg',
            'label' => 'icon BG Color',
            'type' => 'colorpicker',
            'value' => '#ffffff',
        ),
        array(
            'name' => 'icon_bg_hover',
            'label' => 'icon BG Hover Color',
            'type' => 'colorpicker',
            'value' => '#dd5346',
        ),
        array(
            'name' => 'icon_color',
            'label' => 'icon Color',
            'type' => 'colorpicker',
            'value' => '#dd5346',
        ),
        array(
            'name' => 'icon_color_hover',
            'label' => 'icon Hover Color',
            'type' => 'colorpicker',
            'value' => '#ffffff',
        ),
        array(
            'name' => 'icon_border',
            'label' => 'icon border Color',
            'type' => 'colorpicker',
            'value' => '#29cb8b',
        ),
    ),
);
