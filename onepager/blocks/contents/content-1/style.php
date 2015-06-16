#<?php echo $id ?>{
	<?php if($settings['bg_image']):?>
	background-image: url(<?php echo $settings['bg_image']?>);
	background-repeat: <?php echo $settings['bg_repeat']?>;
	<?php endif;?>
	background-color : <?php echo $settings['bg_color'] ?>;
	color : <?php echo $settings['text_color']?>;
}

#<?php echo $id ?> .title{
	font-size: <?php echo $settings['title_size']?>;
}

#<?php echo $id ?> .btn{
	background: <?php echo $settings['button_bg_color']?>;
	color : <?php echo $settings['button_text_color']?>;
}
