#<?php echo $id; ?> {
	background-color:<?php echo $styles['bg_color'];?>
}
#<?php echo $id;?> h1, #<?php echo $id;?> h2, #<?php echo $id;?> h3, #<?php echo $id;?> h4{
	font-family: <?php echo Onepager::fonts($settings['title_font']); ?>;
	font-weight:<?php echo $settings['title_font_weight'];?>;
}

#<?php echo $id; ?> .uk-heading-primary{
	font-size : <?php echo $settings['section_title_size'];?>px;
	color : <?php echo $styles['title_color']?>;
	line-height : <?php echo ($settings['section_title_size']) +10 ?>px;
}
#<?php echo $id; ?> .uk-text-lead{
	color : <?php echo $styles['desc_color'];?>;
	font-size : <?php echo $settings['desc_size'];?>px;
}

#<?php echo $id; ?> .uk-overlay-primary{
	background: <?php echo $styles['overlay_color']?>;
}

#<?php echo $id; ?> .uk-inline{
	color : #fff;
}

#<?php echo $id; ?> .uk-inline i{
	margin-right: 8px;
	font-size: 16px;
}

#<?php echo $id; ?> input[type="email"]{
    min-width: 330px;
    float: left;
    height: 50px;
    border: 1px solid <?php echo $styles['border_color'] ?>;
    color: #1a79fe;
    background: #fff;
    border-radius: 10px;
    padding: 0 25px;
}

#<?php echo $id; ?> input[type="email"]:focus{
	outline:none;
    border-color: <?php echo $styles['border_hover_color'] ?>;
}

#<?php echo $id; ?> ::placeholder {
  color: <?php echo $styles['placeholder_color'] ?>;
}

#<?php echo $id; ?> form.wpforms-form{
	display: flex;
    justify-content: center;
}

#<?php echo $id; ?> div.wpforms-container-full .wpforms-form input[type=submit], 
#<?php echo $id; ?> div.wpforms-container-full .wpforms-form button[type=submit], 
#<?php echo $id; ?> div.wpforms-container-full .wpforms-form .wpforms-page-button {
    color: <?php echo $styles['submit_text_color'] ?>;
    background-color: <?php echo $styles['submit_bg_color'] ?>;
    font-size: 15px;
    padding: 0 40px;
    height: 50px;
    margin-left: 10px;
    width: max-content;
    text-transform: uppercase;
    border: 1px solid <?php echo $styles['submit_bg_color'] ?>;
    border-radius: 10px;
    transition: all 0.5s ease;
}

#<?php echo $id; ?> div.wpforms-container-full .wpforms-form input[type=submit]:hover, 
#<?php echo $id; ?> div.wpforms-container-full .wpforms-form button[type=submit]:hover, 
#<?php echo $id; ?> div.wpforms-container-full .wpforms-form .wpforms-page-button:hover {
    background-color: <?php echo $styles['submit_hover_bg_color'] ?>;
    border: 1px solid <?php echo $styles['submit_hover_bg_color'] ?>;
    color: <?php echo $styles['submit_text_color'] ?>;
    transition: all 0.5s ease;
}

@media(max-width:768px){
	#<?php echo $id?> .uk-heading-primary{
		font-size : <?php echo ($settings['section_title_size']/2) +10 ?>px;
		line-height : <?php echo ($settings['section_title_size']/2) +15 ?>px;
	}
	#<?php echo $id ?> .uk-text-lead {
		font-size : <?php echo ($settings['desc_size']/2)+7?>px;
	}
    #<?php echo $id?>  input[type="email"] {
        min-width: 190px;
    }
}

@media(max-width:576px){
    #<?php echo $id;?> input[type="email"]{
        min-width: 150px;
    }
}
