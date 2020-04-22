#<?php echo $id; ?>{
	background-color : <?php echo $styles['bg_color']; ?>;
}

#<?php echo $id; ?> .section-heading .uk-heading-primary{ 
	font-size : <?php echo $settings['section_title_size']; ?>px; 
	color : <?php echo $styles['section_title_color']; ?>;
}


#<?php echo $id; ?> .section-heading .uk-text-lead{
	font-size : <?php echo $settings['desc_size']; ?>px; 
	color : <?php echo $styles['desc_color']; ?>;
}


#<?php echo $id; ?> .box-wrapper {
    width: 100%;
    height: 100%;
}

#<?php echo $id; ?> .box-wrapper .content-wrapper h2 {
	font-size: <?php echo $settings['item_title_size']?>;
	color: <?php echo $styles['item_title_color'];?>;
}

#<?php echo $id; ?> .box-wrapper .content-wrapper p {
	font-size: <?php echo $settings['item_desc_size']?>;
	color: <?php echo $styles['item_desc_color'];?>;
}

#<?php echo $id; ?> .box-wrapper .content-wrapper a {
	display: block;
	color: <?php echo $styles['link_color'];?>;
	text-decoration: none;
	transition: 300ms ease-in-out;
}

#<?php echo $id; ?> .box-wrapper .content-wrapper h2 a:hover{
	color: <?php echo $styles['link_hover'];?>;
}
#<?php echo $id; ?> .box-wrapper .content-wrapper .uk-label.category{
	background: <?php echo $styles['link_hover'];?>;
}

#<?php echo $id; ?> .content-wrapper {
    background-color: <?php echo $styles['bg_box'];?>;
	box-shadow: 0 1px 15px <?php echo $styles['bg_box_shadow'];?>;
	transition: 400ms ease-in-out;
}

#<?php echo $id; ?> .box-wrapper:hover .content-wrapper {
    box-shadow: 0 1px 8px <?php echo $styles['bg_box_shadow'];?>;
}

#<?php echo $id; ?> .box-wrapper .odd-box, #<?php echo $id; ?> .box-wrapper .even-box{
	min-height: <?php echo $settings['min_height'] . 'px';?>;
}

#<?php echo $id; ?> .box-wrapper .odd-box {
	position: relative;
    width: 100%;
    height: 100%;
}

#<?php echo $id; ?> .box-wrapper .odd-box .image-wrapper {
    width: 70%;
    position: absolute;
    top: 5%;
    left: 0;
}

#<?php echo $id; ?> .box-wrapper .odd-box .image-wrapper img{
	width: 100%;
}


#<?php echo $id; ?> .box-wrapper .odd-box .content-wrapper {
    position: absolute;
    right: 5%;
    width: 70%;
    bottom: -5%;
    background: #ffffff;
    padding: 25px;
    border-radius: 5px;
}

#<?php echo $id; ?> .box-wrapper .even-box {
	position: relative;
    width: 100%;
    height: 100%;
}

#<?php echo $id; ?> .box-wrapper .even-box .content-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    width: 70%;
    background: #ffffff;
    padding: 25px;
    border-radius: 5px;
    z-index: 99;
}
#<?php echo $id; ?> .box-wrapper .even-box .image-wrapper {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 70%;
    z-index: 1;
}
#<?php echo $id; ?> .box-wrapper .even-box .image-wrapper img{
	width: 100%;
}





#<?php echo $id; ?> .uk-card .uk-card-body a,
#<?php echo $id; ?> .uk-card .uk-card-body a:hover{
	color : <?php echo $styles['link_color']; ?>;
	text-decoration:none;
}

#<?php echo $id; ?> .uk-button-text::before{
	bottom: -5px;
	border-bottom : 1px solid <?php echo $styles['link_color']; ?>;
}

@media(max-width:768px){
	#<?php echo $id; ?> .section-heading .uk-heading-primary{
		font-size : <?php echo ( $settings['section_title_size'] / 1.5 ); ?>px;
	}
}

@media(max-width:640px){
	#<?php echo $id; ?> .box-wrapper .odd-box .image-wrapper, #<?php echo $id; ?> .box-wrapper .even-box .image-wrapper {
		width: 85%;
	}
}
