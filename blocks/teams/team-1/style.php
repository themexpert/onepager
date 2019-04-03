#<?php echo $id; ?>{
	background : <?php echo $styles['bg_color']; ?>;
}
#<?php echo $id; ?> .section-heading .uk-heading-primary{
	font-size : <?php echo $settings['title_size']; ?>px;
	color : <?php echo $styles['title_color']; ?>;
}

#<?php echo $id; ?> .section-heading .uk-text-lead{
	font-size:<?php echo $settings['desc_size']; ?>px;
	color: <?php echo $styles['desc_color']; ?>;
}

#<?php echo $id; ?> .uk-card .uk-overlay-default{
background:<?php echo $styles['item_overlay_color']; ?>;
	
}


#<?php echo $id; ?> .uk-card .uk-visible-toggle .uk-card-title,
#<?php echo $id; ?> .uk-card .uk-visible-toggle .uk-card-title a{
	font-size : <?php echo $settings['item_name_size']; ?>px;
	color : <?php echo $styles['item_name_color']; ?>;
}

#<?php echo $id; ?> .uk-card .uk-visible-toggle .uk-text-medium{
	font-size : <?php echo $settings['item_designation_size']; ?>px;
	color : <?php echo $styles['item_designation_color']; ?>;
}

#<?php echo $id; ?> .uk-card .uk-visible-toggle .social-links a{
	font-size : <?php echo $settings['item_icon_size']; ?>px;
	color : <?php echo $styles['item_icon_color']; ?>;
}
#<?php echo $id; ?> .uk-card .uk-visible-toggle .social-links a:hover{
	color : <?php echo $styles['item_icon_hover_color']; ?>;
}

#<?php echo $id; ?> .uk-card:hover .uk-visible-toggle .uk-overlay-default{
	-webkit-transform: scale(1.1);
	transform: scale(1.1);
	transition:all 0.3s ease;
}

@media(max-width:768px){
	#<?php echo $id; ?> .section-heading .uk-heading-primary{
		font-size : <?php echo ( $settings['title_size'] / 1.5 ); ?>px;
	}
}
