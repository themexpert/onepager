

#<?php echo $id;?> .section-heading h1{
    <?php echo $settings['section_title_size'] ? 'font-size: ' . $settings['section_title_size'] . 'px' : ''; ?>;
    <?php echo $settings['section_title_size'] ? 'line-height: ' . ($settings['section_title_size'] + 10) . 'px' : ''; ?>;
    font-weight: <?php echo $settings['section_title_font_weight'] ? $settings['section_title_font_weight'] : '';?>;
    color: <?php echo $styles['section_title_color'] ? $styles['section_title_color'] : '' ?>;
}

#<?php echo $id;?> .section-heading p{
    <?php echo $settings['section_description_size'] ? 'font-size: ' . $settings['section_description_size'] . 'px' : ''; ?>;
    <?php echo $settings['section_description_size'] ? 'line-height: ' . ($settings['section_description_size'] + 10) . 'px' : ''; ?>;
    color: <?php echo $styles['section_desc_color'] ? $styles['section_desc_color'] : '' ?>;
}

#<?php echo $id;?> article.uk-article .img-wrapper img{
    <?php echo $settings['img_border_radius'] ? 'border-radius: ' . $settings['img_border_radius'] . 'px' : '' ?>;
}

#<?php echo $id;?> article.uk-article .uk-article-meta{
    <?php echo $settings['meta_font'] ? 'font-size: ' . $settings['meta_font'] . 'px' : ''?>;
    <?php echo $settings['meta_font'] ? 'line-height: ' . ($settings['meta_font'] + 10) . 'px' : ''?>;
    <?php echo $settings['meta_font_weight'] ? 'font-weight: ' . $settings['meta_font_weight'] : ''?>;
    color: <?php echo $styles['blog_meta_color'] ? $styles['blog_meta_color'] : '' ?>;
}

#<?php echo $id;?> article.uk-article h1.uk-article-title{
    <?php echo $settings['blog_font_size'] ? 'font-size: ' . $settings['blog_font_size'] . 'px' : ''?>;
    <?php echo $settings['blog_font_size'] ? 'line-height: ' . ($settings['blog_font_size'] + 10) . 'px' : ''?>;
    <?php echo $settings['blog_font_weight'] ? 'font-weight: ' . $settings['blog_font_weight'] : ''?>;
    color: <?php echo $styles['blog_title_color'] ? $styles['blog_title_color'] : '' ?>;
}

#<?php echo $id;?> .title_link{
    text-decoration: none;
}

#<?php echo $id;?> .uk-article a.uk-button{
    <?php echo $settings['btn_font_size'] ? 'font-size: ' . $settings['btn_font_size'] . 'px' : ''?>;
    <?php echo $settings['btn_font_size'] ? 'line-height: ' . ($settings['btn_font_size'] + 10) . 'px' : ''?>;
    <?php echo $settings['btn_font_weight'] ? 'font-weight: ' . $settings['btn_font_weight'] : ''?>;
    color: <?php echo $styles['btn_color'] ? $styles['btn_color'] : '' ?>;
    transition: 300ms linear;
}
#<?php echo $id;?> .uk-article a.uk-button:hover{
    color: <?php echo $styles['btn_color_hover'] ? $styles['btn_color_hover'] : '' ?>;
}
#<?php echo $id;?> .uk-button-text:focus::before, .uk-button-text:hover::before{
    content: none;
}
#<?php echo $id;?> .content-wrapper .all-post-btn a{
  display: inline-block;
  <?php echo $settings['post_btn_font'] ? 'font-size: ' . $settings['post_btn_font'] . 'px' : '';?>;
  font-weight: <?php echo $settings['all_post_font_weight'] ? $settings['all_post_font_weight'] : '';?>;
  border-radius: <?php echo $settings['post_btn_radius'] . 'px';?>;
  background-color: <?php $styles['all_post_btn_bg'] ? $styles['all_post_btn_bg'] : ''; ?>;
  box-shadow: 0px 4px 5px 0px <?php echo $styles['all_post_btn_bg_hover'] ? $styles['all_post_btn_bg_hover'] : ''; ?>;
  border: none;
  transition: all 400ms ease-in-out;
}
#<?php echo $id;?> .content-wrapper .all-post-btn a:hover{
    box-shadow: 0px -1px 5px 0px <?php echo $styles['all_post_btn_bg_hover'] ? $styles['all_post_btn_bg_hover'] : ''; ?>;
}

@media(max-width: 600px){
    #<?php echo $id;?> .section-heading h1{
        <?php echo $settings['section_title_size'] ? 'font-size: ' . (($settings['section_title_size'] / 2) + 5) . 'px' : ''; ?>;
        <?php echo $settings['section_title_size'] ? 'line-height: ' . (($settings['section_title_size']/2) + 15) . 'px' : ''; ?>;
    }

    #<?php echo $id;?> .section-heading p br{
            display: none
        }

    #<?php echo $id;?> article.uk-article h1.uk-article-title{
        <?php echo $settings['blog_font_size'] ? 'font-size: ' . (($settings['blog_font_size'] / 2) + 7) . 'px' : ''?>;
        <?php echo $settings['blog_font_size'] ? 'line-height: ' . (($settings['blog_font_size'] / 2) + 16) . 'px' : ''?>;
    }

    #<?php echo $id;?> .img-wrapper img{
        width: 100%;
    }


}
