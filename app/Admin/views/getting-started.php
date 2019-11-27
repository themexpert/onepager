<div class="uk-container uk-container-small">
  <div class="uk-card uk-card-default uk-margin-medium-top">
	  <div class="uk-card-header">
		<h3 class="uk-card-title uk-margin-remove-bottom uk-text-small"><?php esc_html_e('Getting Started', 'tx-onepager');?></h3>
	  </div>
	  <div class="uk-card-body uk-text-center">
		  <h2><?php esc_html_e('Welcome to OnePager', 'tx-onepager');?></h2>
		  <p class="uk-text-emphasis"><?php esc_html_e('We recommend you watch this getting started video, and then try to build page yourself.', 'tx-onepager');?></p>
		  <div>
			<iframe id="onepager-iframe" src="https://www.youtube-nocookie.com/embed/gJKIwp21dXs?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="620" height="350" frameborder="0" allowfullscreen></iframe>
		  </div>
	  </div>
	  <div class="uk-card-footer uk-text-center">
		  <a href="<?php echo admin_url( 'post-new.php?post_type=page' ); ?>" class="uk-button uk-button-primary"><?php esc_html_e('Create Your First Page', 'tx-onepager');?></a>
	  </div>
  </div>
</div>
