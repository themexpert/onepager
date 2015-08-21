#<?php echo $id; ?>{
	<?php if($styles['bg_image']):?>
	background-image: url(<?php echo $styles['bg_image']?>);
	background-repeat: <?php echo $styles['bg_repeat']?>;
	background-size : cover;
	<?php endif;?>
	background-color : <?php echo $styles['bg_color'] ?>;
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

#slide-<?php echo $id; ?> .section-title{
	font-size : <?php echo $settings['title_size']?>px;
}
#slide-<?php echo $id; ?> .section-desc{
	font-size : <?php echo $settings['text_size']?>px;
}

#slide-<?php echo $id; ?> .section-title,
#slide-<?php echo $id; ?> .section-desc{
	color : <?php echo $styles['text_color']?>;
}

#slide-<?php echo $id; ?> .btn{
	background : <?php echo $styles['cta_bg']; ?>;
	color : <?php echo $styles['cta_color']; ?>;
}
#slide-<?php echo $id; ?> .btn:hover{
	color : <?php echo $styles['cta_bg']; ?>;
	background : <?php echo $styles['cta_color']; ?>;
}

@media (min-width: 992px) {
	#slide-<?php echo $id; ?>,
	#slide-<?php echo $id; ?> .item{
		height : <?php echo $settings['slider_height']?>px;
	}
}
