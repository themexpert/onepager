#<?php echo $id; ?>{
	background : <?php echo $styles['bg_color']; ?>;
}
#<?php echo $id; ?> .section-heading .uk-heading-primary{
	font-size : <?php echo $settings['title_size']; ?>px;
	color : <?php echo $styles['title_color']; ?>;
}

#<?php echo $id; ?> .section-heading .uk-text-lead{
	font-size : <?php echo $settings['desc_size']; ?>px;
	color : <?php echo $styles['desc_color']; ?>;
}

<?php if ( $styles['overlay_color'] ) : ?>
	#<?php echo $id; ?>.portfolio-1 .overlay-background{
		background:<?php echo $styles['overlay_color']; ?>;
	}
<?php endif ?>

#<?php echo $id; ?> .uk-text-medium,
#<?php echo $id; ?> .uk-text-small{
	color : <?php echo $styles['icon_color']; ?>;
}

#<?php echo $id; ?> .icon{
	background : <?php echo $styles['icon_bg']; ?>;
	color : <?php echo $styles['icon_color']; ?>;
	border: 1px solid <?php echo $styles['icon_color']; ?>;
	border-radius: 50%;
}

@media(max-width:768px){
	#<?php echo $id; ?> .section-heading .uk-heading-primary{
		font-size : <?php echo ( $settings['title_size'] / 1.5 ); ?>px;
	}
}
