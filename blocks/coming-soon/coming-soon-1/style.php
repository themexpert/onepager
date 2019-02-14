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
#<?= $id ?> .countdown {
	color : <?= $styles['countdown_color']?>;
}
#<?= $id ?> .uk-countdown-number{
	font-size : <?= $settings['countdown_number_size']?>px;
}
#<?= $id ?> .uk-countdown-label{
	font-size : <?= $settings['countdown_label']?>px;
}
#<?= $id ?> .social-links a {
	color : <?= $styles['icon_color']?>;
}

#<?= $id ?> .countdown-number {
    background: <?= $styles['countdown_bg_color']?>;
    margin: 15px;
    width: <?= $settings['countdown_size']?>px;
    height: <?= $settings['countdown_size']?>px;
    border: 1px solid <?= $styles['countdown_bg_color']?>;
    border-radius: 100%;
    padding: 30px 0 0 0;
}
#<?= $id ?> .social-links > a {
    font-size: 18px;
    background: <?= $styles['countdown_bg_color']?>;
    width: 40px;
    height: 40px;
    border-radius: 100%;
    line-height: 40px;
}