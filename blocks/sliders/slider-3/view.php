<?php
	$slideshow_options[] = 'easing: ' . $settings['slide_animation'];
	$slideshow_options[] = ( $settings['autoplay'] ) ? 'autoplay: true' : '';
	$slideshow_options[] = ( $settings['infinite_sliding'] ) ? 'infinite_sliding: true' : '';
	$slideshow_options[] = ( $settings['autoplay_interval'] ) ? 'autoplay_interval: 3000' : '';
	$slideshow = implode( '; ', $slideshow_options );
	$heading_class = ( $settings['title_transformation'] ) ? 'uk-text-' . $settings['title_transformation'] : '';
?>

<section id="<?php echo $id; ?>" class="sliders slider-3">
	<div class="uk-section-large">
		<div class="uk-container uk-margin-auto">
			<div class="uk-grid" uk-grid>
				<div class="uk-width-1-1">
					<div class="uk-text-center">
						<?php
                            echo op_heading(
                                $contents['section_title'],
                                $settings['heading_type'],
                                'uk-heading-primary uk-text-' . $settings['title_transformation']
                            );
                        ?>
						<p class="title-desc"><?php echo $contents['section_desc']?></p>
					</div>
				</div>
			</div>
			<div class="uk-visible-toggle uk-margin-large-top" uk-slider='<?php echo $slideshow;?>' >
				<div class="uk-position-relative">
					<div class="uk-slider-container">
						<ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@m uk-grid">
							<?php $i = 0; foreach($contents['sliders'] as $slider): ?>
							<li class="uk-text-center <?php echo ($i % 2) == 0 ? 'uk-margin-medium-top' : '';?>">
								<div class="uk-panel uk-margin-medium uk-padding-small single-item">
									<div class="single-slider-wrapper uk-margin-small uk-padding-small">
										<p><?php echo $slider['description']?></p>
										<h4 class="uk-margin-remove-bottom"><?php echo $slider['name']?></h4>
										<span class="designation"><?php echo $slider['designation']?></span>
										<div class="customer-img-wrapper uk-margin-small-top">
											<img class="uk-border-circle single-slide-img" data-src="<?php echo $slider['slide_image'];?>" width="80" alt="" uk-img>
										</div>
									</div>
								</div>
							</li>
							<?php $i++; endforeach;?>
						</ul>
					</div>
					<div class="uk-hidden@m uk-light">
						<a style="color: red;" class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
						<a style="color: red;" class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
					</div>
					<div class="uk-visible@m">
						<a class="uk-position-center-left-out uk-position-small left-navigation" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
						<a class="uk-position-center-right-out-out uk-position-small right-navigation" uk-slidenav-next href="#" uk-slider-item="next"></a>
					</div>
				</div>
			</div> <!-- section-id -->
		</div>
	</div>
</section>
