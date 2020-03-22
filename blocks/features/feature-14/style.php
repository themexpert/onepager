#<?php echo $id;?> {
    background-color: <?php echo $styles['section_bg'];?>;
}

#<?php echo $id;?> .content-wrapper h1.uk-heading-primary, #<?php echo $id;?> .content-wrapper h2.uk-heading-primary, #<?php echo $id;?> .content-wrapper h3.uk-heading-primary, #<?php echo $id;?> .content-wrapper h4.uk-heading-primary, #<?php echo $id;?> .content-wrapper h5.uk-heading-primary, #<?php echo $id;?> .content-wrapper h6.uk-heading-primary {
    font-size: <?php echo $settings['heading_size'] . 'px' ?>;
    line-height: <?php echo ($settings['heading_size'] + 10) . 'px' ?>;
    font-weight: <?php echo $settings['heading_font_weight'];?>;
    color: <?php echo $styles['main_heading'];?>;
}

#<?php echo $id;?> .content-wrapper h4.top-heading-text {
    font-size: <?php echo $settings['heading_top_size'] . 'px' ?>;
    line-height: <?php echo ($settings['heading_top_size'] + 10) . 'px' ?>;
    font-weight: <?php echo $settings['heading_top_font_weight']; ?>;
    color: <?php echo $styles['heading_top'];?>;
}

#<?php echo $id;?> .content-wrapper p.hero-desc {
    font-size: <?php echo $settings['desc_size'] . 'px' ?>;
    line-height: <?php echo ($settings['desc_size'] + 10) . 'px' ?>;
    font-weight: <?php echo $settings['desc_font_weight']; ?>;
    color: <?php echo $styles['hero_desc'];?>;
}

#<?php echo $id;?> .content-wrapper .op-button{
    font-size: <?php echo $settings['btn_size'] . 'px' ?>;
    font-weight: <?php echo $settings['btn_font_weight']; ?>;
    color: <?php echo $styles['button_color'];?>;
    border: 1px solid <?php echo $styles['button_bg'];?>;
    border-radius: 10px;
    background-color: <?php echo $styles['button_bg'];?>;
    box-shadow: 0px 4px 5px 0px <?php echo $styles['btn_box_shadow'];?>;
    transition: 400ms ease-in-out;
}

#<?php echo $id;?> .content-wrapper .op-button:hover{
    box-shadow: 0px -1px 5px 0px <?php echo $styles['btn_box_shadow'];?>;
}

@media(max-width: 960px){
    #<?php echo $id;?> .content-wrapper h1.uk-heading-primary, #<?php echo $id;?> .content-wrapper h2.uk-heading-primary, #<?php echo $id;?> .content-wrapper h3.uk-heading-primary, #<?php echo $id;?> .content-wrapper h4.uk-heading-primary, #<?php echo $id;?> .content-wrapper h5.uk-heading-primary, #<?php echo $id;?> .content-wrapper h6.uk-heading-primary {
        font-size: <?php echo (($settings['heading_size'] / 2) + 5) . 'px' ?>;
        line-height: <?php echo (($settings['heading_size'] / 2) + 15) . 'px' ?>;
    }

    #<?php echo $id;?> .content-wrapper h4.top-heading-text {
        font-size: <?php echo (($settings['heading_top_size'] / 2) + 5) . 'px' ?>;
        line-height: <?php echo (($settings['heading_top_size'] / 2) + 15) . 'px' ?>;
    }

    #<?php echo $id;?> .content-wrapper .op-button{
        font-size: <?php echo (($settings['btn_size'] / 2) + 4) . 'px' ?>;
    }

    
}

@media(max-width: 600px){
    #<?php echo $id;?>{
        background-position: bottom left;
    }
    #<?php echo $id;?> .content-wrapper h1.uk-heading-primary br, #<?php echo $id;?> .content-wrapper h2.uk-heading-primary br, #<?php echo $id;?> .content-wrapper h3.uk-heading-primary br, #<?php echo $id;?> .content-wrapper h4.uk-heading-primary br, #<?php echo $id;?> .content-wrapper h5.uk-heading-primary br, #<?php echo $id;?> .content-wrapper h6.uk-heading-primary br{
        display: none;
    }

    #<?php echo $id;?> .content-wrapper p.hero-desc br{
        display: none;
    }
}
