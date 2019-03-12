<?php 
// Edit With onepager link
add_filter( 'page_row_actions', 'op_edit_with_onepager_link_in_page_row', 10, 2 );
function op_edit_with_onepager_link_in_page_row( $actions, $post ) {
    if ( $post->post_type != 'page' ) {
        return $actions;
    }
    // URL
    $page_permalink = onepager_get_edit_mode_url(get_permalink($post->ID)); 
    // Page template
    $onepage_template = get_post_meta( $post->ID, '_wp_page_template', true );

    if($onepage_template == 'onepage.php' && (current_user_can('editor') || current_user_can('administrator')) ) {
      $actions['edit_with_onepager'] = sprintf(
        '<a href="%1$s">%2$s</a>',
        $page_permalink,
        __( 'Edit with Onepager', 'onepager' )
      );
    }
    return $actions;
}

add_filter( 'display_post_states', 'op_append_onepager_in_page_title', 10, 2 );

function op_append_onepager_in_page_title( $post_states, $post ) {
  $onepage_template = get_post_meta( $post->ID, '_wp_page_template', true );

  if($onepage_template == 'onepage.php' && (current_user_can('editor') || current_user_can('administrator')) ) {
    $post_states['onepager'] = __( 'Onepager', 'txop' );
  }
  return $post_states;

}