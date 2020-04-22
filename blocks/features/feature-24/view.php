<?php
    // Animation Content
    $animation_content = ($settings['animation_content']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['animation_content'] . ';"' : '';

    // Media Content
    $animation_media = ($settings['animation_media']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['animation_media'] . ';"' : '';
    
?>
<section id="<?php echo $id;?>" class="fp-section features feature-24 uk-background-norepeat uk-background-<?php echo $styles['bg_position'];?>" data-src="<?php echo $styles['bg_image']?>" uk-img>
    <div class="uk-section-large">
        <div class="uk-container">
            <div class="uk-grid uk-grid-match" uk-grid>
                <div class="uk-width-1-3@s">
                    <div <?php echo $settings['animation_media'] ? $animation_media . "delay: 400" : ''; ?> class="image-wrapper uk-flex uk-flex-center">
                        <img src="<?php echo $contents['left_image'];?>" alt="<?php echo $contents['section_title'];?>">
                    </div>
                </div>
                <div class="uk-width-expand@s uk-padding-remove">
                    <div <?php echo $settings['animation_content'] ? $animation_content . 'delay: 500' : ''; ?> class="content-wrapper">
                            <div class="primary-title-wrapper uk-margin-medium-left">
                            <?php
                                echo op_heading(
                                    $contents['section_title'],
                                    $settings['heading_type'],
                                    'uk-heading-primary uk-margin-remove-top uk-text-' . $settings['title_transformation']
                                );
                            ?>
                            <p><?php echo $contents['section_desc'];?></p>
                        </div>
                        <div class="quote-wrapper">
                            <div class="quote-content uk-padding">
                                <h4 class="uk-margin-remove"><?php echo $contents['quotes_title'];?></h4>
                                <p class="uk-margin-remove"><?php echo $contents['quotes_desc'];?></p>
                            </div>
                        </div>
                        <div class="story-area uk-margin-medium-left">
                            <h3 class="uk-margin-medium-top"><?php echo $contents['story_title'];?></h3>
                            <?php if($contents['stroies']):?>
                                <?php foreach($contents['stroies'] as $single_story):?>
                                    <div class="uk-grid uk-margin-small-top" uk-grid>
                                        <div class="uk-width-1-5">
                                            <img src="<?php echo $single_story['story_logo']?>" alt="<?php echo $single_story['story_text']?>">
                                        </div>
                                        <div class="uk-expand uk-margin-remove">
                                            <div class="op-text">
                                                <p><?php echo $single_story['story_text']?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach;?>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>