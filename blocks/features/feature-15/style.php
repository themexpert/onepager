#<?php echo $id;?> {
    background: <?php echo $styles['bg_color'];?>
}
#<?php echo $id;?> .section-heading h1.uk-heading-primary, #<?php echo $id;?> .section-heading h2.uk-heading-primary, #<?php echo $id;?> .section-heading h3.uk-heading-primary, #<?php echo $id;?> .section-heading h4.uk-heading-primary, #<?php echo $id;?> .section-heading h5.uk-heading-primary, #<?php echo $id;?> .section-heading h6.uk-heading-primary{
    font-size: <?php echo $settings['section_title_size'] . 'px'; ?>;
    line-height: <?php echo ($settings['section_title_size'] + 10) . 'px'; ?>;
    font-weight: <?php echo $settings['section_title_font_weight'];?>;
    color: <?php echo $styles['section_title_color'];?>;
}
#<?php echo $id;?> .section-heading p {
    font-size: <?php echo $settings['section_description_size'] . 'px';?>;
    line-height: <?php echo ($settings['section_description_size'] + 10) . 'px';?>;
    color: <?php echo $styles['section_desc_color'];?>;
}


#<?php echo $id;?> .single-content-wrapper h2 {
    font-size: <?php echo $settings['item_font_size'] . 'px';?>;
    line-height: <?php echo ($settings['item_font_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['item_font_weight'];?>;
    color: <?php echo $styles['item_title_color'];?>;
}

#<?php echo $id;?> .single-content-wrapper p.service-desc {
    font-size: <?php echo $settings['item_desc_font'] . 'px';?>;
    line-height: <?php echo ($settings['item_desc_font'] + 10) . 'px';?>;
    color: <?php echo $styles['item_desc_color'];?>;
}


@media only screen and (max-width: 600px) { 
    #<?php echo $id;?> .section-heading h1.uk-heading-primary, #<?php echo $id;?> .section-heading h2.uk-heading-primary, #<?php echo $id;?> .section-heading h3.uk-heading-primary, #<?php echo $id;?> .section-heading h4.uk-heading-primary, #<?php echo $id;?> .section-heading h5.uk-heading-primary, #<?php echo $id;?> .section-heading h6.uk-heading-primary{
        font-size: <?php echo (($settings['section_title_size'] / 2) + 5) . 'px'; ?>;
        line-height: <?php echo (($settings['section_title_size'] / 2) + 15) . 'px'; ?>;
    }
    
    #<?php echo $id;?> .section-heading p br{
        display: none;
    }
    #<?php echo $id;?> .single-content-wrapper p.service-desc br{
        display: none;
    }

    #<?php echo $id;?> .single-content-wrapper h2 {
        font-size: <?php echo (($settings['item_font_size'] / 2) + 5) . 'px';?>;
        line-height: <?php echo (($settings['item_font_size'] / 2) + 15) . 'px';?>;
    }
}
