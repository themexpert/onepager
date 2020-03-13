<?php
// Animation Repeat
$animation_repeat = '';
// items Animation
$animation_content = ($settings['animation_content']) ? 'uk-scrollspy="cls:uk-animation-' . $settings['animation_content'] . ';"' : '';

?>
<script src="//cdn.jsdelivr.net/jquery.inview/0.2/jquery.inview.min.js"></script>

<section id="<?php echo $id; ?>" class="uk-background-contain uk-background-norepeat freature feature-8 cover-container fp-section" <?php echo ($styles['bg_parallax']) ? 'uk-parallax="bgy: -200"' : '' ?> data-src="<?php echo $styles['bg_image']; ?>" uk-img>
    <div class="uk-section">
        <div class="uk-container uk-padding-medium">
            <div class="heading-wrapper uk-text-center" <?php echo ($animation_content ? $animation_content . 'delay: 300' : ''); ?>>
                <?php echo op_heading($contents['title'], $settings['heading_type'], 'uk-heading-primary uk-text-center quote-heading uk-position-relative', 'uk-text-' . $settings['title_transformation']) ?>

            </div>
            <div class="uk-container-large uk-padding-medium uk-position-relative">
                <div class="uk-margin-medium" uk-grid>
                    <div class="uk-width-1-1 uk-flex uk-flex-center" <?php echo ($animation_content ? $animation_content . 'delay: 400' : ''); ?>>
                        <div class="uk-column-1-2@m border-bottom">
                                <?php $i = 1;foreach ($contents['sub_heading'] as $sub_heading_feature): ?>
                                    <div class="uk-card uk-card-body uk-text-center">
                                        <h2 class="counter uk-text-<?php echo $settings['subheading_transformation'] ?>"> <span class="count-number"><?php echo $sub_heading_feature['heading'] ?></span><span class="sub-head-tagline"><?php echo $sub_heading_feature['tagline'] ?></span></h2>
                                    </div>
                                <?php $i++;endforeach;?>
                        </div>
                    </div>

                    <div class="uk-width-1-1">
                        <div class="list-wrapper uk-flex uk-flex-center" <?php echo ($animation_content ? $animation_content . 'delay: 500' : ''); ?>>
                            <ul class="uk-list">
                                <?php foreach ($contents['list_items'] as $feature_list): ?>
                                    <li class="uk-flex uk-flex-middle uk-text-<?php echo $settings['item_title_transformation']; ?>"><span class="op-icon fa <?php echo $feature_list['media'] ?>"></span> <?php echo $feature_list['title'] ?></li>
                                <?php endforeach;?>
                            </ul>
                        </div>
                    </div>
                    <div class="uk-width-1-1@m uk-flex uk-flex-middle uk-flex-center ft-view-mobile" <?php echo ($animation_content ? $animation_content . 'delay: 600' : ''); ?>>
                        <div>
                            <?php echo op_link($contents['link'], 'uk-button uk-button-primary uk-button-large') ?>

                        </div>
                        <div class="uk-margin-small-left">
                            <?php echo op_link($contents['link_2'], 'op-button-right uk-button uk-button-default uk-button-large'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
jQuery(document).ready(function() {
			var counters = jQuery("<?php echo $id; ?> .count-number");
			var countersQuantity = counters.length;
			var counter = [];

			for (i = 0; i < countersQuantity; i++) {
				counter[i] = parseInt(counters[i].innerHTML);
			}

			var count = function(start, value, id) {
				var localStart = start;
				setInterval(function() {
				if (localStart < value) {
					localStart++;
					counters[id].innerHTML = localStart;
				}
				}, 40);
			};

			for (j = 0; j < countersQuantity; j++) {
				count(0, counter[j], j);
			}
		});

		jQuery('#<?php echo $id; ?>').bind('inview', function(event, visible, visiblePartX, visiblePartY) {
			if (visible) {
				jQuery(this).find('.count-number').each(function () {
					var $this = jQuery(this);
					jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
						duration: 1000,
						easing: 'swing',
						step: function () {
							$this.text(Math.ceil(this.Counter));
						}
					});
				});
				jQuery(this).unbind('inview');
			}
		});
</script>
