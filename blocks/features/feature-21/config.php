<?php 

return array(
    'slug'      => 'feature-21',
    'tag'      => 'new',
    'groups'    => array('features'),
    'contents'  => array(
        array(
            'name'      => 'top_tagline',
            'label'     => 'Top Tagline',
            'type'      => 'text',
            'value'     => 'More than 5 million copies sold'
        ),
        array(
            'name'      => 'heading',
            'label'     => 'Heading',
            'type'      => 'text',
            'value'     => 'Removing This Book'
        ),
        array(
            'name'      => 'desc',
            'label'     => 'Description',
            'type'      => 'editor',
            'value'     => 'This book is not timeless. My publisher hates this because they want to sell lots of books over many decades.
            The thing is, stuff that works usually only works for a short amount of time before the crowd piles in.
            This book is exactly that: urgent tactics you must use before everyone else. The more people who buy this book, the less valuable it becomes. Buy it right now for the biggest advantage.'
        ),
        array(
            'name' => 'btn1', 'text' => 'GET THE BOOK!', 'type' => 'link', 'url' => '#'
        ),
        array(
            'name' => 'btn2', 'text' => 'Click here to buy in bulk', 'type' => 'link', 'url' => '#'
        ),
        array(
            'name'      => 'sponser_logos',
            'labels'    => 'Sponser Logos',
            'type'      => 'repeater',
            'fields'    => array(
                array(
                    array('name' => 'sponser_logo', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/sponser-1.png')
                ),
                array(
                    array('name' => 'sponser_logo', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/sponser-2.png')
                ),
                array(
                    array('name' => 'sponser_logo', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/sponser-3.png')
                ),
                array(
                    array('name' => 'sponser_logo', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/sponser-4.png')
                ),
                array(
                    array('name' => 'sponser_logo', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/sponser-5.png')
                )
            )
        ),

        array(
            'name'      => 'right_image',
            'labels'    => 'Right Image',
            'type'      => 'image',
            'value'     => 'https://demo.wponepager.com/wp-content/uploads/2020/03/pw-of-positive.png'
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
            'label' => 'Title Font Size',
            'append' => 'px',
            'value' => '52',
        ),
        array(
            'name' => 'section_title_font_weight',
            'label' => 'Title Font Weight',
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
        array(
            'name' => 'section_title_transformation',
            'label' => 'Title Transformation',
            'type' => 'select',
            'value' => 'uppercase',
            'options' => array(
                'inherit' => 'Default',
                'lowercase' => 'Lowercase',
                'uppercase' => 'Uppercase',
                'capitalize' => 'Capitalized',
            ),
        ),
        array(
            'name' => 'animation_content',
            'label' => 'Content Animation',
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

        array(
            'name' => 'top_tagline',
            'label' => 'Top Tag Font Size',
            'append' => 'px',
            'value' => '20',
        ),
        array(
            'name' => 'top_tagline_font_weight',
            'label' => 'Top Tag Font Weight',
            'type' => 'select',
            'value' => '500',
            'options' => array(
                '300' => '300',
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),

        array(
            'name' => 'desc_font_size',
            'label' => 'Description Font Size',
            'append' => 'px',
            'value' => '18',
        ),


        array(
            'name' => 'btn_font_size',
            'label' => 'Button Font Size',
            'append' => 'px',
            'value' => '18',
        ),
        array(
            'name' => 'btn_font_weight',
            'label' => 'Button Font Weight',
            'type' => 'select',
            'value' => '500',
            'options' => array(
                '300' => '300',
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),

        array(
            'name' => 'btn_text_transformation',
            'label' => 'Title Transformation',
            'type' => 'select',
            'value' => 'capitalized',
            'options' => array(
                'inherit' => 'Default',
                'lowercase' => 'Lowercase',
                'uppercase' => 'Uppercase',
                'capitalize' => 'Capitalized',
            ),
        ),
        array(
            'name' => 'animation_media',
            'label' => 'Media Animation',
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
    ),
    'styles'     => array(
        array(
            'name' => 'section_bg',
            'label' => 'Section Background Color',
            'type' => 'colorpicker',
            'value' => '#ffffff',
        ),

        array(
            'name' => 'top_tagline',
            'label' => 'Top Tagline Color',
            'type' => 'colorpicker',
            'value' => '#4bb93e',
        ),
        array(
            'name' => 'main_heading',
            'label' => 'Heading Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),
        array(
            'name' => 'desc_color',
            'label' => 'Description Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),

        array(
            'name' => 'btn_text_color',
            'label' => 'Button Text',
            'type' => 'colorpicker',
            'value' => '#4bb93e',
        ),

        array(
            'name' => 'btn_text_color_hover',
            'label' => 'Button Text Hover',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),

        array(
            'name' => 'btn_bg',
            'label' => 'Button Background',
            'type' => 'colorpicker',
            'value' => 'rgba(255,255,255,0)',
        ),
        array(
            'name' => 'btn_bg_hover',
            'label' => 'Button Background Hover',
            'type' => 'colorpicker',
            'value' => '#4bb93e',
        ),
        
    )
);
