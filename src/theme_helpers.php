<?php

// Wrapper function for link
if ( ! function_exists( 'op_link' ) ) {
	function op_link( $link, $class = '' ) {
		$link['url'] = $link['url'] ?: '#';

		if ( $link['text'] ) {
			$target = ( $link['target'] ) ? '_blank' : '_self';

			return '<a class="' . $class . '" href="' . $link['url'] . '" target="' . $target . '">' . $link['text'] . '</a>';
		}

		return '';
	}
}

// Wrapper function for heading
if ( !function_exists( 'op_heading' ) ){
	function op_heading($text, $type, $class='', $transformation = '', $animation, $attr = ''){		
		return "<$type class='".$class." ".$transformation ."'  $animation  $attr>" .$text. "</$type>";
	}
}
