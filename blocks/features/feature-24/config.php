<?php

return array(
    'slug'      => 'feature-24',
    'tag'      => 'new',
    'groups'    => array('features'),
    'contents'  => array(
        array(
            'name'      => 'left_image',
            'labels'    => 'Left Image',
            'type'      => 'image',
            'value'     => 'https://demo.wponepager.com/wp-content/uploads/2020/03/block-24-left-image.jpg'
        ),
        array(
            'name'      => 'section_title',
            'label'     => 'Section Title',
            'value'     => 'About The Author'
        ),
        array(
            'name'      => 'section_desc',
            'label'     => 'Section Description',
            'type'      => 'textarea',
            'value'     => 'Norman Vincent Peale was an American minister and author known for his work in popularizing the concept of positive thinking, especially through his best-selling book The Power 
            of Positive Thinking.'
        ),
        array(
            'name'      => 'quotes_title',
            'label'     => 'Quotes Title',
            'value'     => 'Quotes',
        ),
        array(
            'name'      => 'quotes_desc',
            'label'     => 'Quotes Description',
            'type'      => 'textarea',
            'value'     => 'Change your thoughts and you change your world. <br/>Believe in yourself! Have faith in your abilities! Without a humble but reasonable confidence in your own powers you cannot be 
            successful or happy. <br/>Christmas waves a magic wand over this world, and behold, everything is softer and more beautiful.'
        ),
        array(
            'name'      => 'story_title',
            'label'     => 'Story Title',
            'value'     => 'RECENT STORIES'
        ),
        array(
            'name'      => 'stroies',
            'label'     => 'Stories',
            'type'      => 'repeater',
            'fields'    => array(
                array(
                    array('name' => 'story_logo', 'label' => 'Story Logo', 'type' => 'image', 'value'   =>  'https://demo.wponepager.com/wp-content/uploads/2020/03/story-logo-1.png'),
                    array('name'    => 'story_text', 'label'    => 'Story Text', "value"    => "<a href='#'>Latka\'s $5M Risk Paid Off!</a>")
                ),
                array(
                    array('name' => 'story_logo', 'label' => 'Story Logo', 'type' => 'image', 'value'   =>  'https://demo.wponepager.com/wp-content/uploads/2020/03/story-logo-2.png'),
                    array('name'    => 'story_text', 'label'    => 'Story Text', "value"    => "<a href='#'>Billionaire Invests $2M in Latka!</a>")
                ),
                array(
                    array('name' => 'story_logo', 'label' => 'Story Logo', 'type' => 'image', 'value'   =>  'https://demo.wponepager.com/wp-content/uploads/2020/03/story-logo-3.png'),
                    array('name'    => 'story_text', 'label'    => 'Story Text', "value"    => "<a href='#'>Latka Sells Company at 4x Initial Price...</a>")
                )
            )
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
            'name' => 'title_transformation',
            'label' => 'Title Transformation',
            'type' => 'select',
            'value' => 'uppercase',
            'options' => array(
                '0' => 'Default',
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
            'name' => 'section_text_size',
            'label' => 'Title Font Size',
            'append' => 'px',
            'value' => '18',
        ),
        array(
            'name' => 'section_text_font_weight',
            'label' => 'Title Font Weight',
            'type' => 'select',
            'value' => '400',
            'options' => array(
                '300' => '300',
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),

        array(
            'name' => 'quote_title_size',
            'label' => 'Title Font Size',
            'append' => 'px',
            'value' => '20',
        ),
        array(
            'name' => 'quote_title_font_weight',
            'label' => 'Title Font Weight',
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
            'name' => 'quote_desc_size',
            'label' => 'Title Font Size',
            'append' => 'px',
            'value' => '16',
        ),
        array(
            'name' => 'quote_desc_font_weight',
            'label' => 'Title Font Weight',
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
            'name' => 'story_title_size',
            'label' => 'Title Font Size',
            'append' => 'px',
            'value' => '26',
        ),
        array(
            'name' => 'story_title_font_weight',
            'label' => 'Title Font Weight',
            'type' => 'select',
            'value' => '600',
            'options' => array(
                '300' => '300',
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),

        array(
            'name' => 'story_text_size',
            'label' => 'Title Font Size',
            'append' => 'px',
            'value' => '18',
        ),
        array(
            'name' => 'story_text_font_weight',
            'label' => 'Title Font Weight',
            'type' => 'select',
            'value' => '600',
            'options' => array(
                '300' => '300',
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),
        array(
            'name' => 'animation_media',
            'label' => 'media Animation',
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
    'styles'    => array(
        array(
            'name' => 'bg_image',
            'label' => 'Background Image',
            'type' => 'image',
            'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/norman-fp-24-bg.jpg',
        ),
        array(
            'name'  => 'bg_position',
            'label' => 'Background Position',
            'type'  => 'select',
            'value' => 'top-center',
            'options'   => array(
                'top-left'     => 'Top Left',
                'top-center'     => 'Top Center',
                'top-right'     => 'Top Right',
                'center-left'     => 'Center Left',
                'center-center'     => 'Center Center',
                'center-right'     => 'Center Right',
                'bottom-left'     => 'Bottom Left',
                'bottom-center'     => 'Bottom Center',
                'bottom-right'     => 'Bottom Right',
                
            )
        ),
        array(
            'name' => 'section_bg',
            'label' => 'Section Background Color',
            'type' => 'colorpicker',
            'value' => '#ffffff',
        ),
        array(
            'name' => 'quote_bg',
            'label' => 'Quote Background Color',
            'type' => 'colorpicker',
            'value' => '#fff004',
        ),
        array(
            'name' => 'section_title_color',
            'label' => 'Title Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),
        array(
            'name' => 'section_desc_color',
            'label' => 'Description Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),
        array(
            'name' => 'quote_title_color',
            'label' => 'Quote Title Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),
        array(
            'name' => 'quote_desc_color',
            'label' => 'Quote Description Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),

        array(
            'name' => 'story_title_color',
            'label' => 'Story Title Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),
        array(
            'name' => 'story_desc_color',
            'label' => 'Story Description Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),

        array(
            'name' => 'story_link_color',
            'label' => 'Story Link Hover Color',
            'type' => 'colorpicker',
            'value' => '#4bb93e',
        ),

        
    )
);