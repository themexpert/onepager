#<?php echo $id; ?>{
	<?php if($styles['bg_image']):?>
		background-image: url(<?php echo $styles['bg_image'];?>);
		background-size:cover;
		background-repeat:no-repeat;
	<?php endif;?>
}

#<?php echo $id;?> .uk-heading-primary{
	font-size : <?php echo $settings['name_size'];?>px;
	color : <?php echo $styles['name_color'];?>;
}
#<?php echo $id?> .testimony{
	font-size : <?php echo $settings['text_size'];?>px;
	color : <?php echo $styles['testimoni_color'];?>;
}
#<?php echo $id;?> .uk-text-lead{
	font-size : <?php echo $settings['designation_size'];?>px;
	color : <?php echo $styles['designation_color'];?>;
}

#<?php echo $id; ?>.testimonial-1 .uk-dotnav>*>*{ 
	border-color:<?php echo $styles['dot_color']; ?>;
}
#<?php echo $id; ?>.testimonial-1 .uk-dotnav>.uk-active>*{
	border-color:<?php echo $styles['dot_color']; ?>;
	background-color : <?php echo $styles['dot_color']; ?>;

}

#<?php echo $id; ?>.testimonial-1 .uk-light .uk-slidenav{
	color:<?php echo $styles['dot_color']; ?>;
}

#<?php echo $id; ?>:before{
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    width: 100%;
    height: 100%;
    top: 0;
    bottom: 0;
	background: <?php echo $styles['overlay_color']?>;
}