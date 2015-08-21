
#<?php echo $id; ?>{
	background-image : url(<?php echo $styles['slider_bg']?>);
	background-size : cover;
	background-repeat : no-repeat;
}

#slide-<?php echo $id; ?>,
#slide-<?php echo $id; ?> .item{
	height : <?php echo $settings['slider_height'] - 200 ?>px;
}
#<?php echo $id?> .section-title{
	font-size : <?php echo $settings['title_size']?>px;
}
#slide-<?php echo $id ?> .carousel-caption{
	color : <?php echo $styles['title_color']?>;
}
#slide-<?php echo $id; ?> .btn{
	background : <?php echo $styles['button_bg']; ?>;
	color : <?php echo $styles['button_color']; ?>;
}
#slide-<?php echo $id; ?> .btn:hover{
	background : <?php echo $styles['button_hover_color']; ?>;
	color : <?php echo $styles['button_color']; ?>;
}

@media (min-width: 992px) {
	#slide-<?php echo $id; ?>,
	#slide-<?php echo $id; ?> .item{
		height : <?php echo $settings['slider_height']?>px;
	}
}
