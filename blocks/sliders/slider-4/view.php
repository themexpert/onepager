<?php
$slideshow_options[] = 'easing: ' . $settings['slide_animation'];
$slideshow_options[] = ( $settings['autoplay'] ) ? 'autoplay: true' : '';
$slideshow_options[] = ( $settings['infinite_sliding'] ) ? 'infinite_sliding: true' : '';
$slideshow_options[] = ( $settings['autoplay_interval'] ) ? 'autoplay_interval: 3000' : '';
$slideshow = implode( '; ', $slideshow_options );

?>

<section id="<?php echo $id;?>" class="sliders slider-4">
    <div class="uk-container-cover uk-margin-auto">
        <div class="uk-grid" uk-grid>
            <div class="uk-width-1-1">
                <div uk-slider='<?php echo $slideshow;?>'>
                    <div class="uk-position-relative uk-visible-toggle">
                        <ul class="uk-slider-items uk-child-width-1-5@m uk-child-width-1-3@s">
                            <?php if($contents['sliders']): ?>
                                <?php foreach($contents['sliders'] as $single_slide): ?>
                                <li>
                                    <div class="item-wrapper uk-position-relative">
                                        <img src="<?php echo $single_slide['slide_image']?>" alt="<?php echo $single_slide['slide_image']?>">
                                        <div class="tx-overlay"></div>
                                        <?php echo op_link($contents['social_button'], 'uk-button button-fw')?>
                                    </div>
                                </li>
                                <?php endforeach;?>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>