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