<?php
	// title animation
	$title_animation = ( $settings['title_animation'] ) ? 'uk-scrollspy="cls:uk-animation-' . $settings['title_animation'] . ';"' : '';
	$items_animation = ( $settings['items_animation'] ) ? 'uk-scrollspy="cls:uk-animation-' . $settings['items_animation'] . ';"' : '';
	// title alignment
	$title_alignment = ( $settings['title_alignment'] ) ? $settings['title_alignment'] : '';
?>


<section id="<?php echo $id;?>" class="uk-position-relative features features-6 uk-padding-small" data-src="<?php echo $styles['bg_image']; ?>" uk-img>
	<div class="uk-overlay-primary uk-position-cover"></div>
	<div class="uk-section">
		<div class="uk-container">
			<div class="uk-div uk-position-relative">
				<div class="section-heading uk-margin-large-bottom uk-text-<?php echo $title_alignment; ?>">	

					<?php if ( $contents['title'] ) : ?>
					<!-- Section Title -->
					  	<?php 
							echo op_heading(
								$contents['title'],
								$settings['heading_type'],
								'uk-heading-primary uk-margin-medium-bottom uk-text-'.$settings['title_transformation'],
								$title_animation
							); 
						?>
					<?php endif; ?>

					<?php if($contents['description']):?>
						<!-- Section Sub Title -->
						<p class="uk-text-lead" <?php echo ($settings['title_animation'])? $title_animation . ';delay:' .'300"' : '' ;?>>
							<?php echo $contents['description'];?>
						</p>
					<?php endif; ?>
				</div>

				<div class="uk-child-width-1-3@s uk-grid-match" uk-grid>
				<?php $i=4; ?>
				<?php foreach($contents['items'] as $feature): ?>
				    <div class="card-single uk-text-center" <?php echo ($settings['items_animation'])? $items_animation . ';delay:' .'300"' : '' ;?>>
				        <div class="uk-card uk-card-hover uk-card-body">
							<div class="uk-grid-small uk-flex-middle uk-grid" uk-grid="">

							    <div class="uk-align-center uk-margin-remove-bottom">
									<?php if( op_is_image($feature['media'])):?>
										<img class="op-media" src="<?php echo $feature['media']; ?>" alt="<?php echo $feature['title'];?>" />
									<?php else :?>
										<span class="op-media <?php echo $feature['media']; ?>"></span>
									<?php endif;?>
							    </div>

							    <div class="uk-padding-small">
							    	<?php if ($feature['title']): ?>
							        <h3 class="uk-card-title"><a class="uk-link-heading" href="<?php echo $feature['link'];?>"><?php echo $feature['title'];?></a></h3>
							        <?php endif; ?>

							    	<?php if ($feature['desc']): ?>
							        <p class="uk-text-medium uk-margin-remove-top"><?php echo $feature['desc'];?></p>
							        <?php endif; ?>
							    </div>

							</div>
				        </div>
				    </div>  
				<?php $i++; endforeach; ?>
				</div>
			</div> <!-- uk-div -->
		</div> <!-- uk-container -->
	</div> <!-- uk-section -->
</section> <!-- fp-section -->
