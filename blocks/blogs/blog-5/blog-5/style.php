#<?php echo $id; ?> {
    background-color: <?php echo $styles['bg_color']; ?>;
}
#<?php echo $id; ?> .main-heading h1, #<?php echo $id; ?> .main-heading h2, #<?php echo $id; ?> .main-heading h3, #<?php echo $id; ?> .main-heading h4, #<?php echo $id; ?> .main-heading h5, #<?php echo $id; ?> .main-heading h6{
    <?php echo $settings['section_title_size'] ? 'font-size: ' . $settings['section_title_size'] . 'px' : ''; ?>;
    <?php echo $settings['section_title_size'] ? 'line-height: ' . ($settings['section_title_size'] + 10) . 'px' : ''; ?>;
    font-weight: <?php echo $settings['section_title_font_weight']; ?>;
    color: <?php echo $styles['section_title_color']; ?>
}
#<?php echo $id; ?> .attorney_blog_list h2.uk-card-title a {
    display: inline-block;
    text-decoration: none;
    <?php echo $settings['item_title_size'] ? 'font-size: ' . $settings['item_title_size'] . 'px' : ''; ?>;
    <?php echo $settings['item_title_size'] ? 'line-height: ' . ($settings['item_title_size'] + 10) . 'px' : ''; ?>;
    font-weight: <?php echo $settings['item_font_weight']; ?>;
    color: <?php echo $styles['title_color']; ?>
}

#<?php echo $id; ?> .attorney_blog_list h2.uk-card-title a span{
    color: <?php echo $styles['counter_num'] ? $styles['counter_num'] : '' ?>;
}


#<?php echo $id; ?> .attorney_blog_list p{
    <?php echo $settings['item_desc_size'] ? 'font-size: ' . $settings['item_desc_size'] . 'px' : ''; ?>;
    <?php echo $settings['item_desc_size'] ? 'line-height: ' . ($settings['item_desc_size'] + 10) . 'px' : ''; ?>;

}


#<?php echo $id; ?> a.op-button-right{
    <?php echo $settings['item_btn_size'] ? 'font-size: ' . $settings['item_btn_size'] . 'px' : ''; ?>;
    font-weight: <?php echo $settings['item_btn_font_weight']; ?>;
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
    #<?php echo $id; ?> .main-heading h1, #<?php echo $id; ?> .main-heading h2, #<?php echo $id; ?> .main-heading h3, #<?php echo $id; ?> .main-heading h4, #<?php echo $id; ?> .main-heading h5, #<?php echo $id; ?> .main-heading h6{
        <?php echo $settings['section_title_size'] ? 'font-size: ' . (($settings['section_title_size'] / 2) + 10) . 'px' : ''; ?>;
        <?php echo $settings['section_title_size'] ? 'line-height: ' . (($settings['section_title_size'] / 2) + 15) . 'px' : ''; ?>;
    }
    #<?php echo $id; ?> .attorney_blog_list h2.uk-card-title a {
        <?php echo $settings['item_title_size'] ? 'font-size: ' . (($settings['item_title_size'] / 2) + 10) . 'px' : ''; ?>;
        <?php echo $settings['item_title_size'] ? 'line-height: ' . (($settings['item_title_size'] / 2) + 15) . 'px' : ''; ?>;

    }


    #<?php echo $id; ?> .attorney_blog_list h3.designation {
        <?php echo $settings['attorney_designation_size'] ? 'font-size: ' . (($settings['attorney_designation_size'] / 2) + 10) . 'px' : ''; ?>;
        <?php echo $settings['attorney_designation_size'] ? 'line-height: ' . (($settings['attorney_designation_size'] / 2) + 15) . 'px' : ''; ?>;

    }

}