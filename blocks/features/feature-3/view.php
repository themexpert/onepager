<?php
	// media grid
	$media_grid = 'uk-'. $settings['media_grid'] . '@m'; 
	// Animation Media
	$animation_media = ($settings['animation_media']) ? 'uk-scrollspy="cls:uk-animation-'.$settings['animation_media'].'"' : '';
	// Animation Content
	$animation_content = ($settings['animation_content']) ? 'uk-scrollspy="cls:uk-animation-'.$settings['animation_content'].';' : '';
	// Alignment
	$content_position = ($settings['media_alignment'] == 'right' ) ? 'uk-flex-first@m uk-first-column' : '';
?>


<section id="<?php echo $id;?>" class="fp-section features feature-3 uk-padding-small">
	<div class="uk-section">
		<div class="uk-container">
			<div class="uk-grid-large" uk-grid>
				<div class="uk-width-expand@m">
					<article class="uk-article">
						<?php if($contents['title']):?>
							<!-- Section Title -->
							<h1 class="uk-heading-primary uk-text-<?php echo $settings['title_transformation'];?>" <?php echo ($settings['animation_content'] ? $animation_content .'delay:100"' : '' );?>>
								<?php echo $contents['title'];?>
							</h1>
						<?php endif; ?>

						<?php if($contents['description']):?>
							<!-- Section Sub Title -->
							<div class="uk-text-lead" <?php echo ($settings['animation_content'] ? $animation_content .'delay:300"' : '' );?>>
								<?php echo $contents['description'];?>
							</div>
						<?php endif; ?>

						<div class="uk-panel uk-margin-large" uk-grid>
						<?php $i=4; ?>
						<?php foreach($contents['items'] as $feature): ?>
							<div class="uk-width-1-<?php echo $settings['item_columns'];?>@m uk-width-1-1@s" <?php echo ($settings['animation_content'] ? $animation_content .'delay:' .$i .'00"' : '' );?>>
								<div class="uk-card uk-margin-large" uk-grid>
									<div class=" uk-card-media-left uk-width-auto">
										<?php if( op_is_image($feature['media'])):?>
											<img src="<?php echo $feature['media']; ?>" alt="<?php echo $feature['title'];?>" />
										<?php else :?>
											<span class="op-media <?php echo $feature['media']; ?>"></span>
										<?php endif;?>
									</div>
									<div class="uk-width-expand">
										<div class="uk-card-body uk-padding-remove">
											<h3 class="uk-card-title uk-text-<?php echo $settings['item_title_transformation'];?>">
												<?php if(trim($feature['link'])): ?>
													<a href="<?php echo $feature['link']; ?>" target="<?php echo $feature['target'] ? '_blank' : ''?>"><?php echo $feature['title'];?></a>
												<?php else: ?>
													<?php echo $feature['title'];?>
												<?php endif; ?>
											</h3>
											<p class="uk-text-medium"><?php echo $feature['description'];?></p>
										</div><!-- uk-card-body -->
									</div>
								</div>
							</div> <!-- uk-width -->
						<?php $i++; endforeach; ?>
					</div><!-- uk-panel -->
				</article><!-- uk-article -->
			</div> <!-- uk-width -->

			<div class="<?php echo $media_grid;?> <?php echo $content_position?>" <?php echo $animation_media;?>>
				<img class="op-media" src="<?php echo $contents['image'];?>" alt="<?php echo $contents['title'];?>">
			</div><!-- uk-grid-match -->
		</div> <!-- uk-container -->
	</div> <!-- uk-section -->
</section> <!-- section id -->
