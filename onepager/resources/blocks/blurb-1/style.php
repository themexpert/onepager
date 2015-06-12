<?php if($settings['bg_color']) :?>
#<?php echo $id?>{
	background-color : <?php echo $settings['bg_color']?>;
}
<?php endif; ?>

<?php if($settings['title_color']) :?>
#<?php echo $id?> .section-title{
	color : <?php echo $settings['title_color']?>;
}
<?php endif; ?>

<?php if($settings['text_color']) :?>
#<?php echo $id?> p{
	color : <?php echo $settings['text_color']?>;
}
<?php endif; ?>

<?php if($settings['icon_color']) :?>
#<?php echo $id?> .icon{
	color : <?php echo $settings['icon_color']?>;
}
<?php endif; ?>