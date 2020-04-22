#<?php echo $id;?> {
    background: <?php echo $styles['section_bg']?>;
    background: no-repeat;
}


#<?php echo $id;?> .quote-wrapper {
    background: <?php echo $styles['quote_bg']?>;
}

#<?php echo $id;?> .image-wrapper img {
    object-fit: cover;
}

#<?php echo $id;?> .uk-heading-primary{
    font-size: <?php echo $settings['section_title_size'] . 'px';?>;
    line-height: <?php echo ($settings['section_title_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['section_title_font_weight'];?>;
    color: <?php echo $styles['section_title_color']?>;
}

#<?php echo $id;?> .primary-title-wrapper p{
    font-size: <?php echo $settings['section_text_size'] . 'px';?>;
    line-height: <?php echo ($settings['section_text_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['section_text_font_weight'];?>;
    color: <?php echo $styles['section_desc_color']?>;
}

#<?php echo $id;?> .quote-content h4{
    font-size: <?php echo $settings['quote_title_size'] . 'px';?>;
    line-height: <?php echo ($settings['quote_title_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['quote_title_font_weight'];?>;
    color: <?php echo $styles['quote_title_color']?>;
}

#<?php echo $id;?> .quote-content p{
    font-size: <?php echo $settings['quote_desc_size'] . 'px';?>;
    line-height: <?php echo ($settings['quote_desc_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['quote_desc_font_weight'];?>;
    color: <?php echo $styles['quote_desc_color']?>;
}


#<?php echo $id;?> .story-area h3{
    font-size: <?php echo $settings['story_title_size'] . 'px';?>;
    line-height: <?php echo ($settings['story_title_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['story_title_font_weight'];?>;
    color: <?php echo $styles['story_title_color']?>;
}

#<?php echo $id;?> .op-text p, #<?php echo $id;?> .op-text p a{
    margin: 0;
    font-size: <?php echo $settings['story_text_size'] . 'px';?>;
    line-height: <?php echo ($settings['story_text_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['story_text_font_weight'];?>;
    color: <?php echo $styles['story_desc_color']?>;
    transition: all 300ms ease-in-out;
}

#<?php echo $id;?> .op-text p a:hover{
    color: <?php echo $styles['story_link_color']?>;
}


@media(max-width: 768px){
    #<?php echo $id;?> .image-wrapper img {
        width: 100%;
    }
    
    #<?php echo $id;?> .quote-wrapper{
        margin-left: 30px;
    }
}

@media(max-width: 640px){
    #<?php echo $id;?> .uk-heading-primary{
        font-size: <?php echo (($settings['section_title_size'] / 2) + 10) . 'px';?>;
        line-height: <?php echo (($settings['section_title_size'] / 2) + 15) . 'px';?>;
    }

    #<?php echo $id;?> .op-margin-remove{
        margin:0;
    }
    
    #<?php echo $id;?> .op-text p a{
        margin: 0;
        font-size: <?php echo (($settings['story_text_size'] / 2) + 5) . 'px';?>;
        line-height: <?php echo (($settings['story_text_size'] / 2) + 10) . 'px';?>;
    }

}