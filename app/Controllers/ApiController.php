<?php namespace App\Controllers;

class ApiController {
	function saveSections() {
		$sections = array_key_exists('sections', $_POST) ? $_POST['sections'] : [] ;

		//strip slashes
		array_walk_recursive($sections, function (&$value) {
			$value = stripslashes($value);
		});

		$updated  = $_POST['updated'];
		$pageId   = array_key_exists('pageId', $_POST) ? $_POST['pageId'] : false ;
		$response = [ ];

		$section = array_key_exists( $updated, $sections ) ? $sections[ $updated ] : false;

		//TODO: Improve this
		if($pageId){
			onepager()->section()->save( $pageId, $sections );
		}

		if ( $section ) {
			$response["content"] = onepager()->render()->section( $section );
			$response["style"]   = onepager()->render()->style( $section );
		}

		$response["success"] = true;

		//TODO: better response
		op_send_json( $response );
	}

	function addMenu() {
		$menuId    = $_POST['menuId'];
		$itemTitle = $_POST['itemTitle'];
		$itemId    = $_POST['itemId'];

		onepager()->navigationMenu()->addItem( $menuId, $itemTitle, $itemId );

		//TODO: better response
		op_send_json_success();
	}

	function saveOptions(){
		$page    = $_POST['page'];
		$options = $_POST['options'];
		
		//strip slashes
		array_walk_recursive($options, function (&$value) {
			$value = stripslashes($value);
		});

		update_option($page, $options);

		//TODO: better response
		op_send_json_success();	
	}

	function addPage(){
		$title = $_POST['title'];
		$sections = array_key_exists('sections', $_POST) ? $_POST['sections'] : [] ;

		//strip slashes
		array_walk_recursive($sections, function (&$value) {
			$value = stripslashes($value);
		});

		$id = wp_insert_post(array(
			'post_title'=> $title,
			'post_name' => sanitize_title($title), 
			'post_content' => '',
			'post_excerpt' => '',
			'post_status' => 'publish',
			'post_type' => 'page',
			'page_template' => 'onepage.php'
		));

		onepager()->section()->save( $id, $sections );
    $url = \League\Url\Url::createFromUrl( get_permalink($id) );
    $url->getQuery()->modify( array( 'livemode' => true ) );

		op_send_json(array('id'=>$id, 'url'=>$url->__toString()));
	}


}
