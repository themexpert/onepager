<?php
    $animation_content = ($settings['animation_content']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['animation_content'] . ';' : '';
?>
<section id="<?php echo $id;?>" class="fp-section features feature-19">
    <div class="uk-section-large">
        <div class="uk-container">
            <div <?php echo $settings['animation_content'] ? $animation_content . 'delay: 400' : ''; ?> class="uk-content-wrapper">
                <div class="section-heading uk-text-center uk-margin-large-bottom">
                    <?php
                        echo op_heading(
                            $contents['section_title'],
                            $settings['heading_type'],
                            'uk-heading-primary uk-text-' . $settings['section_title_transformation']
                        );
                    ?>
                </div>

                <div class="uk-grid" uk-grid>
                    <?php if($contents['reviews']):?>
                        <?php foreach($contents['reviews'] as $single_review):?>
                            <div class="uk-width-1-2@s uk-height-match uk-flex uk-flex-middle">
                                <div class="content-wrapper">
                                    <p><?php echo $single_review['review']?></p>
                                    <div class="uk-grid uk-height-match uk-flex uk-flex-middle" uk-grid>
                                        <div class="uk-width-1-5">
                                            <div class="img-wrapper">
                                                <img src="<?php echo $single_review['author_image']?>" alt="<?php echo $single_review['author_name'];?>">
                                            </div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="author-meta">
                                                <h4 class="uk-margin-remove-bottom"><?php echo $single_review['author_name'];?></h4>
                                                <p class="uk-margin-remove"><?php echo $single_review['author_designation'];?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>