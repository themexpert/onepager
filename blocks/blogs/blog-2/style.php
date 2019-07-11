#<?php echo $id; ?>{
	background-color : <?php echo $styles['bg_color']; ?>;
}

#<?php echo $id; ?> .section-heading .uk-heading-primary{ 
	font-size : <?php echo $settings['section_title_size']; ?>px; 
	color : <?php echo $styles['section_title_color']; ?>;
}


#<?php echo $id; ?> .section-heading .uk-text-lead{
	font-size : <?php echo $settings['desc_size']; ?>px; 
	color : <?php echo $styles['desc_color']; ?>;
}



#<?php echo $id; ?> .uk-card .uk-card-body .uk-card-title a{
	font-size : <?php echo $settings['item_title_size']; ?>px;
	color : <?php echo $styles['item_title_color']; ?>;
}


#<?php echo $id; ?> .uk-card .uk-card-body .uk-text-small{
	font-size : <?php echo $settings['item_desc_size']; ?>px;
	color : <?php echo $styles['item_desc_color']; ?>;
}



#<?php echo $id; ?> .uk-card .uk-card-body .uk-card-title a:hover{
	color : <?php echo $styles['link_color']; ?>;
	text-decoration:none;
}



#<?php echo $id; ?> .uk-card .uk-card-body a,
#<?php echo $id; ?> .uk-card .uk-card-body a:hover{
	color : <?php echo $styles['link_color']; ?>;
	text-decoration:none;
}

#<?php echo $id; ?> .uk-button-text::before{
	bottom: -5px;
	border-bottom : 1px solid <?php echo $styles['link_color']; ?>;
}

@media(max-width:768px){
	#<?php echo $id; ?> .section-heading .uk-heading-primary{
		font-size : <?php echo ( $settings['section_title_size'] / 1.5 ); ?>px;
	}
}
