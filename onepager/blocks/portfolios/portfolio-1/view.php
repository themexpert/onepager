
<section id="<?php echo $id; ?>" class="op-section portfolio-1">
	<div class="container">
		
		<h1 class="section-title text-center"><?php echo $contents['title']?></h1>

		<div class="row">
			<?php foreach( $contents['items'] as $item ) :?>
				<div class="col-md-4">
					<a class="op-lightbox" href="<?php echo $item['image']?>">
						<figure class="overlay">
							<img src="<?php echo $item['thumb']?>" alt="<?php echo $item['title']?>" />
							<figcaption>
								<h3 class="title"><?php echo $item['title']?></h3>
								<p class="desc"><?php echo $item['description']?></p>
							</figcaption>
						</figure>
					</a>
				</div>
			<?php endforeach; ?>
		</div>

	</div>
</section>

<script type="text/javascript">
  jQuery(document).ready(function() {
    jQuery('.portfolio-1 .op-lightbox').magnificPopup({ type: 'image' });
  });
</script>