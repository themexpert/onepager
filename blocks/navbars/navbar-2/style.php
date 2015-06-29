#<?php echo $id ?>{
	background-color : <?php echo $styles['bg_color']; ?>;
}
#<?php echo $id; ?> .offcanvas-trigger,
#<?php echo $id; ?> .navbar-link{
	background-color : 	<?php echo $styles['link_hover_color']; ?>;
	color : #fff; 
}
#<?php echo $id; ?> .offcanvas-menu{
	background-color : 	<?php echo $styles['bg_offcanvas']; ?>;
}
#<?php echo $id; ?> .offcanvas-menu .nav > li > a{ 
	color: <?php echo $styles['link_color']; ?>;
}

#<?php echo $id; ?> .offcanvas-menu .nav > li > a:hover,
#<?php echo $id; ?> .offcanvas-menu .nav > li > a:focus,
#<?php echo $id; ?> .offcanvas-menu .nav > li.active > a{ 
	background-color : 	<?php echo $styles['link_hover_color']; ?>;
	color: #fff; 
}
