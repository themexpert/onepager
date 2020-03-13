<?php
// Content Animation
$content_animation = ($settings['animation_content']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['animation_content'] . ';"' : '';

// Media Animation
$media_animation = ($settings['animation_media']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['animation_media'] . ';"' : '';
?>

<section id="<?php echo $id; ?>" class="fp-section features features-9">
    <div class="uk-section">
        <div class="uk-container-cover">
            <div class="uk-grid-large uk-flex uk-flex-middle" uk-grid>
                <div <?php echo $settings['animation_media'] ? $media_animation . 'delay: 300' : ''; ?> class="uk-width-1-3@m z-99">
                    <div class="image-wrapper uk-text-right@m">
                        <img data-src="<?php echo $contents['section_image'] ?>" alt="" uk-img>
                    </div>
                </div>
                <div <?php echo $settings['animation_content'] ? $content_animation . 'delay: 300' : ''; ?> class="uk-width-expand@m uk-padding-remove-left tx-remove-margin">
                    <div class="award-section-wrapper">
                        <div class="uk-card uk-card-body">
                            <?php echo op_heading($contents['section_title'], $settings['heading_type'], 'uk-heading-primary uk-position-relative uk-text-' . $settings['title_transformation'], $content_animation); ?>
                            <?php if ($contents['main_text']): ?>
                                <p <?php echo $settings['animation_content'] ? $content_animation . 'delay: 400' : ''; ?> class="feature-9-text"><?php echo $contents['main_text']; ?></p>
                            <?php endif;?>
                            <h3 <?php echo $settings['animation_content'] ? $content_animation . 'delay: 500' : ''; ?> class="uk-text-center tx-heading-border"><?php echo $contents['sponser_award']; ?></h3>
                            <div <?php echo $settings['animation_content'] ? $content_animation . 'delay: 600' : ''; ?> class="uk-flex uk-flex-row uk-flex-auto uk-flex-middle uk-flex-center award-section">
                                <?php foreach ($contents['awards'] as $singleAward): ?>
                                    <div class="uk-padding-small">
                                        <img data-src="<?php echo $singleAward['awardImage'] ?>" alt="" uk-img>
                                    </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
