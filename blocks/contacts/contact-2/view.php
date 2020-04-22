<?php

	// Button Animation
	$form_animation = ($settings['form_animation']) ? 'uk-scrollspy="cls:uk-animation-'.$settings['form_animation'] . ';delay:400"' : '';
	// title animation
	$title_animation = ( $settings['title_animation'] ) ? 'uk-scrollspy="cls:uk-animation-' . $settings['title_animation'] . ';"' : '';

?>

<section id="<?php echo $id;?>" class="uk-section-large uk-position-relative contact contact-2 <?php echo ($styles['bg_image_size'] == 'uk-background-contain') ? 'uk-background-contain' : 'uk-background-cover' ?>" tabindex="-1" data-src="<?php echo $styles['bg_image']; ?>" uk-img>
	<div class="uk-overlay-primary uk-position-cover"></div>

	<div class="uk-container">
		<div class="uk-grid-large uk-position-relative" uk-grid>
			<div class="uk-width-1-1">
				<div class="uk-text-center">

					<?php if ( $contents['title'] ) : ?>
					<!-- Section Title -->
					  	<?php 
							echo op_heading(
								$contents['title'],
								$settings['heading_type'],
								'uk-heading-primary uk-text-bold uk-text-'.$settings['title_transformation'],
								$title_animation
							); 
						?>
					<?php endif; ?>

					<?php if($contents['description']): ?>
						<!-- Description -->
						<div class="uk-text-lead" 
						<?php echo ($settings['title_animation'] ? $title_animation . '400"' : ''); ?>> 
						<?php echo $contents['description'];?>
						</div>
					<?php endif; ?>

							<?php
								echo txop_check_dependent_plugin('contact-form-7', 'wp-contact-form-7.php', 'free');
							?>	
							<?php if ($contents['form']): ?>
								<div class="<?php echo ($settings['content_alignment'] == 'center') ? 'uk-margin-auto' : '' ?> uk-margin-medium-top uk-width-1-2" <?php echo $form_animation;?>>	
									<?php echo do_shortcode($contents['form']);?>
								</div>
							<?php else: ?>
								<?php if(null === txop_check_dependent_plugin('contact-form-7', 'wp-contact-form-7.php', 'free')): ?>
								<h3 class="uk-text-secondary"><?php echo txop_error_checking('shortcode'); ?></h3>
								<?php endif; ?>
							<?php endif; ?>


					

				</div> <!-- text-alignment -->
				
			</div> <!-- uk-grid-1 -->
		</div><!-- uk-grid-large -->
	</div><!-- uk-container -->

</section> <!-- end-section -->
