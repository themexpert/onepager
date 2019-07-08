#<?php echo $id; ?>{
	<?php if ( $styles['slider_bg'] ) : ?>
		background-image: url(<?php echo $styles['slider_bg']; ?>);
		background-repeat: no-repeat;
		background-size : cover;
	<?php endif; ?>
}
<?php if ( $styles['bg_color_2'] ) : ?>
	#<?php echo $id; ?> .uk-overlay-primary{
		background: <?php echo $styles['bg_color_2']; ?>;
	}
<?php endif; ?>



#<?php echo $id; ?> .uk-heading-primary{
	font-size : <?php echo $settings['title_size']; ?>px;
	color : <?php echo $styles['text_color']; ?>;

}
#<?php echo $id; ?> .uk-text-lead{
	font-size : <?php echo ( $settings['title_size'] / 2 ) - 4; ?>px;
	color : <?php echo $styles['text_color']; ?>;
}

#<?php echo $id; ?> .uk-button{
	font-size : <?php echo $settings['button_font_size']; ?>px;
	background : <?php echo $styles['cta_bg']; ?>;
	color : <?php echo $styles['cta_color']; ?>;
	text-transform:<?php echo $settings['button_transformation']; ?>

}

#<?php echo $id; ?> .uk-button:hover{
	background : <?php echo $styles['cta_color']; ?>;
	color : <?php echo $styles['cta_bg']; ?>;
}

 #<?php echo $id; ?> .uk-light .uk-slidenav{
	 color : <?php echo $styles['text_color']; ?>;
 }


@media(max-width:768px){
	#<?php echo $id; ?> .uk-heading-primary{
		font-size : <?php echo ( $settings['title_size'] / 1.5 ); ?>px;
	}
	#<?php echo $id; ?> .uk-text-lead{
		font-size : <?php echo ( $settings['title_size'] / 2 ); ?>px;
	}
}
