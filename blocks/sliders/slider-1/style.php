
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
	border-color : <?php echo $styles['button_color']; ?>;
	color : <?php echo $styles['button_color']; ?>;
}
#slide-<?php echo $id; ?> .btn:hover{
	border-color : <?php echo $styles['button_hover_color']; ?>;
	color : <?php echo $styles['button_hover_color']; ?>;
}

@media (min-width: 992px) { 
	#slide-<?php echo $id; ?>,
	#slide-<?php echo $id; ?> .item{
		height : <?php echo $settings['slider_height']?>px;	
	}
}