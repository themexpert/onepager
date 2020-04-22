#<?php echo $id;?>, #<?php echo $id;?> .tx-navbar {
    background: <?php echo $styles['bg_color'];?>;
}
#<?php echo $id;?> .tx-navbar{
    border-bottom: 1px solid <?php echo $styles['menu_bottom_border']?>;
}
#<?php echo $id;?> .center-menu-wrapper li a{
    font-size: <?php echo $settings['menu_font_size']?>;
    font-weight: <?php echo $settings['menu_font_weight']?>;
    position: relative;
    padding: 0;
    margin: 0 15px;
    color: <?php echo $styles['menu_font_color'];?>;
    transition: 400ms ease-in-out;
}

#<?php echo $id;?> .center-menu-wrapper li a:hover, #<?php echo $id;?> .center-menu-wrapper li.uk-active a{
    color: <?php echo $styles['menu_font_hover_color']; ?>;
}

#<?php echo $id;?> .center-menu-wrapper li a::after {
    content: '';
    position: absolute;
    width: 0%;
    border-bottom: 1px solid #ff8099;
    left: 0;
    bottom: 25px;
    transition: 400ms ease-in-out;
}

#<?php echo $id;?> .center-menu-wrapper li a:hover::after, #<?php echo $id;?> .center-menu-wrapper li.uk-active a::after {
    width: 100%;
}


#<?php echo $id;?> .right-menu-wrapper a i {
    font-size: 16px;
    position: relative;
    right: 6px;
}

.right-menu-wrapper ul li a{
    font-size: <?php echo $settings['menu_font_size']?>;
    font-weight: <?php echo $settings['menu_font_weight']?>;
    color: <?php echo $styles['menu_font_color'];?>;
    transition: 400ms ease-in-out;
}
.right-menu-wrapper ul li a:hover{
    color: <?php echo $styles['menu_font_hover_color']; ?>;
}

#<?php echo $id;?> ul .button-menu a {
    border-radius: 8px;
    background-color: rgb(255, 255, 255);
    box-shadow: 0px 4px 5px 0px <?php echo $styles['btn_box_shadow'];?>;
    display: inline;
    padding: 14px;
    position: relative;
    top: 28px;
}
#<?php echo $id;?> ul .button-menu a:hover{
    box-shadow: 0px -1px 5px 0px <?php echo $styles['btn_box_shadow'];?>;
}
