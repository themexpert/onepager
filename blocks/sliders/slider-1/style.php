#<?php echo $id?> .uk-heading-primary{
	font-size : <?php echo $settings['title_size']?>px;
	color : <?php echo $styles['title_color']?>;
}

#<?php echo $id?> .uk-text-lead{
	font-size : <?php echo $settings['desc_size']?>px;
	color : <?php echo $styles['desc_color']?>;
}

#<?php echo $id; ?> .uk-button{
	background : <?php echo $styles['button_bg']; ?>;
	color : <?php echo $styles['button_color']; ?>;
}
#<?php echo $id; ?> .uk-button:hover{
	background : <?php echo $styles['button_color']; ?>;
	color : <?php echo $styles['button_bg']; ?>;
	border-color : <?php echo $styles['button_bg']; ?>;
}
#<?php echo $id ?> .uk-overlay-primary{
	background : <?php echo $styles['overlay_color']?>;
}

@media(max-width:768px){
	#<?php echo $id?> .uk-heading-primary{
		font-size : <?php echo ($settings['title_size']/2) +10 ?>px;
		line-height : <?php echo ($settings['title_size']/2) +15 ?>px;
	}
	#<?php echo $id?> .uk-text-lead{
		font-size : <?php echo ($settings['desc_size']/2) +6?>px;
	}
}