<?php
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// The Notice class
if ( ! class_exists( 'OnePager_Admin_Notice' ) ) {

	class OnePager_Admin_Notice {

		/**
		 * Admin constructor
		 */
		public function __construct() {

			add_action( 'admin_notices', array( $this, 'rating_notice' ) );
			add_action( 'admin_init', array( $this, 'dismiss_rating_notice' ) );

		}


		/**
		 * Display rating notice
		 *
		 * @since   2.0.2
		 */
		public static function rating_notice() {
			// Show notice after 240 hours from installed time.
			if ( self::get_installed_time() > strtotime( '-72 hours' )
				or '1' === get_option( 'onepager_dismiss_rating_notice' )
				or ! current_user_can( 'manage_options' ) ) {
				return;
			}

			$no_thanks  = wp_nonce_url( add_query_arg( 'onepager_rating_notice', 'no_thanks_rating_btn' ), 'no_thanks_rating_btn' );
			$dismiss    = wp_nonce_url( add_query_arg( 'onepager_rating_notice', 'dismiss_rating_btn' ), 'dismiss_rating_btn' ); ?>
			
			<div class="uk-margin-medium-top uk-margin-right">
			  <div class="uk-card uk-card-primary uk-card-hover uk-card-body uk-padding-small">
				  <p><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span> 
				  <?php
					echo sprintf(
						esc_html__( 'Hello! We&rsquo;re really grateful that you&rsquo;re now a part of the Themesgrove family. We hope you&rsquo;re happy with everything OnePager has to offer.%1$sIf you can spare a minute, please help us by leaving a 5-star rating on WordPress.org. By spreading the love, we can continue to develop new amazing features in the future, for free!', 'onepager' ),
						'<br/>'
					);
					?>
					  </p>
					<a href="https://wordpress.org/support/plugin/tx-onepager/reviews/#new-post" class="uk-button uk-button-primary uk-margin-small-right" target="_blank"><span class="dashicons dashicons-external" style="line-height:36px; margin-right:5px;"></span><span><?php _e( 'Ok, you deserve it', 'onepager' ); ?></span></a>
					<a href="<?php echo $no_thanks; ?>" class="uk-button uk-button-default uk-margin-small-right" target="_blank"><span class="dashicons dashicons-calendar" style="line-height:36px; margin-right:5px;"></span><span><?php _e( 'Nope, maybe later', 'onepager' ); ?></span></a>
					<a href="<?php echo $no_thanks; ?>" class="uk-button uk-button-default"><span class="dashicons dashicons-smiley" style="line-height:36px; margin-right:5px;"></span><span><?php _e( 'I already did', 'onepager' ); ?></span></a>

					<a href="<?php echo $dismiss; ?>" class="dismiss uk-position-small uk-position-top-right"><span class="dashicons dashicons-dismiss"></span></a>
			  </div>
			</div>
			<?php
		}

		/**
		 * Dismiss rating notice
		 *
		 * @since   2.0.2
		 */
		public static function dismiss_rating_notice() {
			if ( ! isset( $_GET['onepager_rating_notice'] ) ) {
				return;
			}

			if ( 'dismiss_rating_btn' === $_GET['onepager_rating_notice'] ) {
				check_admin_referer( 'dismiss_rating_btn' );
				update_option( 'onepager_dismiss_rating_notice', '1' );
			}

			if ( 'no_thanks_rating_btn' === $_GET['onepager_rating_notice'] ) {
				check_admin_referer( 'no_thanks_rating_btn' );
				update_option( 'onepager_dismiss_rating_notice', '1' );
			}

			wp_redirect( remove_query_arg( 'onepager_rating_notice' ) );
			exit;
		}

		/**
		 * Installed time
		 *
		 * @since   2.0.2
		 */
		private static function get_installed_time() {
			$installed_time = get_option( 'onepager_installed_time' );
			if ( ! $installed_time ) {
				$installed_time = time();
				update_option( 'onepager_installed_time', $installed_time );
			}
			return $installed_time;
		}

	}

	new OnePager_Admin_Notice();
}
