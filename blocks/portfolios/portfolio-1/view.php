<?php
	$items = array_chunk($contents['items'], 3);
	$animation = ($settings['animation']) ? $settings['animation'] : '';
?>
<section id="<?php echo $id; ?>" class="op-section portfolios portfolio-1 full-screen">
	<div class="container">

		<?php if($contents['title']): ?>
			<h1 class="section-title ml-big mr-big text-center <?php echo $settings['title_transformation']?>">
				<?php echo $contents['title']?>
			</h1>
		<?php endif;?>

		<?php foreach( $items as $portfolio ) :?>
			<div class="row">
				<?php foreach( $portfolio as $item ) :?>
				<div class="col-md-4 wow <?php echo $animation ?>">
					<a class="op-lightbox" href="<?php echo $item['image']?>">
						<figure class="overlay overlay-hover">
							<img class="overlay-spin" src="<?php echo $item['thumb']?>" alt="<?php echo $item['title']?>" />
							<figcaption class="overlay-panel overlay-background overlay-<?php echo $settings['overlay_animation']?> flex flex-center flex-middle text-center">
								<div>
                  <?php if(trim($item['link'])): ?>
                    <a href="<?php echo $item['link'] ?>" target="<?php echo $item['target'] ? '_blank' : ''?>">
                      <span class="icon fa fa-search-plus"></span>
                    </a>
                  <?php else: ?>
                    <span class="icon fa fa-search-plus"></span>
                  <?php endif; ?>
									<h3 class="title"> <?php echo $item['title']?> </h3>
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
<?php // For Full screen effer we need to keep the js inside section ?>
<script type="text/javascript">
  jQuery(document).ready(function() {
    jQuery('.portfolio-1 .op-lightbox').magnificPopup({
    	type: 'image',
    	gallery:{ enabled:true }
    });
  });
</script>
</section>
