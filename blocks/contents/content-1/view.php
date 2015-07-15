<?php
	$image_cols = $settings['media_grid'];
	$content_cols = 12 - $image_cols; // Default 12 grid 
	// Animation
	$animation_media = ($settings['animation_media']) ? $settings['animation_media'] : '';
	$animation_content = ($settings['animation_content']) ? $settings['animation_content'] : '';
?>

<section id="<?php echo $id;?>" class="op-section content-1">
	<div class="container">
		<div class="row">
			<article class="flex flex-<?php echo $settings['content_alignment']?>">
				
				<?php // Image Left
				if ('left' == $settings['media_alignment']) : ?>
					<div class="col-md-<?php echo $image_cols?>">
						<img src="<?php echo $contents['image']?>" alt="<?php echo $contents['title']?>" class="img-responsive wow <?php echo $animation_media ?>">
					</div>
				<?php endif; ?>
				
				<div class="col-md-<?php echo $content_cols ?> wow <?php echo $animation_content ?>">	
					<div class="pad-<?php echo $settings['media_alignment']?>-big">
						<!-- Title -->
						<?php if($contents['title']): ?>
							<h1 class="section-title <?php echo $settings['title_transformation']?> <?php echo $settings['title_size']?>"><?php echo $contents['title']?></h1>
						<?php endif; ?>
						<!-- Description -->
						<?php if($contents['description']): ?>
							<p><?php echo $contents['description']?></p>
						<?php endif; ?>

						<?php if( $contents['link']): ?>
							<a class="btn btn-primary btn-lg" href="<?php echo $contents['link']?>"><?php echo $settings['link_text']; ?></a>
						<?php endif; ?>
					</div>
				</div>
				
				<?php // Image right
				if ('right' == $settings['media_alignment']) : ?>
					<div class="col-md-<?php echo $image_cols?>">
						<img src="<?php echo $contents['image']?>" alt="<?php echo $contents['title']?>" class="img-responsive wow <?php echo $animation_media ?>">
					</div>
				<?php endif; ?>

			</article>
		</div>
	</div>
</section>
