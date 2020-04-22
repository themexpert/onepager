#<?php echo $id;?> {
    background: <?php echo $styles['bg_color'];?>
}
#<?php echo $id;?> .section-heading h1.uk-heading-primary, #<?php echo $id;?> .section-heading h2.uk-heading-primary, #<?php echo $id;?> .section-heading h3.uk-heading-primary, #<?php echo $id;?> .section-heading h4.uk-heading-primary, #<?php echo $id;?> .section-heading h5.uk-heading-primary, #<?php echo $id;?> .section-heading h6.uk-heading-primary{
    font-size: <?php echo $settings['section_title_size'] . 'px'; ?>;
    line-height: <?php echo ($settings['section_title_size'] + 10) . 'px'; ?>;
    font-weight: <?php echo $settings['section_title_font_weight'];?>;
    color: <?php echo $styles['section_title_color'];?>;
}
#<?php echo $id;?> .section-heading p {
    font-size: <?php echo $settings['section_description_size'] . 'px';?>;
    line-height: <?php echo ($settings['section_description_size'] + 10) . 'px';?>;
    color: <?php echo $styles['section_desc_color'];?>;
}

<!-- Items style -->
#<?php echo $id;?> .img-wrapper img{
    border-radius: <?php echo $settings['img_border_radius'];?>;
}

#<?php echo $id;?> .uk-article a {
    text-decoration: none;
    display: inline-block;
}

#<?php echo $id;?> .uk-article a h1{
    font-size: <?php echo $settings['blog_font_size'] . 'px';?>;
    line-height: <?php echo ($settings['blog_font_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['blog_font_weight'];?>;
    color: <?php echo $styles['blog_title_color'];?>;
    margin-top: 20px;
}


#<?php echo $id;?> .uk-article .uk-article-meta{
    font-size: <?php echo $settings['author_meta_font'] . 'px';?>;
    line-height: <?php echo ($settings['author_meta_font'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['author_meta_font_weight'];?>;
    color: <?php echo $styles['blog_meta_color'];?>;
}

#<?php echo $id;?> p.tx-details{
    font-size: <?php echo $settings['blog_desc_font'] . 'px';?>;
    line-height: <?php echo ($settings['blog_desc_font'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['blog_desc_font_weight'];?>;
    color: <?php echo $styles['blog_desc'];?>;
}


#<?php echo $id;?> ul.meta-list {
    margin: 0;
    padding: 0;
    list-style: none;
}

#<?php echo $id;?> ul.meta-list li {
    display: inline-block;
    font-size: <?php echo $settings['course_meta_font'] . 'px';?>;
    line-height: <?php echo ($settings['course_meta_font'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['course_meta_font_weight'];?>;
    color: <?php echo $styles['course_meta_color'];?>;
    border-right: 1px solid <?php echo $styles['course_border_meta_color'];?>;
    padding: 0 20px;
}

#<?php echo $id;?> ul.meta-list li:last-child{
    border-right: none;
    padding-right: 0;
}

#<?php echo $id;?> ul.meta-list li:first-child{
    padding-left: 0;
}

#<?php echo $id;?> .content-wrapper .all-course-btn a{
  display: inline-block;
  <?php echo $settings['post_btn_font'] ? 'font-size: ' . $settings['post_btn_font'] . 'px' : '';?>;
  font-weight: <?php echo $settings['all_post_font_weight'] ? $settings['all_post_font_weight'] : '';?>;
  border-radius: <?php echo $settings['post_btn_radius'] . 'px';?>;
  background-color: <?php $styles['all_post_btn_bg'] ? $styles['all_post_btn_bg'] : ''; ?>;
  box-shadow: 0px 4px 5px 0px <?php echo $styles['all_post_btn_bg_hover'] ? $styles['all_post_btn_bg_hover'] : ''; ?>;
  border: none;
  transition: all 400ms ease-in-out;
}
#<?php echo $id;?> .content-wrapper .all-course-btn a:hover{
    box-shadow: 0px -1px 5px 0px <?php echo $styles['all_post_btn_bg_hover'] ? $styles['all_post_btn_bg_hover'] : ''; ?>;
}

@media(max-width: 960px){
    .img-wrapper a{
        display: block!important;
    }
    .img-wrapper a img{
        width: 100%;
    }
}

@media(max-width: 768px){
    #<?php echo $id;?> .section-heading h1.uk-heading-primary, #<?php echo $id;?> .section-heading h2.uk-heading-primary, #<?php echo $id;?> .section-heading h3.uk-heading-primary, #<?php echo $id;?> .section-heading h4.uk-heading-primary, #<?php echo $id;?> .section-heading h5.uk-heading-primary, #<?php echo $id;?> .section-heading h6.uk-heading-primary{
        font-size: <?php echo (($settings['section_title_size'] / 2) + 5) . 'px'; ?>;
        line-height: <?php echo (($settings['section_title_size'] / 2) + 15) . 'px'; ?>;
    }
    #<?php echo $id;?> .uk-article a h1{
        font-size: <?php echo (($settings['blog_font_size'] / 2) + 8) . 'px';?>;
        line-height: <?php echo (($settings['blog_font_size'] / 2) + 16) . 'px';?>;
    }
    #<?php echo $id;?> .section-heading p br{
        display: none;
    }
}
