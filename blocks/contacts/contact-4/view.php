<?php

// items Animation
$animation_content = ($settings['animation_content']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['animation_content'] . ';"' : '';

?>

<section id="<?php echo $id; ?>" class="fp-section contacts contact-4 uk-padding-medium">
    <div class="uk-section">
        <div class="uk-container">
            <div class="uk-grid-large" uk-grid>
            <div <?php echo $settings['animation_content'] ? $animation_content . "delay: 300" : ""; ?> class="uk-width-1-2@m">
                <div class="uk-card">
                <?php echo op_heading($contents['section_title'], $settings['heading_type'], 'uk-heading-primary uk-margin-medium-bottom contact4-heading uk-position-relative', 'uk-text-' . $settings['title_transformation']) ?>

                <?php
if ($contents['section_blocks']):
    foreach ($contents['section_blocks'] as $single_section): ?>
			        <div class="uk-block">
			            <div class="title-wrapper">
			                <h3 class="tx-item-heading"><span class="<?php echo $single_section['media']; ?>"></span> <?php echo $single_section['title']; ?></h3>
			            </div>
			            <p><?php echo $single_section['desc'] ?></p>
			        </div>
			    <?php endforeach;endif;?>
        <?php echo op_link($contents['section_btn'], 'uk-button uk-button-primary uk-button-large uk-margin-large-top tx-contact-btn') ?>
                </div>
            </div>

            <div <?php echo $settings['animation_content'] ? $animation_content . "delay: 600" : ""; ?> class="uk-width-1-2@m">
                <div class="contact-4-wrapper" data-src="<?php echo $styles['bg_image']; ?>" uk-img>
                    <div class="contact-area">
                        <h2 class="uk-margin-medium-bottom"><?php echo $contents['contact_heading']; ?></h2>
                        <?php echo do_shortcode($contents['contact_shortcode']); ?>

                            <?php
                                echo txop_check_dependent_plugin('contact-form-7', 'wp-contact-form-7.php', 'free');
                            ?>	
                            <?php if ($contents['contact_shortcode']): ?>
                                <?php echo do_shortcode($contents['contact_shortcode']);?>
                            <?php else: ?>
                                <?php if(null === txop_check_dependent_plugin('contact-form-7', 'wp-contact-form-7.php', 'free')): ?>
                                    <h3 class="uk-text-secondary"><?php echo txop_error_checking('shortcode'); ?></h3>
                                <?php endif; ?>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
