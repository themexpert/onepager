<?php
	// title animation
	$title_animation = ( $settings['title_animation'] ) ? 'uk-scrollspy="cls:uk-animation-' . $settings['title_animation'] . ';"' : '';
	// title alignment
	$title_alignment = ( $settings['title_alignment'] ) ? $settings['title_alignment'] : '';

	// items animation
	$items_animation = ( $settings['item_animation'] ) ? 'uk-scrollspy="cls:uk-animation-' . $settings['item_animation'] . ';target:> .uk-card; delay:200;"' : '';
	// Arguments
	$args = array(
		'posts_per_page'   => $contents['total_posts'],
		'cat'         => $contents['category'],
	);
	// Build query
	$query = new WP_Query( $args );
?>

<section id="<?php echo $id; ?>" class="fp-section blogs blog-2 uk-padding-small">
	<div class="uk-section">
		<div class="uk-container">
			<div class="section-heading uk-text-<?php echo $title_alignment; ?> uk-padding-large uk-padding-remove-top">
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

				<?php if ( $contents['description'] ) : ?>
					<div class="uk-text-lead" <?php echo ( $settings['title_animation'] ? $title_animation . 'delay:300"' : '' ); ?>><?php echo $contents['description']; ?></div>
				<?php endif; ?>
			</div> <!-- Section heading -->
			<div <?php echo $items_animation; ?> class="section-background uk-background-norepeat uk-background-center-center uk-background-contain uk-margin-medium-top" data-src="<?php echo $styles['bg_image']; ?>" uk-img>
				<div class="uk-grid-medium" uk-grid>
				<?php if ( $query->have_posts() ) : ?>
					<?php
						$i = 1;
						while ( $query->have_posts() ) :
							$query->the_post();
							
							$customValues = array();

							$customValues['counter'] =  $i;

						  	if($customValues['counter'] < 9 ) {
								$customValues['counter'] = "0" . $i;
							}

							if($i % 2 == 0) {
							  	$customValues['order'] = '';
							  	$customValues['class'] = 'right';
							  	$customValues['margin'] = 'uk-margin-xlarge-top';
							}else{
							  	$customValues['class'] = '';
							  	$customValues['order'] = 'uk-flex-last@s';
							  	$customValues['margin'] = '';
							}
							?>
							<div class="uk-width-1-2@m <?php echo $customValues['margin']; ?> ">
								<div class="uk-card uk-card-secondary uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
								    <div class="<?php echo $customValues['order']; ?> uk-card-media-<?php echo $customValues['class']; ?> uk-cover-container">
								        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( '', array('', '') ); ?></a>
								    </div>
								    <div>
								        <div class="uk-card-body">
								        	<p class="uk-text-large"><?php echo $customValues['counter']; ?></p>

								            <h2 class="uk-card-title uk-margin-small-top uk-text-<?php echo $settings['item_title_transformation']; ?>">
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h2>

											<p class="uk-text-small">
												<?php op_the_excerpt( $contents['text_limit'] ); ?>
											</p>

											<?php if ( $contents['readmore_text'] ) : ?>	
												<a class="uk-button-text" href="<?php the_permalink(); ?>"><?php echo $contents['readmore_text']; ?></a>
											<?php endif; ?>
								        </div>
								    </div>
								</div>
							</div>
							<?php $i++; endwhile; ?>
						<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
		</div><!-- uk-container -->
	</div> <!-- uk-section -->
</section> <!-- end-section -->
