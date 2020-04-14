<?php

use ThemeXpert\View\View;

add_action( 'add_meta_boxes', 'tx_add_onepager_metabox', 1 );
add_action( 'admin_enqueue_scripts', 'tx_onepager_metabox_scripts' );
// add_action( 'edit_form_after_title', 'tx_onepager_switch_mode_button');

/**
 * Print switch mode button.
 *
 * Adds a switch button in post edit screen (which has cpt support). To allow
 * the user to switch from the native WordPress editor to Elementor builder.
 *
 * Fired by `edit_form_after_title` action.
 *
 * @since 1.0.0
 * @access public
 *
 * @param \WP_Post $post The current post object.
 */
// function tx_onepager_switch_mode_button( $post ) {
// 	// Exit if Gutenberg are active.
// 	if (did_action('enqueue_block_editor_assets')) {
// 		return;
// 	}
// 	>
// 	<button type="button" id="enable-onepager" class="op-btn op-btn-with-logo">Enable OnePager</button>
// 	<button type="button" id="disable-onepager" class="op-btn op-btn-with-logo" style="display: none;">Disable OnePager</button>
// 	<php
// }
function tx_get_preset_groups_class( $groups ) {
	return implode(
		'',
		array_map(
			function ( $group ) {
				return tx_get_preset_group_class( $group );
			},
			$groups
		)
	);
}

function tx_get_preset_group_class( $group ) {
	return 'og-' . sanitize_title( $group );
}

function tx_add_onepager_metabox() {
	$template = function ( $post ) {
		$onepagerLayouts = onepager()->presetManager()->all();
		echo '<pre>';
		var_dump ($onepagerLayouts);
		echo '</pre>';
		$groups          = array_unique(
			array_reduce(
				$onepagerLayouts,
				function ( $carry, $layout ) {
					return array_merge( $carry, $layout['group'] );
				},
				[ ]
			)
		);

		$sections  = onepager()->section()->getAllValid( $post->ID );
		$editorUrl = onepager_get_edit_mode_url( get_permalink( $post->ID ), true );

		echo View::getInstance()->make(
			__DIR__ . '/page-meta.php',
			compact( 'onepagerLayouts', 'post', 'groups', 'sections', 'editorUrl' )
		);
	};
	
	/**
	 * Add meta box syntax
	 * add_meta_box($id, $title, $callback, $screen, $context, $priority, $callback_args) 
	 */
	add_meta_box(
		'onepager_meta',
		__( 'OnePager', 'onepager' ),
		$template,
		'page',
		'normal',
		apply_filters( 'onepager_metabox_prio', 'high' )
	);
}

function tx_onepager_metabox_scripts( $hook ) {
	global $post;

	if ( ! ( $post && $post->post_type == 'page' ) ) {
		return;
	}

	if ( ! ( $hook == 'post-new.php' || $hook == 'post.php' ) ) {
		return;
	}

	$data = array(
		'pageId'       => $post->ID,
		'buildModeUrl' => onepager_get_edit_mode_url( get_permalink( $post->ID ), true ),
	);

	wp_enqueue_script( 'tx-onepager-page-meta', op_asset( 'assets/meta.js' ), true );
	wp_enqueue_style( 'tx-lithium', op_asset( 'assets/css/lithium-builder.css' ) );
	wp_localize_script( 'tx-onepager-page-meta', 'onepager', $data );
}

