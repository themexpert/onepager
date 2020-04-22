#<?php echo $id;?> {
    background: <?php echo $styles['bg_color'];?>;
}
#<?php echo $id;?> .section-heading .uk-heading-primary{
    font-size: <?php echo $settings['section_title_size'] . 'px'; ?>;
    line-height: <?php echo ($settings['section_title_size'] + 10) . 'px'; ?>;
    font-weight: <?php echo $settings['section_title_font_weight'];?>;
    color: <?php echo $styles['section_title_color'];?>;
}
#<?php echo $id;?> .uk-accordion-title::before{
    display: none!important;
}
#<?php echo $id;?> .single-accordion {
    border-bottom: 2px solid <?php echo $styles['tab_title_color'];?>;
    padding-bottom: 15px;
    transition: all 300ms linear;
}

#<?php echo $id;?> .single-accordion a{
    font-size: <?php echo $settings['tab_title_font_size'] . 'px'; ?>;
    line-height: <?php echo ($settings['tab_title_font_size'] + 10) . 'px'; ?>;
    font-weight: <?php echo $settings['tab_title_font_weight'];?>;
    color: <?php echo $styles['tab_title_color'];?>;
    transition: all 300ms linear;
}

#<?php echo $id;?> .single-accordion .uk-accordion-content p{
    font-size: <?php echo $settings['tab_desc_font_size'] . 'px'; ?>;
    line-height: <?php echo ($settings['tab_desc_font_size'] + 10) . 'px'; ?>;
    font-weight: <?php echo $settings['tab_desc_font_weight'];?>;
    color: <?php echo $styles['tab_desc_color'];?>;
    transition: all 300ms linear;
}

#<?php echo $id;?> .single-accordion:hover, #<?php echo $id;?> .single-accordion:hover a, #<?php echo $id;?> .single-accordion:hover .uk-accordion-content p{
    color: <?php echo $styles['hover_active_color'];?>;
    border-bottom-color: <?php echo $styles['hover_active_color'];?>;
}

#<?php echo $id;?> .uk-open, #<?php echo $id;?> .uk-open a, #<?php echo $id;?> .uk-open .uk-accordion-content p{
    color: <?php echo $styles['hover_active_color'];?>;
    border-bottom-color: <?php echo $styles['hover_active_color'];?>;
}
@media(max-width: 640px){
    #<?php echo $id;?> .section-heading .uk-heading-primary{
        font-size: <?php echo (($settings['section_title_size'] / 2) + 10) . 'px'; ?>;
        line-height: <?php echo (($settings['section_title_size'] / 2) + 15) . 'px'; ?>;
    }
    #<?php echo $id;?> .single-accordion a{
        font-size: <?php echo (($settings['tab_title_font_size'] / 2) + 10) . 'px'; ?>;
        line-height: <?php echo (($settings['tab_title_font_size'] / 2) + 15) . 'px'; ?>;
    }
}

