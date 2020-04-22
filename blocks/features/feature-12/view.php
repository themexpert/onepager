<?php
$animation_content = ($settings['animation_content']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['animation_content'] . ';"' : '';
?>
<section id="<?php echo $id; ?>" class="fp-section features feature-12 uk-padding-small uk-background-cover" data-src="<?php echo $styles['bg_image'] ?>" uk-img>
    <div class="uk-section-large">
        <div class="uk-container">
            <div class="uk-grid-large" uk-grid>
                <div class="uk-width-1-1">
                    <div class="hero-content-wrapper uk-margin-large-top">
                    <?php
echo op_heading(
    $contents['title'],
    $settings['section_heading_type'],
    'uk-heading-primary uk-text-' . $settings['section_title_transformation'],
    $animation_content
);
?>
                        <?php echo op_link($contents['section_btn'], 'uk-button-large uk-margin-medium-top uk-button uk-button-primary'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
