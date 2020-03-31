<?php
    // Animation Content
    $animation_content = ($settings['animation_content']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['animation_content'] . ';"' : '';
?>
<section id="<?php echo $id;?>" class="fp-section features feature-22">
    <div class="uk-section-large">
        <div class="uk-container">
            <div <?php echo $settings['animation_content'] ? $animation_content . 'delay: 400' : ''; ?> class="content-wrapper">
                <div class="section-heading uk-text-center uk-margin-large-bottom">
                    <?php
                        echo op_heading(
                            $contents['section_title'],
                            $settings['heading_type'],
                            'uk-heading-primary uk-text-' . $settings['section_title_transformation']
                        );
                    ?>
                </div>

                <div class="uk-grid uk-height-match" uk-grid>
                    <?php if($contents['tabs']):?>
                        <div class="uk-width-1-1">
                            <div class="op-accordion" uk-accordion>
                                <?php $open = 1; foreach($contents['tabs'] as $single_tabs):?>
                                    <div class="single-accordion <?php echo ($open === 2) ? 'uk-open' : ''; $open++;?>">
                                        <a class="uk-accordion-title" href="#"><?php echo $single_tabs['tab_title'];?></a>
                                        <div class="uk-accordion-content uk-margin-small-bottom">
                                            <p><?php echo $single_tabs['tab_desc'];?></p>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</section>