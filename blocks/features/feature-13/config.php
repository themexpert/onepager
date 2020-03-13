<?php

return array(
    'slug' => 'feature-13',
    'groups' => array('features'),
    'contents' => array(
        array(
            'name' => 'section_title',
            'label' => 'Title',
            'value' => 'Meet Our Attorneys',
        ),
        array(
            'name' => 'sub_heading',
            'type' => 'repeater',
            'fields' => array(
                array(
                    array('name' => 'image', 'label' => 'Attorneys Image', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/team1.jpg'),
                    array('name' => 'name', 'label' => 'Name', 'value' => 'Marisa Goldberg'),
                    array('name' => 'designation', 'label' => 'Designation', 'value' => 'Bank & Financial Lawyer'),
                    array('name' => 'desc', 'label' => 'Description', 'type' => 'editor', 'value' => 'The trial lawyers at Arnold & Itkin LLP are known for the unique blend of skill, energy, and passion they bring to each and every case.'),
                    array('name' => 'contact', 'text' => 'Contact Link', 'type' => 'link', 'placeholder' => home_url()),
                ),
                array(
                    array('name' => 'image', 'label' => 'Attorneys Image', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/team-2.jpg'),
                    array('name' => 'name', 'label' => 'Name', 'value' => 'Kevin Stiller'),
                    array('name' => 'designation', 'label' => 'Designation', 'value' => 'Senior Lawyer'),
                    array('name' => 'desc', 'label' => 'Description', 'type' => 'editor', 'value' => 'The trial lawyers at Arnold & Itkin LLP are known for the unique blend of skill, energy, and passion they bring to each and every case.'),
                    array('name' => 'contact', 'text' => 'Contact Link', 'type' => 'link', 'placeholder' => home_url()),
                ),
                array(
                    array('name' => 'image', 'label' => 'Attorneys Image', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/team-3.jpg'),
                    array('name' => 'name', 'label' => 'Name', 'value' => 'Jack Smith'),
                    array('name' => 'designation', 'label' => 'Designation', 'value' => 'Senior Lawyer'),
                    array('name' => 'desc', 'label' => 'Description', 'type' => 'editor', 'value' => 'The trial lawyers at Arnold & Itkin LLP are known for the unique blend of skill, energy, and passion they bring to each and every case.'),
                    array('name' => 'contact', 'text' => 'Contact Link', 'type' => 'link', 'placeholder' => home_url()),
                ),
            ),
        ),
    ),
    'settings' => array(
        array('label' => 'Heading', 'type' => 'divider'), // Divider - Text
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
            'value' => '40',
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
            'name' => 'content_animation',
            'label' => 'Animation',
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

        array('label' => 'Attorney', 'type' => 'divider'), // Divider - Text
        array(
            'name' => 'attorney_title_font',
            'type' => 'font',
            'label' => 'Title Fonts',
        ),
        array(
            'name' => 'attorney_title_size',
            'label' => 'Title Font Size',
            'append' => 'px',
            'value' => '30',
        ),
        array(
            'name' => 'attorney_designation_size',
            'label' => 'Designation Font Size',
            'append' => 'px',
            'value' => '16',
        ),
        array(
            'name' => 'attorney_title_font_weight',
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
            'name' => 'attorney_designation_font_weight',
            'label' => 'Designation Font Weight',
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
            'name' => 'attorney_title_transformation',
            'label' => 'Title Transformation',
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
            'name' => 'attorney_text_size',
            'label' => 'Text Font Size',
            'append' => 'px',
            'value' => '16',
        ),
        array(
            'name' => 'attorney_text_font_weight',
            'label' => 'Text Font Weight',
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
            'name' => 'attorney_button_size',
            'label' => 'Button Font Size',
            'append' => 'px',
            'value' => '16',
        ),
        array(
            'name' => 'attorney_button_font_weight',
            'label' => 'Button Font Weight',
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
            'name' => 'attorney_button_transformation',
            'label' => 'Button Text Transformation',
            'type' => 'select',
            'value' => '0',
            'options' => array(
                '0' => 'Default',
                'lowercase' => 'Lowercase',
                'uppercase' => 'Uppercase',
                'capitalize' => 'Capitalized',
            ),
        ),
    ),
    'styles' => array(
        array(
            'name' => 'bg_color',
            'label' => 'Background Color',
            'type' => 'colorpicker',
            'value' => '#f1f1f1',
        ),
        array(
            'name' => 'section_title_color',
            'label' => 'Section Title Color',
            'type' => 'colorpicker',
            'value' => '#132a46',
        ),
        array('label' => 'Attorney', 'type' => 'divider'), // Divider - Text
        array(
            'name' => 'title_color',
            'label' => 'Title Color',
            'type' => 'colorpicker',
            'value' => '#132a46',
        ),
        array(
            'name' => 'designation_color',
            'label' => 'Designation Color',
            'type' => 'colorpicker',
            'value' => '#132a46',
        ),
        array(
            'name' => 'text_color',
            'label' => 'Text Color',
            'type' => 'colorpicker',
            'value' => '#132a46',
        ),
        array(
            'name' => 'btn_bg',
            'label' => 'Button Background',
            'type' => 'colorpicker',
            'value' => '#29cb8b',
        ),
        array(
            'name' => 'btn_text',
            'label' => 'Button Text',
            'type' => 'colorpicker',
            'value' => '#ffffff',
        ),
        array(
            'name' => 'btn_bg_hover',
            'label' => 'Button Hover Background',
            'type' => 'colorpicker',
            'value' => '#ffffff',
        ),
        array(
            'name' => 'btn_text_hover',
            'label' => 'Button Hover Text',
            'type' => 'colorpicker',
            'value' => '#dd5346',
        ),

    ),
);
