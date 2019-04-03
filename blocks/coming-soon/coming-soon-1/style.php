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
	font-size : <?php echo $settings['title_size']; ?>px;
	color : <?php echo $styles['title_color']; ?>;
}
#<?php echo $id; ?> .uk-text-lead {
	font-size : <?php echo $settings['desc_size']; ?>px;
	color : <?php echo $styles['desc_color']; ?>;
}
#<?php echo $id; ?> .countdown {
	color : <?php echo $styles['countdown_color']; ?>;
}
#<?php echo $id; ?> .uk-countdown-number{
	font-size : <?php echo $settings['countdown_number_size']; ?>px;
}
#<?php echo $id; ?> .uk-countdown-label{
	font-size : <?php echo $settings['countdown_label']; ?>px;
}
#<?php echo $id; ?> .social-links a {
	color : <?php echo $styles['icon_color']; ?>;
}

#<?php echo $id; ?> .countdown-number {
	background: <?php echo $styles['countdown_bg_color']; ?>;
	margin: 15px;
	width: <?php echo $settings['countdown_size']; ?>px;
	height: <?php echo $settings['countdown_size']; ?>px;
	border: 1px solid <?php echo $styles['countdown_bg_color']; ?>;
	border-radius: 100%;
	padding: 30px 0 0 0;
}
#<?php echo $id; ?> .social-links > a {
	font-size: 18px;
	background: <?php echo $styles['countdown_bg_color']; ?>;
	width: 40px;
	height: 40px;
	border-radius: 100%;
	line-height: 40px;
}
