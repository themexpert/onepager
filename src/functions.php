<?php
/**
 * replace these globals
 *
 * wp_send_json
 * wp_send_json_success
 */
if(!function_exists('array_find_by')){
  function array_find_by($collection, $key, $value){
    $foundKey = array_search($value, array_column($collection, $key));
    return array_key_exists($foundKey, $collection) ? $collection[$foundKey] : null;
  }
}

if(!function_exists('array_pick')){
  /**
   * Pick a value from every array inside of an array collection
   *
   * @param array[array]          $arrayCollection
   * @param string                $pickKey
   * @return array
   */
  function array_pick(array $arrayCollection, $pickKey)
  {
    $pickedValues = array();

    foreach ($arrayCollection as $array) {
      if (is_array($array) && isset($array[$pickKey])) {
        $pickedValues[] = $array[$pickKey];
      }
    }

    return $pickedValues;
  }
}

function getOpBuildModeUrl($url, $mode){
  $url   = League\Url\Url::createFromUrl($url);
  $query = $url->getQuery();
  $query->modify( array( 'onepager' => $mode ) );

  return $url->__toString();
}

function op_send_json_success() {
  //TODO: replace this in future release
  wp_send_json_success();
}

function op_send_json( $response ) {
  //TODO: replace this in future release
  wp_send_json( $response );
}


if ( ! function_exists( 'asset' ) ) {
  function asset( $path ) {
    //TODO: replace this in future release
    return onepager()->url($path);
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

// Determine media type based on the input
function op_is_image($media) {
  $protocall = array('http', 'https', '//');

  // If we find the query string then its image
  foreach($protocall as $query) {
        if(strpos($media, $query, 0) !== false) return true; // stop on first true result
    }
    return false;
}

function op_the_excerpt($excerpt_length=55, $readmore=null) {
  $text = get_the_content('');
  $text = strip_shortcodes( $text );

  $text = apply_filters( 'the_content', $text );
  $text = str_replace(']]>', ']]&gt;', $text);

  $text = wp_trim_words( $text, $excerpt_length );

  echo $text . (!$readmore ? '' : ' <a href="'.get_permalink().'">'.$readmore.'</a>');
}
