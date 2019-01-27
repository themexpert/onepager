<?php 
	$sticky = ($settings['sticky_nav']) ? 'uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky"' : '';
	$slideshow_options[] = 'animation: ' . $settings['animation'] ;
	$slideshow_options[] = ($settings['autoplay']) ? 'autoplay: true' : '';
	$slideshow_options[] = ($settings['slider_height']) ? 'max-height:' . $settings['slider_height'] : '';
	$slideshow = implode('; ', $slideshow_options);
	$heading_class = ($settings['title_transformation']) ? 'uk-text-' . $settings['title_transformation'] : '';
?>


	<div id="<?php echo $id; ?>" class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slideshow="<?php echo $slideshow; ?>">

	    <ul class="uk-slideshow-items">
			<?php foreach($contents['sliders'] as $index => $slide): ?>
	        <li>
				<div class="uk-overlay-primary uk-position-cover"></div>
		        <div class="uk-position-center uk-position-small uk-text-center uk-light">
		        div
					<h2 class="uk-heading-primary <?php echo $heading_class; ?>" 
							uk-slideshow-parallax="y: -50,0,0; opacity: 1,1,0">
							<?php echo $slide['title'];?>
					</h2>

					<p class="uk-text-lead" uk-slideshow-parallax="y: 50,0,0; opacity: 1,1,0">
						<?php echo $slide['description'];?>
					</p>
					<div uk-slideshow-parallax="x: 100,-100">
							<?php echo op_link($slide['link'], 'uk-button uk-button-primary');?>
					</div>
					<!-- <div class="uk-panel"> -->
						<div class="uk-text-center uk-position-bottom uk-transition-slide-bottom">
		              		<img src="<?php echo $slide['image']?>" alt="<?php echo $slide['title'];?>">
		                </div>
		           <!--  </div> -->
	    		</div>
	        </li>
			<?php endforeach; ?>
	    </ul>


	    <div class="uk-light">
	        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
	        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
	    </div>

	</div>
