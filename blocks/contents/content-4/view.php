<?php
	$animation = ($settings['animation']) ? $settings['animation'] : '';
?>
<section id="<?php echo $id;?>" class="op-section contents content-4 full-screen">
	<div class="container">
		<div class="row">
			<article class="flex flex-middle flex-center">
				<div class="col-sm-9">
					<div class="pr-big">
						<!-- Title -->
						<?php if($contents['title']): ?>
							<h1 class="section-title <?php echo $settings['title_transformation']?> <?php echo $settings['title_size']?> wow <?php echo $animation;?>"><?php echo $contents['title']?></h1>
						<?php endif; ?>
						<!-- Description -->
						<?php if($contents['description']): ?>
							<p class="section-desc wow <?php echo $animation;?>"><?php echo $contents['description']?></p>
						<?php endif; ?>
					</div>
				</div>
				<!-- Link -->
				<div class="col-sm-3">
					<?php echo op_link($contents['link'], 'btn btn-primary btn-lg pull-right wow' . $animation);?>
				</div>
			</article>
		</div>
	</div>
</section>
