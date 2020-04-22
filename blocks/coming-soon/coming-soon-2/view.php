<?php
	// Title Animation
	$title_animation = ( $settings['title_animation'] ) ? 'uk-scrollspy="cls:uk-animation-' . $settings['title_animation'] . '";' : '';
	// Logo Animation
	$logo_animation = ( $settings['logo_animation'] ) ? 'uk-scrollspy="cls:uk-animation-' . $settings['logo_animation'] . '"' : '';
	// Content Animation
	$content_animation = ( $settings['content_animation'] ) ? 'uk-scrollspy="cls:uk-animation-' . $settings['content_animation'] . '"' : '';
?>
<section id="<?php echo $id; ?>" class="fp-section uk-section coming-soon coming-soon-2 uk-position-relative uk-height-viewport uk-padding-large">
	<div class="uk-overlay-primary uk-position-cover"></div>
	<div class="uk-container">
		<article class="uk-position-center">
				<?php if ( $contents['logo'] ) : ?>
				<!-- Logo -->
				<div class="logo">
					<img class="op-logo uk-align-center uk-text-center" src="<?php echo $contents['logo']; ?>" alt="logo" <?php echo $logo_animation; ?>>
				</div>
				<?php endif; ?>
				<!-- Title -->
				<div class="section-heading uk-margin-large-bottom uk-text-center">	
					<?php if ( $contents['title'] ) : ?>
					<!-- Section Title -->
					  	<?php 
							echo op_heading(
								$contents['title'],
								$settings['heading_type'],
								'uk-heading-primary uk-text-'.$settings['title_transformation'],
								$title_animation
							); 
						?>
					<?php endif; ?>
					<?php if($contents['desc']):?>
						<!-- Section Sub Title -->
						<p class="uk-text-lead uk-margin-remove-bottom" <?php echo ($settings['content_animation'])? $content_animation . ';delay:' .'300"' : '' ;?>>
							<?php echo $contents['desc'];?>
						</p>
					<?php endif; ?>
				</div>
		</article> 
	</div> 
</section> <!-- end-section -->


