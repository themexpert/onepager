


#<?php echo $id;?> .contact-heading h2{
    font-size: <?php echo $settings['title_size'] . 'px'?>;
    line-height: <?php echo ($settings['title_size'] + 10) . 'px'?>;
    color: <?php echo $styles['title_text_color'];?>;
}
#<?php echo $id;?> .contact-details {
    padding-left: 50px;
}
#<?php echo $id;?> .contact-details p{
    font-size: <?php echo $settings['contact_size'] . 'px'?>;
    line-height: <?php echo ($settings['contact_size'] + 10) . 'px'?>;
    color: <?php echo $styles['text_color'];?>;

}
#<?php echo $id;?> iframe{
    pointer-events: auto!important;
}

@media(max-width:640px){
    
    #<?php echo $id;?> .contact-details {
        padding-left: 0;
    }

    #<?php echo $id;?>  .contact-wrapper {
        flex-direction: column;
    }
}
