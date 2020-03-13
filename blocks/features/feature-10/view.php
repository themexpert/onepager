<?php
// Content Animation
$content_animation = ($settings['animation_content']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['animation_content'] . ';"' : '';

// Content Animation
$media_animation = ($settings['animation_media']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['animation_media'] . ';"' : '';

?>

<section id="<?php echo $id; ?>" class="fp-section features features-10">
    <div class="uk-grid-large" uk-grid>
            <div <?php echo $settings['animation_media'] ? $media_animation . 'delay: 300' : '' ?> class="uk-width-1-3@m uk-padding-remove-left uk-text-right">
                <div class="image-wrapper">
                    <img data-src="<?php echo $contents['section_image']; ?>" alt="" uk-img>
                </div>
            </div>
            <div <?php echo $settings['animation_content'] ? $content_animation . 'delay: 300' : '' ?> class="uk-width-expand@m uk-padding-remove-left">
                <div class="tab-area-wrapper uk-padding-small">
                    <!-- Title -->
                    <?php if ($contents['heading_text']): ?>
                        <?php if ($contents['heading_text']) {
    echo op_heading(
        $contents['heading_text'],
        $settings['heading_type'],
        'uk-heading-primary  uk-text-' . $settings['title_transformation'],
        $content_animation
    );
}?>
                    <?php endif;?>

                    <div class="tab-content-wrap">
                        <ul <?php echo $settings['animation_content'] ? $content_animation . 'delay: 400' : '' ?> class="uk-subnav tx-tab-nav" uk-switcher="animation: uk-animation-slide-left-medium, uk-animation-slide-right-medium">
                            <?php foreach ($contents['tab_items'] as $tabItem): ?>

                            <li><a class="uk-text-<?php echo $settings['tab_text_transformation']; ?>" href=""><?php echo $tabItem['title']; ?></a></li>
                            <?php endforeach;?>
                        </ul>

                        <ul <?php echo $settings['animation_content'] ? $content_animation . 'delay: 500' : '' ?> class="uk-switcher uk-margin tx-tab-body">
                            <?php foreach ($contents['tab_items'] as $tabDetails): ?>
                                <li>
                                    <div class="content-wrapper">
                                        <p>
                                            <?php echo $tabDetails['desc']; ?>
                                        </p>
                                        <?php if ($tabDetails['tab_btn']): ?>
                                            <?php echo op_link($tabDetails['tab_btn'], 'op-button uk-button uk-button-primary uk-button-large uk-margin-medium-top uk-text-' . $settings['btn_text_transform']); ?>
                                        <?php endif;?>
                                    </div>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>
