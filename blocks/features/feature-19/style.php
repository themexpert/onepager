#<?php echo $id;?> {
    background-color: <?php echo $styles['bg_color'];?>
}

#<?php echo $id;?> .uk-heading-primary{
    font-size: <?php echo $settings['section_title_size'] . 'px';?>;
    line-height: <?php echo ($settings['section_title_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['section_title_font_weight'];?>;
    color: <?php echo $styles['section_heading_color'];?>;
}

#<?php echo $id;?> .img-wrapper img{
    border-radius: <?php echo $settings['author_image_radius'];?>;
}

#<?php echo $id;?> .content-wrapper p{
    font-size: <?php echo $settings['rev_desc_size'] . 'px';?>;
    line-height: <?php echo ($settings['rev_desc_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['rev_desc_font_weight'];?>;
    color: <?php echo $styles['rev_desc_color'];?>;
}

#<?php echo $id;?> .author-meta h4{
    font-size: <?php echo $settings['rev_author_title_size'] . 'px';?>;
    line-height: <?php echo ($settings['rev_author_title_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['rev_author_title_font_weight'];?>;
    color: <?php echo $styles['rev_author_color'];?>;
}

#<?php echo $id;?> .author-meta p{
    font-size: <?php echo $settings['rev_author_pos_size'] . 'px';?>;
    line-height: <?php echo ($settings['rev_author_pos_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['rev_author_pos_font_weight'];?>;
    color: <?php echo $styles['rev_author_pos_color'];?>;
}


@media(max-width: 768px){
    #<?php echo $id;?> .uk-heading-primary{
        font-size: <?php echo (($settings['section_title_size'] / 2) + 5) . 'px';?>;
        line-height: <?php echo (($settings['section_title_size'] / 2) + 15) . 'px';?>;
        padding-top: 15px;
    }

    #<?php echo $id;?> .author-meta h4{
        font-size: <?php echo (($settings['rev_author_title_size'] / 2) + 7) . 'px';?>;
        line-height: <?php echo (($settings['rev_author_title_size'] / 2) + 15) . 'px';?>;
    }
}