<?php
	$items = array_chunk($contents['items'], 3);
	$animation = ($settings['animation']) ? $settings['animation'] : '';
?>
<section id="<?php echo $id; ?>" class="op-section portfolio-1">
	<div class="container">
		
		<h1 class="section-title text-center <?php echo $settings['title_transformation']?>"><?php echo $contents['title']?></h1>

		<?php foreach( $items as $portfolio ) :?>
			<div class="row">
				<?php foreach( $portfolio as $item ) :?>
				<div class="col-md-4 wow <?php echo $animation ?>">
					<a class="op-lightbox" href="<?php echo $item['image']?>">
						<figure class="overlay overlay-hover">
							<img class="overlay-spin" src="<?php echo $item['thumb']?>" alt="<?php echo $item['title']?>" />
							<figcaption class="overlay-panel overlay-background overlay-<?php echo $settings['overlay_animation']?> flex flex-center flex-middle text-center">
								<div>
									<span class="icon fa fa-search-plus"></span>
									<h3 class="title"><?php echo $item['title']?></h3>
									<p class="desc"><?php echo $item['description']?></p>
								</div>
							</figcaption>
						</figure>
					</a>
				</div>
				<?php endforeach; ?>
			</div>
		<?php endforeach; ?>

	</div>
</section>

<script type="text/javascript">
  jQuery(document).ready(function() {
    jQuery('.portfolio-1 .op-lightbox').magnificPopup({ 
    	type: 'image',
    	gallery:{ enabled:true }
    });
  });
</script>