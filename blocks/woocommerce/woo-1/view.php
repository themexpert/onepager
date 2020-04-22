<?php
if ( ! Onepager::isWooCommerceInstalled() ) {
	echo '<p class="uk-container uk-container-small uk-alert uk-alert-danger uk-margin-medium-top uk-margin-medium-bottom"><b>WooCommerce</b> is not installed or activated. Please install and activate WooCommerce.</p>';
	return;
}


	// title animation
	$title_animation = ( $settings['title_animation'] ) ? 'uk-scrollspy="cls:uk-animation-' . $settings['title_animation'] . ';"' : '';
	// title alignment
	$title_alignment = ( $settings['title_alignment'] ) ? $settings['title_alignment'] : '';

	// title animation
	$item_animation = ( $settings['item_animation'] ) ? 'uk-scrollspy="cls: uk-animation-' . $settings['item_animation'] . '; target: > div > .uk-card; delay: 300;"' : '';

	$mcq  = WC()->query->get_meta_query();
	$mcq[] = array(
		'key'     => '_featured',
		'value'   => 'yes',
	);
	// Woo Arguments
	$args = array(
		'post_type'             => 'product',
		'post_status'           => 'publish',
		'posts_per_page'        => $contents['num_products'],
		'order'					=> 'DESC',
		'tax_query'             => array(
			array(
				'taxonomy'      => 'product_visibility',
				'field'         => 'slug',
				'terms'         => 'exclude-from-catalog', // Possibly 'exclude-from-search' too
				'operator'      => 'NOT IN',
			),
		)
	);
	if($contents['prod_options'] === 'featured_prod'){
		$args['post__in'] = wc_get_featured_product_ids();
	} elseif ($contents['prod_options'] === 'best_selling') {
		$args['meta_key'] = 'total_sales';
		$args['orderby'] = 'meta_value_num';
	} elseif ($contents['prod_options'] === 'sale_prod') {
		$args['meta_query'] = array(
			'relation' => 'OR',
			array( // Simple products type
				'key'           => '_sale_price',
				'value'         => 0,
				'compare'       => '>',
				'type'          => 'numeric'
			),
			array( // Variable products type
				'key'           => '_min_variation_sale_price',
				'value'         => 0,
				'compare'       => '>',
				'type'          => 'numeric'
			)
		);
	} 
	
	if($contents['category']){
		$args['tax_query'][0] = array(
			'taxonomy'      => 'product_cat',
			'terms'			=> $contents['category']
		);
	}
	// Build query
	$query = new WP_Query( $args );

	?>

<section id="<?php echo $id; ?>" class="fp-section blogs blog-1 uk-padding-small">
	<div class="uk-section">
		<div class="uk-container">
			<div class="section-heading uk-margin-medium uk-text-<?php echo $title_alignment; ?>" <?php echo $title_animation; ?>>
					<?php if ( $contents['title'] ) : ?>
							<!-- Section Title -->
							<?php 
								echo op_heading(
									$contents['title'],
									$settings['heading_type'],
									'uk-heading-primary  uk-text-'.$settings['title_transformation'],
									$title_animation
								); 
							?>
						<?php endif; ?>

						<?php if ( $contents['description'] ) : ?>
								<div class="uk-text-lead"><?php echo $contents['description']; ?></div>
					<?php endif; ?>
			</div> <!-- Section heading -->

			<!-- WP Posts -->
			<div class="uk-child-width-1-<?php echo $contents['columns']; ?>@m" uk-grid <?php echo $item_animation; ?>>
				<?php if ( $query->have_posts() ) : ?>
					<?php
					while ( $query->have_posts() ) :
						$query->the_post();
						?>
						<div>
							<div class="uk-card uk-card-default">
								
								<div class="uk-card-media-top">
									<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail( '', array('', '') ); ?>
									</a>
								</div> <!-- uk-card-media -->

								<div class="uk-card-body uk-padding">
									<h2 class="uk-card-title uk-text-<?php echo $settings['item_title_transformation']; ?>">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h2>

									<p class="uk-text-small"><?php op_the_excerpt( $contents['text_limit'] ); ?></p>
									<?php if ( $contents['display_price'] ) : ?>
										<?php do_action( 'op-woo-product-price' ); ?>
									<?php endif; ?>

									<?php if ( $contents['add_to_cart'] ) : ?>
										<?php do_action( 'op-woo-add-to-cart-button'); ?>
									<?php endif; ?>

								</div> <!-- uk-card-body -->
							</div> <!-- uk-card -->
						</div>
					<?php endwhile; ?>
					<?php endif; ?>
				<?php wp_reset_query(); ?>
			</div> <!-- uk-grid -->
		</div><!-- uk-container -->
	</div> <!-- uk-section -->
</section> <!-- end-section -->
