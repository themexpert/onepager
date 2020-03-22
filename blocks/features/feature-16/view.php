

<section id="<?php echo $id;?>" class="fp-section features feature-16">
    <div class="uk-container-cover uk-margin-auto">
    
        <div class="uk-grid uk-grid-large uk-flex uk-flex-middle uk-grid-match" uk-grid>
            <div class="uk-width-1-3@m" uk-height-match="row: false">
                <div class="uk-height-1-1 tx-image-wrap">
                    <img data-src="<?php echo $contents['section_image']?>" alt="" uk-img>
                </div>
            </div>
            <div class="uk-width-expand@m">
                <div class="content-wrapper uk-padding-small">
                    <?php if($contents['sub_heading']) :?>
                        <h3 class="uk-margin-remove-bottom subheading"><?php echo $contents['sub_heading'];?></h3>
                    <?php endif;?>
                    <?php if($contents['heading']):?>
                        <?php echo op_heading($contents['heading'], $settings['heading_type'], 'uk-heading-primary heading uk-position-relative uk-margin-remove-top', 'uk-text-' . $settings['title_transformation']) ?>
                    <?php endif;?>
                    <?php if($contents['desc']):?>
                        <p><?php echo $contents['desc']; ?></p>
                    <?php endif; ?>
                    <div class="uk-flex uk-flex-middle button-group">
                        <div>
                            <?php echo op_link($contents['btn_1'], 'uk-button uk-button-large learn-btn') ?>
                        </div>
                        <div class="uk-margin-small-left">
                            <?php echo op_link($contents['btn_2'], 'uk-button uk-button-large learn-btn') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>