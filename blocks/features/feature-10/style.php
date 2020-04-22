#<?php echo $id; ?> {
    background-color: <?php echo $styles['bg_color']; ?>
}
#<?php echo $id; ?> h1.uk-heading-primary, #<?php echo $id; ?> h2.uk-heading-primary, #<?php echo $id; ?> h3.uk-heading-primary, #<?php echo $id; ?> h4.uk-heading-primary, #<?php echo $id; ?> h5.uk-heading-primary, #<?php echo $id; ?> h6.uk-heading-primary{
    font-family: <?php echo Onepager::fonts($settings['title_font']); ?>;
    <?php echo $settings['title_size'] ? 'font-size: ' . $settings['title_size'] . 'px' : ''; ?>;
    <?php echo $settings['title_size'] ? 'line-height: ' . ($settings['title_size'] + 10) . 'px' : ''; ?>;
    font-weight: <?php echo $settings['title_font_weight']; ?>;
    color: <?php echo $styles['title_color'] ?>;
}
#<?php echo $id; ?> .tab-area-wrapper {
    padding: 50px;
}

#<?php echo $id; ?> .tab-content-wrap {
    padding-top: 50px;
}
#<?php echo $id; ?> ul.tx-tab-nav {
    border-bottom: 1px solid #dddddd;
    margin-left: 0;
}


#<?php echo $id; ?> ul.tx-tab-nav li{
    padding-bottom: 10px;
    padding-left: 0;
    margin-left: 20px;
}

#<?php echo $id; ?> ul.tx-tab-nav li:first-child {
    padding-left: 0;
    margin-left: 0;
}

#<?php echo $id; ?> ul.tx-tab-nav li a{
    font-family: <?php echo Onepager::fonts($settings['title_font']); ?>;
    <?php echo $settings['tab_title_size'] ? 'font-size :' . $settings['tab_title_size'] . 'px' : ''; ?>;
    <?php echo $settings['tab_title_size'] ? 'line-height :' . ($settings['tab_title_size'] + 10) . 'px' : ''; ?>;
    font-weight: <?php echo $settings['tab_font_weight']; ?>;
    color: <?php echo $styles['tab_color']; ?>;

}

#<?php echo $id; ?> ul.tx-tab-nav li:hover a{
    color: <?php echo $styles['tab_color_hover']; ?>;
}

#<?php echo $id; ?> ul.tx-tab-nav li::after {
    content: '';
    width: 0%;
    background: <?php echo $styles['tab_color_hover']; ?>;
    height: 1px;
    bottom: -1px;
    left: 0;
    position: absolute;
    transition: all 200ms linear;
}
#<?php echo $id; ?> ul.tx-tab-nav li:hover:after {
    content: '';
    position: absolute;
    width: 100%;
    background: <?php echo $styles['tab_color_hover']; ?>;
    height: 1px;
    bottom: -1px;
    left: 0;
}

#<?php echo $id; ?> ul.tx-tab-nav li.uk-active a {
    color: #dd5346!important;
}
#<?php echo $id; ?> ul.tx-tab-nav li.uk-active a {
    color: red;
}
#<?php echo $id; ?> ul.tx-tab-nav li.uk-active::after {
    content: '';
    width: 100%;
    background: #dd5346;
    height: 1px;
    bottom: -1px;
    left: 0;
    position: absolute;
}

#<?php echo $id; ?> ul li .content-wrapper p{
    <?php echo $settings['tab_desc_size'] ? 'font-size :' . $settings['tab_desc_size'] . 'px' : ''; ?>;
    <?php echo $settings['tab_desc_size'] ? 'line-height :' . ($settings['tab_desc_size'] + 10) . 'px' : ''; ?>;
    font-weight: <?php echo $settings['tab_desc_font_weight']; ?>;
    color: <?php echo $styles['text_color']; ?>
}




#<?php echo $id; ?> ul li .content-wrapper a.op-button{
    color: <?php echo $styles['button_text_color']; ?>;
    background-color: <?php echo $styles['button_bg_color']; ?>;
    border: 1px solid <?php echo $styles['button_bg_color']; ?>;
    <?php echo $settings['btn_font_size'] ? 'font-size: ' . $settings['btn_font_size'] . 'px' : ''; ?>;
    <?php echo $settings['btn_font_size'] ? 'line-height: ' . ($settings['btn_font_size'] + 10) . 'px' : ''; ?>;
    font-weight: <?php echo $settings['btn_font_weight']; ?>;
    padding: 10px 20px 10px 20px;

}

#<?php echo $id; ?> ul li .content-wrapper a:hover{
    background-color: <?php echo $styles['button_bg_color_hover']; ?>;
    color: <?php echo $styles['button_text_color_hover']; ?>;
}

@media(max-width: 960px){
    #<?php echo $id; ?> h1.uk-heading-primary, #<?php echo $id; ?> h2.uk-heading-primary, #<?php echo $id; ?> h3.uk-heading-primary, #<?php echo $id; ?> h4.uk-heading-primary, #<?php echo $id; ?> h5.uk-heading-primary, #<?php echo $id; ?> h6.uk-heading-primary{
        <?php echo $settings['title_size'] ? 'font-size: ' . (($settings['title_size'] / 2) + 10) . 'px' : ''; ?>;
        <?php echo $settings['title_size'] ? 'line-height: ' . (($settings['title_size'] / 2) + 15) . 'px' : ''; ?>;
    }
    #<?php echo $id; ?> .image-wrapper img {
        width: 100%;
    }
    #<?php echo $id; ?> .tab-area-wrapper{
        padding-left: 80px;
    }
    #<?php echo $id; ?> ul.tx-tab-nav li{
        width: 100%;
        margin-left: 0;
        margin-bottom: 5px;
    }
    #<?php echo $id; ?> ul.tx-tab-nav li {
        border-bottom: 1px solid #dddddd;
    }
    #<?php echo $id; ?> ul.tx-tab-nav{
        border-bottom: 0;
    }

}