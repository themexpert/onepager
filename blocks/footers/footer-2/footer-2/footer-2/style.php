#<?php echo $id; ?> {
    background-color: <?php echo $styles['bg_color']; ?>
}
#<?php echo $id; ?> .content-wrapper {
    padding-bottom: 100px;
}
#<?php echo $id; ?> h1.footer-main-heading, #<?php echo $id; ?> h2.footer-main-heading, #<?php echo $id; ?> h3.footer-main-heading, #<?php echo $id; ?> h4.footer-main-heading, #<?php echo $id; ?> h5.footer-main-heading, #<?php echo $id; ?> h6.footer-main-heading{
    <?php echo $settings['section_title_size'] ? 'font-size: ' . $settings['section_title_size'] . 'px' : ''; ?>;
    <?php echo $settings['section_title_size'] ? 'line-height: ' . ($settings['section_title_size'] + 10) . 'px' : ''; ?>;
    font-weight: <?php echo $settings['title_font_weight']; ?>;
    color: <?php echo $styles['section_heading_color']; ?>;
}

#<?php echo $id; ?> h2.sub-heading{
    <?php echo $settings['subheading_size'] ? 'font-size: ' . $settings['subheading_size'] . 'px' : ''; ?>;
    <?php echo $settings['subheading_size'] ? 'line-height: ' . ($settings['subheading_size'] + 15) . 'px' : ''; ?>;
    font-weight: <?php echo $settings['subhead_font_weight']; ?>;
    color: <?php echo $styles['subheading_color']; ?>;
}

#<?php echo $id; ?> h2.sub-heading span{
    color: <?php echo $styles['subheading_highlighted']; ?>
}
#<?php echo $id; ?> .footer-icon {
    position: relative;
}

#<?php echo $id; ?> .footer-icon::before {
    content: "";
    position: absolute;
    width: 40%;
    border: 1px dashed <?php echo $styles['icon_border']; ?>;
    left: 0;
    top: 50%;
    z-index: 0;
}

#<?php echo $id; ?> .footer-icon::after{
    content: "";
    position: absolute;
    width: 40%;
    border: 1px dashed <?php echo $styles['icon_border']; ?>;
    right: 0;
    top: 50%;
}

#<?php echo $id; ?> .footer-icon > a {
    display: inline-block;
    background: <?php echo $styles['icon_bg']; ?>;
    color: <?php echo $styles['icon_color'] ?>;
    border-radius: 50%;
    width: 120px;
    height: 120px;
    outline: 40px solid <?php echo $styles['bg_color']; ?>;
    z-index: 99;
    transition: all 300ms ease-in-out;
}

#<?php echo $id; ?> .footer-icon > a:hover {
    background: <?php echo $styles['icon_bg_hover']; ?>;
    color: <?php echo $styles['icon_color_hover'] ?>;
}

#<?php echo $id; ?> .footer-icon > a span {
    line-height: 1.9em;
}

@media(max-width:960px){
    #<?php echo $id; ?> h1.footer-main-heading, #<?php echo $id; ?> h2.footer-main-heading, #<?php echo $id; ?> h3.footer-main-heading, #<?php echo $id; ?> h4.footer-main-heading, #<?php echo $id; ?> h5.footer-main-heading, #<?php echo $id; ?> h6.footer-main-heading{
        <?php echo $settings['section_title_size'] ? 'font-size: ' . (($settings['section_title_size'] / 2) + 10) . 'px' : ''; ?>;
        <?php echo $settings['section_title_size'] ? 'line-height: ' . (($settings['section_title_size'] / 2) + 10) . 'px' : ''; ?>;

    }

    #<?php echo $id; ?> h2.sub-heading{
        <?php echo $settings['subheading_size'] ? 'font-size: ' . $settings['subheading_size'] . 'px' : ''; ?>;
        <?php echo $settings['subheading_size'] ? 'line-height: ' . ($settings['subheading_size'] + 15) . 'px' : ''; ?>;

    }

    #<?php echo $id; ?> .footer-icon{
        margin-bottom: 150px;
    }

    #<?php echo $id; ?> .footer-icon::before {
        width: 30%;
        left: 8%;
       }

    #<?php echo $id; ?> .footer-icon::after{
        width: 30%;
        right: 8%;
    }

}
@media(max-width:500px){

#<?php echo $id; ?> .footer-icon > a{
    width: 80px;
    height: 80px;

}

#<?php echo $id; ?> .footer-icon > a span {
    font-size: 40px;
    line-height: 2.2em;
}

#<?php echo $id; ?> .footer-icon::before {
        width: 28%;
        left: 5%;

       }

    #<?php echo $id; ?> .footer-icon::after{
        width: 28%;
        right: 5%;
    }

}