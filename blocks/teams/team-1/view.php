<?php
	// title alignment
	$title_alignment = ($settings['title_alignment']) ? $settings['title_alignment'] : '';
	// title animation
	$title_animation = ($settings['title_animation']) ? 'uk-scrollspy="cls:uk-animation-'.$settings['title_animation'].'"' : '';
	// item animation
	$item_animation = ($settings['item_animation']) ? 'uk-scrollspy="cls:uk-animation-'.$settings['item_animation'].'"' : '';
?>
	<section id="<?php echo $id; ?>" class="uk-section teams team-1">
		<div class="uk-container">
			<div class="section-heading uk-margin-large-bottom uk-text-<?php echo $title_alignment;?>" <?php echo $title_animation;?>>	
				<?php if($contents['title']):?>
					<!-- Section Title -->
					<h1 class="uk-heading-primary uk-text-<?php echo $settings['title_transformation'];?>">
						<?php echo $contents['title'];?>
					</h1>
				<?php endif; ?>

				<?php if($contents['description']):?>
					<!-- Section Sub Title -->
					<p class="uk-text-lead">
						<?php echo $contents['description'];?>
					</p>
				<?php endif; ?>
			</div>

			<div class="uk-grid-medium" uk-grid>
				<?php foreach( $contents['items'] as $team ) :?>
				<div class="uk-width-1-<?php echo $settings['items_columns'];?>@m">
					<div class="uk-card uk-overflow-hidden" <?php echo $item_animation;?>>
				       <div class="uk-visible-toggle">
				        	<img src="<?php echo $team['image'];?>" alt="<?php echo $team['title'];?>" />
				            <div class="uk-overlay-default uk-position-cover uk-hidden-hover">
				                <div class="uk-position-center">
				        			<h3 class="uk-card-title uk-margin-remove-bottom">
						                <?php if(trim($team['link'])): ?>
						                    <a href="<?php echo $team['link']; ?>" target="<?php echo $team['target'] ? '_blank' : ''?>"><?php echo $team['title'];?></a>
						                <?php else: ?>
						                    <?php echo $team['title'];?>
						                <?php endif; ?>
							        </h3>
				        			<p class="uk-text-medium uk-margin-remove-top"><?php echo $team['designation'];?></p>
					           		<div class="social-links">
										<?php foreach($team['social'] as $social):?>
											<a class="icon" href="<?php echo $social;?>" target="_blank"></a>
										<?php endforeach;?>
									</div> <!-- social-links -->
				                </div> <!-- uk-position center -->
				            </div> <!-- uk-overlay default -->
				        </div> <!-- uk-visibilty -->
					</div> <!-- uk-card -->
				</div> <!-- gird -->
				<?php endforeach; ?>
			</div> <!-- uk-grid-medium -->
		</div> <!-- uk-container -->
	</section> <!-- uk-section -->
