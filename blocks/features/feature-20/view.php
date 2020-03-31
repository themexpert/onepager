<?php
    $animation_content = ($settings['animation_content']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['animation_content'] . ';' : '';
?>

<section id="<?php echo $id;?>" class="fp-section features feature-20 uk-background-contain uk-background-norepeat uk-background-<?php echo $styles['bg_position'];?>" data-src="<?php echo $styles['bg_image']?>" uk-img>
    <div class="uk-section-large">
        <div class="uk-container">
            <div <?php echo $settings['animation_content'] ? $animation_content . 'delay: 400' : ''; ?> class="uk-grid uk-height-match" uk-grid>
                <div class="uk-width-1-2@s uk-text-center">
                    <img data-src="<?php echo $contents['section_image']?>" alt="<?php echo $contents['title'];?>" uk-img>
                </div>
                <div class="uk-width-1-2@s">
                    <div class="content-wrapper uk-margin-medium-top">
                        <h4 class="uk-margin-small-bottom heading-tagline"><?php echo $contents['top_tagline']?></h4>
                        <?php
                            echo op_heading(
                                $contents['title'],
                                $settings['heading_type'],
                                'uk-heading-primary uk-margin-remove-top uk-text-' . $settings['section_title_transformation']
                            );
                        ?>
                        <p class="uk-margin-medium-top"><?php echo $contents['desc']?></p>
                        <img src="<?php echo $contents['signature'];?>" alt="<?php echo $contents['title']?>" class="signature">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>