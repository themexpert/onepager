#<?php echo $id;?> {
    background: <?php echo $styles['section_bg'];?>;
}

#<?php echo $id;?> .author-name a{
    position: relative;
    display: inline-block;
    font-size: <?php echo $settings['author_font_size'] . 'px';?>;
    line-height: <?php echo ($settings['author_font_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['author_font_weight'];?>;
    color: <?php echo $styles['author_color'];?>;
}
#<?php echo $id;?> .author-name a::before {
    position: absolute;
    content: "\25B6";
    width: 100%;
    top: 0;
    right: <?php echo ($settings['author_font_size'] + 6) . 'px';?>;
    color: <?php echo $styles['author_color'];?>;
}

#<?php echo $id;?> .author-name a::after {
    position: absolute;
    content: '';
    width: 100%;
    height: 1px;
    background: <?php echo $styles['author_color'];?>;
    top: 50%;
    right: 111%;
}
#<?php echo $id;?> h4.tagline{
    font-size: <?php echo $settings['Title_before_font_size'] . 'px';?>;
    line-height: <?php echo ($settings['Title_before_font_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['title_before_font_weight'];?>;
    color: <?php echo $styles['title_before_color'];?>;
}
#<?php echo $id;?> h4.tagline span.highlight{
    color: <?php echo $styles['title_before_highlight_color'];?>;
}

#<?php echo $id;?> h1.uk-heading-primary{
    font-size: <?php echo $settings['Title_font_size'] . 'px';?>;
    line-height: <?php echo ($settings['Title_font_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['title_font_weight'];?>;
    color: <?php echo $styles['title_color'];?>;
}

#<?php echo $id;?> .content-wrapper p{
    font-size: <?php echo $settings['desc_font_size'] . 'px';?>;
    line-height: <?php echo ($settings['desc_font_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['desc_font_weight'];?>;
    color: <?php echo $styles['desc_color'];?>;
}

#<?php echo $id;?> .content-wrapper a.op-button{
    font-size: <?php echo $settings['btn_font_size'] . 'px';?>;
    font-weight: <?php echo $settings['btn_font_weight'];?>;
    background: <?php echo $styles['btn_bg_color'];?>;
    border: 1px solid <?php echo $styles['btn_bg_color'];?>;
    color: <?php echo $styles['btn_color'];?>;
    transition: all 300ms ease-in-out;
}

#<?php echo $id;?> .content-wrapper a.op-button:hover{
    background: <?php echo $styles['btn_color'];?>;
    border: 1px solid <?php echo $styles['btn_color'];?>;
    color: <?php echo $styles['btn_bg_color'];?>;

}

@media(max-width: 768px){
    #<?php echo $id;?> .author-name a{
        left: 5%;
    }
}

@media(max-width: 640px){
    #<?php echo $id;?> .author-name a{
        top: 20px;
        left: 10%;
    }
}