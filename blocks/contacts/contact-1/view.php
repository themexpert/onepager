<?php

	// info animation
	$info_animation = ( $settings['info_animation'] ) ? 'uk-scrollspy="cls:uk-animation-' . $settings['info_animation'] . ';' : '';

	// form animation
	$form_animation = ( $settings['form_animation'] ) ? 'uk-scrollspy="cls:uk-animation-' . $settings['form_animation'] . '"' : '';
?>

<section id="<?php echo $id; ?>" class="fp-section contacts contact-1 uk-padding-small">
	<div class="uk-section">
		<div class="uk-container">
			<div class="uk-child-width-1-2@s uk-margin" uk-grid>
				<div class="uk-card">
					<div class="heading-info uk-margin-medium-bottom">
						<?php if ( $contents['hotline_title'] ) : ?>
							<!-- Section Title -->
							<h3 class="uk-heading-primary uk-text-<?php echo $settings['title_transformation']; ?>" <?php echo ( $settings['info_animation'] ? $info_animation . 'delay:100"' : '' ); ?>>
								<?php echo $contents['hotline_title']; ?>
							</h3>
						<?php endif; ?>

						<?php if ( $contents['hotline_number'] ) : ?>
							<h4 class="uk-text-lead" <?php echo ( $settings['info_animation'] ? $info_animation . 'delay:200"' : '' ); ?>>
								<?php echo $contents['hotline_number']; ?> 	
							</h4>
						<?php endif; ?>
					</div>
					<?php if ( $contents['address'] ) : ?>
						<div class="uk-card-header uk-padding-remove uk-margin" <?php echo ( $settings['info_animation'] ? $info_animation . 'delay:300"' : '' ); ?>>
							<div class="uk-grid-small uk-flex-middle" uk-grid>
								<div class="uk-width-auto">
									<span class="fa fa-home"></span>
								</div>
								<div class="uk-width-expand">
									<p class="uk-text-meta uk-margin-remove-top">
										<?php echo $contents['address']; ?>
									</p>
								</div>
							</div>
						</div> <!-- uk-card-header -->
					<?php endif; ?>

					<?php if ( $contents['phone'] ) : ?>
						<div class="uk-card-header uk-padding-remove uk-margin" <?php echo ( $settings['info_animation'] ? $info_animation . 'delay:400"' : '' ); ?>>
							<div class="uk-grid-small uk-flex-middle" uk-grid>
								<div class="uk-width-auto">
									<span class="fa fa-phone"></span>
								</div>
								<div class="uk-width-expand">
									<p class="uk-text-meta uk-margin-remove-top">
										<?php echo $contents['phone']; ?>
									</p>
								</div>
							</div>
						</div> <!-- uk-card-header -->
					<?php endif; ?>

					<?php if ( $contents['email'] ) : ?>
						<div class="uk-card-header uk-padding-remove uk-margin" 
						<?php echo ( $settings['info_animation'] ? $info_animation . 'delay:500"' : '' ); ?>>
							<div class="uk-grid-small uk-flex-middle" uk-grid>
								<div class="uk-width-auto">
									<span class="fa fa-envelope-o"></span>
								</div>
								<div class="uk-width-expand">
									<p class="uk-text-meta uk-margin-remove-top">
										<?php echo $contents['email']; ?>
									</p>
								</div>
							</div>
						</div> <!-- uk-card-header -->
					<?php endif; ?>

					<div class="social-links uk-margin" <?php echo ( $settings['info_animation'] ? $info_animation . 'delay:600"' : '' ); ?>>
						<?php foreach ( $contents['social'] as $social ) : ?>
							<a class="icon" href="<?php echo $social; ?>" target="_blank"></a>
						<?php endforeach; ?>
					</div><!-- social-links -->
				</div><!-- uk-card -->
				<div class="uk-grid-item-match uk-flex-middle" <?php echo $form_animation; ?>>
					<?php if ( $contents['contact_title'] ) : ?>
						<div class="contact-info">	
							<!-- Section Title -->
							<h3 class="uk-heading-primary uk-margin-medium-bottom uk-text-<?php echo $settings['title_transformation']; ?>">
								<?php echo $contents['contact_title']; ?>
							</h3>
						</div>
					<?php endif; ?>
					<?php echo do_shortcode( $contents['form'] ); ?>

					<?php
						echo txop_check_dependent_plugin('contact-form-7', 'wp-contact-form-7.php', 'free');
					?>	
					<?php if ($contents['form']): ?>	
						<?php echo do_shortcode($contents['form']);?>
					<?php else: ?>
						<?php if(null === txop_check_dependent_plugin('contact-form-7', 'wp-contact-form-7.php', 'free')): ?>
						<h3 class="uk-text-primary"><?php echo txop_error_checking('shortcode'); ?></h3>
						<?php endif; ?>
					<?php endif; ?>
				</div><!-- uk-grid-item-match -->
			</div><!-- uk-child-width -->
		</div> <!-- uk-container -->
	</div> <!-- uk-section -->
</section> <!-- end-section -->
