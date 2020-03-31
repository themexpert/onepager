<?php
    // Animation Content
    $animation_content = ($settings['animation_content']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['animation_content'] . ';"' : '';

    // Media Content
    $animation_media = ($settings['animation_media']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['animation_media'] . ';' : '';
    
?>

<section id="<?php echo $id;?>" class="fp-section uk-position-relative features feature-25">
        <div class="uk-container">
            <div class="uk-grid uk-match-grid" uk-grid>
                <div class="uk-width-expand@s">
                    <div class="uk-margin-large-top author-name">
                        <a href="<?php echo site_url();?>"><?php echo $contents['author_name']?></a>
                    </div>
                    <div class="uk-section-large">
                        <div <?php echo $settings['animation_content'] ? $animation_content . 'delay: 400' : ''; ?> class="content-wrapper">
                            <h4 class="uk-text-uppercase tagline"><?php echo $contents['title_tag']?></h4>
                            <?php
                                echo op_heading(
                                    $contents['section_title'],
                                    $settings['heading_type'],
                                    'uk-heading-primary uk-margin-remove-top uk-text-' . $settings['title_transformation']
                                );
                            ?>
                            <p><?php echo $contents['section_desc']?></p>
                            <?php echo op_link($contents['hero_btn'], 'op-button uk-button uk-button-default uk-button-large uk-margin-medium-top'); ?>
                            
                            <?php if($contents['logos']):?>
                            <div class="uk-grid uk-margin-large-top" uk-grid>
                                <?php foreach($contents['logos'] as $single_logo):?>
                                    <div class="uk-width-1-5">
                                        <div class="single-logo">
                                            <img src="<?php echo $single_logo['company_logo']?>" alt="company-logo">
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            </div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-3@s">
                    <div <?php echo $settings['animation_media'] ? $animation_media . 'delay: 500' : ''; ?> class="image-wrapper uk-text-center">
                        <img src="<?php echo $contents['right_side_logo']?>" alt="<?php echo $contents['author_name'];?>">
                    </div>
                </div>
            </div>
        </div>
</section>