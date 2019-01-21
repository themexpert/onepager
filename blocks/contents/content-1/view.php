<?php
	$media_grid = 'uk-'. $settings['media_grid'] . '@m';
	// Animation
	$animation_media = ($settings['animation_media']) ? 'uk-scrollspy="cls:uk-animation-'.$settings['animation_media'].'"' : '';
	$animation_content = ($settings['animation_content']) ? 'uk-scrollspy="cls:uk-animation-'.$settings['animation_content'].'"' : '';
	// Alignment
	$content_position = ($settings['media_alignment'] == 'right' ) ? 'uk-flex-first@m uk-first-column' : '';
	// Text transformation class
	$heading_class = ($settings['title_transformation']) ? 'uk-text-' . $settings['title_transformation'] : '';
?>
<section id="<?php echo $id; ?>" class="op-section contents content-1">
	<div class="uk-container">
		<article class="uk-grid-large" uk-grid>
			
			<div class="<?php echo $media_grid?> uk-grid-item-match uk-flex-middle">
				<div class="uk-panel" <?php echo $animation_media?>>
					<img src="<?php echo $contents['image']?>" alt="<?php echo $contents['title']?>" uk-image>
				</div>
			</div>
			
			<div class="uk-width-expand@m uk-grid-item-match uk-flex-middle <?php echo $content_position?>">

				<div class="uk-panel" <?php echo $animation_content?>>
					<!-- Title -->
					<?php if($contents['title']): ?>
					<h1 class="uk-heading-primary <?php echo $heading_class ?>">
						<?php echo $contents['title']?>
					</h1>
					<?php endif;?>

					<!-- Description -->
					<?php if($contents['description']): ?>
						<div class="uk-text-lead"><?php echo $contents['description']?></div>
					<?php endif; ?>
					
					<!-- Link -->
					<?php echo op_link($contents['link'], 'uk-button uk-button-primary');?>

				</div>
				
			</div>

		</article>
	</div>
</section>