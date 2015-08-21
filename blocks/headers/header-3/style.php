#<?php echo $id ?>{
	<?php if($styles['bg_image']):?>
	background-image: url(<?php echo $styles['bg_image']?>);
	background-repeat: <?php echo $styles['bg_repeat']?>;
	background-size : cover;
	<?php endif;?>
	<?php if($styles['bg_parallax']):?>
	background-attachment : fixed;
	<?php endif;?>
	background-color : <?php echo $styles['bg_color'] ?>;
	color : <?php echo $styles['text_color']?>;
}
#<?php echo $id ?> .section-title{
	font-size : <?php echo $settings['title_size']?>px;
	color : <?php echo $styles['title_color']?>;
}
#<?php echo $id ?> .section-desc{
	font-size : <?php echo $settings['text_size']?>px;
}
#<?php echo $id ?> .btn{
	background: transparent;
	border: 3px solid <?php echo $styles['button_border_color']?>;
	color : <?php echo $styles['button_text_color']?>;
}
#<?php echo $id ?> .btn:hover{
	background: <?php echo $styles['button_border_color']?>;
	color : #fff;
}
