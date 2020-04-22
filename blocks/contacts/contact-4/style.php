#<?php echo $id ?> {
    background-color: <?php echo $styles['bg_color']; ?>;
}
#<?php echo $id ?> h1.contact4-heading, #<?php echo $id ?> h2.contact4-heading, #<?php echo $id ?> h3.contact4-heading, #<?php echo $id ?> h4.contact4-heading, #<?php echo $id ?> h5.contact4-heading, #<?php echo $id ?> h6.contact4-heading{
   <?php echo $settings['title_size'] ? 'font-size: ' . $settings['title_size'] . 'px' : ''; ?>;
    <?php echo $settings['title_alignment'] ? 'text-align: ' . $settings['title_alignment'] : ''; ?>;
    font-weight: <?php echo $settings['title_font_weight'] ? $settings['title_font_weight'] : '' ?>;
    color: <?php echo $styles['heading_color']; ?>;
}

#<?php echo $id; ?> h3.tx-item-heading{
    <?php echo $settings['block_title_size'] ? 'font-size: ' . $settings['block_title_size'] . 'px' : ''; ?>;
    <?php echo $settings['block_title_size'] ? 'line-height: ' . ($settings['block_title_size'] + 10) . 'px' : ''; ?>;
    font-weight: <?php echo $settings['block_title_font_weight'] ? $settings['block_title_font_weight'] : '' ?>;
    text-transformation: <?php echo $settings['block_title_transformation'] ?>;
    color: <?php echo $styles['heading_color']; ?>;
}

#<?php echo $id; ?> .uk-block > p{
    <?php echo $settings['block_text_size'] ? 'font-size: ' . $settings['block_text_size'] . 'px' : ''; ?>;
    <?php echo $settings['block_text_size'] ? 'line-height: ' . ($settings['block_text_size'] + 10) . 'px' : ''; ?>;
    font-weight: <?php echo $settings['block_text_font_weight'] ? $settings['block_text_font_weight'] : '' ?>;
    color: <?php echo $styles['text_color']; ?>;
}

#<?php echo $id; ?> .contact-area {
    width: 80%;
    margin: 0 auto;
    padding: 50px 0;
}

#<?php echo $id; ?> .contact-4-wrapper{
    background-repeat: no-repeat;
    background-size: cover;
    outline: 15px solid #ffffff;
}

#<?php echo $id; ?> .contact-area label {
    font-weight: 500;
    width: 100%;
}

#<?php echo $id; ?> .contact-area input[type=text], #<?php echo $id; ?> .contact-area input[type=email], #<?php echo $id; ?> .contact-area textarea {
    border: 1px solid #dddddd;
    width: 100%;
    margin-top: 7px;
    border-radius: 2px;
    line-height: 2rem;
    font-size: 1.2em;
    font-weight: 300;
    padding-left: 10px;
    resize: none;
}

#<?php echo $id; ?> .contact-area input[type=submit] {
    background-color: <?php echo $styles['btn_bg']; ?>;
    border: 1px solid <?php echo $styles['btn_border_color']; ?>;
    color: <?php echo $styles['btn_text']; ?>;
    padding: 10px 20px;
    font-size: 18px;
}

#<?php echo $id; ?> .contact-area input[type=submit]:hover{
    background-color: <?php echo $styles['btn_bg_hover']; ?>;
    color: <?php echo $styles['btn_text_hover']; ?>;
}

#<?php echo $id; ?> a.tx-contact-btn{
    background-color: <?php echo $styles['btn_bg']; ?>;
    color: <?php echo $styles['btn_text']; ?>;
    border: 1px solid <?php echo $styles['btn_border_color']; ?>
}

#<?php echo $id; ?> a.tx-contact-btn:hover{
    background-color: <?php echo $styles['btn_bg_hover']; ?>;
    color: <?php echo $styles['btn_text_hover']; ?>;
}

#<?php echo $id; ?> .contact-area > h2{
    font-size: 32px;
    font-weight: 600;
    color: <?php echo $styles['heading_color']; ?>;
}

@media(max-width: 960px){
    #<?php echo $id; ?> .uk-card {
        padding: 0 15px;
    }
    #<?php echo $id ?> h1.contact4-heading, #<?php echo $id ?> h2.contact4-heading, #<?php echo $id ?> h3.contact4-heading, #<?php echo $id ?> h4.contact4-heading, #<?php echo $id ?> h5.contact4-heading, #<?php echo $id ?> h6.contact4-heading{
        <?php echo $settings['title_size'] ? 'font-size: ' . (($settings['title_size'] / 2) + 10) . 'px' : ''; ?>;
        <?php echo $settings['title_size'] ? 'line-height: ' . (($settings['title_size'] / 2) + 15) . 'px' : ''; ?>;
    }
    #<?php echo $id; ?> h3.tx-item-heading{
        <?php echo $settings['block_title_size'] ? 'font-size: ' . (($settings['block_title_size'] / 2) + 10) . 'px' : ''; ?>;
        <?php echo $settings['block_title_size'] ? 'line-height: ' . (($settings['block_title_size'] / 2) + 15) . 'px' : ''; ?>;
    }

}