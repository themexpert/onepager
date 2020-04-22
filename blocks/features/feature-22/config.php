<?php 

    return array(
        'slug'      => 'feature-22',
        'tag'      => 'new',
        'groups'    => array('features'),
        'contents'  => array(
            array(
                'name'  => 'section_title',
                'label' => 'Title',
                'value' => 'FAQ'
            ),
            array(
                'name'      => 'tabs',
                'type'      => 'repeater',
                'fields'    => array(
                    array(
                        array(
                            'name'  => 'tab_title',
                            'label' => 'Tab Title',
                            'value' => 'What is the meaning of power of positive thinking?' 
                        ),
                        array(
                            'name'  => 'tab_desc',
                            'label' => 'Tab Description',
                            'type'  => 'textarea',
                            'value' => 'Peale wrote more than 40 books. His seminal work, "The Power of Positive Thinking," was translated into 42 languages and sold more than 15 million copies worldwide.' 
                        )
                    ),
                    array(
                        array(
                            'name'  => 'tab_title',
                            'label' => 'Tab Title',
                            'value' => 'How many copies of the power of positive thinking were sold?' 
                        ),
                        array(
                            'name'  => 'tab_desc',
                            'label' => 'Tab Description',
                            'type'  => 'textarea',
                            'value' => 'Peale wrote more than 40 books. His seminal work, "The Power of Positive Thinking," was translated into 42 languages and sold more than 15 million copies worldwide.' 
                        )
                    ),
                    array(
                        array(
                            'name'  => 'tab_title',
                            'label' => 'Tab Title',
                            'value' => 'When was the power of positive thinking written?' 
                        ),
                        array(
                            'name'  => 'tab_desc',
                            'label' => 'Tab Description',
                            'type'  => 'textarea',
                            'value' => 'Peale wrote more than 40 books. His seminal work, "The Power of Positive Thinking," was translated into 42 languages and sold more than 15 million copies worldwide.' 
                        )
                    ),
                    array(
                        array(
                            'name'  => 'tab_title',
                            'label' => 'Tab Title',
                            'value' => 'Where did Norman Vincent Peale preached?' 
                        ),
                        array(
                            'name'  => 'tab_desc',
                            'label' => 'Tab Description',
                            'type'  => 'textarea',
                            'value' => 'Peale wrote more than 40 books. His seminal work, "The Power of Positive Thinking," was translated into 42 languages and sold more than 15 million copies worldwide.' 
                        )
                    ),
                    array(
                        array(
                            'name'  => 'tab_title',
                            'label' => 'Tab Title',
                            'value' => 'Who said shoot for the moon and if you miss you will still be among the stars?' 
                        ),
                        array(
                            'name'  => 'tab_desc',
                            'label' => 'Tab Description',
                            'type'  => 'textarea',
                            'value' => 'Peale wrote more than 40 books. His seminal work, "The Power of Positive Thinking," was translated into 42 languages and sold more than 15 million copies worldwide.' 
                        )
                    ),
                )
            )
        ),
        'settings'  => array(
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
                'name' => 'tab_title_font_size',
                'label' => 'Tab Title Font Size',
                'append' => 'px',
                'value' => '26',
            ),
            array(
                'name' => 'tab_title_font_weight',
                'label' => 'Tab Description Font Weight',
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
                'name' => 'tab_desc_font_size',
                'label' => 'Tab Title Font Size',
                'append' => 'px',
                'value' => '18',
            ),
            array(
                'name' => 'tab_desc_font_weight',
                'label' => 'Tab Description Font Weight',
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
        ),
        'styles'    => array(
            array(
                'name' => 'bg_color',
                'label' => 'Background Color',
                'type' => 'colorpicker',
                'value' => '#4bb93e',
            ),

            array(
                'name' => 'section_title_color',
                'label' => 'Section Title',
                'type' => 'colorpicker',
                'value' => '#142b45',
            ),
            array(
                'name' => 'tab_title_color',
                'label' => 'Tab Title',
                'type' => 'colorpicker',
                'value' => '#142b45',
            ),
            array(
                'name' => 'tab_desc_color',
                'label' => 'Tab Description',
                'type' => 'colorpicker',
                'value' => '#142b45',
            ),

            array(
                'name' => 'hover_active_color',
                'label' => 'Tab Item Hover/Active',
                'type' => 'colorpicker',
                'value' => '#ffffff',
            ),
            
        )
    );