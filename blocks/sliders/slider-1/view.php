<section id="<?php echo $id; ?>" class="op-section sliders slider-1 full-screen">
	<div id="slide-<?php echo $id ?>" class="carousel slide" data-ride="carousel">

		<?php if(count($contents['sliders']) > 1): // Indicator will only show when more then one item publish?>
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<?php for($i = 0; $i < count($contents['sliders']); $i++): ?>
			<li data-target="#slide-<?php echo $id ?>" data-slide-to="<?php echo $i;?>" class="<?php echo ($i === 0) ? 'active' : ''?>"></li>
			<?php endfor;?>
		</ol>
		<?php endif; ?>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<?php foreach($contents['sliders'] as $index => $slide): ?>
			<div class="item <?php echo ($index === 0) ? 'active' : ''?>">
				<div class="container">
					<div class="carousel-caption flex flex-column flex-center flex-middle">
						<?php if($slide['image']):?>
							<img class="op-meida img-responsive" src="<?php echo $slide['image']?>" alt="<?php echo $slide['title']?>">
						<?php endif; ?>
						<!-- Title -->
						<?php if($slide['title']):?>
						<h2 class="section-title <?php echo $settings['title_transformation']?> "><?php echo $slide['title']?></h2>
						<?php endif; ?>
						<!-- Description -->
						<?php if($slide['description']):?>
						<p class="section-desc"><?php echo $slide['description']?></p>
						<?php endif; ?>
						<!-- Link -->
						<?php echo op_link($slide['link'], 'btn btn-primary btn-lg');?>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
