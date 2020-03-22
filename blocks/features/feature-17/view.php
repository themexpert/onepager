<?php
    $animation_content = ($settings['animation_content']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['animation_content'] . ';' : '';
?>
<section id="<?php echo $id;?>" class="fp-section features feature-17">
    <div class="uk-section" <?php echo $settings['animation_content'] ? $animation_content . 'delay: 300' : '' ?>>
        <div class="uk-container">
            <div class="uk-grid" uk-grid>
                <div class="uk-width-1-1">
                    <div class="image-icon-wrapper uk-text-center uk-margin-medium-bottom">
                        <img data-src="<?php echo $contents['section_image']?>" width="250px" alt="<?php echo $contents['main_title'];?>" uk-img>
                    </div>
                    <div class="content-wrapper uk-text-center">
                        <?php
                            echo op_heading(
                                $contents['main_title'],
                                $settings['heading_type'],
                                'uk-heading-primary uk-text-' . $settings['title_transformation']
                            );
                        ?>
                        <p><?php echo $contents['section_desc'];?></p>
                        <div class="form-wrapper uk-padding-large">
                            <?php echo do_shortcode($contents['form_shortcode'])?>
                        </div>
                        <div class="social-icons-wrapper uk-flex uk-flex-center uk-margin-medium-top">
                            <?php foreach($contents['social_icons'] as $single_icon): ?>
                                <a target="_blank" href="<?php echo $single_icon['social_link']?>">
                                    <span class="<?php echo $single_icon['social_icon'] ?> uk-padding-small"></span>
                                </a>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>