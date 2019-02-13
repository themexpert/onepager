<?php
    // title alignment
    $title_alignment = ($settings['title_alignment']) ? $settings['title_alignment'] : '';
    // title animation
    $title_animation = ($settings['title_animation']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['title_animation'] . '"' : '';

    // lightbox animation
    $lightbox_animation = ($settings['lightbox_animation']) ? 'uk-lightbox="animation:' . $settings['lightbox_animation'] . '"' : '';
?>

<section id="<?php echo $id; ?>" class="fp-section portfolios portfolio-1">
	<div class="uk-section">
		<div class="uk-container">
			<div class="section-heading uk-margin-large-bottom uk-text-<?php echo $title_alignment;?>" <?php echo $title_animation;?>>	
				<?php if ($contents['title']):?>
					<!-- Section Title -->
					<h1 class="uk-heading-primary uk-text-<?php echo $settings['title_transformation'];?>">
						<?php echo $contents['title'];?>
					</h1>
				<?php endif; ?>

				<?php if ($contents['description']):?>
					<div class="uk-text-lead"><?php echo $contents['description']?></div>
				<?php endif; ?>
			</div> <!-- Section heading -->

			<div class="uk-grid-medium" uk-grid >
				<?php foreach ($contents['portfolios'] as $portfolio) :?>
				<div class="uk-width-1-<?php echo $settings['items_columns'];?>@m" <?php echo $lightbox_animation?>>
					<a class="lightbox" href="<?php echo $portfolio['image'];?>" uk-lightbox>
						<figure class="overlay overlay-hover">
							<img class="overlay-spin" src="<?php echo $portfolio['thumb']?>" alt="<?php echo $portfolio['title'];?>" />
							<figcaption class="overlay-panel overlay-background overlay-<?php echo $settings['overlay_animation'];?> uk-flex uk-flex-center uk-flex-middle uk-text-<?php echo $title_alignment;?>">
								<div>
													<?php if (trim($portfolio['link'])): ?>
															<a href="<?php echo $portfolio['link'] ?>" target="<?php echo $portfolio['target'] ? '_blank' : ''?>">
																<span class="uk-padding-small icon fa fa-search-plus"></span>
															</a>
													<?php else: ?>
														<span class="uk-padding-small icon fa fa-search-plus"></span>
													<?php endif; ?>
									<h3 class="uk-text-medium uk-margin-small"> <?php echo $portfolio['title'];?> </h3>
													<p class="uk-text-small uk-margin-remove"><?php echo $portfolio['description'];?></p>
								</div>
							</figcaption><!-- overlay panel -->
						</figure> <!-- overlay -->
					</a><!-- lightbox -->
				</div> <!-- uk-grid -->
				<?php endforeach; ?>

			</div>  <!-- uk-grid-medium -->
		</div> <!-- uk-container -->
	</div>
</section>  <!-- end-section -->
