<?php

	$section_padding  = ( $contents['total_posts'] == 2 ) ? 'uk-margin-xlarge-bottom' : '';
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

<section id="<?php echo $id; ?>" class="fp-section blogs blog-4 uk-padding-small">
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
			<div class="uk-margin-small-top  <?php echo $section_padding ; ?> section-background uk-background-norepeat uk-background-center-center uk-background-contain" data-src="<?php echo $styles['bg_image']; ?>" uk-img>
				<div class="uk-grid-medium" uk-grid>
				<?php if ( $query->have_posts() ) : ?>
					<?php
						$i = 1;
						while ( $query->have_posts() ) :
							$query->the_post();
							$customOption = '';
							?>
					<?php if($i % 2 !== 0): ?>
					<div class="uk-width-1-2@s uk-margin-medium-bottom">
						<div class="box-wrapper">
							<div class="odd-box">
								<div class="image-wrapper">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( '', array('', '') ); ?></a>
								</div>
								<div class="content-wrapper">
									<div class="uk-background uk-text-medium uk-text-bold">
										<?php echo get_the_date(); ?>
									</div>
									<h2 class="uk-margin-small-top uk-text-bold uk-text-<?php echo $settings['item_title_transformation']; ?>">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h2>
									<div class="uk-label category"><?php echo get_the_category()[0]->name; ?></div>
									<p class="uk-text-small">
										<?php op_the_excerpt( $contents['text_limit'] ); ?>
									</p>
								</div>
							</div>
						</div> <!-- box-wrapper -->
					</div>
					<?else: ?>
					<div class="uk-width-1-2@s uk-margin-medium-bottom">
						<div class="box-wrapper">
							<div class="even-box">
								<div class="content-wrapper">
									<div class="uk-background uk-text-medium uk-text-bold">
										<?php echo get_the_date(); ?>
									</div>
									<h2 class="uk-margin-small-top uk-text-bold uk-text-<?php echo $settings['item_title_transformation']; ?>">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
										</h2>
									<div class="uk-label category"><?php echo get_the_category()[0]->name; ?></div>
									<p class="uk-text-small">
										<?php op_the_excerpt( $contents['text_limit'] ); ?>
									</p>
								</div>
								<div class="image-wrapper">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( '', array('', '') ); ?></a>
								</div>
							</div>
						</div> <!-- box-wrapper -->
					</div>
					<?php endif;?>
					<?php $i++; endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
		</div><!-- uk-container -->
	</div> <!-- uk-section -->
</section> <!-- end-section -->
