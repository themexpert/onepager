<?php 

    return array(
        'slug'      => 'feature-19',
        'type'      => 'new',
        'groups'    => array('features'),
        'contents'  => array(
            array(
                'name'  => 'section_title', 
                'value'  => 'What People Are Saying', 
            ),
            array(
                'name'  => 'reviews',
                'type'  => 'repeater',
                'fields'    => array(
                    array(
                        array('name' => 'review', 'label' => 'review', 'type'    => 'textarea', 'value' => '“The precursor to The Secret, The Power of Positive Thinking has helped millions of men and women to achieve fulfillment in their lives. In this phenomenal bestseller, Dr. Peale demonstrates the power of 
                        faith in action.”' ),
                        array(
                            'name'  => 'author_image',
                            'label' => 'Author Image',
                            'type'  => 'image',
                            'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/review-1.png'
                        ),
                        array(
                            'name'  => 'author_name',
                            'label' => 'Author Name',
                            'value' => 'TUCKER MAX'
                        ),
                        array(
                            'name'  => 'author_designation',
                            'label' => 'Author Designation',
                            'value' => 'Ceo Of Book In A Box'
                        )
                    ),
                    array(
                        array('name' => 'review', 'label' => 'review', 'type'    => 'textarea', 'value' => '“The precursor to The Secret, The Power of Positive Thinking has helped millions of men and women to achieve fulfillment in their lives. In this phenomenal bestseller, Dr. Peale demonstrates the power of faith in action. With the practical techniques outlined in this book, you can energize your life.”' ),
                        array(
                            'name'  => 'author_image',
                            'label' => 'Author Image',
                            'type'  => 'image',
                            'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/review-2.png'
                        ),
                        array(
                            'name'  => 'author_name',
                            'label' => 'Author Name',
                            'value' => 'ANDREW WARNER'
                        ),
                        array(
                            'name'  => 'author_designation',
                            'label' => 'Author Designation',
                            'value' => 'Creator Of Mixergy'
                        )
                    ),
                    array(
                        array('name' => 'review', 'label' => 'review', 'type'    => 'textarea', 'value' => '“The precursor to The Secret, The Power of Positive Thinking has helped millions of men and women to achieve fulfillment in their lives. In this phenomenal bestseller, Dr. Peale demonstrates the power of faith in action. With the practical techniques outlined in this book, you can energize your life.”' ),
                        array(
                            'name'  => 'author_image',
                            'label' => 'Author Image',
                            'type'  => 'image',
                            'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/review-3.png'
                        ),
                        array(
                            'name'  => 'author_name',
                            'label' => 'Author Name',
                            'value' => 'SEAN LANGHI'
                        ),
                        array(
                            'name'  => 'author_designation',
                            'label' => 'Author Designation',
                            'value' => 'Author Of The Creative Curve'
                        )
                    ),
                    array(
                        array('name' => 'review', 'label' => 'review', 'type'    => 'textarea', 'value' => '“The precursor to The Secret, The Power of Positive Thinking has helped millions of men and women to achieve fulfillment in their lives. In this phenomenal bestseller, Dr. Peale demonstrates the power of 
                        faith in action.”' ),
                        array(
                            'name'  => 'author_image',
                            'label' => 'Author Image',
                            'type'  => 'image',
                            'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/review-4.png'
                        ),
                        array(
                            'name'  => 'author_name',
                            'label' => 'Author Name',
                            'value' => 'ALEXANDER ROSARIO'
                        ),
                        array(
                            'name'  => 'author_designation',
                            'label' => 'Author Designation',
                            'value' => 'First Time Entrepreneur'
                        )
                    )
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

            array('label' => 'Review Item', 'type' => 'divider'),
            array(
                'name' => 'rev_desc_size',
                'label' => 'Description Font Size',
                'append' => 'px',
                'value' => '20',
            ),
            array(
                'name' => 'rev_desc_font_weight',
                'label' => 'Description Font Weight',
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
                'name' => 'author_image_radius',
                'label' => 'Author Border Radius',
                'append' => '%',
                'value' => '50%',
            ),

            array(
                'name' => 'rev_author_title_size',
                'label' => 'Author Title Font Size',
                'append' => 'px',
                'value' => '26',
            ),
            array(
                'name' => 'rev_author_title_font_weight',
                'label' => 'Author Title Font Weight',
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
                'name' => 'rev_author_pos_size',
                'label' => 'Author Designation Font Size',
                'append' => 'px',
                'value' => '16',
            ),
            array(
                'name' => 'rev_author_pos_font_weight',
                'label' => 'Author Designation Font Weight',
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
                'value' => '#fff004',
            ),
            array(
                'name' => 'section_heading_color',
                'label' => 'Heading Color',
                'type' => 'colorpicker',
                'value' => '#142b45',
            ),
            array(
                'name' => 'rev_desc_color',
                'label' => 'Review Description Color',
                'type' => 'colorpicker',
                'value' => '#142b45',
            ),
            array(
                'name' => 'rev_author_color',
                'label' => 'Review Author Color',
                'type' => 'colorpicker',
                'value' => '#142b45',
            ),
            array(
                'name' => 'rev_author_pos_color',
                'label' => 'Review Author Designation Color',
                'type' => 'colorpicker',
                'value' => '#142b45',
            ),
        )
    );