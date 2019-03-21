#<?php echo $id; ?>{
	background : <?php echo $styles['bg_color'];?>;
	color : <?php echo $styles['text_color'];?>;
}
#<?php echo $id; ?> a{
	color : <?php echo $styles['text_color'];?>;	
}

#<?php echo $id; ?> .uk-navbar-nav>li>a{
	text-transform:<?php echo $styles['menu_transformation'];?>;
	font-size:16px;
}

#<?php echo $id; ?> .uk-navbar-nav>li>a:hover,
#<?php echo $id; ?> .social-links > a:hover,
#<?php echo $id; ?> .copyright a{
	color : <?php echo $styles['text_hover_color'];?>;
}

@media(max-width:768px){

	#<?php echo $id?> .uk-navbar-item, .uk-navbar-nav>li>a, .uk-navbar-toggle{
		min-height:50px !important;
		padding:0 5px;
	}

	#<?php echo $id; ?> .uk-navbar-nav>li>a{
		font-size:14px;
	}
}