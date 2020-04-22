#<?php echo $id; ?> {
    background-color: <?php echo $styles['bg_color']; ?>;
}
#<?php echo $id; ?> .section-heading h1, #<?php echo $id; ?> .section-heading h2, #<?php echo $id; ?> .section-heading h3, #<?php echo $id; ?> .section-heading h4, #<?php echo $id; ?> .section-heading h5, #<?php echo $id; ?> .section-heading h6{
    <?php echo $settings['title_size'] ? 'font-size: ' . $settings['title_size'] . 'px' : ''; ?>;
    <?php echo $settings['title_size'] ? 'line-height: ' . ($settings['title_size'] + 10) . 'px' : ''; ?>;
    font-weight: <?php echo $settings['title_font_weight']; ?>;
}
#<?php echo $id; ?> .attorney_list h2.attorney-heading {
    <?php echo $settings['attorney_title_size'] ? 'font-size: ' . $settings['attorney_title_size'] . 'px' : ''; ?>;
    <?php echo $settings['attorney_title_size'] ? 'line-height: ' . ($settings['attorney_title_size'] + 10) . 'px' : ''; ?>;
    font-weight: <?php echo $settings['attorney_title_font_weight']; ?>;
    margin-top: 15px;
    margin-bottom: 0;
}



#<?php echo $id; ?> .attorney_list h3.designation {
    <?php echo $settings['attorney_designation_size'] ? 'font-size: ' . $settings['attorney_designation_size'] . 'px' : ''; ?>;
    <?php echo $settings['attorney_designation_size'] ? 'line-height: ' . ($settings['attorney_designation_size'] + 10) . 'px' : ''; ?>;
    font-weight: <?php echo $settings['attorney_designation_font_weight']; ?>;
    margin-top: 0;
    margin-bottom: 12px;
}

#<?php echo $id; ?> .attorney_list p{
    <?php echo $settings['attorney_text_size'] ? 'font-size: ' . $settings['attorney_text_size'] . 'px' : ''; ?>;
    <?php echo $settings['attorney_text_size'] ? 'line-height: ' . ($settings['attorney_text_size'] + 10) . 'px' : ''; ?>;
    font-weight: <?php echo $settings['attorney_text_font_weight']; ?>;
    margin-top: 0;
}


#<?php echo $id; ?> a.op-button-right{
    <?php echo $settings['attorney_button_size'] ? 'font-size: ' . $settings['attorney_button_size'] . 'px' : ''; ?>;
    font-weight: <?php echo $settings['attorney_button_font_weight']; ?>;
    background: <?php echo $styles['btn_bg']; ?>;
    color: <?php echo $styles['btn_text']; ?>;
    transition: all 300ms ease-in-out;
    border: none;
}
#<?php echo $id; ?> a.op-button-right:hover{
    background: <?php echo $styles['btn_bg_hover']; ?>;
    color: <?php echo $styles['btn_text_hover']; ?>;
}

@media(max-width: 960px){
    #<?php echo $id; ?> .section-heading h1, #<?php echo $id; ?> .section-heading h2, #<?php echo $id; ?> .section-heading h3, #<?php echo $id; ?> .section-heading h4, #<?php echo $id; ?> .section-heading h5, #<?php echo $id; ?> .section-heading h6{
        <?php echo $settings['title_size'] ? 'font-size: ' . (($settings['title_size'] / 2) + 10) . 'px' : ''; ?>;
        <?php echo $settings['title_size'] ? 'line-height: ' . (($settings['title_size'] / 2) + 15) . 'px' : ''; ?>;

    }
    #<?php echo $id; ?> .attorney_list h2.attorney-heading {
        <?php echo $settings['attorney_title_size'] ? 'font-size: ' . (($settings['attorney_title_size'] / 2) + 10) . 'px' : ''; ?>;
        <?php echo $settings['attorney_title_size'] ? 'line-height: ' . (($settings['attorney_title_size'] / 2) + 15) . 'px' : ''; ?>;

    }
    #<?php echo $id; ?> .attorney_list h3.designation {
        <?php echo $settings['attorney_designation_size'] ? 'font-size: ' . (($settings['attorney_designation_size'] / 2) + 10) . 'px' : ''; ?>;
        <?php echo $settings['attorney_designation_size'] ? 'line-height: ' . (($settings['attorney_designation_size'] / 2) + 15) . 'px' : ''; ?>;

    }

}