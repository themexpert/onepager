<?php 

    return array(
        'slug'      => 'feature-20',
        'type'      => 'new',
        'groups'    => array('features'),
        'contents'  => array(
            array(
                'name'  => 'section_image',
                'label' => 'Image',
                'type'  => 'image',
                'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/section-person-image.png'
            ),
            array(
                'name'      => 'top_tagline',
                'label'     => 'Top Tagline',
                'value'     => ' @NORMANVINCENTPEALE'
            ),
            array(
                'name'      => 'title',
                'label'     => 'Title',
                'value'     => 'IT\'S 2019.<br/> I\'M 70.<br/> I\'M RETIRED.'
            ),
            array(
                'name'      => 'desc',
                'label'     => 'Description',
                'type'      => 'textarea',
                'value'     => 'The precursor to The Secret, The Power of Positive Thinking has helped millions of men and women to achieve fulfillment in their lives. In this phenomenal bestseller, Dr. Peale demonstrates the power of faith in action. With the practical techniques outlined in this book, you can energize your life -- and give yourself the initiative needed to carry out your ambitions and hopes.'
            ),
            array(
                'name'  => 'signature',
                'label' => 'Signature',
                'type'  => 'image',
                'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/signature-photo.jpg'
            ),
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
                'name' => 'section_desc_font_weight',
                'label' => 'Description Font Weight',
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
        ),
        'styles'    => array(
            array(
                'name' => 'bg_image',
                'label' => 'Background Image',
                'type' => 'image',
                'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/background-image-text.jpg',
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
                'name' => 'tagline_color',
                'label' => 'Top Tagline Color',
                'type' => 'colorpicker',
                'value' => '#f22e13',
            ),
            array(
                'name' => 'heading_color',
                'label' => 'Heading Color',
                'type' => 'colorpicker',
                'value' => '#142b45',
            ),
            array(
                'name' => 'text_color',
                'label' => 'Text Color',
                'type' => 'colorpicker',
                'value' => '#142b45',
            ),
        )
    );
