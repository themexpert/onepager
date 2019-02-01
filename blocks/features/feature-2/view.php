<?php
	//$items = $settings['columns'];

	// title alignment
	$title_alignment = ($settings['title_alignment']) ? $settings['title_alignment'] : '';
	// title animation
	$title_animation = ($settings['title_animation']) ? 'uk-scrollspy="cls:uk-animation-'.$settings['title_animation'].'"' : '';
	// items alignment
	$items_alignment = ($settings['items_alignment']) ? $settings['items_alignment'] : '';
	// items animation
	$items_animation = ($settings['items_animation']) ? 'uk-scrollspy="cls:uk-animation-'.$settings['items_animation'].'"' : '';
?>


<section id="<?php echo $id;?>" class="uk-section features feature-2">
	<div class="uk-container">
		<article class="uk-article">
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

			<div class="uk-grid-medium" uk-grid >
				<?php foreach($contents['items'] as $feature): ?>

					<div class="uk-width-1-<?php echo $settings['items_columns'];?>@m">
						<div class="uk-text-<?php echo $items_alignment;?>" <?php echo $items_animation;?>>

							<!-- Item image -->
							<?php if( op_is_image($feature['media'])):?>
								<img class="op-media" src="<?php echo $feature['media']; ?>" alt="<?php echo $feature['title'];?>" />
							<?php else :?>
								<span class="op-media <?php echo $feature['media']; ?>"></span>
							<?php endif;?>

							<!-- Item title -->
							<h3 class="item-title uk-margin-remove-bottom uk-text-<?php echo $settings['title_transformation'];?>">
								<?php if(trim($feature['link'])): ?>
									<a href="<?php echo $feature['link']; ?>" target="<?php echo $feature['target'] ? '_blank' : ''?>"><?php echo $feature['title'];?></a>
								<?php else: ?>
									<?php echo $feature['title'];?>
								<?php endif; ?>
							</h3>

							<!-- Item desc -->
							<p class="uk-text-medium uk-margin-small"><?php echo $feature['description'];?></p>
						</div><!-- blurb -->
					</div><!-- uk-columns -->

				<?php endforeach; ?>
			</div> <!-- uk grid medium -->
		</article> <!-- uk-article -->
	</div> <!-- uk-container -->
</section> <!-- op-section -->
