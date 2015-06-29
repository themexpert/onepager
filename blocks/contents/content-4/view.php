<?php
	$animation = ($settings['animation']) ? $settings['animation'] : '';
?>

<section id="<?php echo $id;?>" class="op-section content-4">
	<div class="container">
		<div class="row">
			<article class="flex flex-middle">

				<div class="col-sm-9">
					<div class="pad-right-big">
						<!-- Title -->
						<?php if($contents['title']): ?>
							<h1 class="section-title <?php echo $settings['title_transformation']?> <?php echo $settings['title_size']?> wow <?php echo $animation;?>"><?php echo $contents['title']?></h1>
						<?php endif; ?>
						<!-- Description -->
						<?php if($contents['description']): ?>
							<p class="desc wow <?php echo $animation;?>"><?php echo $contents['description']?></p>
						<?php endif; ?>
					</div>
				</div>
				
				<div class="col-sm-3">	
					<?php if( $contents['link']): ?>
						<a class="btn btn-primary btn-lg pull-right wow <?php echo $animation;?>" href="<?php echo $contents['link']?>"><?php echo $contents['link_text']; ?></a>
					<?php endif; ?>
				</div>
				
			</article>
		</div>
	</div>
</section>
