#<?php echo $id;?> {
    background-color: <?php echo $styles['bg_color'];?>;
}

#<?php echo $id;?> .subheading{
    <?php echo $settings['subtitle_size'] ? 'font-size: ' . $settings['subtitle_size']. 'px' : '';?>;
    <?php echo $settings['subtitle_size'] ? 'line-height: ' . ($settings['subtitle_size'] + 10) . 'px' : '';?>;
    font-weight: <?php echo $settings['title_font_weight']?>;
    color: <?php echo $styles['subheading_color']; ?>;

}

#<?php echo $id;?> .heading{
    <?php echo $settings['title_size'] ? 'font-size: ' . $settings['title_size']. 'px' : '';?>;
    <?php echo $settings['title_size'] ? 'line-height: ' . ($settings['title_size'] + 10) . 'px' : '';?>;
    font-weight: <?php echo $settings['title_font_weight']?>;
    color: <?php echo $styles['heading_color']; ?>;
}

#<?php echo $id;?> p{
    <?php echo $settings['desc_size'] ? 'font-size: ' . $settings['desc_size']. 'px' : '';?>;
    <?php echo $settings['desc_size'] ? 'line-height: ' . ($settings['desc_size'] + 10) . 'px' : '';?>;
    font-weight: <?php echo $settings['desc_font_weight']?>;
    color: <?php echo $styles['desc_color']; ?>;
}


#<?php echo $id;?> .button-group .learn-btn{
    <?php echo $settings['btn_size'] ? 'font-size: ' . $settings['btn_size']. 'px' : '';?>;
    <?php echo $settings['btn_size'] ? 'line-height: ' . ($settings['btn_size'] + 10) . 'px' : '';?>;
    font-weight: <?php echo $settings['btn_font_weight'];?>;
    background-color: <?php echo $styles['btn_bg_color']?>;
    box-shadow: 0px 4px 5px 0px <?php echo $styles['btn_shadow_color'];?>;
    border-radius: <?php echo $settings['btn_radius'] . 'px';?>;
    padding: 15px 30px;
    transition: all 300ms ease-in-out;
}

#<?php echo $id;?> .button-group .learn-btn:hover{
    box-shadow: 0px -1px 5px 0px <?php echo $styles['btn_shadow_color'];?>;
    color: <?php echo $styles['btn_hover_text_color'];?>;
}

@media(max-width: 768px){
    #<?php echo $id;?> .heading{
        <?php echo $settings['title_size'] ? 'font-size: ' . (($settings['title_size'] / 2) + 5) . 'px' : '';?>;
        <?php echo $settings['title_size'] ? 'line-height: ' . (($settings['title_size'] / 2) + 15) . 'px' : '';?>;
    }
    #<?php echo $id;?> .content-wrapper {
            padding: 30px;
        }

    #<?php echo $id;?> p br{
        display: none;
    }
}
