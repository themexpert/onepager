#<?php echo $id; ?> {
    background: <?php echo $styles['bg_color'];?>;
}
#<?php echo $id; ?> ul.uk-slider-items li .item-wrapper{
    transition: all 300ms ease-in-out;
}
#<?php echo $id; ?> ul.uk-slider-items li:hover .item-wrapper{
    transform: scale(1.2);
}

#<?php echo $id; ?> .item-wrapper img{
    min-height: 315px;
    object-fit: cover;
}
#<?php echo $id; ?> ul.uk-slider-items li .tx-overlay{
        position: absolute;
        top: -150%;
        left: 0;
        width: 100%;
        height: 100%;
        background: <?php echo $styles['item_overlay_BG'];?>;
        transition: all 400ms ease-in-out;
}
#<?php echo $id; ?> ul.uk-slider-items li:hover .tx-overlay {
        top: 0;
}

#<?php echo $id; ?> a.uk-button.button-fw {
    position: absolute;
    font-size: <?php echo $settings['btn_font'] . 'px';?>;
    font-weight: <?php echo $settings['btn_font_weight']?>;
    top: 150%;
    left: 50%;
    transform: translate(-50%, -50%);
    border-radius: <?php echo $settings['btn_border_radius'] . 'px';?>;
    background-color: <?php echo $styles['btn_bg_color'];?>;
    color: <?php echo $styles['btn_text_color'];?>;
    box-shadow: 0px 4px 5px 0px <?php echo $styles['btn_box_shadow'];?>;
    transition: all 700ms ease-in-out;
}
#<?php echo $id; ?> ul.uk-slider-items li:hover a.uk-button.button-fw {
        top: 50%;
}

#<?php echo $id; ?> a.uk-button.button-fw:hover{
    box-shadow: 0px -1px 5px 0px <?php echo $styles['btn_box_shadow'];?>;
}

@media(max-width: 960px){
    .button-fw {
        font-size: 12px;
        padding: 2px 12px;
    }
}

@media(max-width: 600px){

    #<?php echo $id; ?> ul.uk-slider-items li img{
        width: 100%;
    }

}
