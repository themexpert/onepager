<?php 
// title animation
$title_animation = ($settings['title_animation']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['title_animation'] . ';"' : '';


?>

<section id="<?php echo $id;?>" class="fp-section features feature-15">
    <div class="uk-section">
        <div class="uk-container">
            <div class="section-title-wrapper">
                <?php if($contents['section_title']) :;?>
                    <div class="section-heading uk-text-<?php echo $settings['title_alignment'];?>">
                        <?php
                            echo op_heading(
                                $contents['section_title'],
                                $settings['heading_type'],
                                'uk-heading-primary uk-text-' . $settings['section_title_transformation'],
                                $title_animation
                            );
                        ?>
                        <p <?php echo $title_animation ? $title_animation . "delay: 400" : "";?>><?php echo $contents['section_desc'] ? $contents['section_desc'] : ''?></p>
                    </div>
                <?php endif;?>
            </div>

            <div class="uk-grid uk-margin-large-top services" uk-grid>
                <?php if($contents['services']):?>
                    <?php foreach($contents['services'] as $single_service):?>
                    <div class="uk-width-1-3@s uk-height-match uk-text-center">
                        <div class="single-content-wrapper">
                            <div class="img-wrapper">
                                <img src="<?php echo $single_service['media_image']?>" alt="<?php echo $single_service['service_title']?>">
                            </div>
                            <h2 class="uk-text-<?php echo $settings['item_title_transformation'];?>"><?php echo $single_service['service_title']?></h2>
                            <p class="service-desc"><?php echo $single_service['service_desc'] ?></p>
                        </div>
                    </div>
                    <?php endforeach;?>
                <?php endif;?>
            </div>

        </div>
    </div>
</section>