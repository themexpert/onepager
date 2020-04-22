#<?php echo $id?> {
    background: <?php echo $styles['section_bg'];?>;
}


#<?php echo $id?> .section-bg-text {
    position: absolute;
    left: 2%;
    top: 0;
}
#<?php echo $id?> .section-bg-text h2 {
    font-size: <?php echo $settings['section_bg_font_size'] . 'px';?>;
    line-height: <?php echo (($settings['section_bg_font_size'] / 2) + 20) . 'px';?>;
    font-weight: <?php echo $settings['section_bg_font_weight'];?>;
    color: <?php echo $styles['section_bg_title'];?>;
}

#<?php echo $id?> .content-wrapper .uk-heading-primary{
    font-size: <?php echo $settings['title_font_size'] . 'px';?>;
    line-height: <?php echo ($settings['title_font_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['title_font_weight'];?>;
    color: <?php echo $styles['section_title'];?>;
}

#<?php echo $id?> .content-wrapper p {
    font-size: <?php echo $settings['desc_font_size'] . 'px';?>;
    line-height: <?php echo ($settings['desc_font_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['desc_font_weight'];?>;
    color: <?php echo $styles['section_desc'];?>;
}

#<?php echo $id?> .content-wrapper h4.feature-title {
    font-size: <?php echo $settings['list_font_size'] . 'px';?>;
    line-height: <?php echo ($settings['list_font_size'] - 30) . 'px';?>;
    font-weight: <?php echo $settings['list_title_font_weight'];?>;
    color: <?php echo $styles['section_list_title'];?>;
}

#<?php echo $id?> .op-list li p {
    display: inline-block;
    position: relative;
    bottom: 4px;
    left: 4px;
    margin-top: 0;
    font-size: <?php echo $settings['list_font_size'] . 'px';?>;
    line-height: <?php echo ($settings['list_font_size'] - 30) . 'px';?>;
    font-weight: <?php echo $settings['list_font_weight'];?>;
}

#<?php echo $id?> .op-list li span.fa, #<?php echo $id?> .op-list li p{
    color: <?php echo $styles['section_list'];?>;
}


@media(max-width: 768px){
    #<?php echo $id?> .content-wrapper {
        padding-top: 60px;
    }

    #<?php echo $id?> .image-wrapper {
        margin-top: 50px;
    }
    #<?php echo $id?> .section-bg-text{
        top: -5px;
    }
    #<?php echo $id?> .section-bg-text h2{
        opacity: 0.8;
    }
}

@media(max-width: 640px){
    #<?php echo $id?> .section-bg-text h2 {
        font-size: <?php echo ($settings['section_bg_font_size'] / 2) . 'px';?>;
        line-height: <?php echo (($settings['section_bg_font_size'] / 3) + 10) . 'px';?>;
        font-weight: <?php echo $settings['section_bg_font_weight'];?>;
        color: #ffffff;
    }
    #<?php echo $id?> .op-list li p {
        font-size: <?php echo (($settings['list_font_size'] / 2) + 5) . 'px';?>;
        line-height: <?php echo (($settings['list_font_size'] / 2) + 10) . 'px';?>;
    }
}
