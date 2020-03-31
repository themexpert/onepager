<?php
$slideshow_options[] = 'animation: ' . $settings['animation'];
$slideshow_options[] = ( $settings['autoplay'] ) ? 'autoplay: true' : '';
$slideshow = implode( '; ', $slideshow_options );
?>

<section id="<?php echo $id;?>" class="fp-section sliders slider-5" data-src="<?php echo $styles['bg_image']?>" uk-img>
    <div class="uk-section-large">
        <div class="uk-container">
            <div class="title-wrapper uk-text-center uk-margin-large-bottom">
                <?php
                    echo op_heading(
                        $contents['section_title'],
                        $settings['heading_type'],
                        'uk-heading-primary uk-text-' . $settings['title_transformation']
                    );
                ?>
                <p><?php echo $contents['section_desc'];?></p>
            </div>
            <?php if($contents['sliders']): ?>
            <div class="main-slider">
                <div class="uk-grid uk-match-grid" uk-grid>
                    <div class="uk-width-1-2@s">
                        <div class="uk-visible-toggle" tabindex="-1" uk-slideshow="<?php echo $slideshow; ?>">
                            <div class="uk-slideshow-items">
                                <?php foreach($contents['sliders'] as $single_slide):?>
                                    <div class="single-item">
                                        <div class="content-wrap uk-margin-large-top uk-position-relative">
                                            <div class="item-wrapper uk-padding uk-height-1-1">
                                                <div class="slide-label">
                                                    <h2><?php echo $single_slide['slide_num'];?></h2>
                                                </div>
                                                <div class="slider-content uk-height-1-1 uk-text-center">
                                                    <h3 class="uk-margin-remove-top"><?php echo $single_slide['slide_title'];?></h3>
                                                    <p class="uk-margin-remove-top"><?php echo $single_slide['slide_desc']?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            </div>
                            <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
                        </div>
                    </div>
                    <div class="uk-width-1-2@s uk-flex uk-flex-middle uk-flex-center">
                        <div class="image-wrap">
                            <img src="<?php echo $single_slide['slide_image'];?>" alt="<?php echo $single_slide['slide_title'];?>" width="250">
                        </div>
                    </div>
                </div>
            </div>
            <?php endif;?>
        </div>
    </div>
</section>