<?php

return array(
    'slug' => 'footer-3',
    'type'    => 'new',
    'groups' => array('footers'),
    'contents' => array(
        array(
            'name' => 'section_footer',
            'label' => 'Footer Text',
            'type' => 'text',
            'value' => '2019 Onepager – All Rights Reserved',
        ),
    ),
    'settings'  => array(
        array(
            'name' => 'footer_font_size',
            'label' => 'Footer Font Size',
            'append' => 'px',
            'value' => '14',
        ),
        array(
            'name' => 'footer_font_weight',
            'label' => 'Footer Font Weight',
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
        array(
            'name' => 'footer_alignment',
            'label' => 'Footer Alignment',
            'type' => 'select',
            'value' => 'center',
            'options' => array(
                'left' => 'Left',
                'center' => 'Center',
                'right' => 'Right',
                'justify' => 'Justify',
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
            'name' => 'footer_color',
            'label' => 'Footer Text Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),
    )
);