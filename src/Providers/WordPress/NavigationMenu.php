<?php namespace ThemeXpert\Providers\WordPress;

use ThemeXpert\Providers\Contracts\NavigationMenuInterface;

/**
 * Class NavigationMenu
 *
 * @package ThemeXpert\Providers\WordPress
 */
class NavigationMenu implements NavigationMenuInterface {
  /**
   * @param $menuId
   * @param $itemTitle
   * @param $itemId
   */
  public function addItem( $menuId, $itemTitle, $itemId ) {
    $lasItemOrder = $this->getLastItemOrder( $menuId );

    // Create post object
    $nav_item = array(
      //TODO: get editable menu title
      'post_title'  => $itemTitle,
      'post_name'   => $itemTitle,
      'post_type'   => 'nav_menu_item',
      'menu_order'  => $lasItemOrder + 2,
      'post_status' => 'publish',
    );


    // Insert the post into the database
    $navItemId = wp_insert_post( $nav_item );

    // INSERT post meta
    add_post_meta( $navItemId, '_menu_item_type', 'custom' );
    add_post_meta( $navItemId, '_menu_item_menu_item_parent', 0 );
    add_post_meta( $navItemId, '_menu_item_object', 'custom' );
    add_post_meta( $navItemId, '_menu_item_object_id', $navItemId );
    add_post_meta( $navItemId, '_menu_item_url', "#" . $itemId );

    //set term
    //remember to cast into integer otherwise #problems
    wp_set_object_terms( $navItemId, (int) $menuId, 'nav_menu' );
  }

  /**
   * @param $menuId
   *
   * @return int
   */
  public function getLastItemOrder( $menuId ) {
    global $wpdb;

    $query =
      "SELECT
          max(menu_order) as lastItemOrder
       FROM
          wp_posts
       WHERE
          ID in (
            SELECT
	            {$wpdb->prefix}term_relationships.object_id
            FROM
              {$wpdb->prefix}terms
            JOIN
              {$wpdb->prefix}term_relationships
            WHERE
              {$wpdb->prefix}terms.term_id = {$wpdb->prefix}term_relationships.term_taxonomy_id
            AND
              {$wpdb->prefix}terms.term_id = %s
          )";

    $result = $wpdb->get_results( $wpdb->prepare( $query, $menuId ) );

    // print_r($result); die();
    //if there is no menu item currently make its order 1
    return $result[0]->lastItemOrder ?: 1;
  }
}
