<?php

return array(
    'slug'  => 'feature-18',
    'groups'    => array('features'),
    'type'    => 'new',
    'contents'  => array(
        array(
            'name' => 'section_title',
            'value' => 'Popular Online Courses',
        ),
        array(
            'name'  => 'section_desc',
            'type'  => 'textarea',
            'value' => 'Proin ac lobortis arcu, a vestibulum augue. Vivamus ipsum neque, facilisis vel<br/> 
            mollis vitae, mollis nec ante. Quisque aliquam dictum condim.'
        ),
        array(
            'name'  => 'online_courses',
            'type'  => 'repeater',
            'fields'    => array(
                array(
                    array('name' => 'image', 'label' => 'Image', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/course-image-1.jpg'),
                    array('name' => 'title', 'label' => 'Title', 'value' => 'IT Foundations'),
                    array('name' => 'desc', 'label' => 'Description', 'value' => 'The precursor to The Secret, The Power of Positive Thinking has helped millions of men.'),
                    array('name' => 'author', 'label' => 'Author Name', 'value' => 'Jacke Masito'),
                    array('name' => 'student_num', 'label' => 'Number of Student', 'append' => 'Students', 'value' => 112),
                    array('name' => 'rating', 'label' => 'Course Rating', 'append' => 'Star Rating', 'value' => 5),
                    array('name' => 'course_link', 'label' => 'Item Link', 'value' => '#', 'placeholder' => home_url())
                ),
                array(
                    array('name' => 'image', 'label' => 'Image', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/course-image-2.jpg'),
                    array('name' => 'title', 'label' => 'Title', 'value' => 'Basic Marketing'),
                    array('name' => 'desc', 'label' => 'Description', 'value' => 'The precursor to The Secret, The Power of Positive Thinking has helped millions of men.'),
                    array('name' => 'author', 'label' => 'Author Name', 'value' => 'Jacke Masito'),
                    array('name' => 'student_num', 'label' => 'Number of Student', 'append' => 'Students', 'value' => 112),
                    array('name' => 'rating', 'label' => 'Course Rating', 'append' => 'Star Rating', 'value' => 5),
                    array('name' => 'course_link', 'label' => 'Item Link', 'value' => '#', 'placeholder' => home_url())
                ),
                array(
                    array('name' => 'image', 'label' => 'Image', 'type' => 'image', 'value' => 'https://demo.wponepager.com/wp-content/uploads/2020/03/course-image-3.jpg'),
                    array('name' => 'title', 'label' => 'Title', 'value' => 'Web Technology'),
                    array('name' => 'desc', 'label' => 'Description', 'value' => 'The precursor to The Secret, The Power of Positive Thinking has helped millions of men.'),
                    array('name' => 'author', 'label' => 'Author Name', 'value' => 'Jacke Masito'),
                    array('name' => 'student_num', 'label' => 'Number of Student', 'append' => 'Students', 'value' => 112),
                    array('name' => 'rating', 'label' => 'Course Rating', 'append' => 'Star Rating', 'value' => 5),
                    array('name' => 'course_link', 'label' => 'Item Link', 'value' => '#', 'placeholder' => home_url())
                )
            )
        ),
        array(
            'name'      => 'courses_link',
            'label'     => 'Button',
            'text'      => 'VIEW ALL COURSES',
            'type'      => 'link',
            'url'       => '#'
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
            'label' => 'Section Font Size',
            'append' => 'px',
            'value' => '52',
        ),
        array(
            'name' => 'section_description_size',
            'label' => 'Description Font Size',
            'append' => 'px',
            'value' => '18',
        ),
        array(
            'name' => 'section_title_font_weight',
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
            'name' => 'section_title_transformation',
            'label' => 'Title Transformation',
            'type' => 'select',
            'value' => 'inherit',
            'options' => array(
                'inherit' => 'Default',
                'lowercase' => 'Lowercase',
                'uppercase' => 'Uppercase',
                'capitalize' => 'Capitalized',
            ),
        ),

        array(
            'name' => 'title_alignment',
            'label' => 'Title Alignment',
            'type' => 'select',
            'value' => 'center',
            'options' => array(
                'left' => 'Left',
                'center' => 'Center',
                'right' => 'Right',
                'justify' => 'Justify',
            ),
        ),
        array(
            'name' => 'title_animation',
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

        array('label' => 'Blog Item', 'type' => 'divider'),
        array(
            'name' => 'img_border_radius',
            'label' => 'Image Border Radius',
            'append' => 'px',
            'value' => '4',
        ),

        array(
            'name' => 'blog_font_size',
            'label' => 'Blog Title Font Size',
            'append' => 'px',
            'value' => '32',
        ),
        array(
            'name' => 'blog_font_weight',
            'label' => 'Blog Title Font Weight',
            'type' => 'select',
            'value' => '700',
            'options' => array(
                '300' => '300',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),
        array(
            'name' => 'blog_title_transformation',
            'label' => 'Blog Title Transformation',
            'type' => 'select',
            'value' => 'inherit',
            'options' => array(
                'inherit' => 'Default',
                'lowercase' => 'Lowercase',
                'uppercase' => 'Uppercase',
                'capitalize' => 'Capitalized',
            ),
        ),

        array(
            'name' => 'author_meta_font',
            'label' => 'Author Meta Font Size',
            'append' => 'px',
            'value' => '14',
        ),
        array(
            'name' => 'author_meta_font_weight',
            'label' => 'Author Meta Font Weight',
            'type' => 'select',
            'value' => '300',
            'options' => array(
                '300' => '300',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),

        array(
            'name' => 'blog_desc_font',
            'label' => 'Description Font Size',
            'append' => 'px',
            'value' => '18',
        ),
        array(
            'name' => 'blog_desc_font_weight',
            'label' => 'Description Font Weight',
            'type' => 'select',
            'value' => '300',
            'options' => array(
                '300' => '300',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),

        array(
            'name' => 'course_meta_font',
            'label' => 'Course Meta Font Size',
            'append' => 'px',
            'value' => '14',
        ),
        array(
            'name' => 'course_meta_font_weight',
            'label' => 'Course Meta Font Weight',
            'type' => 'select',
            'value' => '300',
            'options' => array(
                '300' => '300',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),


        array(
            'name' => 'post_btn_font',
            'label' => 'Button Font',
            'append' => 'px',
            'value' => '16',
        ),

        array(
            'name' => 'all_post_font_weight',
            'label' => 'Button Font Weight',
            'type' => 'select',
            'value' => '500',
            'options' => array(
                '300' => '300',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),
        array(
            'name'      => 'post_btn_radius',
            'label'     => 'Button Border Radius',
            'append'    => 'px',
            'value'     => '5',
        ),

        array(
            'name' => 'content_animation',
            'label' => 'Content Animation',
            'type' => 'select',
            'value' => 'fadeInUp',
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
            'name' => 'bg_color',
            'label' => 'Background Color',
            'type' => 'colorpicker',
            'value' => '#ffffff',
        ),

        array(
            'name' => 'section_title_color',
            'label' => 'Section Font Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),
        array(
            'name' => 'section_desc_color',
            'label' => 'Section Desc Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),
        array(
            'name' => 'blog_title_color',
            'label' => 'Item Title Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),
        array(
            'name' => 'blog_meta_color',
            'label' => 'Item Meta Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),
        array(
            'name' => 'blog_desc',
            'label' => 'Item Description Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),
        array(
            'name' => 'course_meta_color',
            'label' => 'Course Meta Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),

        array(
            'name' => 'course_border_meta_color',
            'label' => 'Course Border Color',
            'type' => 'colorpicker',
            'value' => '#142b45',
        ),
        
        array(
            'name' => 'all_post_btn_bg',
            'label' => 'Button BG Color',
            'type' => 'colorpicker',
            'value' => 'rgb(255, 255, 255)',
        ),
        array(
            'name' => 'all_post_btn_bg_hover',
            'label' => 'Box Shadow Color',
            'type' => 'colorpicker',
            'value' => 'rgba(251, 136, 159, 0.35)',
        ),
    ),
);
