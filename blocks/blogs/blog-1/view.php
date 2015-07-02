<?php
	$image_cols = $settings['media_grid'];
	$content_cols = 12 - $image_cols; // Default 12 grid 
	// Animation
	$animation_media = ($settings['animation_media']) ? $settings['animation_media'] : '';
	$animation_content = ($settings['animation_content']) ? $settings['animation_content'] : '';

	$args = array(
		'posts_per_page'   => $contents['total_posts'],
		'category'         => $contents['category'],
		'post_type' => 'post'
	);
	// $posts = get_posts( $args ); 
	$query = new WP_Query( $args );

?>

<section id="<?php echo $id;?>" class="op-section blog-1">
	<div class="container">
	<?php if( $query->have_posts() ) : ?>
		<?php while( $query->have_posts() ) : $query->the_post(); ?>
		<div class="row">
			<div class="col-md-<?php echo $image_cols?>">
				<?php the_post_thumbnail('', array('', 'class'=> 'img-responsive')); ?> 
			</div>
			
			<div class="col-md-<?php echo $content_cols ?> wow <?php echo $animation_content ?>">	
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				 <?php the_excerpt(); ?> 
			</div>
		</div>
		<?php endwhile; ?>
	<?php endif; ?>
	</div>
</section>
