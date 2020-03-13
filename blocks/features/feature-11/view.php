<?php
// Content Animation
$content_animation = ($settings['animation_content']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['animation_content'] . ';"' : '';

// Content Animation
$media_animation = ($settings['animation_media']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['animation_media'] . ';"' : '';

?>
<section id="<?php echo $id; ?>" class="fp-section features feature-11 uk-padding-small">
    <div class="uk-section">
        <div class="uk-container">
            <article class="uk-article uk-margin-small-left uk-margin-small-right">
                <div class="section-heading uk-margin-large-bottom uk-text-center">
                <?php if ($contents['section_title']) {
    echo op_heading(
        $contents['section_title'],
        $settings['section_heading_type'],
        'uk-heading-primary tx-section-heading uk-text-' . $settings['section_title_transformation'],
        $content_animation
    );
}?>
                </div>
                <div class="uk-grid-medium uk-grid" uk-grid>
                    <div <?php echo $settings['animation_media'] ? $media_animation . 'delay: 400' : '' ?> class="uk-width-1-3@m">
                        <div class="image-wrapper" uk-lightbox>
                            <a href="<?php echo $contents['video_source']; ?>" data-caption="YouTube">
                                <img data-src="<?php echo $contents['section_image']; ?>" alt="" uk-img>
                            </a>
                            <a href="<?php echo $contents['video_source']; ?>" class="<?php echo $contents['image_icon']; ?>"></a>
                        </div>
                    </div>
                    <div <?php echo $settings['animation_content'] ? $content_animation . 'delay: 600' : '' ?> class="uk-width-expand@m">
                        <div class="content-wrapper tx-margin-remove-left uk-margin-medium-left">
                        <?php if ($contents['heading']) {
    echo op_heading(
        $contents['heading'],
        $settings['heading_type'],
        'uk-heading-secondary tx-heading uk-text-' . $settings['title_transformation'],
        $content_animation
    );
}?>
                            <p class="tx-text">
                                <?php echo $contents['section_desc']; ?>
                            </p>
                            <ul class="uk-flex uk-flex-inline tx-inline-list">
                                <?php foreach ($contents['logo_items'] as $logo): ?>
                                <li><img src="<?php echo $logo['single_logo']; ?>"></li>
                                <?php endforeach;?>
                            </ul>
                            <?php if ($contents['section_btn']): ?>
                                <div class="button-wrapper">
                                    <?php echo op_link($contents['section_btn'], 'uk-button uk-button-primary uk-button-large uk-margin-medium-top tx-ft11-button'); ?>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>