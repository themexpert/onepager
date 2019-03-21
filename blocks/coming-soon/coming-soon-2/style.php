#<?= $id ?>{
	<?php if($styles['bg_image']):?>
	background-image: url(<?= $styles['bg_image']?>);
	background-repeat: no-repeat;
    background-size: cover;
	<?php endif;?>	
}
#<?= $id; ?> .uk-overlay-primary{
	background: <?= $styles['overlay_color']?>;
}
#<?= $id;?> .uk-heading-primary{
	font-size : <?= $settings['title_size']?>px;
	color : <?= $styles['title_color']?>;
}
#<?= $id ?> .uk-text-lead {
	font-size : <?= $settings['desc_size']?>px;
	color : <?= $styles['desc_color']?>;
}
#<?= $id ?> .op-logo {
    width: <?= $settings['logo_size']?>px;
}