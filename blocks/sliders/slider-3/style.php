#<?php echo $id;?> {
    background: <?php echo $styles['bg_color']; ?>;
}

#<?php echo $id;?> .uk-heading-primary{
    font-size: <?php echo $settings['title_size'] .  'px';?>;
    line-height: <?php echo ($settings['title_size'] + 10) .  'px';?>;
    font-weight: <?php echo $settings['title_font_weight']?>;
    color: <?php echo $styles['section_heading_color'];?>;
}

#<?php echo $id;?> .title-desc{
    font-size: <?php echo $settings['section_desc_size'] .  'px';?>;
    line-height: <?php echo ($settings['section_desc_size'] + 10) .  'px';?>;
    font-weight: <?php echo $settings['section_desc_font_weight']?>;
    color: <?php echo $styles['section_desc_color'];?>;
}

#<?php echo $id;?> .single-item{
    border-radius: 10px;
    background-color: rgb(255, 255, 255);
    box-shadow: 0px 4px 5px 0px rgba(204, 69, 96, 0.004);
}

#<?php echo $id;?> .single-slider-wrapper p{
    font-size: <?php echo $settings['slide_desc_font'] . 'px';?>;
    line-height: <?php echo ($settings['slide_desc_font'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['slide_desc_font_weight'];?>;
    color: <?php echo $styles['slide_desc_color'];?>;
}
#<?php echo $id;?> .single-slider-wrapper h4{
    font-size: <?php echo $settings['slide_title_font'] . 'px';?>;
    line-height: <?php echo ($settings['slide_title_font'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['slide_title_font_weight'];?>;
    color: <?php echo $styles['slide_title_color'];?>;
}

#<?php echo $id;?> .single-slider-wrapper span.designation{
    font-size: <?php echo $settings['slide_designation_font'] . 'px';?>;
    line-height: <?php echo ($settings['slide_designation_font'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['slide_designation_font_weight'];?>;
    color: <?php echo $styles['slide_designation_color'];?>;
}

#<?php echo $id;?> .single-slide-img{
    transition: all 400ms ease-in-out;
}

#<?php echo $id;?> .single-item:hover .single-slide-img {
    box-shadow: 0 0 6px 8px <?php echo $styles['slide_img_box_shadow'];?>;
}

#<?php echo $id;?> .right-navigation {
    right: -7%;
    background: <?php echo $styles['slide_nav_bg'];?>;
    height: 35px;
    width: 25px;
    border-radius: 50%;
    line-height: 34px;
    text-align: center;
    transition: all 300ms ease-in-out;
}

#<?php echo $id;?> .left-navigation {
    left: -7%;
    background: <?php echo $styles['slide_nav_bg'];?>;
    height: 35px;
    width: 25px;
    border-radius: 50%;
    line-height: 34px;
    text-align: center;
    transition: all 300ms ease-in-out;
}
#<?php echo $id;?> .right-navigation:hover, #<?php echo $id;?> .left-navigation:hover {
    box-shadow: 0 0 8px 5px <?php echo $styles['slide_nav_box_shadow'];?>;
}
#<?php echo $id;?> .left-navigation svg, #<?php echo $id;?> .right-navigation svg {
    height: 15px;
    color: black;
    position: relative;
    bottom: 1px;
    
}

@media(max-width: 600px){
    #<?php echo $id;?> .uk-heading-primary{
        font-size: <?php echo (($settings['title_size'] / 2) + 8) .  'px';?>;
        line-height: <?php echo (($settings['title_size'] / 2) + 15) .  'px';?>;
    }

    #<?php echo $id;?> p.title-desc br{
        display: none;
    }

    #<?php echo $id;?> .title-desc{
        font-size: <?php echo (($settings['section_desc_size'] / 2) + 7) .  'px';?>;
        line-height: <?php echo (($settings['section_desc_size'] / 2) + 15) .  'px';?>;
    }

    #<?php echo $id;?> .single-slider-wrapper p{
        font-size: <?php echo (($settings['slide_desc_font'] / 2) + 7) . 'px';?>;
        line-height: <?php echo (($settings['slide_desc_font'] / 2 ) + 16) . 'px';?>;
    }
    

}
