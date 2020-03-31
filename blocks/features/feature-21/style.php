#<?php echo $id;?> {
    background: <?php echo $styles['section_bg'];?>;
}

#<?php echo $id;?> .content-wrapper h4{
    font-size: <?php echo $settings['top_tagline'] . 'px';?>;
    line-height: <?php echo ($settings['top_tagline'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['top_tagline_font_weight'];?>;
    color: <?php echo $styles['top_tagline'];?>;
}

#<?php echo $id;?> .uk-heading-primary{
    font-size: <?php echo $settings['section_title_size'] . 'px';?>;
    line-height: <?php echo ($settings['section_title_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['section_title_font_weight'];?>;
    color: <?php echo $styles['main_heading'];?>;
}

#<?php echo $id;?> .content-wrapper p{
    font-size: <?php echo $settings['desc_font_size'] . 'px';?>;
    line-height: <?php echo ($settings['desc_font_size'] + 10) . 'px';?>;
    color: <?php echo $styles['desc_color'];?>;
}
#<?php echo $id;?> .content-wrapper .button-wrapper .op-button{
    font-size: <?php echo $settings['btn_font_size'] . 'px';?>;
    font-weight: <?php echo $settings['btn_font_weight'];?>;
    color: <?php echo $styles['btn_text_color'];?>;
    background: <?php echo $styles['btn_bg'];?>;
    border: 1px solid <?php echo $styles['btn_text_color'];?>;
    transition: all 300ms ease-in-out;
}

#<?php echo $id;?> .content-wrapper .button-wrapper .op-button:hover{
    color: <?php echo $styles['btn_text_color_hover'];?>;
    background: <?php echo $styles['btn_bg_hover'];?>;
    border: 1px solid <?php echo $styles['btn_bg_hover'];?>;
}


#<?php echo $id;?> .tg-border-remove{
    border: none;
}

@media(max-width: 768px){
    #<?php echo $id;?> .uk-heading-primary{
        font-size: <?php echo (($settings['section_title_size'] / 2) + 10) . 'px';?>;
        line-height: <?php echo (($settings['section_title_size'] / 2) + 15) . 'px';?>;
    }
    #<?php echo $id;?> .content-wrapper .button-wrapper .op-button{
        font-size: <?php echo ($settings['btn_font_size'] - 5) . 'px';?>;
    }
}

@media(max-width: 640px){
    #<?php echo $id;?> .button-wrapper {
        flex-direction: column;
    }
    #<?php echo $id;?> .button-wrapper .op-button{
        margin-bottom: 15px;
    }
}