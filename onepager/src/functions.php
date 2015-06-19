<?php
/**
 * replace these globals
 *
 * get_template_directory_uri
 * wp_send_json
 * wp_send_json_success
 */

function onepager() {
	global $onepager;

	return $onepager;
}


function op_send_json_success() {
	//TODO: fix this
	wp_send_json_success();
}

function op_send_json( $response ) {
	//TODO: fix this
	wp_send_json( $response );
}


if ( ! function_exists( 'asset' ) ) {
	function asset( $path ) {
		//TODO: fix this
		return onepager()->url( 'resources/' . $path );
	}
}

if ( ! function_exists( 'trailingslashit' ) ) {
	function trailingslashit( $string ) {
		return untrailingslashit( $string ) . '/';
	}
}

if ( ! function_exists( 'untrailingslashit' ) ) {
	function untrailingslashit( $string ) {
		return rtrim( $string, '/\\' );
	}
}

if ( ! function_exists( 'getCurrentPageURL' ) ) {

	function getCurrentPageURL() {
		$pageURL = 'http';

		if ( array_key_exists( 'HTTPS', $_SERVER ) && $_SERVER["HTTPS"] == "on" ) {
			$pageURL = "https";
		}

		$pageURL .= "://";

		if ( $_SERVER["SERVER_PORT"] != "80" ) {
			$pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
		} else {
			$pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
		}

		return $pageURL;
	}
}


if ( ! function_exists( 'dd' ) ) {

	function dd( $var, $kill = true ) {
		echo "<pre>";
		var_dump( $var );
		$kill ? die() : "</pre>";
	}

}

if ( ! function_exists( 'pd' ) ) {

	function pd( $var, $kill = true ) {
		echo "<pre>";
		print_r( $var );
		$kill ? die() : "</pre>";
	}

}

if ( ! function_exists( 'startsWith' ) ) {
	function startsWith($haystack, $needle) {
	    // search backwards starting from haystack length characters from the end
	    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== FALSE;
	}
}

if ( ! function_exists( 'endsWith' ) ) {
	function endsWith($haystack, $needle) {
	    // search forward starting from end minus needle length characters
	    return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0 && strpos($haystack, $needle, $temp) !== FALSE);
	}
}

function op_get_attrs($props){
	return implode(" ", array_map(function($prop, $attr){
		return "{$attr}=\"{$prop}\""; 
	}, $props, array_keys($props)));
}

function op_get_the_media($media, $defaults=[]){
	if(startsWith($media, 'http')){
		$props = array_merge(array("src" 	=> $media), $defaults);
		$props = op_get_attrs($props);

		return "<img {$props} >";
	}

	$props 					= array_merge(array("class" 	=> ""), $defaults);
	$props['class'] = trim($props['class']." ".$media);

	$props = op_get_attrs($props);

	
	return "<span {$props}></span>";
}

function op_the_media($media){
	echo op_get_the_media($media);
}