<?php
	$animation = ($settings['animation']) ? $settings['animation'] : '';
?>

<section id="<?php echo $id;?>" class="op-section content-5">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="text-center">
					
					<?php if($contents['image']) :?>
						<img class="wow <?php echo $animation;?>" src="<?php echo $contents['image']?>" alt="<?php echo $contents['title']?>">
					<?php endif; ?>

					<?php if($contents['title']): ?>
						<h1 class="section-title <?php echo $settings['title_transformation']?> <?php echo $settings['title_size']?> wow <?php echo $animation;?>"><?php echo $contents['title']?></h1>
					<?php endif; ?>

					<?php if($contents['description']): ?>
						<p class="desc wow <?php echo $animation;?>"><?php echo $contents['description']?></p>
					<?php endif; ?>

					<?php if( $contents['link']): ?>
						<a class="btn btn-primary btn-lg wow <?php echo $animation;?>" href="<?php echo $contents['link']?>"><?php echo $contents['link_text']; ?></a>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>
