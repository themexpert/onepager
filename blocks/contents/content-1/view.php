<?php
	$image_cols = $settings['media_grid'];
	$content_cols = 12 - $image_cols; // Default 12 grid
	// Animation
	$animation_media = ($settings['animation_media']) ? $settings['animation_media'] : '';
	$animation_content = ($settings['animation_content']) ? $settings['animation_content'] : '';

	// Padding alignment map
	$padding_class = ( $settings['media_alignment'] == 'left' ) ? 'pl-big' : 'pr-big';
?>

<section id="<?php echo $id;?>" class="op-section contents content-1 full-screen">
	<div class="container">
		<div class="row">
			<article class="flex flex-<?php echo $settings['content_alignment']?> flex-center">

				<?php // Image Left
				if ('left' == $settings['media_alignment']) : ?>
					<div class="col-md-<?php echo $image_cols?> col-sm-<?php echo $image_cols?>">
						<img src="<?php echo $contents['image']?>" alt="<?php echo $contents['title']?>" class="img-responsive wow <?php echo $animation_media ?>">
					</div>
				<?php endif; ?>

				<div class="col-md-<?php echo $content_cols ?> col-sm-<?php echo $content_cols ?> wow <?php echo $animation_content ?>">
					<div class="<?php echo $padding_class ;?>">
						<!-- Title -->
						<?php if($contents['title']): ?>
							<h1 class="section-title <?php echo $settings['title_transformation']?>"><?php echo $contents['title']?></h1>
						<?php endif; ?>
						<!-- Description -->
						<?php if($contents['description']): ?>
							<div class="section-desc"><?php echo $contents['description']?></div>
						<?php endif; ?>
						<!-- Link -->
						<?php echo op_link($contents['link'], 'btn btn-primary btn-lg');?>
					</div>
				</div>

				<?php // Image right
				if ('right' == $settings['media_alignment']) : ?>
					<div class="col-md-<?php echo $image_cols?> col-sm-<?php echo $image_cols?>">
						<img src="<?php echo $contents['image']?>" alt="<?php echo $contents['title']?>" class="op-media img-responsive wow <?php echo $animation_media ?>">
					</div>
				<?php endif; ?>

			</article>
		</div>
	</div>
</section>
