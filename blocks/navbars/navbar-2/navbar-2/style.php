#<?php echo $id; ?>{
	background-color : <?php echo $styles['bg_color']; ?>;
	z-index: 99;
}

#<?php echo $id; ?> .uk-navbar-nav > li > a{
	color : <?php echo $styles['link_color']; ?>;
    <?php echo $settings['menu_font_size'] ? 'font-size: ' . $settings['menu_font_size'] . 'px' : '' ?>;
	font-weight: <?php echo $settings['menu_font_weight'] ?>;
    min-height: 50px;
    padding: 0;
	margin: 0 15px;
	position: relative;
}


#<?php echo $id; ?> .uk-navbar-nav > li:first-child a{
	margin-left: 0;
}
#<?php echo $id; ?> .uk-navbar-nav > li:last-child a{
	margin-right: 0;
}
#menu-main-menu li.current-menu-item a{
    color: <?php echo $styles['link_hover_color']; ?>;
}
#<?php echo $id; ?> ul#menu-main-menu li.current-menu-item a::before{
	content: '';
    position: absolute;
    width: 100%;
    height: 1px;
    background: <?php echo $styles['link_hover_color']; ?>;
    bottom: 0;
    left: 0;
}
#<?php echo $id; ?> ul#menu-main-menu li a::before{
	content: '';
    position: absolute;
    width: 0%;
    height: 1px;
    background: <?php echo $styles['link_color']; ?>;;
    bottom: 0;
    left: 0;
	transition: all 200ms linear;
}
#<?php echo $id; ?> ul#menu-main-menu li a:hover::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 1px;
    background: <?php echo $styles['link_hover_color']; ?>;;
    bottom: 0;
    left: 0;
}
#<?php echo $id; ?> .uk-navbar-toggle svg{
	fill : <?php echo $styles['link_color']; ?>;
}

#<?php echo $id; ?> .uk-navbar-nav > li:hover > a{
	color : <?php echo $styles['link_hover_color']; ?>;
}
#<?php echo $id; ?> .uk-navbar-nav > li.uk-active > a{
	color : <?php echo $styles['link_active_color']; ?>;
}

#<?php echo $id; ?> .uk-button{
	background : <?php echo $styles['cta_bg']; ?>;
	color : <?php echo $styles['cta_color']; ?>;
}

#<?php echo $id; ?> .brand-logo-wrapper {
    position: absolute;
    top: 0;
    left: 0;
}

#<?php echo $id; ?> .tx-area-right{
	display: flex;
    flex-direction: column;
}
#<?php echo $id; ?> .contact-wrapper {
    display: block;
    max-height: 30px;
    width: 100%;
    text-align: right;
}

#<?php echo $id; ?> ul#menu-main-menu li:last-child a {
    padding-right: 0;
}

<<<<<<< HEAD
#<?php echo $id; ?> ul#menu-main-menu li a{
	min-height: 50px;
}
=======

>>>>>>> develop

#<?php echo $id; ?> .contact-wrapper > a.uk-button {
    color: #dd5346;
	background: none;
    font-size: 1.3em;
    text-decoration: none;
	padding-right: 0;
}
@media only screen and (max-width: 400px) {
#<?php echo $id; ?> .uk-logo img{ width: 140px; }
}
