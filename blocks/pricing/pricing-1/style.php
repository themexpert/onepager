#<?php echo $id; ?>{
   background : <?php echo $styles['bg_color']; ?>;
   color:<?php echo $styles['text_color']; ?>;
}

#<?php echo $id; ?> .section-heading .uk-heading-primary{
	font-size : <?php echo $settings['title_size']; ?>px;
	color : <?php echo $styles['title_color']; ?>;
}

#<?php echo $id; ?> .section-heading .uk-text-lead{
	font-size : <?php echo $settings['desc_size']; ?>px;
	color : <?php echo $styles['desc_color']; ?>;
}

#<?php echo $id; ?> .price-table .pricing-title{
	color:<?php echo $styles['text_color']; ?>;
}

#<?php echo $id; ?> .price-table.featured .value,
#<?php echo $id; ?> .price-table.featured ul li:last-child a{
	background-color: <?php echo $styles['feature_bg_color']; ?>;
	color: <?php echo $styles['feature_text_color']; ?>;
}

#<?php echo $id; ?> .price-table ul li a{
	color: <?php echo $styles['feature_bg_color']; ?>;
}


#<?php echo $id; ?> .price-table ul li a:hover{
	background-color: <?php echo $styles['feature_bg_color']; ?>;
	color: <?php echo $styles['feature_text_color']; ?>;
	text-decoration: none;
}

#<?php echo $id; ?> .price-table .value{
	background-color: <?php echo $styles['value_bg_color']; ?>;
}

#<?php echo $id; ?> .price-table .value span:first-child {
	font-size: 32px;
	line-height: 32px;
}

#<?php echo $id; ?> .price-table .value span:nth-child(2) {
	font-size: 65px;
	line-height: 65px;
	margin-bottom: 25px;
}

#<?php echo $id; ?> .price-table .value span:last-child {
	font-size: 16px;
}

#<?php echo $id; ?> .price-table.featured {
	-webkit-box-shadow: 0 4px 5px rgba(0,0,0,0.19);
	-moz-box-shadow: 0 4px 5px rgba(0,0,0,0.19);
	box-shadow: 0 4px 5px rgba(0,0,0,0.19);
}

#<?php echo $id; ?> .price-table {
	border: 1px solid #e3e3e3;
}

#<?php echo $id; ?> .price-table ul li:last-child{
	padding:0;
}

#<?php echo $id; ?> .price-table ul li:first-child{
	padding-top:20px;
}

@media(max-width:768px){
	#<?php echo $id; ?> .section-heading .uk-heading-primary{
		font-size : <?php echo ( $settings['title_size'] / 1.5 ); ?>px;
	}
}
