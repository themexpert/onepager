#<?php echo $id; ?>{
	<?php if ( $styles['bg_image'] ) : ?>
	background-image: url(<?php echo $styles['bg_image']; ?>);
	background-repeat: no-repeat;
	background-size: cover;
	<?php endif; ?>	
}
#<?php echo $id; ?> .uk-overlay-primary{
	background: <?php echo $styles['overlay_color']; ?>;
}
#<?php echo $id; ?> .uk-heading-primary{
	font-size : <?php echo $settings['section_title_size']; ?>px;
	font-weight : <?php echo $settings['title_font_weight']; ?>;
	color : <?php echo $styles['title_color']; ?>;
}
#<?php echo $id; ?> .uk-text-lead {
	font-size : <?php echo $settings['desc_size']; ?>px;
	color : <?php echo $styles['desc_color']; ?>;
}
#<?php echo $id; ?> .op-logo {
	width: <?php echo $settings['logo_size']; ?>px;
}
@media(max-width:768px){
	#<?php echo $id; ?> .uk-heading-primary{
		font-size : <?php echo ( $settings['section_title_size'] / 1.5 ); ?>px;
	}
}