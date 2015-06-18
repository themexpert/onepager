<?php 
	$items = array_chunk($contents['items'], (12/$settings['columns']) );
	$animation_title = ($settings['animation_title']) ? $settings['animation_title'] : '';
	$animation_item = ($settings['animation_item']) ? $settings['animation_item'] : '';
	// WOW JS Animation delay for repeater
	$animation_delay = 0.2;
?>
<section id="<?php echo $id?>" class="op-section blurb-1">
	<div class="container">
		<article>
			
			<?php if($contents['title']):?>
				<!-- Section Title -->
				<h1 class="section-title text-center wow <?php echo $animation_title?>">
					<?php echo $contents['title']?>
				</h1>
			<?php endif; ?>

			<?php if($contents['description']):?>
				<!-- Section Sub Title -->
				<p class="section-subtitle text-center wow <?php echo $animation_title?>">
					<?php echo $contents['description']?>
				</p>
			<?php endif; ?>

			<?php foreach( $items as $item ): ?>
			<div class="row">
			<?php foreach($item as $feature): ?>
				<div class="col-md-<?php echo $settings['columns']?>">
					<div class="blurb-inner text-center wow <?php echo $animation_item?>" data-wow-delay="<?php echo $animation_delay += 0.2 ?>s">	
						<span class="icon <?php echo $feature['icon']?>"></span>
						<h3 class="title"><?php echo $feature['title']?></h3>
						<p class="desc text-muted"><?php echo $feature['description']?></p>
					</div>
				</div>
			<?php endforeach; ?>
			</div>
			<?php endforeach; ?>
		</article>
	</div>
</section>