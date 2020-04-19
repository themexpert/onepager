<?php
// Content Animation
$content_animation = ($settings['content_animation']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['content_animation'] . ';"' : '';
?>
<section id="<?php echo $id; ?>" class="fp-section features feature-13 uk-padding-small">
<div class="uk-section">
    <div class="uk-container">
        <article class="uk-article">
            <div class="section-heading uk-margin-large-bottom">
                <?php echo op_heading($contents['section_title'], $settings['heading_type'], 'uk-heading-primary uk-text-center quote-heading uk-position-relative', 'uk-text-' . $settings['title_transformation']) ?>
            </div>
            <div class="uk-grid uk-grid-match" uk-grid>
                <?php foreach ($contents['sub_heading'] as $attorney): ?>
                    <div <?php echo $settings['content_animation'] ? $content_animation . 'delay: 400' : '' ?> class="uk-width-1-3@s">
                        <div class="uk-card attorney_list">
                            <?php if ($attorney['image']): ?>
                                <img data-src="<?php echo $attorney['image'] ?>" alt="item" uk-img>
                            <?php endif;?>
                            <h2 class="attorney-heading uk-text-<?php echo $settings['attorney_title_transformation'] ?>"><?php echo $attorney['name'] ?></h2>
                            <h3 class="designation"><?php echo $attorney['designation']; ?></h3>
                            <p>
                                <?php echo $attorney['desc']; ?>
                            </p>
                            <?php echo op_link($attorney['contact'], 'op-button-right uk-button uk-button-default uk-button-medium uk-text-' . $settings['attorney_button_transformation'] . ''); ?>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </article>
    </div>
</div>

</section>