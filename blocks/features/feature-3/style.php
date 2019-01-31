#<?php echo $id;?>{
	background-color : <?php echo $styles['bg_color'];?>;
}

#<?php echo $id;?> .uk-article .uk-heading-primary{
	font-size : <?php echo $settings['title_size'];?>px;
	color : <?php echo $styles['title_color'];?>;
}

#<?php echo $id;?> .uk-article .uk-text-lead{
	font-size : <?php echo $settings['desc_size'];?>px;
	color : <?php echo $styles['desc_color'];?>;
}

#<?php echo $id;?> .uk-article .uk-panel .uk-card-title{
	font-size : <?php echo $settings['item_title_size'];?>px;
	color:<?php echo $styles['item_title_color'];?>;
}

#<?php echo $id;?> .uk-article .uk-panel .uk-text-medium{
	font-size : <?php echo $settings['item_desc_size'];?>px;
	color:<?php echo $styles['item_desc_color'];?>;
}

<?php if ($styles['icon_color']): ?>	
	#<?php echo $id;?> .op-media{
		color : <?php echo $styles['icon_color'];?>;
	}
<?php endif; ?>
