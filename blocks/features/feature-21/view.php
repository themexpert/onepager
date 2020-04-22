<?php
    // Content Animation
    $animation_content = ($settings['animation_content']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['animation_content'] . ';' : '';
    
    // Media Animation
    $animation_media = ($settings['animation_media']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['animation_media'] . ';' : '';

?>
<section id="<?php echo $id;?>" class="fp-section features feature-21">
<div class="uk-section-large">
    <div class="uk-container">
        <div class="uk-grid uk-height-match" uk-grid>
            <div class="uk-width-expand@s uk-margin-large-bottom@m">
                <div <?php echo $settings['animation_content'] ? $animation_content . 'delay: 400' : ''; ?> class="content-wrapper">
                    <h4><?php echo $contents['top_tagline']; ?></h4>
                    <?php
                        echo op_heading(
                            $contents['heading'],
                            $settings['heading_type'],
                            'uk-heading-primary uk-margin-remove-top uk-text-' . $settings['section_title_transformation']
                        );
                    ?>
                    <p><?php echo $contents['desc'];?></p>
                    <div class="button-wrapper uk-flex uk-flex-middle uk-margin-medium-top">
                        <div>
                            <?php echo op_link($contents['btn1'], 'op-button uk-button uk-button-default uk-button-large uk-margin-small-bottom@s uk-text-' . $settings['btn_text_transformation']); ?>
                        </div>
                        <div class="uk-margin-small-left">
                            <?php echo op_link($contents['btn2'], 'op-button uk-button uk-button-default uk-button-large tg-border-remove uk-text-' . $settings['btn_text_transformation']); ?>
                        </div>
                    </div>
                    <div class="uk-grid uk-margin-large-top" uk-grid>
                        <?php if($contents['sponser_logos']):?>
                            <?php foreach($contents['sponser_logos'] as $single_logo):?>
                                <div class="uk-width-1-5@s uk-width-1-3"> 
                                    <div class="sponser-logo-wrapper uk-flex uk-flex-middle uk-flex-center">
                                        <img data-src="<?php echo $single_logo['sponser_logo'];?>" alt="" uk-img>
                                    </div>
                                </div>
                            <?php endforeach;?>
                        <?php endif;?>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-3@s uk-margin-large-top uk-text-center">
                <div <?php echo $settings['animation_media'] ? $animation_media . 'delay: 400' : ''; ?> class="image-wrapper">
                    <img data-src="<?php echo $contents['right_image'];?>" data-srcset="<?php echo $contents['right_image'];?>" alt="<?php echo $contents['heading']?>" uk-img>
                </div>
            </div>
        </div>
    </div>
</div>
</section>