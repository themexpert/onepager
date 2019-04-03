<?php
	// $items = $settings['columns'];
	// title alignment
	$title_alignment = ( $settings['title_alignment'] ) ? $settings['title_alignment'] : '';
	// title animation
	$title_animation = ( $settings['title_animation'] ) ? 'uk-scrollspy="cls:uk-animation-' . $settings['title_animation'] . ';' : '';
	// items alignment
	$items_alignment = ( $settings['items_alignment'] ) ? $settings['items_alignment'] : '';
	// items animation
	$items_animation = ( $settings['items_animation'] ) ? 'uk-scrollspy="cls:uk-animation-' . $settings['items_animation'] . ';target:>div> .uk-card; delay:200;"' : '';
?>


<section id="<?php echo $id; ?>" class="fp-section features feature-4">
	<div class="uk-section">
		<div class="uk-container">
			<article class="uk-article">
				<?php if ( $contents['title'] || $contents['description'] ) : ?>
					<div class="section-heading uk-margin-large-bottom uk-text-<?php echo $title_alignment; ?>">	
						<?php if ( $contents['title'] ) : ?>
							<!-- Section Title -->
							<h1 class="uk-heading-primary uk-text-<?php echo $settings['title_transformation']; ?>" <?php echo ( $settings['title_animation'] ? $title_animation . 'delay:100"' : '' ); ?>>
								<?php echo $contents['title']; ?>
							</h1>
						<?php endif; ?>
						<?php if ( $contents['description'] ) : ?>
							<!-- Section Sub Title -->
							<p class="uk-text-lead" <?php echo ( $settings['title_animation'] ? $title_animation . 'delay:300"' : '' ); ?>>
								<?php echo $contents['description']; ?>
							</p>
						<?php endif; ?>
					</div>
				<?php endif; ?>
				<div class="uk-grid-medium" <?php echo $items_animation; ?> uk-grid >
					<?php foreach ( $contents['items'] as $feature ) : ?>
						<div class="uk-width-1-<?php echo $settings['items_columns']; ?>@m uk-width-1-1@s">
							<div class="uk-card uk-card-hover uk-text-<?php echo $items_alignment; ?> uk-card-default" >
								<div class="uk-position-relative ">
									<!-- Item image -->
									<?php if ( op_is_image( $feature['media'] ) ) : ?>
										<img class="op-media" src="<?php echo $feature['media']; ?>" alt="<?php echo $feature['title']; ?>" />
									<?php else : ?>
										<span class="op-media <?php echo $feature['media']; ?>"></span>
									<?php endif; ?>
								</div>
								<div class="uk-card-body uk-padding">
									<!-- Item title -->
									<h3 class="item-title uk-margin-remove-bottom uk-text-<?php echo $settings['title_transformation']; ?>">
										<?php if ( trim( $feature['link'] ) ) : ?>
											<a href="<?php echo $feature['link']; ?>" target="<?php echo $feature['target'] ? '_blank' : ''; ?>"><?php echo $feature['title']; ?></a>
										<?php else : ?>
											<?php echo $feature['title']; ?>
										<?php endif; ?>
									</h3>
									<!-- Item desc -->
									<p class="uk-text-medium uk-margin-small"><?php echo $feature['description']; ?></p>
								</div> <!-- uk-card-body -->
							</div><!-- uk-text-center -->
						</div><!-- uk-columns -->
					<?php endforeach; ?>
				</div> <!-- uk grid medium -->
			</article> <!-- uk-article -->
		</div> <!-- uk-container -->
	</div> <!-- uk-section -->
</section> <!-- fp-section -->
