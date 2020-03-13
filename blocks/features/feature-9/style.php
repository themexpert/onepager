#<?php echo $id; ?>{
    background-color: <?php echo $styles['bg_color']; ?>;
}
#<?php echo $id; ?> h1.uk-heading-primary, #<?php echo $id; ?> h2.uk-heading-primary, #<?php echo $id; ?> h3.uk-heading-primary, #<?php echo $id; ?> h4.uk-heading-primary, #<?php echo $id; ?> h5.uk-heading-primary, #<?php echo $id; ?> h6.uk-heading-primary{
    font-weight: <?php echo $settings['title_font_weight'] ?>;
    font-size: <?php echo $settings['title_size'] ?>px;
    line-height: <?php echo ($settings['title_size'] + 10) ?>px;
    color: <?php echo $styles['title_color'] ?>;
}

#<?php echo $id; ?> p.feature-9-text{
    font-weight: <?php echo $settings['text_font_weight']; ?>;
    font-size: <?php echo $settings['text_size'] ?>px;
    line-height: <?php echo ($settings['text_size'] + 10) ?>px;
    color: <?php echo $styles['text_color']; ?>;
}
#<?php echo $id; ?> .award-section div {
    width: 100px;
    height: auto;
}

#<?php echo $id; ?>  .award-section-wrapper{
    background-color: <?php echo $styles['right_box_bg']; ?>;
    padding-left: 8%;
}

#<?php echo $id; ?> .image-wrapper {
    transform: translateX(14%);
}

#<?php echo $id; ?> h3.tx-heading-border{
    position: relative;
    <?php echo $settings['award_font_weight'] ? 'font-weight: ' . $settings['award_font_weight'] : ''; ?>;
    <?php echo $settings['award_text_size'] ? 'font-size: ' . $settings['award_text_size'] . 'px' : '' ?>;
    <?php echo $settings['award_text_size'] ? 'line-height: ' . ($settings['award_text_size'] + 10) . 'px' : '' ?>;
    color: <?php echo $styles['award_color']; ?>;
}
#<?php echo $id; ?> h3.tx-heading-border::before {
    content: '';
    width: 20%;
    height: 2px;
    background: <?php echo $styles['award_border_color']; ?>;
    position: absolute;
    top: 18px;
    left: 22%;
}

#<?php echo $id; ?> h3.tx-heading-border::after {
    content: '';
    width: 20%;
    height: 2px;
    background: <?php echo $styles['award_border_color']; ?>;
    position: absolute;
    top: 18px;
    right: 22%;
}

#<?php echo $id; ?> .z-99{
    z-index: 99;
}

@media(max-width:960px){
    #<?php echo $id; ?> h1.uk-heading-primary, #<?php echo $id; ?> h2.uk-heading-primary, #<?php echo $id; ?> h3.uk-heading-primary, #<?php echo $id; ?> h4.uk-heading-primary, #<?php echo $id; ?> h5.uk-heading-primary, #<?php echo $id; ?> h6.uk-heading-primary{
        font-size: <?php echo ($settings['title_size'] / 2) + 10 ?>px;
        line-height: <?php echo ($settings['title_size'] / 2) + 15 ?>px;
    }

    #<?php echo $id; ?> .image-wrapper {
        transform: translateX(0);
    }
    #<?php echo $id; ?> .image-wrapper img{
        width: 100%;
    }
    #<?php echo $id; ?> .uk-section{
        padding: 0;
    }
    #<?php echo $id; ?> .tx-remove-margin {
       margin-top: 0!important;
    }

    #<?php echo $id; ?> h3.tx-heading-border::before {
        left: 18%;
    }
    #<?php echo $id; ?> h3.tx-heading-border::after {
        right: 18%;
    }
}