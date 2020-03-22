<?php

return array(
    'slug'  => 'blog-6',
    'groups'    => array('blogs'),
    'contents'  => array(
        array(
            'name' => 'title',
            'value' => 'Latest From The Blog',
        ),
        array(
            'name'  => 'desc',
            'type'  => 'textarea',
            'value' => 'Proin ac lobortis arcu, a vestibulum augue. Vivamus ipsum neque, facilisis vel <br/>
            mollis vitae, mollis nec ante. Quisque aliquam dictum condim.'
        ),
        array(
            'name' => 'category',
            'type' => 'category',
        ),
        array(
            'name' => 'total_posts',
            'label' => 'Total Posts',
            'value' => '3',
        ),
        array(
            'name' => 'text_limit',
            'label' => 'Excerpt Length',
            'value' => 20,
        ),
        array(
            'name' => 'readmore_text',
            'label' => 'Read More',
            'value' => 'Read More',
        ),
        array(
            'name'  => 'all_post',
            'text'  => 'ALL POST',
            'url'   => '#',
            'type'  => 'link'
        ),
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
            'name' => 'img_border_radius',
            'label' => 'Image Border Radius',
            'append' => 'px',
            'value' => '3',
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
            'name' => 'title_transformation',
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
            'name' => 'meta_font',
            'label' => 'Meta Font Size',
            'append' => 'px',
            'value' => '14',
        ),
        array(
            'name' => 'meta_font_weight',
            'label' => 'Meta Font Weight',
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
            'name' => 'btn_font_size',
            'label' => 'Button Font Size',
            'append' => 'px',
            'value' => '15',
        ),
        array(
            'name' => 'btn_font_weight',
            'label' => 'Button Font Weight',
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
            'name' => 'btn_text_transformation',
            'label' => 'Button Text Transformation',
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
            'name' => 'post_btn_font',
            'label' => 'All Post Font',
            'append' => 'px',
            'value' => '16',
        ),

        array(
            'name' => 'all_post_font_weight',
            'label' => 'Post Button Font Weight',
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
            'label'     => 'Post Button Radius',
            'append'    => 'px',
            'value'     => '5',
        ),

        array(
            'name' => 'blog_item_animation',
            'label' => 'Blog Animation',
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
            'name' => 'blog_meta_color',
            'label' => 'Blog Meta Color',
            'type' => 'colorpicker',
            'value' => '#72808f',
        ),
        array(
            'name' => 'blog_title_color',
            'label' => 'Blog Title Color',
            'type' => 'colorpicker',
            'value' => '#1d4251',
        ),
        array(
            'name' => 'btn_color',
            'label' => 'Button Color',
            'type' => 'colorpicker',
            'value' => '#1d4251',
        ),
        array(
            'name' => 'btn_color_hover',
            'label' => 'Button Hover Color',
            'type' => 'colorpicker',
            'value' => '#ff5678',
        ),

        array(
            'name' => 'all_post_btn_bg',
            'label' => 'Post Button BG Color',
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
