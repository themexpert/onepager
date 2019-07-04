<?php
	// Content Animation
	$content_animation = ( $settings['content_animation'] ) ? 'uk-scrollspy="cls:uk-animation-' . $settings['content_animation'] . ';' : '';
	// Content Alignment
	$content_alignment = ( $settings['content_alignment'] ) ? $settings['content_alignment'] : '';
?>
<section id="<?php echo $id; ?>" class="fp-section uk-background-cover uk-position-relative cta cta-2 uk-padding-small" <?php echo ( $styles['bg_parallax'] ) ? 'uk-parallax="bgy: -200"' : ''; ?> tabindex="-1" data-src="<?php echo $styles['bg_image']; ?>" uk-img>
	<div class="uk-section">
		<div class="uk-overlay-primary uk-position-cover"></div>
		<div class="uk-container">
			<div class="uk-grid-large uk-position-relative" uk-grid>
				<div class="uk-width-1-1">
					<div class="uk-text-<?php echo $content_alignment; ?>">
						<div <?php echo ( $settings['content_animation'] ? $content_animation . 'delay:100"' : '' ); ?>>
							<!-- Image -->
							<?php if ( $contents['image'] ) : ?>
								<img class="op-media" src="<?php echo $contents['image']; ?>" alt="<?php echo $contents['title']; ?>">
							<?php endif; ?>
						</div>

						<!-- Title -->
						<?php if ( $contents['title'] ) : ?>
							<?php
								echo op_heading( 
									$contents['title'],
									$settings['heading_type'], 
									'uk-heading-primary uk-text-center', 
									'uk-text-' . $settings['title_transformation'], 
									$content_animation . '"'
								); 
							?>
						<?php endif; ?>

						<!-- Description -->
						<?php if ( $contents['description'] ) : ?>
							<div class="uk-text-lead" <?php echo ( $settings['content_animation'] ? $content_animation . 'delay:500"' : '' ); ?>><?php echo $contents['description']; ?></div>
						<?php endif; ?>
						<p <?php echo ( $settings['content_animation'] ? $content_animation . 'delay:700"' : '' ); ?>>
							<!-- Link -->
							<?php echo op_link( $contents['link'], 'uk-margin-medium-top uk-button uk-button-primary uk-button-large' ); ?>
						</p>
					</div> <!-- text-alignment -->

				</div> <!-- uk-grid-1 -->
			</div><!-- uk-grid-large -->
		</div><!-- uk-container -->
	</div> <!-- uk-section -->
</section> <!-- end-section -->
