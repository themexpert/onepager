<?php
	// Title Animation
	$title_animation = ( $settings['title_animation'] ) ? 'uk-scrollspy="cls:uk-animation-' . $settings['title_animation'] . '"' : '';
	// Logo Animation
	$logo_animation = ( $settings['logo_animation'] ) ? 'uk-scrollspy="cls:uk-animation-' . $settings['logo_animation'] . '"' : '';
	// Content Animation
	$content_animation = ( $settings['content_animation'] ) ? 'uk-scrollspy="cls:uk-animation-' . $settings['content_animation'] . '"' : '';
?>
<section id="<?php echo $id; ?>" class="fp-section uk-section coming-soon coming-soon-2 uk-height-viewport uk-position-relative">
	<div class="uk-overlay-primary uk-position-cover"></div>

	<article class="uk-position-center">
			<?php if ( $contents['logo'] ) : ?>
			<!-- Logo -->
			<div class="logo">
				<img class="op-logo uk-align-center uk-text-center" src="<?php echo $contents['logo']; ?>" alt="logo" <?php echo $logo_animation; ?>>
			</div>
			<?php endif; ?>
			<!-- Title -->
			<?php if ( $contents['title'] ) : ?>
				<?php
					echo op_heading( 
						$contents['title'],
						$settings['heading_type'], 
						'uk-heading-primary uk-text-center', 
						'uk-text-' . $settings['title_transformation'], 
						$title_animation . '"'
					); 
				?>
			<?php endif; ?>
			<!-- Description -->
			<?php if ( $contents['description'] ) : ?>
				<div class="uk-text-lead uk-text-center uk-align-center uk-width-1-2@s" <?php echo $content_animation; ?> >
					<?php echo $contents['description']; ?>
				</div>
			<?php endif; ?>
	</article> 
	
</section> <!-- end-section -->
