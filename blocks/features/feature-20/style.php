#<?php echo $id;?> {
    background-color: <?php echo $settings['section_bg'];?>;
}

#<?php echo $id;?> .heading-tagline{
    font-size: <?php echo $settings['top_tagline'] . 'px';?>;
    line-height: <?php echo $settings['top_tagline'] . 'px';?>;
    font-weight: <?php echo $settings['top_tagline_font_weight'];?>;
    color: <?php echo $styles['tagline_color']; ?>;
}

#<?php echo $id;?> .uk-heading-primary {
    font-size: <?php echo $settings['section_title_size'] . 'px';?>;
    line-height: <?php echo ($settings['section_title_size'] + 15) . 'px';?>;
    font-weight: <?php echo $settings['section_title_font_weight'];?>;
    color: <?php echo $styles['heading_color'];?>;
}

#<?php echo $id;?> p {
    font-size: <?php echo $settings['desc_font_size'] . 'px';?>;
    line-height: <?php echo ($settings['desc_font_size'] + 15) . 'px';?>;
    font-weight: <?php echo $settings['section_desc_font_weight'];?>;
    color: <?php echo $styles['text_color'];?>;
}





@media(max-width: 600px){
    #<?php echo $id;?> .uk-heading-primary{
        padding-top: 25px;
    }
}