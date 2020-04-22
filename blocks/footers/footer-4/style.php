#<?php echo $id;?> {
    background: <?php echo $styles['bg_color']?>
}

#<?php echo $id;?> .tg-list-inline {
    margin: 0;
    padding: 0;
    list-style: none;
}

#<?php echo $id;?> .tg-list-inline li {
    display: inline-block;
    padding: 0 10px;
    margin: 0;
}

#<?php echo $id;?> .tg-list-inline li a {
    display: inline-block;
}

#<?php echo $id;?> p, #<?php echo $id;?> ul.tg-list-inline li span.list-label{
    margin: 0;
}

#<?php echo $id;?> .footer-left a, #<?php echo $id;?> .footer-center p, #<?php echo $id;?> .tg-list-inline li:first-child{
    font-size: <?php echo $settings['footer_font_size'] . 'px';?>;
    line-height: <?php echo ($settings['footer_font_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['footer_font_weight'];?>;
    color: <?php echo $styles['text_color'];?>;
    text-decoration: none;
    transition: all 300ms ease-in-out;
}
#<?php echo $id;?> .tg-list-inline li a{
    display: inline-block;
    color: <?php echo $styles['text_color'];?>;
    transition: all 300ms ease-in-out;
}
#<?php echo $id;?> .footer-left a:hover, #<?php echo $id;?> .tg-list-inline li a:hover{
    color: <?php echo $styles['link_color_hover'];?>;
}

@media(max-width: 768px){
    #<?php echo $id;?> .tg-list-inline li{
        padding: 0 6px;
    }
}

@media(max-width: 640px){
    #<?php echo $id;?> .footer-left, #<?php echo $id;?> .tg-list-inline {
        text-align: center;
    }
}