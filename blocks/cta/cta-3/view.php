<?php
	// Content Animation
	$content_animation = ($settings['content_animation']) ? 'uk-scrollspy="cls:uk-animation-'.$settings['content_animation'].';' : '';
	// Content Alignment
	$content_alignment = ($settings['content_alignment']) ? $settings['content_alignment'] : '';
?>
<section id="<?php echo $id;?>" class="fp-section uk-background-cover uk-position-relative cta cta-3 uk-padding-small" <?php echo ($styles['bg_parallax']) ? 'uk-parallax="bgy: -200"' : '' ?> tabindex="-1" data-src="<?php echo $styles['bg_image']; ?>" uk-img>
	<div class="uk-section-large">
		<div class="uk-overlay-primary uk-position-cover"></div>
		<div class="uk-container">
			<div class="uk-grid-large uk-position-relative" uk-grid>
				<div class="uk-width-1-1">
					<div class="uk-text-<?php echo $content_alignment;?>">
						<!-- Title -->
						<?php if($contents['title']): ?>
							<h1 class="uk-heading-primary uk-text-<?php echo $settings['title_transformation'];?>" <?php echo ($settings['content_animation'] ? $content_animation .'delay:100"' : '' );?>><?php echo $contents['title'];?></h1>
						<?php endif; ?>

						<!-- Description -->
						<?php if($contents['description']): ?>
							<div class="uk-text-lead" <?php echo ($settings['content_animation'] ? $content_animation .'delay:300"' : '' );?>><?php echo $contents['description'];?></div>
						<?php endif; ?>
						<p <?php echo ($settings['content_animation'] ? $content_animation .'delay:500"' : '' );?>>
							<!-- Link -->
							<?php echo op_link($contents['link'], 'uk-margin-small-top uk-button uk-button-primary uk-button-large');?>
						</p>
					</div> <!-- text-alignment -->
				</div> <!-- uk-grid-1 -->

				<div class=" uk-text-center links uk-margin-auto uk-margin-medium-top uk-flex uk-flex-column uk-width-1-2@m uk-width-1-1@s" >
				<?php $i =4; ?>
					<?php foreach( $contents['items'] as $links ) :?>
						<div class="uk-card uk-padding-small uk-background-default  uk-margin-small"  <?php echo ($settings['content_animation'] ? $content_animation .'delay:' .$i .'00"' : '' );?> uk-grid>
						    <div class="uk-width-3-4@m uk-padding-remove uk-text-left">
							    <h3>
								    <a href="<?php echo $links['link']; ?>">
									   <?php echo $links['title']; ?>
									</a>
							    </h3>
						    </div>
						    <div class="uk-width-1-4@m uk-text-right uk-margin-remove">
						    	 <a href="<?php echo $links['link']; ?>"><i class="<?php echo $links['icon']; ?>"></i></a>
						    </div>
					    </div> <!-- uk-card -->
					<?php $i++; endforeach; ?>
				</div> <!-- uk-text-center -->
			</div><!-- uk-grid-large -->
		</div><!-- uk-container -->
	</div> <!-- uk-section -->
</section> <!-- end-section -->
