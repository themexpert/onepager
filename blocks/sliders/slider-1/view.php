<?php
$slide_num = 0;
?>
<section id="<?php echo $id; ?>" class="op-section slider-1">
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
			
			<?php foreach($contents['sliders'] as $slide): ?>
			<div class="item <?php echo ($slide_num === 0) ? 'active' : ''?>">
				<div class="container">
					<div class="carousel-caption flex flex-center flex-middle">
						<?php if($slide['image']):?>
							<img class="img-responsive" src="<?php echo $slide['image']?>" alt="<?php echo $slide['title']?>">
						<?php endif; ?>
						<?php if($slide['title']):?>
						<h2 class="title <?php echo $settings['title_transformation']?> "><?php echo $slide['title']?></h2>
						<?php endif; ?>
						
						<?php if($slide['description']):?>
						<p class="desc"><?php echo $slide['description']?></p>
						<?php endif; ?>
						
						<?php if($slide['link']): ?>
						<p><a class="btn btn-lg btn-primary" href="<?php echo $slide['link']?>"><?php echo $slide['link_text']?></a></p>
						<?php endif; ?>
					</div>	
				</div>
			</div>
			<?php $slide_num++; endforeach; ?>
		</div>

	</div>
</section>