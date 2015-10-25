<?php
	$items = array_chunk($contents['items'], (12/$settings['columns']) );
	$animation_title = ($settings['animation_title']) ? $settings['animation_title'] : '';
	$animation_item = ($settings['animation_item']) ? $settings['animation_item'] : '';
	// WOW JS Animation delay for repeater
	$animation_delay = 0.2;
?>
<section id="<?php echo $id?>" class="op-section contents content-2 full-screen">
	<div class="container">
		<article class="mr-big ml-big">
			<?php if($contents['title']):?>
				<!-- Section Title -->
				<h1 class="section-title text-center <?php echo $settings['title_transformation']?> wow <?php echo $animation_title?>">
					<?php echo $contents['title']?>
				</h1>
			<?php endif; ?>

			<?php if($contents['description']):?>
				<!-- Section Sub Title -->
				<p class="section-desc text-center wow <?php echo $animation_title?>">
					<?php echo $contents['description']?>
				</p>
			<?php endif; ?>

			<?php foreach( $items as $item ): ?>
			<div class="row">
			<?php foreach($item as $feature): ?>
				<div class="col-md-<?php echo $settings['columns']?>">
					<div class="blurb text-center wow <?php echo $animation_item?>" data-wow-delay="<?php echo $animation_delay += 0.2 ?>s">

						<?php if( op_is_image($feature['media'])):?>
							<img class="op-media" src="<?php echo $feature['media'] ?>" alt="<?php echo $feature['title']?>" />
						<?php else :?>
							<span class="op-media <?php echo $feature['media'] ?>"></span>
						<?php endif;?>

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
			<?php endforeach; ?>
		</article>
	</div>
</section>
