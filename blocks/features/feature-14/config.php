<?php

return array(
    'slug'      => 'feature-14',
    'groups'    => array('features'),
    'type'    => 'new',
    'contents'  => array(
        array(
            'name'      => 'top_subheading',
            'label'     => 'Heading Top Text',
            'value'     => 'Welcome to the Onepager Education Theme'
        ),
        array(
            'name'      => 'main_heading',
            'label'     => 'Heading',
            'value'     => 'Best Learning Management<br/> System for Wordpress'
        ),
        array(
            'name'      => 'desc',
            'label'     => 'Description',
            'type'      => 'textarea',
            'value'     => '"This book is written with the sole objective of helping the reader<br/> achieve a happy, satisfying, and worthwhile life."'
        ),
        array(
            'name'      => 'cta_link',
            'text'      => 'LEARN MORE',
            'url'       => '#',
            'type'      => 'link'
        )
    ),
    'settings'  => array(
        array(
            'name' => 'heading_top_size',
            'label' => 'Heading Top Font Size',
            'append' => 'px',
            'value' => '20',
        ),
        array(
            'name' => 'heading_top_font_weight',
            'label' => 'Heading Top Font Weight',
            'type' => 'select',
            'value' => '500',
            'options' => array(
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
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
            'name' => 'heading_size',
            'label' => 'Heading Font Size',
            'append' => 'px',
            'value' => '52',
        ),

        array(
            'name' => 'heading_font_weight',
            'label' => 'Heading Font Weight',
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
            'name'     => 'content_animation',
            'label'    => 'Animation ',
            'type'     => 'select',
            'value'    => '0',
            'options'  => array(        
              '0'                     =>  'None',
              'fade'                  =>  'Fade',
              'scale-up'              =>  'Scale Up',
              'scale-down'            =>  'Scale Down',
              'slide-top-small'       =>  'Slide Top Small',
              'slide-bottom-small'    =>  'Slide Bottom Small',
              'slide-left-small'      =>  'Slide Left Small',
              'slide-right-small'     =>  'Slide Right Small',
              'slide-top-medium'      =>  'Slide Top Medium',
              'slide-bottom-medium'   =>  'Slide Bottom Medium',
              'slide-left-medium'     =>  'Slide Left Medium',
              'slide-right-medium'    =>  'Slide Right Medium',
              'slide-top'             =>  'Slide Top 100%',
              'slide-bottom'          =>  'Slide Bottom 100%',
              'slide-left'            =>  'Slide Left 100%',
              'slide-right'           =>  'Slide Right 100%'
      
            ),
          ),
        array(
            'name' => 'desc_size',
            'label' => 'Description Font Size',
            'append' => 'px',
            'value' => '18',
        ),

        array(
            'name' => 'desc_font_weight',
            'label' => 'Description Font Weight',
            'type' => 'select',
            'value' => '400',
            'options' => array(
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),
        array(
            'name' => 'btn_size',
            'label' => 'Button Font Size',
            'append' => 'px',
            'value' => '15',
        ),

        array(
            'name' => 'btn_font_weight',
            'label' => 'Button Font Weight',
            'type' => 'select',
            'value' => '600',
            'options' => array(
                '400' => '400',
                '500' => '500',
                '600' => '600',
                '700' => '700',
            ),
        ),

        
    ),
    'styles'    => array(
        array(
            'name'    => 'bg_image',
            'label'   => 'Background',
            'type'    => 'image',
            'value'   => 'https://demo.wponepager.com/wp-content/uploads/2020/03/Hero-1.jpg'
          ),
        array(
            'name'=>'bg_parallax',
            'type'=> 'switch',
            'label'=>'Parallax Background'
          ),
        array(
            'name'     => 'bg_image_size',
            'label'    => 'Size',
            'type'     => 'select',
            'value'    => 'uk-background-cover',
            'options'  => array(
              'uk-background-contain'   => 'Contain',
              'uk-background-cover'     => 'Cover',
            ),
          ),
        array(
            'name'  => 'section_bg',
            'label' => 'Section Background',
            'type'  => 'colorpicker',
            'value' => '#fff3f5'
        ),
        array(
            'name'  => 'heading_top',
            'label' => 'Top Heading Color',
            'type'  => 'colorpicker',
            'value' => '#142b45'
        ),
        array(
            'name'  => 'main_heading',
            'label' => 'Main Heading Color',
            'type'  => 'colorpicker',
            'value' => '#142b45'
        ),
        array(
            'name'  => 'hero_desc',
            'label' => 'Description Color',
            'type'  => 'colorpicker',
            'value' => '#142b45'
        ),
        array(
            'name'  => 'button_color',
            'label' => 'Button Text Color',
            'type'  => 'colorpicker',
            'value' => '#142b45'
        ),
        array(
            'name'  => 'button_bg',
            'label' => 'Button Background Color',
            'type'  => 'colorpicker',
            'value' => 'rgb(255, 255, 255)'
        ),
        array(
            'name'  => 'btn_box_shadow',
            'label' => 'Button Box Shadow',
            'type'  => 'colorpicker',
            'value' => 'rgba(251, 136, 159, 0.35)'
        ),
    )
);