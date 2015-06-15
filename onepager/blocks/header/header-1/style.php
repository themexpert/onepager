#<?php echo $id ?>{
	background-color : <?php echo $settings['bg_color']; ?>;
}

#<?php echo $id ?> .navbar-nav > li > a{
	color : <?php echo $settings['link_color']; ?>;
}

#<?php echo $id ?> .navbar-toggle .icon-bar{
	background-color : <?php echo $settings['link_color']; ?>;
}

#<?php echo $id ?> .navbar-nav > li:hover > a,
#<?php echo $id ?> .navbar-nav > li.active > a{
	color : <?php echo $settings['link_hover_color']; ?>;
}

#<?php echo $id ?> .navbar-btn{
	background : <?php echo $settings['cta_bg']; ?>;
	color : <?php echo $settings['cta_color']; ?>;
}