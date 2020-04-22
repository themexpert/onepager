<?php 

$content_animation = ($settings['content_animation']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['content_animation'] . ';' : '';

?>
<section id="<?php echo $id;?>" uk-height-viewport="offset-bottom:15" class="uk-section-large uk-position-relative features feature-14 uk-background-bottom-right <?php echo ($styles['bg_image_size'] == 'uk-background-contain') ? 'uk-background-contain' : 'uk-background-cover' ?>" <?php echo ($styles['bg_parallax']) ? 'uk-parallax="bgy: -300"' : '' ?> tabindex="-1" data-src="<?php echo $styles['bg_image'];?>" uk-img>
    <div class="uk-container">
        <div class="uk-grid" uk-grid>
            <div <?php echo $settings['content_animation'] ? $content_animation . 'delay: 400' : '';?> class="uk-width-1-1">
                <div class="content-wrapper">
                    <h4 class="top-heading-text uk-margin-remove-bottom"><?php echo $contents['top_subheading']?></h4>

                    <?php echo op_heading( 
								$contents['main_heading'],
								$settings['heading_type'], 
								'uk-heading-primary uk-margin-small-top uk-margin-remove-top', 
								'uk-text-' . $settings['title_transformation']
							); ?>

                    <p class="hero-desc uk-margin-remove-top"><?php echo $contents['desc'];?></p>
                    <?php echo op_link($contents['cta_link'], 'uk-button uk-button-default uk-button-large op-button uk-margin-medium-top');?>
                    
                </div>
            </div>
        </div>
    </div>
</section>
