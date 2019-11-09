<?php
/**
 * h3qtcms1 Jetpack Class
 *
 * @package  h3qtcms1
 * @since    2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'h3qtcms1_Jetpack' ) ) :

	/**
	 * The h3qtcms1 Jetpack integration class
	 */
	class h3qtcms1_Jetpack {

		/**
		 * Setup class.
		 *
		 * @since 1.0
		 */
		public function __construct() {
			add_action( 'init', array( $this, 'jetpack_setup' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'jetpack_scripts' ), 10 );

			if ( h3qtcms1_is_woocommerce_activated() ) {
				add_action( 'init', array( $this, 'jetpack_infinite_scroll_wrapper_columns' ) );
			}
		}

		/**
		 * Add theme support for Infinite Scroll.
		 * See: http://jetpack.me/support/infinite-scroll/
		 */
		public function jetpack_setup() {
			add_theme_support(
				'infinite-scroll', apply_filters(
					'h3qtcms1_jetpack_infinite_scroll_args', array(
						'container'      => 'main',
						'footer'         => 'page',
						'render'         => array( $this, 'jetpack_infinite_scroll_loop' ),
						'footer_widgets' => array(
							'footer-1',
							'footer-2',
							'footer-3',
							'footer-4',
						),
					)
				)
			);
		}

		/**
		 * A loop used to display content appended using Jetpack infinite scroll
		 *
		 * @return void
		 */
		public function jetpack_infinite_scroll_loop() {
			do_action( 'h3qtcms1_jetpack_infinite_scroll_before' );

			if ( function_exists( 'h3qtcms1_is_product_archive' ) && h3qtcms1_is_product_archive() ) {
				do_action( 'h3qtcms1_jetpack_product_infinite_scroll_before' );
				woocommerce_product_loop_start();
			}

			while ( have_posts() ) :
				the_post();
				if ( function_exists( 'h3qtcms1_is_product_archive' ) && h3qtcms1_is_product_archive() ) {
					wc_get_template_part( 'content', 'product' );
				} else {
					get_template_part( 'content', get_post_format() );
				}
			endwhile; // end of the loop.

			if ( function_exists( 'h3qtcms1_is_product_archive' ) && h3qtcms1_is_product_archive() ) {
				woocommerce_product_loop_end();
				do_action( 'h3qtcms1_jetpack_product_infinite_scroll_after' );
			}

			do_action( 'h3qtcms1_jetpack_infinite_scroll_after' );
		}

		/**
		 * Adds columns wrapper to content appended by Jetpack infinite scroll
		 *
		 * @return void
		 */
		public function jetpack_infinite_scroll_wrapper_columns() {
			add_action( 'h3qtcms1_jetpack_product_infinite_scroll_before', 'h3qtcms1_product_columns_wrapper' );
			add_action( 'h3qtcms1_jetpack_product_infinite_scroll_after', 'h3qtcms1_product_columns_wrapper_close' );
		}

		/**
		 * Enqueue jetpack styles.
		 *
		 * @since  1.6.1
		 */
		public function jetpack_scripts() {
			global $h3qtcms1_version;

			if ( wp_style_is( 'the-neverending-homepage', 'enqueued' ) ) {
				wp_enqueue_style( 'h3qtcms1-jetpack-infinite-scroll', get_template_directory_uri() . '/assets/css/jetpack/infinite-scroll.css', array( 'the-neverending-homepage' ), $h3qtcms1_version );
				wp_style_add_data( 'h3qtcms1-jetpack-infinite-scroll', 'rtl', 'replace' );
			}

			wp_enqueue_style( 'h3qtcms1-jetpack-widgets', get_template_directory_uri() . '/assets/css/jetpack/widgets.css', array(), $h3qtcms1_version );
			wp_style_add_data( 'h3qtcms1-jetpack-widgets', 'rtl', 'replace' );
		}
	}

endif;

return new h3qtcms1_Jetpack();
