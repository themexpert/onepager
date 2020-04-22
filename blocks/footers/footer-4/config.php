<?php 

return array(
    'slug' => 'footer-4',
    'groups' => array('footers'),
    'tag'  => 'update',
    'contents'  => array(
        array(
            'name'  => 'footer_left_text',
            'label' => 'Footer Left Text',
            'type'  => 'link',
            'text'  => 'The Power of Positive Thinking'
        ),
        array(
            'name'  => 'footer_center_text',
            'label' => 'Footer Center Text',
            'type'  => 'textarea',
            'value' => 'Norman Vincent Peale'
        ),
        array(
            'name' => 'footer_right_label',
            'label' => 'Footer Right Title',
            'type'  => 'text',
            'value' => 'Follow Me '
        ),
        array(
            'name'      => 'social_shares',
            'label'     => 'Social Share',
            'type'      => 'repeater',
            'fields'    => array(
                array(
                    array('name' => 'social_share', 'type' => 'icon', 'value' => 'fa fa-twitter fa-lg'),
                    array('name' => 'btn_link', 'type' => 'text', 'prepend' => 'url', 'value' => 'https://twitter.com')
                ),
                array(
                    array('name' => 'social_share', 'type' => 'icon', 'value' => 'fa fa-linkedin-square fa-lg'),
                    array('name' => 'btn_link', 'type' => 'text', 'prepend' => 'url', 'value' => 'https://linkedin.com')
                ),
                array(
                    array('name' => 'social_share', 'type' => 'icon', 'value' => 'fa fa-facebook fa-lg'),
                    array('name' => 'btn_link', 'type' => 'text', 'prepend' => 'url', 'value' => 'https://facebook.com')
                ),
                array(
                    array('name' => 'social_share', 'type' => 'icon', 'value' => 'fa fa-skype fa-lg'),
                    array('name' => 'btn_link', 'type' => 'text', 'prepend' => 'url', 'value' => 'https://skype.com')
                )
            )
        )
    ),
    'settings'  => array(
        array(
            'name' => 'footer_font_size',
            'label' => 'Footer Font Size',
            'append' => 'px',
            'value' => '16',
        ),
        array(
            'name' => 'footer_font_weight',
            'label' => 'Footer Font Weight',
            'type' => 'select',
            'value' => '500',
            'options' => array(
                '300' => '300',
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        )
    ),
    'styles'    => array(
        array(
            'name' => 'bg_color',
            'label' => 'Background Color',
            'type' => 'colorpicker',
            'value' => '#ffffff',
        ),
        array(
            'name' => 'text_color',
            'label' => 'Text Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),
        array(
            'name' => 'link_color_hover',
            'label' => 'Link Hover Color',
            'type' => 'colorpicker',
            'value' => '#4bb93e',
        ),
    )
);

