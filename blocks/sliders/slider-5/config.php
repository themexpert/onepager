<?php 

return array(
    'slug'      => 'slider-5',
    'tag'      => 'new',
    'groups'    => array('sliders'),
    'contents'  => array(
        array(
            'name'      => 'section_title',
            'label'     => 'Section Title',
            'value'     => 'HOW THIS BOOK IS STRUCTURED'
        ),
        array(
            'name'      => 'section_desc',
            'label'     => 'Section Description',
            'value'     => '4 Rules And 36 Screenshot Stories'
        ),
        array(
            'name'      => 'sliders',
            'label'     => 'Sliders',
            'type'      => 'repeater',
            'fields'    => array(
                array(
                    array(
                        'name'      =>  'slide_num', 
                        'label'     => 'Slider Label',
                        'value'     => 'Rules 01'
                    ),
                    array(
                        'name'      => 'slide_title',
                        'label'     => 'Slider Title',
                        'value'     => 'Don\'t Focus On One Thing'
                    ),
                    array(
                        'name'      => 'slide_desc',
                        'label'     => 'Slider Description',
                        'type'      => 'textarea',
                        'value'     => 'The precursor to The Secret, The Power of Positive Thinking has helped millions of men and women to achieve fulfillment in their lives. In this phenomenal bestseller, Dr. Peale demonstrates the power of faith in action. With the practical techniques outlined in this book, you can energize your life -- and give yourself the initiative needed to carry out your ambitions and hopes. Dr. Peale demonstrates the power of faith in action. With the practical techniques outlined in this book, you can energize your life -- and give yourself the initiative needed to carry out your ambitions and hopes.'
                    ),
                    array(
                        'name'      => 'slide_image',
                        'label'     => 'Slider Image',
                        'type'      => 'image',
                        'value'     => 'https://demo.wponepager.com/wp-content/uploads/2020/03/slider-book.png'
                    )
                ),
                array(
                    array(
                        'name'      =>  'slide_num', 
                        'label'     => 'Slider Label',
                        'value'     => 'Rules 02'
                    ),
                    array(
                        'name'      => 'slide_title',
                        'label'     => 'Slider Title',
                        'value'     => 'Don\'t Focus On One Thing'
                    ),
                    array(
                        'name'      => 'slide_desc',
                        'label'     => 'Slider Description',
                        'type'      => 'textarea',
                        'value'     => 'The precursor to The Secret, The Power of Positive Thinking has helped millions of men and women to achieve fulfillment in their lives. In this phenomenal bestseller, Dr. Peale demonstrates the power of faith in action. With the practical techniques outlined in this book, you can energize your life -- and give yourself the initiative needed to carry out your ambitions and hopes. Dr. Peale demonstrates the power of faith in action. With the practical techniques outlined in this book, you can energize your life -- and give yourself the initiative needed to carry out your ambitions and hopes.'
                    ),
                    array(
                        'name'      => 'slide_image',
                        'label'     => 'Slider Image',
                        'type'      => 'image',
                        'value'     => 'https://demo.wponepager.com/wp-content/uploads/2020/03/slider-book.png'
                    )
                ),
                array(
                    array(
                        'name'      =>  'slide_num', 
                        'label'     => 'Slider Label',
                        'value'     => 'Rules 03'
                    ),
                    array(
                        'name'      => 'slide_title',
                        'label'     => 'Slider Title',
                        'value'     => 'Don\'t Focus On One Thing'
                    ),
                    array(
                        'name'      => 'slide_desc',
                        'label'     => 'Slider Description',
                        'type'      => 'textarea',
                        'value'     => 'The precursor to The Secret, The Power of Positive Thinking has helped millions of men and women to achieve fulfillment in their lives. In this phenomenal bestseller, Dr. Peale demonstrates the power of faith in action. With the practical techniques outlined in this book, you can energize your life -- and give yourself the initiative needed to carry out your ambitions and hopes. Dr. Peale demonstrates the power of faith in action. With the practical techniques outlined in this book, you can energize your life -- and give yourself the initiative needed to carry out your ambitions and hopes.'
                    ),
                    array(
                        'name'      => 'slide_image',
                        'label'     => 'Slider Image',
                        'type'      => 'image',
                        'value'     => 'https://demo.wponepager.com/wp-content/uploads/2020/03/slider-book.png'
                    )
                ),
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
            'name' => 'section_desc_font_size',
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
        array('label' => 'Slider Settings', 'type' => 'divider'),
        
        array(
			'name'     => 'animation',
			'label'    => 'Animation',
			'type'     => 'select',
			'value'    => 'slide',
			'options'  => array(
				'slide'   => 'Slide',
				'fade'   => 'Fade',
				'scale'  => 'Scale',
			),
        ),
        array(
			'name' => 'autoplay',
			'label' => 'Autoplay',
			'type' => 'switch',
			'value' => true,
        ),

        array(
            'name'      => 'min_height',
            'label'     => 'Minimum Height',
            'type'      => 'text',
            'value'     => '530',
            'append'    => 'px'
        ),

        array('label' => 'Slider Typography', 'type' => 'divider'), // Divider - Text
        array(
            'name' => 'slider_number_font_size',
            'label' => 'Label Font Size',
            'append' => 'px',
            'value' => '52',
        ),
        array(
            'name' => 'slider_num_font_weight',
            'label' => 'Label Font Weight',
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
            'name' => 'slider_title_font_size',
            'label' => 'Slider Title Font Size',
            'append' => 'px',
            'value' => '26',
        ),
        array(
            'name' => 'slider_title_font_weight',
            'label' => 'Slider Title Font Weight',
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
            'name' => 'slider_desc_font_size',
            'label' => 'Slider Description Font Size',
            'append' => 'px',
            'value' => '18',
        ),
        array(
            'name' => 'slider_desc_font_weight',
            'label' => 'Slider Description Font Weight',
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
            'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/slider-background.png',
        ),
        array(
            'name' => 'section_bg',
            'label' => 'Section Background Color',
            'type' => 'colorpicker',
            'value' => '#ffffff',
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
            'name' => 'slider_label_color',
            'label' => 'Slider Label Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),

        array(
            'name' => 'slider_title_color',
            'label' => 'Slider Title Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),

        array(
            'name' => 'slider_desc_color',
            'label' => 'Slider Description Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),

        array(
            'name' => 'slider_primary_bg_color',
            'label' => 'Slider Primary Color',
            'type' => 'colorpicker',
            'value' => '#4bb93e',
        ),
    )
);

