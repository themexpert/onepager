<?php
$slideshow_options[] = 'animation: ' . $settings['animation'];
$slideshow_options[] = ( $settings['autoplay'] ) ? 'autoplay: true' : '';
$slideshow_options[] = ( $settings['testimonial_height'] ) ? 'min-height:' . $settings['testimonial_height'] : '';
$slideshow = implode( '; ', $slideshow_options );
$heading_class = ( $settings['name_transformation'] ) ? 'uk-text-' . $settings['name_transformation'] : '';
?>

<div id="<?php echo $id; ?>" class="uk-position-relative testimonials testimonial-1 fp-section" tabindex="-1" uk-slideshow="<?php echo $slideshow; ?>"  
<?php echo ( $styles['bg_parallax'] ) ? 'uk-parallax="bgy: -200"' : ''; ?>
data-src="<?php echo $styles['bg_image']; ?>" uk-img>
	<div class="uk-overlay-primary uk-position-cover"></div>
	<div class="uk-container">

		<ul class="uk-slideshow-items" uk-height-viewport>
			<?php foreach ( $contents['testimonials'] as $index => $testimonial ) : ?>
				<li>
					<div class="uk-position-center uk-position-small uk-text-center uk-light">

						<?php if ( $testimonial['image'] ) : ?>
							<div class="testionial-img uk-margin-medium-top">
								<img class="uk-border-circle" src="<?php echo $testimonial['image']; ?>" alt="<?php echo $testimonial['name']; ?>">
							</div>
						<?php endif; ?>

						<?php if ( $testimonial['testimony'] ) : ?>
							<p class="testimony uk-width-3-4@m uk-width-1-1@s  uk-margin-auto" 
								uk-slideshow-parallax="x: 200,-200">
								<?php echo $testimonial['testimony']; ?>
							</p>
						<?php endif; ?>

						<?php if ( $testimonial['name'] ) : ?>
							<h3 class="uk-heading-primary <?php echo $heading_class; ?>" 
								uk-slideshow-parallax="x: 200,0,-100">
								<?php echo $testimonial['name']; ?>
							</h3>
						<?php endif; ?>

						<?php if ( $testimonial['designation'] ) : ?>
							<p class="uk-text-lead" 
								uk-slideshow-parallax="x: 200,-200">
								<?php echo $testimonial['designation']; ?>
							</p>
						<?php endif; ?>

					</div>
				</li>
			<?php endforeach; ?>
		</ul>

		<ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-padding uk-padding-remove-top uk-position-relative"></ul>
	</div>

	<div class="uk-light">
		<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
		<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
	</div>
</div>
