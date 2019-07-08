<?php
	// Title Animation
	$title_animation = ( $settings['title_animation'] ) ? 'uk-scrollspy="cls:uk-animation-' . $settings['title_animation'] . '";' : '';    // Title Animation
	$content_animation = ( $settings['content_animation'] ) ? 'uk-scrollspy="cls:uk-animation-' . $settings['content_animation'] . '"' : '';  // Title
	// Coundown Animation
	$countdown_animation = ( $settings['countdown_animation'] ) ? 'uk-scrollspy="cls:uk-animation-' . $settings['countdown_animation'] . '"' : '';
	// Social link Animation
	$social_animation = ( $settings['social_animation'] ) ? 'uk-scrollspy="cls:uk-animation-' . $settings['social_animation'] . '"' : '';
?>
<section id="<?php echo $id; ?>" class="fp-section uk-section coming-soon coming-soon-1 uk-height-viewport uk-position-relative">
	<div class="uk-overlay-primary uk-position-cover"></div>
	
	<article class="uk-position-center">
		<!-- Title -->
		<?php if ( $contents['title'] ) : ?>
			<?php 
				echo op_heading(
					$contents['title'],
					$settings['heading_type'],
					'uk-heading-primary uk-text-center uk-text-'.$settings['title_transformation'],
					$title_animation
				); 
			?>
		<?php endif; ?>
		<!-- countdown -->
		<?php if ( $contents['date'] ) : ?>
		<div class="countdown uk-flex uk-flex-center uk-text-center uk-flex-middle uk-container uk-container-center" >
			<div class="uk-grid-small uk-child-width-auto" uk-grid uk-countdown="date: <?php echo $contents['date']; ?>">
					<div class="countdown-number">
						<div class="uk-countdown-number uk-countdown-days"></div>
							<div class="uk-countdown-label"><?php _e( 'Days', 'onepager' ); ?></div>
					</div>
					
					<div class="countdown-number">
							<div class="uk-countdown-number uk-countdown-hours"></div>
								<div class="uk-countdown-label"><?php _e( 'Hours', 'onepager' ); ?></div>
					</div>
					
					<div class="countdown-number">
						<div class="uk-countdown-number uk-countdown-minutes"></div>
							<div class="uk-countdown-label"><?php _e( 'Minutes', 'onepager' ); ?></div>
					</div>
					
					<div class="countdown-number">
						<div class="uk-countdown-number uk-countdown-seconds"></div>
						<div class="uk-countdown-label"><?php _e( 'Seconds', 'onepager' ); ?></div>
					</div>
			</div>
		</div> 
		<?php endif; ?>
		<!-- Description -->
		<?php if ( $contents['description'] ) : ?>
			<div class="uk-text-lead uk-text-center uk-align-center uk-width-1-2@s" <?php echo $content_animation; ?> >
				<?php echo $contents['description']; ?>
			</div>
		<?php endif; ?>
		<!-- social-links -->
		<div class="social-links uk-margin uk-text-center" <?php echo $social_animation; ?> >
			<?php foreach ( $contents['social'] as $social ) : ?>
				<a class="icon" href="<?php echo $social; ?>" target="_blank"></a>
			<?php endforeach; ?>
		</div>
	</article>
</section> <!-- end-section -->
