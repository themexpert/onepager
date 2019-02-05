<?php 

  // title alignment
  $title_alignment = ($settings['title_alignment']) ? $settings['title_alignment'] : '';
  // title animation
  $title_animation = ($settings['title_animation']) ? 'uk-scrollspy="cls:uk-animation-'.$settings['title_animation'].'"' : '';

 ?>

<section id="<?php echo $id;?>" class="fp-section pricing pricing-1">
    <div class="uk-section">
        <div class="uk-container">
            <div class="section-heading uk-margin-large-bottom uk-text-<?php echo $title_alignment;?>" <?php echo $title_animation;?>>
                <?php if($contents['title']):?>
                <!-- Section Title -->
                <h1 class="uk-heading-primary uk-text-<?php echo $settings['title_transformation'];?>">
                    <?php echo $contents['title'];?>
                </h1>
                <?php endif; ?>

                <?php if($contents['description']):?>
                    <div class="uk-text-lead"><?php echo $contents['description']?></div>
                <?php endif; ?>
            </div> <!-- Section heading -->


            <div class="uk-grid-medium" uk-grid>
                <?php foreach($contents['pricings'] as $k=>$pricing): ?>
                <div class="uk-width-1-<?php echo $settings['items_columns'];?>@m">
                    <div class="price-table uk-text-center <?php echo $pricing['featured'] ? 'featured': ''?>">
                        <h2 class="pricing-title uk-padding-small uk-margin-remove-top"><?php echo $pricing['title'];?></h2>
                        <div class="value uk-padding">
                            <span><?php echo $pricing['money'];?></span>
                            <span><?php echo $pricing['price'];?></span><br>
                            <span><?php echo $pricing['period'];?></span>
                        </div>
                        <ul class="uk-list uk-list-large uk-list-divider uk-margin-remove">
                            <?php foreach($pricing['features'] as $feature): ?>
                            <li><?php echo $feature;?></li>
                            <?php endforeach; ?>
                            <li><?php echo op_link($pricing['link'], 'uk-display-block uk-text-uppercase uk-padding-small uk-width-1-1');?></li>
                        </ul> <!-- uk-list -->
                    </div> <!-- pricing-table -->
                </div> <!-- uk-width -->
                <?php endforeach; ?>
            </div> <!-- uk-grid-medium -->
        </div> <!-- uk-grid -->
    </div>
</section> <!-- end-section -->
