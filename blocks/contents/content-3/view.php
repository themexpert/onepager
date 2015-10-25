<?php
	$animation_title = ($settings['animation_title']) ? $settings['animation_title'] : '';
	$animation_item = ($settings['animation_item']) ? $settings['animation_item'] : '';
	// WOW JS Animation delay for repeater
	$animation_delay = 0.2;
?>
<section id="<?php echo $id?>" class="op-section contents content-3 full-screen">
	<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="pr-big">
						<?php if($contents['title']):?>
						<!-- Section Title -->
						<h1 class="section-title <?php echo $settings['title_transformation']?> wow <?php echo $animation_title?>">
							<?php echo $contents['title']?>
						</h1>
						<?php endif; ?>

						<?php if($contents['description']):?>
							<!-- Section Sub Title -->
							<div class="section-desc wow <?php echo $animation_title?>">
								<?php echo $contents['description']?>
							</div>
						<?php endif; ?>

						<?php foreach($contents['items'] as $feature): ?>
						<div class="media wow <?php echo $animation_item?>" data-wow-delay="<?php echo $animation_delay += 0.1 ?>s">
							<div class="media-left">
								<?php if( op_is_image($feature['media'])):?>
									<img class="op-media" src="<?php echo $feature['media'] ?>" alt="<?php echo $feature['title']?>" />
								<?php else :?>
									<span class="op-media <?php echo $feature['media'] ?>"></span>
								<?php endif;?>
							</div>

							<div class="media-body">
								<h3 class="title <?php echo $settings['title_transformation']?>">
                  <?php if(trim($feature['link'])): ?>
                    <a href="<?php echo $feature['link'] ?>" target="<?php echo $feature['target'] ? '_blank' : ''?>"><?php echo $feature['title']?></a>
                  <?php else: ?>
                    <?php echo $feature['title']?>
                  <?php endif; ?>
                </h3>
								<p class="desc text-muted"><?php echo $feature['description']?></p>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="col-sm-4">
					<img class="op-media img-responsive wow <?php echo $settings['animation_media']?>" src="<?php echo $contents['image']?>" alt="<?php echo $contents['title']?>">
				</div>
			</div>
	</div>
</section>
