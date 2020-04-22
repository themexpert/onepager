#<?php echo $id; ?>{
    background-color: <?php echo $styles['bg_color']; ?>;
    <?php echo $styles['bg_size'] ? 'background-size: ' . $styles['bg_size'] : ''; ?>;
}
#<?php echo $id; ?> h1.quote-heading, #<?php echo $id; ?> h2.quote-heading, #<?php echo $id; ?> h3.quote-heading, #<?php echo $id; ?> h4.quote-heading{
	font-weight:<?php echo $settings['title_font_weight']; ?>;
    font-size: <?php echo $settings['title_size']; ?>px;
    line-height: <?php echo ($settings['title_size']) + 10; ?>px;
    display: inline-block;
    color: <?php echo $styles['title_color']; ?>
}
#<?php echo $id; ?> .quote-heading::before{
    content: '';
    width: 35px;
    position: absolute;
    height: 35px;
    border-top: 2px solid <?php echo $styles['title_color']; ?>;
    border-left: 2px solid <?php echo $styles['title_color']; ?>;
    left: -1%;
    top: -8%;
}
#<?php echo $id; ?> .quote-heading::after{
    content: '';
    position: absolute;
    width: 35px;
    height: 35px;
    right: -1%;
    bottom: -8%;
    border-bottom: 2px solid <?php echo $styles['title_color']; ?>;
    border-right: 2px solid <?php echo $styles['title_color']; ?>;
}

#<?php echo $id; ?> .list-wrapper li span.fa {
    padding-right: 10px;
}

#<?php echo $id; ?> .uk-card.uk-card-body h2 {
    <?php echo $styles['sub_heading_primary'] ? 'color: ' . $styles['sub_heading_primary'] : "" ?>
}
#<?php echo $id; ?> .uk-card.uk-card-body:nth-child(2n+1) h2 {
    <?php echo $styles['sub_heading_secondary'] ? 'color: ' . $styles['sub_heading_secondary'] : "" ?>
}


#<?php echo $id; ?> .uk-card.uk-card-body h2 {
    font-size: <?php echo $settings['subheading_bigger_size'] . 'px'; ?>;
    font-weight: <?php echo $settings['subheading_font_weight']; ?>;
}
#<?php echo $id; ?> .uk-card.uk-card-body h2 span.sub-head-tagline {
    font-size: <?php echo $settings['subheading_smaller_size'] . 'px'; ?>;
}

#<?php echo $id; ?> ul.uk-list li{
    font-size: <?php echo $settings['item_title_size'] . 'px'; ?>;
    color: <?php echo $styles['item_text_color'] ?>;
    font-weight: <?php echo $settings['item_font_weight']; ?>;
}
#<?php echo $id; ?> ul.uk-list li span.fa {
    color: <?php echo $styles['icon_color'] ?>;
}
#<?php echo $id; ?> .uk-button-primary{
    background-color: <?php echo $styles['btn_bg1']; ?>;
    color: <?php echo $styles['btn_text1']; ?>;
    font-weight: 700;
    transition: all 300ms ease-in-out;
}

#<?php echo $id; ?> .uk-button-default{
    background-color: <?php echo $styles['btn_bg2']; ?>;
    color: <?php echo $styles['btn_text2']; ?>;
    font-weight: 700;
    transition: all 300ms ease-in-out;
}

#<?php echo $id; ?> .uk-button-default:hover{
    background-color: <?php echo $styles['btn_bg1']; ?>;
    color: <?php echo $styles['btn_text1']; ?>;
    font-weight: 700;
}

#<?php echo $id; ?> .uk-button-primary:hover{
    background-color: <?php echo $styles['btn_bg2']; ?>;
    color: <?php echo $styles['btn_text2']; ?>;
    font-weight: 700;
}

#<?php echo $id; ?> .border-bottom {
    border-bottom: 1px dashed #dddddd;
}


@media(max-width:768px){

    #<?php echo $id; ?> h1.quote-heading, #<?php echo $id; ?> h2.quote-heading, #<?php echo $id; ?> h3.quote-heading, #<?php echo $id; ?> h4.quote-heading{
        font-size: <?php echo ($settings['title_size'] / 2) + 10; ?>px;
        line-height: <?php echo ($settings['title_size'] / 2) + 15; ?>px;
        padding: 8px;
    }
    #<?php echo $id; ?> .uk-card.uk-card-body h2 {
       font-size: <?php echo (($settings['subheading_bigger_size'] / 2) + 10) . 'px'; ?>;
    }
    #<?php echo $id; ?> .uk-card.uk-card-body h2 span.sub-head-tagline {
        font-size: <?php echo (($settings['subheading_smaller_size'] / 2) + 10) . 'px'; ?>;
    }
    #<?php echo $id; ?> ul.uk-list li{
        font-size: <?php echo (($settings['item_title_size'] / 2) + 10) . 'px'; ?>;
    }
    #<?php echo $id; ?> .quote-heading::before{
        left: 0;
    }
    #<?php echo $id; ?> .quote-heading::after{
        right: 0;
    }
    #<?php echo $id; ?> .ft-view-mobile {
        display: block;
        text-align: center;
    }
    #<?php echo $id; ?> .ft-view-mobile div{
        margin-bottom: 10px;
        margin-left: 0!important;
    }
    #<?php echo $id; ?> .uk-card.uk-card-body {
        padding: 10px;
        text-align: left!important;
    }


}

@media(max-width:640px){

    #<?php echo $id; ?> h1.quote-heading, #<?php echo $id; ?> h2.quote-heading, #<?php echo $id; ?> h3.quote-heading, #<?php echo $id; ?> h4.quote-heading{
        font-size: <?php echo ($settings['title_size'] / 2) + 5; ?>px;
        line-height: <?php echo ($settings['title_size'] / 2) + 15; ?>px;
        padding: 8px;
    }

    #<?php echo $id; ?> ul.uk-list li{
        font-size: <?php echo (($settings['item_title_size'] / 2) + 5) . 'px'; ?>;
    }

}