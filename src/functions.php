<?php
/**
 * replace these globals
 *
 * wp_send_json
 * wp_send_json_success
 */
if ( ! function_exists( 'array_find_by' ) ) {
  function array_find_by( $collection, $key, $value ) {
    $foundKey = array_search( $value, array_column( $collection, $key ) );
    if(is_bool($foundKey)) return false;
    return array_key_exists( $foundKey, $collection ) ? $collection[ $foundKey ] : false;
  }
}

if(!function_exists('flatten_array')){
  function flatten_array($array){
    return call_user_func_array( 'array_merge', $array );
  }
}

if ( ! function_exists( 'array_get' ) ) {
  /**
   *
   * @param $array
   * @param $key
   * @param $default
   *
   * @return mixed
   */
  function array_get( $array, $key, $default=null ) {
    if(!is_array($array)) return $default;
    return !is_bool($key) && array_key_exists( $key, $array ) ? $array[ $key ] : $default;
  }
}


if ( ! function_exists( 'obj_to_array' ) ) {
  /**
   * @param $obj
   * @param $oKey
   * @param $oValue
   *
   * @return array
   */
  function obj_to_array( $obj, $oKey, $oValue ) {
    $arr = [ ];

    array_walk( $obj, function ( $v, $k ) use ( &$arr, $oKey, $oValue ) {
      $arr[ $v->{$oKey} ] = $v->{$oValue};
    } );

    return $arr;
  }
}

if ( ! function_exists( 'array_pluck' ) ) {
  function array_pluck( $toPluck, $arr ) {
    return array_map( function ( $item ) use ( $toPluck ) {
      return $item[ $toPluck ];
    }, $arr );
  }
}

function onepager_get_edit_mode_url( $url, $mode ) {
  $url   = League\Url\Url::createFromUrl( $url );
  $query = $url->getQuery();
  $query->modify( array( 'onepager' => $mode ) );

  return $url->__toString();
}

function onepager_get_preview_url($url){
  $url   = League\Url\Url::createFromUrl( $url );
  $query = $url->getQuery();
  $query->modify( array( 'onepager_preview' => 1, 'onepager'=>0 ) );

  return $url->__toString();
}


if ( ! function_exists( 'op_asset' ) ) {
  function op_asset( $path ) {
    //TODO: replace this in future release
    return onepager()->url( $path );
  }
}

if ( ! function_exists( 'asset' ) ) {
  function asset( $path ) {
    return op_asset( $path );
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

if ( ! function_exists( 'get_current_page_url' ) ) {

  function get_current_page_url() {
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
  function startsWith( $haystack, $needle ) {
    // search backwards starting from haystack length characters from the end
    return $needle === "" || strrpos( $haystack, $needle, - strlen( $haystack ) ) !== false;
  }
}

if ( ! function_exists( 'endsWith' ) ) {
  function endsWith( $haystack, $needle ) {
    // search forward starting from end minus needle length characters
    return $needle === "" || ( ( $temp = strlen( $haystack ) - strlen( $needle ) ) >= 0 && strpos( $haystack, $needle, $temp ) !== false );
  }
}

// Determine media type based on the input
function op_is_image( $media ) {
  $protocall = array( 'http', 'https', '//' );

  // If we find the query string then its image
  foreach ( $protocall as $query ) {
    if ( strpos( $media, $query, 0 ) !== false ) {
      return true;
    } // stop on first true result
  }

  return false;
}

function op_the_excerpt( $excerpt_length = 55, $readmore = null ) {
  $text = get_the_content( '' );
  $text = strip_shortcodes( $text );

  $text = apply_filters( 'the_content', $text );
  $text = str_replace( ']]>', ']]&gt;', $text );

  $text = wp_trim_words( $text, $excerpt_length );

  echo $text . ( ! $readmore ? '' : ' <a href="' . get_permalink() . '">' . $readmore . '</a>' );
}


function get_default_template_stylesheet_handle() {
  global $wp_styles;

  foreach ( $wp_styles->registered as $style ) {
    if ( get_stylesheet_uri() === $style->src ) {
      return $style->handle;
    }
  }

  return null;
}
