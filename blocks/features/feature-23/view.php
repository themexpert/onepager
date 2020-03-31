<?php
    // Animation Content
    $animation_content = ($settings['animation_content']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['animation_content'] . ';"' : '';

    // Media Content
    $animation_media = ($settings['animation_media']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['animation_media'] . ';"' : '';
    
?>

<section id="<?php echo $id;?>" class="fp-section uk-position-relative features feature-23">
    
    <div class="section-bg-text uk-margin-auto">
        <h2 class="uk-text-uppercase"><?php echo $contents['background_title'];?></h2>
    </div>
    <div class="uk-section-large">
        <div class="uk-container">
            <div class="uk-grid uk-height-match" uk-grid>
                <div class="uk-width-expand@s">
                    <div <?php echo $settings['animation_content'] ? $animation_content . 'delay: 400' : ''; ?> class="content-wrapper">
                        <?php
                            echo op_heading(
                                $contents['section_title'],
                                $settings['heading_type'],
                                'uk-heading-primary uk-margin-remove-top uk-text-' . $settings['title_transformation']
                            );
                        ?>
                        <p><?php echo $contents['section_desc']?></p>
                        <h4 class="feature-title"><?php echo $contents['feature_title'];?></h4>
                        <?php if($contents['features']):?>
                        <ul class="uk-list op-list">
                            <?php foreach($contents['features'] as $single_list): ?>
                            <li><span class="<?php echo $contents['feature_icon']?>"></span> <p><?php echo $single_list['feature_text'];?></p></li>
                            <?php endforeach;?>
                        </ul>
                        <?php endif;?>
                    </div>
                </div>
                <div class="uk-width-1-3@s">
                    <div <?php echo $settings['animation_media'] ? $animation_media . 'delay: 500' : ''; ?> class="image-wrapper uk-text-center">
                        <img src="<?php echo $contents['section-image']?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>