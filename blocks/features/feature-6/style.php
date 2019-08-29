#<?php echo $id;?>{
	background-color : <?php echo $styles['bg_color']?>;
}

#<?php echo $id;?> h1, #<?php echo $id;?> h2, #<?php echo $id;?> h3, #<?php echo $id;?> h4{
	font-weight:<?php echo $settings['title_font_weight'];?>;
}

#<?php echo $id;?> .section-heading .uk-heading-primary{
	font-size : <?php echo $settings['section_title_size']?>px;
	color : <?php echo $styles['title_color']?>;
	line-height : <?php echo ($settings['section_title_size']) +10 ?>px;
}

#<?php echo $id;?> .section-heading .uk-text-lead{
	font-size : <?php echo $settings['desc_size']?>px;
	color : <?php echo $styles['desc_color']?>;
}

#<?php echo $id;?> .item-title,
#<?php echo $id;?> .item-title a{
	font-size : <?php echo $settings['item_title_size']?>px;
	color : <?php echo $styles['item_title_color']?>;
}

#<?php echo $id;?> .uk-text-medium{
	font-size : <?php echo $settings['item_desc_size']?>px;
	color : <?php echo $styles['item_desc_color']?>;
}

#<?php echo $id; ?> .uk-overlay-primary{
	background: <?php echo $styles['overlay_color']?>;
}

#<?php echo $id; ?> .items .item-img{
	overflow: hidden;
}
#<?php echo $id; ?> .items img{
    transition: all 0.3s ease;
    overflow: hidden;
    transform: scale(1);
    width: 100%;
}
#<?php echo $id; ?> .items:hover img{
	transition: all 0.3s ease;
  transform: scale(1.1);
}

#<?php echo $id; ?> .card-single .uk-link-heading{
  color: <?php echo $styles['item_title_color']?>;
  font-size: <?php echo $settings['item_title_size']?>px;
  transition: all 0.5s ease;
}

#<?php echo $id; ?> .card-single .uk-link-heading:hover{
  color: <?php echo $styles['item_title_link_color']?>;
  transition: all 0.5s ease;
}

#<?php echo $id; ?> .card-single .uk-card{
  border-radius: 10px;
  background-color: rgb(255, 255, 255);
  box-shadow: 3px 6px 23px rgba(38, 59, 94, 0.13);
  transition: all 0.5s ease;
}

#<?php echo $id; ?> .card-single:hover .uk-card{
  border-radius: 10px;
  background-color: rgb(255, 255, 255);
  box-shadow: 3px 6px 33px rgba(38, 59, 94, 0.2);
  transition: all 0.5s ease;
}

@media(max-width:768px){
	#<?php echo $id?> .section-heading .uk-heading-primary{
		font-size : <?php echo ($settings['section_title_size']/2) +10 ?>px;
		line-height : <?php echo ($settings['section_title_size']/2) +15 ?>px;
	}
	#<?php echo $id ?> .section-heading .uk-text-lead {
		font-size : <?php echo ($settings['desc_size']/2)+7?>px;
	}
}