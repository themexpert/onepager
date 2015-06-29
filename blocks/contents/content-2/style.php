<?php if($styles['bg_color']) :?>
#<?php echo $id?>{
	background-color : <?php echo $styles['bg_color']?>;
}
<?php endif; ?>

<?php if($styles['title_color']) :?>
#<?php echo $id?> .section-title{
	color : <?php echo $styles['title_color']?>;
}
<?php endif; ?>

<?php if($styles['text_color']) :?>
#<?php echo $id?> p{
	color : <?php echo $styles['text_color']?>;
}
<?php endif; ?>

<?php if($styles['icon_color']) :?>
#<?php echo $id?> .icon{
	color : <?php echo $styles['icon_color']?>;
}
<?php endif; ?>