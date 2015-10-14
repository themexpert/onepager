<?php $slide_num = 0; ?>

<section id="<?php echo $id; ?>" class="op-section testimonials testimonial-1">
	<?php if( $contents['title'] ): ?>
		<h2 class="section-title text-center <?php echo $settings['title_transformation']?>"><?php echo $contents['title']?></h2>
	<?php endif; ?>

	<div id="slide-<?php echo $id ?>" data-interval=<?php echo (int) $settings['interval'] * 1000; ?> class="carousel slide" data-ride="carousel">

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">

			<?php foreach($contents['testimonials'] as $item): ?>
			<div class="item text-center <?php echo ($slide_num === 0) ? 'active' : ''?>">
					<?php if($item['image']):?>
					<figure>
						<img src="<?php echo $item['image']?>" alt="<?php echo $item['name']?>">
					</figure>
					<?php endif; ?>

					<?php if($item['testimony']):?>
						<p class="testimony"><?php echo $item['testimony']?></p>
					<?php endif; ?>

					<?php if($item['name']):?>
						<h3 class="name"><?php echo $item['name']?></h3>
					<?php endif; ?>

					<?php if($item['designation']):?>
						<p class="designation"><?php echo $item['designation']?></p>
					<?php endif; ?>
			</div>
			<?php $slide_num++; endforeach; ?>
		</div>

		<?php if(count($contents['testimonials']) > 1): // Indicator will only show when more then one item publish?>
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<?php for($i = 0; $i < count($contents['testimonials']); $i++): ?>
			<li data-target="#slide-<?php echo $id ?>" data-slide-to="<?php echo $i;?>" class="<?php echo ($i === 0) ? 'active' : ''?>"></li>
			<?php endfor;?>
		</ol>
		<?php endif; ?>
	</div>

</section>
