<?php
	$animation = ($settings['animation']) ? $settings['animation'] : '';
?>
<section id="<?php echo $id;?>" class="op-section contents content-5 full-screen">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="text-center">
					<!-- Image -->
					<?php if($contents['image']) :?>
						<img class="op-media wow <?php echo $animation;?>" src="<?php echo $contents['image']?>" alt="<?php echo $contents['title']?>">
					<?php endif; ?>
					<!-- Title -->
					<?php if($contents['title']): ?>
						<h1 class="section-title <?php echo $settings['title_transformation']?> <?php echo $settings['title_size']?> wow <?php echo $animation;?>"><?php echo $contents['title']?></h1>
					<?php endif; ?>
					<!-- Description -->
					<?php if($contents['description']): ?>
						<div class="section-desc wow <?php echo $animation;?>"><?php echo $contents['description']?></div>
					<?php endif; ?>
					<!-- Link -->
					<?php if( $contents['link']): ?>
						<a class="btn btn-primary btn-lg wow <?php echo $animation;?>" href="<?php echo $contents['link']?>"><?php echo $contents['link_text']; ?></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
