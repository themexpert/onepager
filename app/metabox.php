<?php

class OnepagerMetabox {

  public function __construct() {
    // Add the meta boxes
    add_action( 'add_meta_boxes', array( $this, 'register' ) );

    // Process meta boxes on post save
    add_action( 'save_post', array( $this, 'metabox_save' ) );
  }

  /**
   * Used by the add_meta_boxes hook to register new meta boxes
   *
   * http://codex.wordpress.org/Function_Reference/add_meta_box
   */
  public function register() {
    //Get all registered post types...
    $screens = get_post_types();

    //OR Specify specific post types...
    //$screens = array( 'post', 'page' );

    // Loop through the post types and add meta box to each
    foreach ( $screens as $screen ) {

      add_meta_box(
        'onepager-metabox',   //HTML id for box
        'Oneapager', // Visible title
        array( $this, 'metabox' ), //Callback. Used to render the meta box HTML
        $screen, //Post type. The post type to add to
        'side', //Context. Where on the screen should this show up? Options: 'normal', 'advanced', or 'side'
        'high' //Priority. Options: 'high', 'core', 'default' or 'low'
      );
    }
  }

  /**
   * Loads a template file which renders the meta box content.
   *
   * Doing this allows us to keep HTML out of the class.
   *
   * @param $post
   */
  public function metabox( $post ) {
    $value = get_post_meta( $post->ID, '_onepager_updated', true );
    ?>

    <p>
      <label for="onepager_enabled"><?php _e( 'Onepager', 'onepager' ) ?></label>
      <input type="checkbox" name="onepager_enabled" <?php checked( $value ) ?> value="1"/>
    </p> <?php
  }

  /**
   * This function handles saving for the metabox data.
   *
   * @param $post_id
   */
  public function metabox_save( $post_id ) {
//    Validate first...
//    if ( ! self::verify_save( 'onepager_meta_box_nonce', 'save_onepager_meta_box', $post_id ) ) {
//      return $post_id;
//    }

    // Update the meta field in the database.
    update_post_meta(
      $post_id,
      '_onepager_updated',
      array_key_exists('onepager_enabled', $_POST) ? true : false
    );

  }

  public function verify_save( $nonce_name, $none_action, $post_id ) {
    // VALIDATE NONCE & AUTOSAVE
    if ( ! isset( $_POST[ $nonce_name ] ) ) {
      return false;
    }
    if ( ! wp_verify_nonce( $_POST[ $nonce_name ], $none_action ) ) {
      return false;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
      return false;
    }

    // VALIDATE PERMISSIONS
    if ( ! current_user_can( 'edit_page', $post_id ) ) {
      return false;
    }

    // EVERYTHING CHECKS OUT
    return true;
  }


}

new OnepagerMetabox;
