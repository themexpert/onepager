<?php 
	$animation_title = ($settings['animation_title']) ? $settings['animation_title'] : '';
	$animation_item = ($settings['animation_item']) ? $settings['animation_item'] : '';
	// WOW JS Animation delay for repeater
	$animation_delay = 0.2;
?>
<section id="<?php echo $id?>" class="op-section content-3">
	<div class="container">
		<article>
			<div class="row">
				<div class="col-sm-8">
					<div class="pad-right-big">
						<?php if($contents['title']):?>
						<!-- Section Title -->
						<h1 class="section-title <?php echo $settings['title_transformation']?> wow <?php echo $animation_title?>">
							<?php echo $contents['title']?>
						</h1>
						<?php endif; ?>

						<?php if($contents['description']):?>
							<!-- Section Sub Title -->
							<p class="section-subtitle wow <?php echo $animation_title?>">
								<?php echo $contents['description']?>
							</p>
						<?php endif; ?>	

						<?php foreach($contents['items'] as $feature): ?>
						<div class="media wow <?php echo $animation_item?>" data-wow-delay="<?php echo $animation_delay += 0.2 ?>s">	
							<div class="media-left">
								<?php if( op_is_image($feature['media'])):?>
									<img src="<?php echo $feature['media'] ?>" alt="<?php echo $feature['title']?>" />
								<?php else :?>
									<span class="icon <?php echo $feature['media'] ?>"></span>
								<?php endif;?>
							</div>
							
							<div class="media-body">
								<h3 class="title <?php echo $settings['title_transformation']?>"><?php echo $feature['title']?></h3>
								<p class="desc text-muted"><?php echo $feature['description']?></p>	
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="col-sm-4">
					<img class="img-responsive wow <?php echo $settings['animation_media']?>" src="<?php echo $contents['image']?>" alt="<?php echo $contents['title']?>">
				</div>
			</div>
		</article>
	</div>
</section>