

#<?php echo $id;?> .contact-wrapper {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
}
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

@media(max-width:640px){
    #<?php echo $id;?> .contact-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    #<?php echo $id;?> .contact-details {
        padding-left: 0;
    }
}
