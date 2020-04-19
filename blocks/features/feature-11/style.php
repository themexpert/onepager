
#<?php echo $id; ?>{
    background-color:<?php echo $styles['bg_color']; ?>;
}
#<?php echo $id; ?> h1.tx-section-heading, #<?php echo $id; ?> h2.tx-section-heading, #<?php echo $id; ?> h3.tx-section-heading, #<?php echo $id; ?> h4.tx-section-heading, #<?php echo $id; ?> h5.tx-section-heading, #<?php echo $id; ?> h6.tx-section-heading{
    <?php echo $settings['section_title_size'] ? 'font-size: ' . $settings['section_title_size'] . 'px' : ''; ?>;
    <?php echo $settings['section_title_size'] ? 'line-height: ' . ($settings['section_title_size'] + 10) . 'px' : ''; ?>;
    font-weight: <?php echo $settings['section_title_font_weight']; ?>;
    color: <?php echo $styles['section_title_color'] ?>;
}
#<?php echo $id; ?> h1.tx-heading, #<?php echo $id; ?> h2.tx-heading, #<?php echo $id; ?> h3.tx-heading, #<?php echo $id; ?> h4.tx-heading, #<?php echo $id; ?> h5.tx-heading, #<?php echo $id; ?> h6.tx-heading{
   <?php echo $settings['title_size'] ? 'font-size: ' . $settings['title_size'] . 'px' : ''; ?>;
    <?php echo $settings['title_size'] ? 'line-height: ' . ($settings['title_size'] + 10) . 'px' : ''; ?>;
    font-weight: <?php echo $settings['title_font_weight']; ?>;
    color: <?php echo $styles['title_color']; ?>;
}
#<?php echo $id; ?> .tx-text, #<?php echo $id; ?> p{
    <?php echo $settings['text_size'] ? 'font-size: ' . $settings['text_size'] . 'px' : ''; ?>;
    <?php echo $settings['text_size'] ? 'line-height: ' . ($settings['text_size'] + 10) . 'px' : ''; ?>;
    font-weight: <?php echo $settings['text_font_weight']; ?>;
    color: <?php echo $styles['text_color']; ?>;
}
#<?php echo $id; ?> .tx-inline-list {
    padding: 0;
    list-style: none;
}

#<?php echo $id; ?> .tx-inline-list > li {
    padding-left: 30px;
}

#<?php echo $id; ?> .tx-inline-list li:first-child {
    padding-left: 0;
}

#<?php echo $id; ?> .tx-ft11-button{
   <?php echo $settings['btn_font_size'] ? 'font-size: ' . $settings['btn_font_size'] . 'px' : '' ?>;
    <?php echo $settings['btn_font_size'] ? 'line-height: ' . ($settings['btn_font_size'] + 25) . 'px' : '' ?>;
    font-weight: <?php echo $settings['btn_font_weight']; ?>;
    background-color:<?php echo $styles['btn_bg']; ?>;
    color: <?php echo $styles['btn_text']; ?>;
}

#<?php echo $id; ?> .tx-ft11-button:hover{
    background-color: <?php echo $styles['btn_bg_hover']; ?>;
    color: <?php echo $styles['btn_bg_hover_text']; ?>;
    border: 1px solid <?php echo $styles['btn_border_color']; ?>;
}

#<?php echo $id; ?> .image-wrapper{
    position: relative;
}

#<?php echo $id; ?> .image-wrapper a.fa {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: #ffffff;
    text-decoration: none;
}

@media(max-width: 960px){
    #<?php echo $id; ?> .tx-margin-remove-left {
        margin-left: 0!important;
    }

    #<?php echo $id; ?> h1.tx-section-heading, #<?php echo $id; ?> h2.tx-section-heading, #<?php echo $id; ?> h3.tx-section-heading, #<?php echo $id; ?> h4.tx-section-heading, #<?php echo $id; ?> h5.tx-section-heading, #<?php echo $id; ?> h6.tx-section-heading{
        <?php echo $settings['section_title_size'] ? 'font-size: ' . (($settings['section_title_size'] / 2) + 10) . 'px' : ''; ?>;
        <?php echo $settings['section_title_size'] ? 'line-height: ' . (($settings['section_title_size'] / 2) + 15) . 'px' : ''; ?>;

    }
    #<?php echo $id; ?> h1.tx-heading, #<?php echo $id; ?> h2.tx-heading, #<?php echo $id; ?> h3.tx-heading, #<?php echo $id; ?> h4.tx-heading, #<?php echo $id; ?> h5.tx-heading, #<?php echo $id; ?> h6.tx-heading{
        <?php echo $settings['title_size'] ? 'font-size: ' . (($settings['title_size'] / 2) + 10) . 'px' : ''; ?>;
        <?php echo $settings['title_size'] ? 'line-height: ' . (($settings['title_size'] / 2) + 15) . 'px' : ''; ?>;

    }
    #<?php echo $id; ?> .image-wrapper a img{
        width: 100%;
    }

}
