#<?php echo $id ?>{
	<?php if($styles['bg_image']):?>
	background-image: url(<?php echo $styles['bg_image']?>);
	background-repeat: <?php echo $styles['bg_repeat']?>;
	<?php endif;?>
	background-color : <?php echo $styles['bg_color'] ?>;
	color : <?php echo $styles['text_color']?>;
}
#<?php echo $id ?> .section-title{
	font-size : <?php echo $settings['title_size']?>px;
	color : <?php echo $styles['title_color']?>;
}
#<?php echo $id ?> .hotline,
#<?php echo $id ?> .fa{
	color : <?php echo $styles['accent_color']?>;
}
#<?php echo $id ?> input[type="submit"]{
	background: <?php echo $styles['accent_color']?>;
	color : <?php echo $styles['button_text_color']?>;
}
#<?php echo $id ?> .social-links a{
	color: <?php echo $styles['accent_color']?>;
}
#<?php echo $id ?> input[type="text"]:focus,
#<?php echo $id ?> input[type="email"]:focus,
#<?php echo $id ?> textarea:focus{
	border-color : <?php echo $styles['accent_color']?>;
	outline : 0;
}
