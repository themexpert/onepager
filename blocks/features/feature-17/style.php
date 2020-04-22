#<?php echo $id;?> {
    background-color: <?php echo $styles['bg_color']; ?>;
}

#<?php echo $id;?> .tg-form {
        display: flex;
        justify-content: center;
}

#<?php echo $id;?> .content-wrapper .uk-heading-primary {
    font-size: <?php echo $settings['title_size'] . 'px';?>;
    line-height: <?php echo ($settings['title_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['title_font_weight'];?>;
}

#<?php echo $id;?> .content-wrapper p{
    font-size: <?php echo $settings['desc_font_size'] . 'px';?>;
    line-height: <?php echo ($settings['desc_font_size'] + 10) . 'px';?>;
    font-weight: <?php echo $settings['desc_font_weight'];?>;
}


#<?php echo $id;?> input[type="email"]{
    border-radius: <?php echo $settings['field_border_radius'] . 'px'; ?>;
    background-color: <?php echo $styles['field_bg']?>;
    box-shadow: 0px 4px 5px 0px rgba(251, 136, 159, 0.35);
    border: 1px solid #ffffff;
    padding: 15px 30px;
    font-size: <?php echo $settings['form_font_size'] . 'px';?>;
    font-weight: <?php echo $settings['form_font_weight']?>;
    transition: all 300ms ease-in-out;
}
#<?php echo $id;?> input[type="email"]:focus{
    outline: none;
    box-shadow: 0px -1px 5px 0px rgba(251, 136, 159, 0.35);
}


#<?php echo $id;?> input[type="submit"] {
    border-radius: <?php echo $settings['field_border_radius'] . 'px'; ?>;
    background-color: rgb(255, 255, 255);
    box-shadow: 0px 4px 5px 0px <?php echo $styles['field_shadow']?>;
    border: 1px solid <?php echo $styles['field_border']?>;
    padding: 15px 30px;
    font-size: <?php echo $settings['form_font_size'] . 'px';?>;
    font-weight: <?php echo $settings['form_font_weight']?>;
    margin-left: 10px;
    cursor: pointer;
    transition: 300ms ease-in-out;
}
#<?php echo $id;?> input[type="submit"]:hover{
    box-shadow: 0px -1px 5px 0px <?php echo $styles['field_shadow']?>;
}
#<?php echo $id;?> input[type="submit"]:focus{
    outline: none;
}

#<?php echo $id;?> .social-icons-wrapper a {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: <?php echo $styles['social_bg'];?>;
    display: inline-block;
    margin: 0 10px;
    color: <?php echo $styles['social_color'];?>;
    transition: all 300ms ease-in-out;
}

#<?php echo $id;?> .social-icons-wrapper a:hover{
    background: <?php echo $styles['social_color'];?>;
    color: <?php echo $styles['social_bg'];?>;
}

#<?php echo $id;?> .tg-notice{
    color: red;
    font-weight: bold;
    text-shadow: 0 1px 1px #f02e17;
    transform: scale(1);
    animation-name: notice;
    animation-duration: 2s;
    animation-iteration-count: infinite;
    transition: all 300ms ease-in-out;
}

@keyframes notice {
  0%   {transform: scale(1.1)}
  50%  {transform: scale(1.2)}
  100% {transform: scale(1.1)}
}



@media(max-width:768px){
    #<?php echo $id;?> .tg-form {
        flex-direction: column;
    }
    #<?php echo $id;?> .tg-form .form-group{
        width: 100%;
    }
    #<?php echo $id;?> .tg-form .form-group input[type="email"]{
        width: 100%;
    }
    #<?php echo $id;?> .tg-form .your-email input{
        margin-bottom: 15px;
        padding: 15px 6px!important;
    }
    #<?php echo $id;?> .content-wrapper .uk-heading-primary{
        font-size: <?php echo (($settings['title_size'] / 2) + 5) . 'px';?>;
        line-height: <?php echo (($settings['title_size'] / 2) + 15) . 'px';?>;
    }
    #<?php echo $id;?> .content-wrapper p br{
        display: none;
    }
}

