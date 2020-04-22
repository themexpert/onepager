<?php
	
	// Animation
	$animation_contact = ( $settings['animation_contact'] ) ? 'uk-scrollspy="cls:uk-animation-' . $settings['animation_contact'] . '"' : '';
	
?>

<section id="<?php echo $id;?>" class="maps map-1">
    <div class="uk-cover-container" uk-height-viewport >
        <iframe src="<?php echo $contents['gmap_iframe']?>" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" uk-cover></iframe>
        <div <?php echo ( $settings['animation_contact'] ? $animation_contact . 'delay:400"' : '' ); ?> class="map-contact-wrapper uk-overlay uk-overlay-primary uk-position-<?php echo $settings['contact_position'] ? $settings['contact_position'] : 'top' ?>">
           <div class="uk-grid-large uk-margin-auto">
                <div class="contact-wrapper uk-padding-remove uk-flex uk-flex-<?php echo $settings['text_alignment'];?> uk-flex-middle">
                    <div class="contact-heading">
                        <h2 class="uk-margin-remove uk-text-<?php echo $settings['title_transformation']?>"><?php echo $contents['title']?></h2>
                    </div>
                    <div class="contact-details">
                        <p class="uk-margin-remove"><?php echo $contents['location']?></p>
                    </div>
                </div>
           </div>
        </div>
    </div>
</section>
