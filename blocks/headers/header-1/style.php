#<?php echo $id; ?>{
	background-image : url(<?php echo $styles['slider_bg']?>);
	background-size : cover;
	background-repeat : no-repeat;
}


#<?php echo $id; ?> .navbar.affix{
	background-color : <?php echo $styles['nav_bg']?>
}
#<?php echo $id ?> .navbar-nav > li > a{
	color : <?php echo $styles['link_color']; ?>;
}
#<?php echo $id ?> .navbar-toggle .icon-bar{
	background-color : <?php echo $styles['link_color']; ?>;
}

#<?php echo $id ?> .navbar-nav > li:hover > a,
#<?php echo $id ?> .navbar-nav > li.active > a{
	color : <?php echo $styles['link_hover_color']; ?>;
}

#<?php echo $id ?> .navbar-btn{
	background : <?php echo $styles['cta_bg']; ?>;
	color : <?php echo $styles['cta_color']; ?>;
}
#<?php echo $id ?> .navbar.affix .navbar-btn{
	background : <?php echo $styles['cta_color']; ?>;
	color : <?php echo $styles['cta_bg']; ?>;
}

#<?php echo $id ?> .navbar.affix .navbar-btn:hover{
	box-shadow: 0 0 4px #444;
}


#slide-<?php echo $id; ?>,
#slide-<?php echo $id; ?> .item{
	height : <?php echo $settings['slider_height'] - 200 ?>px;
}
#slide-<?php echo $id; ?> .carousel-caption{
	color : <?php echo $styles['text_color']?>;
}
#slide-<?php echo $id; ?> .btn{
	background : <?php echo $styles['cta_bg']; ?>;
	color : <?php echo $styles['cta_color']; ?>;
}
#slide-<?php echo $id; ?> .btn:hover{
	background : <?php echo $styles['cta_color']; ?>;
	color : <?php echo $styles['cta_bg']; ?>;
}
#slide-<?php echo $id ?> .section-title{
	font-size : <?php echo $settings['title_size']?>px;
}
#slide-<?php echo $id ?> .section-desc{
	font-size : <?php echo ($settings['title_size']/2) - 5 ?>px;
}

@media (min-width: 992px) {
	#slide-<?php echo $id; ?>,
	#slide-<?php echo $id; ?> .item{
		height : <?php echo $settings['slider_height']?>px;
	}
}
