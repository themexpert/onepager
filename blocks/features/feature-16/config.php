<?php

return array(
    'slug'      => 'feature-16',
    'groups'    => array('features'),
    'type'    => 'new',
    'contents'  => array(
        array(
            'name'  => 'section_image',
            'label' => 'Section Image',
            'type'  => 'image',
            'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/section-image.jpg',
        ),
        array(
            'name'  => 'sub_heading',
            'label' => 'Sub-Heading',
            'value' => 'Welcome to the Onepager Education Theme'
        ),
        array(
            'name'  => 'heading',
            'label' => 'Heading',
            'value' => 'Best Learning Management<br/> System for Wordpress'
        ),
        array(
            'name'  => 'desc',
            'label' => 'description',
            'type'  => 'textarea',
            'value' => '"This book is written with the sole objective of helping the reader<br/> achieve a happy, satisfying, and worthwhile life."'
        ),
        array(
            'name'  => 'btn_1',
            'text'  => 'LEARN MORE',
            'type'  => 'link'
        ),
        array(
            'name'  => 'btn_2',
            'text'  => 'PLAY VIDEO',
            'type'  => 'link'
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
            'name' => 'title_size',
            'label' => 'Title Size',
            'append' => 'px',
            'value' => '52',
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
            'label' => 'Title Text Transformation',
            'type' => 'select',
            'value' => '0',
            'options' => array(
                '0' => 'Default',
                'lowercase' => 'Lowercase',
                'uppercase' => 'Uppercase',
                'capitalize' => 'Capitalized',
            ),
        ),
        array(
            'name' => 'subtitle_size',
            'label' => 'Sub-Title Size',
            'append' => 'px',
            'value' => '20',
        ),
        array(
            'name' => 'title_font_weight',
            'label' => 'Title Font Weight',
            'type' => 'select',
            'value' => '500',
            'options' => array(
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),
        array(
            'name' => 'desc_size',
            'label' => 'Description Size',
            'append' => 'px',
            'value' => '20',
        ),
        array(
            'name' => 'desc_font_weight',
            'label' => 'Description Font Weight',
            'type' => 'select',
            'value' => '300',
            'options' => array(
                '300' => '300',
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),
        array('label' => 'Button', 'type' => 'divider'), // Divider - Button
        array(
            'name' => 'btn_size',
            'label' => 'Button Size',
            'append' => 'px',
            'value' => '16',
        ),
        array(
            'name' => 'btn_font_weight',
            'label' => 'Button Font Weight',
            'type' => 'select',
            'value' => '500',
            'options' => array(
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),
        array(
            'name' => 'btn_radius',
            'label' => 'Button Border Radius',
            'append' => 'px',
            'value' => '10',
        ),
    ),
    'styles'    => array(
        array(
            'name' => 'bg_color',
            'label' => 'Background Color',
            'type' => 'colorpicker',
            'value' => '#fee7eb',
        ),

        array('label' => 'Typography Color', 'type' => 'divider'), // Divider - Button
        array(
            'name' => 'subheading_color',
            'label' => 'Sub-Heading Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),
        array(
            'name' => 'heading_color',
            'label' => 'Heading Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),
        array(
            'name' => 'desc_color',
            'label' => 'Heading Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),

        array(
            'name' => 'btn_bg_color',
            'label' => 'Button Background',
            'type' => 'colorpicker',
            'value' => 'rgb(255, 255, 255)',
        ),
        array(
            'name' => 'btn_shadow_color',
            'label' => 'Button Box Shadow',
            'type' => 'colorpicker',
            'value' => 'rgba(251, 136, 159, 0.35)',
        ),
        array(
            'name' => 'btn_hover_text_color',
            'label' => 'Button Hover Text',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),

    )
);