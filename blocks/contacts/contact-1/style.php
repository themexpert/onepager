#<?php echo $id; ?>{
	<?php if ( $styles['bg_image'] ) : ?>
		background-image: url(<?php echo $styles['bg_image']; ?>);
		background-repeat: <?php echo $styles['bg_repeat']; ?>;
		background-size:cover;
	<?php endif; ?>
	<?php if ( $styles['bg_color'] ) : ?>
		background-color : <?php echo $styles['bg_color']; ?>;
	<?php endif; ?>
	
}
#<?php echo $id; ?>.contact-1 .uk-heading-primary{
	font-size : <?php echo $settings['title_size']; ?>px;
	<?php if ( $styles['title_color'] ) : ?>	
		color : <?php echo $styles['title_color']; ?>;
	<?php endif; ?>
}
#<?php echo $id; ?>.contact-1 .uk-text-meta,
#<?php echo $id; ?>.contact-1 .uk-text-lead{
	color : <?php echo $styles['text_color']; ?>;
}

#<?php echo $id; ?> input[type="submit"]{
	background: <?php echo $styles['accent_color']; ?>;
	color : <?php echo $styles['button_text_color']; ?>;
	border: 1px solid <?php echo $styles['accent_color']; ?>;
}
#<?php echo $id; ?> input[type="submit"]:hover{
	background: <?php echo $styles['button_text_color']; ?>;
	color : <?php echo $styles['accent_color']; ?>;
	border: 1px solid <?php echo $styles['accent_color']; ?>;
}

#<?php echo $id; ?> .social-links a,
#<?php echo $id; ?>.contact-1 .uk-card .uk-card-header .fa{
	color: <?php echo $styles['accent_color']; ?>;
}
#<?php echo $id; ?> input[type="text"]:focus,
#<?php echo $id; ?> input[type="email"]:focus,
#<?php echo $id; ?> textarea:focus{
	border-color : <?php echo $styles['accent_color']; ?>;
	outline : 0;
}
