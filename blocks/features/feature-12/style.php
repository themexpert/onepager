#<?php echo $id; ?> {
    background-color: <?php echo $styles['bg_color']; ?>
}
#<?php echo $id; ?> h1.uk-heading-primary, #<?php echo $id; ?> h2.uk-heading-primary, #<?php echo $id; ?> h3.uk-heading-primary, #<?php echo $id; ?> h4.uk-heading-primary, #<?php echo $id; ?> h5.uk-heading-primary, #<?php echo $id; ?> h6.uk-heading-primary {
    <?php echo $settings['title_font_size'] ? 'font-size: ' . $settings['title_font_size'] . 'px' : '' ?>;
    <?php echo $settings['title_font_size'] ? 'line-height: ' . ($settings['title_font_size'] + 10) . 'px' : '' ?>;
    font-weight: <?php echo $settings['title_font_weight'] ?>;
    color: <?php echo $styles['section_title_color'] ?>;
}

#<?php echo $id; ?> a.uk-button-primary{
    <?php echo $settings['section_button_size'] ? 'font-size: ' . $settings['section_button_size'] . 'px' : '' ?>;
    font-weight: <?php echo $settings['section_btn_font_weight'] ?>;
    background-color:<?php echo $styles['button_bg']; ?>;
    color: <?php echo $styles['button_color'] ?>;
    transition: all 300ms ease-in-out;
}

#<?php echo $id; ?> a.uk-button-primary:hover{
    background-color: <?php echo $styles['button_bg_hover'] ?>;
    color: <?php echo $styles['button_color_hover'] ?>;
}

#<?php echo $id; ?> .top-space{
    margin-top: 30px;
}

#<?php echo $id; ?> .hero-content-wrapper {
    width: 70%;
    margin: 0 auto;
}

@media only screen and (max-width: 960px) {
    #<?php echo $id; ?> .hero-content-wrapper{
        width: 100%;
    }
    #<?php echo $id; ?> .top-space{
        margin-top: 100px;
    }
    #<?php echo $id; ?> .hero-content-wrapper {
        padding-top: 60px;
    }
    #<?php echo $id; ?> h1.uk-heading-primary {
        <?php $settings['title_font_size'] ? 'font-size: ' . ($settings['title_font_size'] / 2) . 'px' : ''?>;
        <?php $settings['title_font_size'] ? 'line-height: ' . ($settings['title_font_size'] / 2) . 'px' : ''?>;
    }
    #<?php echo $id; ?> a.uk-button-primary{
        padding: 0 30px;
    }

}

@media only screen and (max-width: 640px){
    #<?php echo $id; ?> h1.uk-heading-primary, #<?php echo $id; ?> h2.uk-heading-primary, #<?php echo $id; ?> h3.uk-heading-primary, #<?php echo $id; ?> h4.uk-heading-primary, #<?php echo $id; ?> h5.uk-heading-primary, #<?php echo $id; ?> h6.uk-heading-primary {
        <?php echo $settings['title_font_size'] ? 'font-size: ' . (($settings['title_font_size'] / 2) + 10) . 'px' : '' ?>;
        <?php echo $settings['title_font_size'] ? 'line-height: ' . (($settings['title_font_size'] / 2) + 15) . 'px' : '' ?>;
    }
}
