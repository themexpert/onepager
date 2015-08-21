<section id="<?php echo $id;?>" class="op-section contacts contact-1 full-screen">
	<div class="container">
		<div class="row">
				<div class="col-md-6">
					<div class="ml-big">
						<?php if($contents['hotline']):?>
							<h2 class="section-title <?php echo $settings['title_transformation']?>">Hotline</h2>
							<h3 class="hotline"><?php echo $contents['hotline']?></h3>
						<?php endif;?>

						<?php if($contents['address']):?>
							<div class="contact-row">
								<span class="fa fa-home"></span>
								<?php echo $contents['address']; ?>
							</div>
						<?php endif;?>
						<?php if($contents['phone']):?>
							<div class="contact-row">
								<span class="fa fa-mobile"></span>
								<?php echo $contents['phone']; ?>
							</div>
						<?php endif;?>
						<?php if($contents['email']):?>
							<div class="contact-row">
								<span class="fa fa-envelope-o"></span>
								<?php echo $contents['email']; ?>
							</div>
						<?php endif;?>

						<div class="social-links">
							<?php foreach ( $contents['social'] as $social ): ?>
								<a class="icon" href="<?php echo $social ?>" target="_blank"></a>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mr-big">
						<?php echo do_shortcode($contents['form']);?>
					</div>
				</div>
		</div>
	</div>
</section>
