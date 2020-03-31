#<?php echo $id;?>{
    background: <?php echo $styles['section_bg'];?>;
    background-position: top center;
    background-repeat: no-repeat;
}

#<?php echo $id;?> .title-wrapper h1.uk-heading-primary{
    font-size: <?php echo $settings['section_title_size'] . 'px';?>;
    line-height: <?php echo ($settings['section_title_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['section_title_font_weight'];?>;
    color: <?php echo $styles['section_title_color'];?>;
}

#<?php echo $id;?> .title-wrapper p{
    font-size: <?php echo $settings['section_desc_font_size'] . 'px';?>;
    line-height: <?php echo ($settings['section_desc_font_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['section_desc_font_weight'];?>;
    color: <?php echo $styles['section_desc_color'];?>;
}

#<?php echo $id;?> .item-wrapper {
    border: 4px solid <?php echo $styles['slider_primary_bg_color'];?>;
}

#<?php echo $id;?> .slide-label {
    position: absolute;
    top: -<?php echo ($settings['slider_number_font_size'] + 10) . 'px';?>;
    left: 0;
    width: <?php echo ($settings['slider_number_font_size'] * 5) . 'px';?>;;
    text-align: center;
}

#<?php echo $id;?> .slide-label h2 {
    margin-bottom: 0;
    line-height: 1.4em;
    background: <?php echo $styles['slider_primary_bg_color'];?>;
    font-size: <?php echo $settings['slider_number_font_size'] . 'px';?>;
    line-height: <?php echo ($settings['slider_number_font_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['slider_num_font_weight'];?>;
    color: <?php echo $styles['slider_label_color'];?>;
}
#<?php echo $id;?> .item-wrapper h3{
    font-size: <?php echo $settings['slider_title_font_size'] . 'px';?>;
    line-height: <?php echo ($settings['slider_title_font_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['slider_title_font_weight'];?>;
    color: <?php echo $styles['slider_title_color'];?>;
}

#<?php echo $id;?> .item-wrapper p{
    font-size: <?php echo $settings['slider_desc_font_size'] . 'px';?>;
    line-height: <?php echo ($settings['slider_desc_font_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['slider_desc_font_weight'];?>;
    color: <?php echo $styles['slider_desc_color'];?>;
}


#<?php echo $id;?> ul.uk-slideshow-nav.uk-dotnav li a {
    background: <?php echo $styles['slider_primary_bg_color'];?>;
    opacity: 0.4;
}
#<?php echo $id;?> ul.uk-slideshow-nav.uk-dotnav li.uk-active a {
    border: 1px solid <?php echo $styles['slider_primary_bg_color'];?>;
    background: <?php echo $styles['slider_primary_bg_color'];?>;
    opacity: 1;
}

#<?php echo $id;?> .uk-slideshow-items {
    min-height: <?php echo $settings['min_height'] . 'px';?>!important;
}


@media(max-width: 768px){
    #<?php echo $id;?> .title-wrapper h1.uk-heading-primary{
        font-size: <?php echo (($settings['section_title_size'] / 2) + 10) . 'px';?>;
        line-height: <?php echo (($settings['section_title_size'] / 2) + 15) . 'px';?>;
    }
    #<?php echo $id;?> .slide-label h2 {
        font-size: <?php echo (($settings['slider_number_font_size'] / 2) + 10) . 'px';?>;
        line-height: <?php echo (($settings['slider_number_font_size'] / 2) + 15) . 'px';?>;
    }
    #<?php echo $id;?> .slide-label{
        top: -38px;
    }
    #<?php echo $id;?> .uk-slideshow-items {
        min-height: <?php echo ($settings['min_height'] + 220) . 'px';?>!important;
    }
    #<?php echo $id;?> .image-wrap{
        justify-content: flex-end;
    }
}

@media(max-width: 640px){
    #<?php echo $id;?> .slide-label {
        position: absolute;
        top: -<?php echo (($settings['slider_number_font_size'] / 2) + 10) . 'px';?>;
        left: 0;
        width: <?php echo (($settings['slider_number_font_size'] / 2) * 5) . 'px';?>;;
        text-align: center;
    }
    #<?php echo $id;?> .title-wrapper h1.uk-heading-primary{
        font-size: <?php echo ($settings['section_title_size'] / 2) . 'px';?>;
        line-height: <?php echo (($settings['section_title_size'] / 2) + 10) . 'px';?>;
    }
    #<?php echo $id;?> .slide-label h2 {
        font-size: <?php echo ($settings['slider_number_font_size'] / 2) . 'px';?>;
        line-height: <?php echo (($settings['slider_number_font_size'] / 2) + 10) . 'px';?>;
    }
    #<?php echo $id;?> .uk-slideshow-items {
        
    }
    #<?php echo $id;?> .image-wrap{
        justify-content: center;
    }

    #<?php echo $id;?> .item-wrapper::before {
        position: absolute;
        content: '';
        width: 0;
        height: 0;
        border-top: 50px solid #4bb93e;
        border-left: 35px solid transparent;
        border-right: 35px solid transparent;
        top: 100%;
        right: 42%;
    }
}