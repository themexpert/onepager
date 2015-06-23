#<?php echo $id; ?>{
	background-image : url(<?php echo $styles['slider_bg']?>);
	background-size : cover;
	background-repeat : no-repeat;
}

#slide-<?php echo $id; ?>,
#slide-<?php echo $id; ?> .item{
	height : <?php echo $settings['slider_height'] - 200 ?>px;	
}

#slide-<?php echo $id; ?> .btn{
	background : <?php echo $styles['cta_bg']; ?>;
	color : <?php echo $styles['cta_color']; ?>;
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

@media (min-width: 992px) { 
	#slide-<?php echo $id; ?>,
	#slide-<?php echo $id; ?> .item{
		height : <?php echo $settings['slider_height']?>px;	
	}
}