<?php
	$image_cols = $settings['media_grid'];
	$content_cols = 12 - $image_cols; // Default 12 grid 
	// Animation
	$animation_media = ($settings['animation_media']) ? $settings['animation_media'] : '';
	$animation_content = ($settings['animation_content']) ? $settings['animation_content'] : '';
?>

<section id="<?php echo $id;?>" class="contents-1">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<article class="flex-grid flex-grid-<?php echo $settings['content_alignment']?>">
					
					<?php // Image Left
					if ('left' == $settings['media_alignment']) : ?>
						<div class="col-md-<?php echo $image_cols?>">
							<img src="<?php echo $fields['image']?>" alt="<?php echo $fields['title']?>" class="img-responsive wow <?php echo $animation_media ?>">
						</div>
					<?php endif; ?>
					
					<div class="col-md-<?php echo $content_cols ?> wow <?php echo $animation_content ?>">	
						<!-- Title -->
						<?php if($fields['title']): ?>
							<h1 class="title"><?php echo $fields['title']?></h1>
						<?php endif; ?>
						<!-- Description -->
						<?php if($fields['description']): ?>
							<p><?php echo $fields['description']?></p>
						<?php endif; ?>

						<?php if( $fields['link']): ?>
							<a class="btn btn-primary btn-lg" href="<?php echo $fields['link']?>"><?php echo $settings['link_text']; ?></a>
						<?php endif; ?>
					</div>
					
					<?php // Image right
					if ('right' == $settings['media_alignment']) : ?>
						<div class="col-md-<?php echo $image_cols?>">
							<img src="<?php echo $fields['image']?>" alt="<?php echo $fields['title']?>" class="img-responsive wow <?php echo $animation_media ?>">
						</div>
					<?php endif; ?>

				</article>
			</div>
		</div>
	</div>
</section>
