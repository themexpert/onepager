<?php
/**
 * replace these globals
 *
 * wp_send_json
 * wp_send_json_success
 */
if ( ! function_exists( 'array_find_by' ) ) {
	function array_find_by( $collection, $key, $value ) {
		/**
		 * return the first match key from array column
		 * return integer if match 
		 * otherwise return boolean false
		 */
		$foundKey = array_search( $value, array_column( $collection, $key ) );
		if ( is_bool( $foundKey ) ) {
			return false;
		}
		return array_key_exists( $foundKey, $collection ) ? $collection[ $foundKey ] : false;
	}
}

if ( ! function_exists( 'flatten_array' ) ) {
	function flatten_array( $array ) {
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
	function array_get( $array, $key, $default = null ) {
		if ( ! is_array( $array ) ) {
			return $default;
		}
		return ! is_bool( $key ) && array_key_exists( $key, $array ) ? $array[ $key ] : $default;
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

		array_walk(
			$obj,
			function ( $v, $k ) use ( &$arr, $oKey, $oValue ) {
				$arr[ $v->{$oKey} ] = $v->{$oValue};
			}
		);

		return $arr;
	}
}

if ( ! function_exists( 'array_pluck' ) ) {
	function array_pluck( $toPluck, $arr ) {
		return array_map(
			function ( $item ) use ( $toPluck ) {
				return $item[ $toPluck ];
			},
			$arr
		);
	}
}

function onepager_get_edit_mode_url( $url, $mode = 1 ) {
	// return $url;
	return esc_url( add_query_arg( 'onepager', $mode, $url ) );
}

function onepager_get_preview_url( $url ) {
	return esc_url(
		add_query_arg(
			array(
				'onepager_preview' => '1',
				'onepager' => '0',
			),
			$url
		)
	);
}


if ( ! function_exists( 'op_asset' ) ) {
	function op_asset( $path ) {
		// TODO: replace this in future release
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
		return add_query_arg( null, null );
	}
}


if ( ! function_exists( 'dd' ) ) {

	function dd( $var, $kill = true ) {
		echo '<pre>';
		var_dump( $var );
		$kill ? die() : '</pre>';
	}
}

if ( ! function_exists( 'pd' ) ) {

	function pd( $var, $kill = true ) {
		echo '<pre>';
		print_r( $var );
		$kill ? die() : '</pre>';
	}
}

if ( ! function_exists( 'startsWith' ) ) {
	function startsWith( $haystack, $needle ) {
		// search backwards starting from haystack length characters from the end
		return $needle === '' || strrpos( $haystack, $needle, - strlen( $haystack ) ) !== false;
	}
}

if ( ! function_exists( 'endsWith' ) ) {
	function endsWith( $haystack, $needle ) {
		// search forward starting from end minus needle length characters
		return $needle === '' || ( ( $temp = strlen( $haystack ) - strlen( $needle ) ) >= 0 && strpos( $haystack, $needle, $temp ) !== false );
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
/**
 * @plugin_slug (WordPress Org plugin slug)
 * @plugin_file_name (Main php file name for plugin)
 * @plugin_type (dependable plugin free or pro)
 */
if( ! function_exists('txop_check_dependent_plugin')){
	function txop_check_dependent_plugin($plugin_slug, $plugin_file_name, $plugin_type="free"){
		/**
		 * get all installed plugin list
		 */
		$all_plugins = get_plugins();
		/**
		 * get all active plugin list
		 */
		$active_plugins = get_option( 'active_plugins' );
		/**
		 * wordPress admin url
		 */
		$admin_url = get_admin_url();
		/**
		 * plugin activation page
		 */
		$plugin_activation_page = $admin_url . 'plugins.php';
		/**
		 * plugin search page in admin
		 */
		$plugin_search_page = $admin_url . 'plugin-install.php?s='. $plugin_slug .'&tab=search&type=term';
		/**
		 * creating plugin slug as it installed 
		 */
		$plugin_to_check = $plugin_slug . '/' . $plugin_file_name ;

		$check = array_key_exists($plugin_to_check, $all_plugins);

		if(! $check){
			if('free' == $plugin_type){
				return "<div class='plugin-not-installed'><h4>" .$plugin_slug. " is not installed. Please <a target='_blank' href=".$plugin_search_page.">install</a> it.</h4></div>";
			}
		}else{
			if(in_array($plugin_to_check, $active_plugins)){
				return null;
			}else{
				return "<div class='plugin-not-active'><h4>" .$plugin_slug. " is not active. Please <a target='_blank' href=".$plugin_activation_page.">active</a> it.</h4></div>";
			}
		}
	}
}

/**
 * @check_type (type of data to check)
 */
if(! function_exists('txop_error_checking')){
	function txop_error_checking($check_type){
		if('shortcode' == $check_type){
			return esc_html('Please add shortcode', 'tx-onepager');
		}
	}
}

/**
 * insert user template to db
 */
if(! function_exists('txop_insert_user_templates')){
	function txop_insert_user_templates($args = []){

		global $wpdb;

		$defaults = [
			'name' => 'template', 
			'type' => 'page', 
			'data' => '', 
			'created_by' => get_current_user_id(), 
			'created_at' => current_time('mysql'), 
		];

		$data = wp_parse_args($args, $defaults);

		$inserted = $wpdb->insert(
			"{$wpdb->prefix}op_user_templates",
			$data,
			[
				'%s',
				'%s',
				'%s',
				'%d',
				'%s',
			]
		);
		if(! $inserted){
			return new \WP_Error('Faild-to-insert', __('Faild to insert', 'tx-onepager'));
		}
		return $wpdb->insert_id;
	}
}

/**
 * fetch user templates from db
 */
if(! function_exists('txop_fetch_user_templates')){
	function txop_fetch_user_templates($args = []){
		global $wpdb;

		$defaults = [
			'number' 	=> 20,
			'offset' 	=> 0,
			'orderby' 	=> 'id',
			'order'		=> 'ASC'
		];
		$args = wp_parse_args($args, $defaults);


		
		$sql = $wpdb->prepare(
				"SELECT * FROM {$wpdb->prefix}op_user_templates
				ORDER BY {$args['orderby']} {$args['order']}
				LIMIT %d, %d",
				$args['offset'], $args['number']
		);
	
		$items = $wpdb->get_results( $sql );
	
		return $items;
	}
}

/**
 * fetch user templates from db
 */
if(! function_exists('txop_fetch_single_templates')){
	function txop_fetch_single_templates($args = []){
		global $wpdb;

		$defaults = [
			'id' 	=> '0',
		];
		$args = wp_parse_args($args, $defaults);

		$sql = $wpdb->prepare(
				"SELECT * FROM {$wpdb->prefix}op_user_templates
				WHERE id = {$args['id']}"
		);
	
		$items = $wpdb->get_results( $sql );
	
		return $items;
	}
}


/**
 * fetch user templates from db
 */
if(! function_exists('txop_fetch_all_saved_templates')){
	function txop_fetch_all_saved_templates($args = []){
		global $wpdb;
		/**
		 * default agrs
		 */
		$defaults = [
			'orderby' 	=> 'id',
			'order'		=> 'DESC'
		];
		$args = wp_parse_args($args, $defaults);
		/**
		 * prepare sql statement
		 */
		$sql = $wpdb->prepare(
				"SELECT * FROM {$wpdb->prefix}op_user_templates
				ORDER BY %s %s",
				$args['orderby'], $args['order']
		);
		/**
		 * store the result to a variable
		 */
		$items = $wpdb->get_results( $sql );
		/**
		 * return the results
		 */
		return $items;
	}
}
/**
 * get the total count of the user 
 * imported templates or save templates
 */
if(! function_exists('txop_count_user_templates')){
	function txop_count_user_templates(){
		global $wpdb;
		return (int) $wpdb->get_var( "SELECT count(id) from {$wpdb->prefix}op_user_templates" );
	}
}
/**
 * Delete template from db
 */
if(! function_exists('txop_delete_template')){
	function txop_delete_template($id){
		global $wpdb;
		return $wpdb->delete(
			$wpdb->prefix. 'op_user_templates',
			['id' => $id],
			['%d']
		);
	}
}
