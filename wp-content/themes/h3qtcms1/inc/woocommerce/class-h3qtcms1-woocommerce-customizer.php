<?php
/**
 * h3qtcms1 WooCommerce Customizer Class
 *
 * @package  h3qtcms1
 * @since    2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'h3qtcms1_WooCommerce_Customizer' ) ) :

	/**
	 * The h3qtcms1 Customizer class
	 */
	class h3qtcms1_WooCommerce_Customizer extends h3qtcms1_Customizer {

		/**
		 * Setup class.
		 *
		 * @since 2.4.0
		 * @return void
		 */
		public function __construct() {
			add_action( 'customize_register', array( $this, 'customize_register' ), 10 );
			add_action( 'wp_enqueue_scripts', array( $this, 'add_customizer_css' ), 130 );
			add_filter( 'h3qtcms1_setting_default_values', array( $this, 'setting_default_values' ) );
		}

		/**
		 * Returns an array of the desired default h3qtcms1 Options
		 *
		 * @param array $defaults array of default options.
		 * @since 2.4.0
		 * @return array
		 */
		public function setting_default_values( $defaults = array() ) {
			$defaults['h3qtcms1_sticky_add_to_cart'] = true;
			$defaults['h3qtcms1_product_pagination'] = true;

			return $defaults;
		}

		/**
		 * Add postMessage support for site title and description for the Theme Customizer along with several other settings.
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 * @since 2.4.0
		 */
		public function customize_register( $wp_customize ) {

			/**
			 * Product Page
			 */
			$wp_customize->add_section(
				'h3qtcms1_single_product_page', array(
					'title'    => __( 'Product Page', 'h3qtcms1' ),
					'priority' => 60,
				)
			);

			$wp_customize->add_setting(
				'h3qtcms1_product_pagination', array(
					'default'           => apply_filters( 'h3qtcms1_default_product_pagination', true ),
					'sanitize_callback' => 'wp_validate_boolean',
				)
			);

			$wp_customize->add_setting(
				'h3qtcms1_sticky_add_to_cart', array(
					'default'           => apply_filters( 'h3qtcms1_default_sticky_add_to_cart', true ),
					'sanitize_callback' => 'wp_validate_boolean',
				)
			);

			$wp_customize->add_control(
				'h3qtcms1_sticky_add_to_cart', array(
					'type'        => 'checkbox',
					'section'     => 'h3qtcms1_single_product_page',
					'label'       => __( 'Sticky Add-To-Cart', 'h3qtcms1' ),
					'description' => __( 'A small content bar at the top of the browser window which includes relevant product information and an add-to-cart button. It slides into view once the standard add-to-cart button has scrolled out of view.', 'h3qtcms1' ),
					'priority'    => 10,
				)
			);

			$wp_customize->add_control(
				'h3qtcms1_product_pagination', array(
					'type'        => 'checkbox',
					'section'     => 'h3qtcms1_single_product_page',
					'label'       => __( 'Product Pagination', 'h3qtcms1' ),
					'description' => __( 'Displays next and previous links on product pages. A product thumbnail is displayed with the title revealed on hover.', 'h3qtcms1' ),
					'priority'    => 20,
				)
			);
		}

		/**
		 * Get Customizer css.
		 *
		 * @see get_h3qtcms1_theme_mods()
		 * @since 2.4.0
		 * @return string $styles the css
		 */
		public function get_css() {
			$h3qtcms1_theme_mods = $this->get_h3qtcms1_theme_mods();
			$brighten_factor       = apply_filters( 'h3qtcms1_brighten_factor', 25 );
			$darken_factor         = apply_filters( 'h3qtcms1_darken_factor', -25 );

			$styles = '
			a.cart-contents,
			.site-header-cart .widget_shopping_cart a {
				color: ' . $h3qtcms1_theme_mods['header_link_color'] . ';
			}

			a.cart-contents:hover,
			.site-header-cart .widget_shopping_cart a:hover,
			.site-header-cart:hover > li > a {
				color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['header_link_color'], 65 ) . ';
			}

			table.cart td.product-remove,
			table.cart td.actions {
				border-top-color: ' . $h3qtcms1_theme_mods['background_color'] . ';
			}

			.h3qtcms1-handheld-footer-bar ul li.cart .count {
				background-color: ' . $h3qtcms1_theme_mods['header_link_color'] . ';
				color: ' . $h3qtcms1_theme_mods['header_background_color'] . ';
				border-color: ' . $h3qtcms1_theme_mods['header_background_color'] . ';
			}

			.woocommerce-tabs ul.tabs li.active a,
			ul.products li.product .price,
			.onsale,
			.wc-block-grid__product-onsale,
			.widget_search form:before,
			.widget_product_search form:before {
				color: ' . $h3qtcms1_theme_mods['text_color'] . ';
			}

			.woocommerce-breadcrumb a,
			a.woocommerce-review-link,
			.product_meta a {
				color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['text_color'], 5 ) . ';
			}

			.wc-block-grid__product-onsale,
			.onsale {
				border-color: ' . $h3qtcms1_theme_mods['text_color'] . ';
			}

			.star-rating span:before,
			.quantity .plus, .quantity .minus,
			p.stars a:hover:after,
			p.stars a:after,
			.star-rating span:before,
			#payment .payment_methods li input[type=radio]:first-child:checked+label:before {
				color: ' . $h3qtcms1_theme_mods['accent_color'] . ';
			}

			.widget_price_filter .ui-slider .ui-slider-range,
			.widget_price_filter .ui-slider .ui-slider-handle {
				background-color: ' . $h3qtcms1_theme_mods['accent_color'] . ';
			}

			.order_details {
				background-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['background_color'], -7 ) . ';
			}

			.order_details > li {
				border-bottom: 1px dotted ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['background_color'], -28 ) . ';
			}

			.order_details:before,
			.order_details:after {
				background: -webkit-linear-gradient(transparent 0,transparent 0),-webkit-linear-gradient(135deg,' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['background_color'], -7 ) . ' 33.33%,transparent 33.33%),-webkit-linear-gradient(45deg,' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['background_color'], -7 ) . ' 33.33%,transparent 33.33%)
			}

			#order_review {
				background-color: ' . $h3qtcms1_theme_mods['background_color'] . ';
			}

			#payment .payment_methods > li .payment_box,
			#payment .place-order {
				background-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['background_color'], -5 ) . ';
			}

			#payment .payment_methods > li:not(.woocommerce-notice) {
				background-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['background_color'], -10 ) . ';
			}

			#payment .payment_methods > li:not(.woocommerce-notice):hover {
				background-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['background_color'], -15 ) . ';
			}

			.woocommerce-pagination .page-numbers li .page-numbers.current {
				background-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['background_color'], $darken_factor ) . ';
				color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['text_color'], -10 ) . ';
			}

			.wc-block-grid__product-onsale,
			.onsale,
			.woocommerce-pagination .page-numbers li .page-numbers:not(.current) {
				color: ' . $h3qtcms1_theme_mods['text_color'] . ';
			}

			p.stars a:before,
			p.stars a:hover~a:before,
			p.stars.selected a.active~a:before {
				color: ' . $h3qtcms1_theme_mods['text_color'] . ';
			}

			p.stars.selected a.active:before,
			p.stars:hover a:before,
			p.stars.selected a:not(.active):before,
			p.stars.selected a.active:before {
				color: ' . $h3qtcms1_theme_mods['accent_color'] . ';
			}

			.single-product div.product .woocommerce-product-gallery .woocommerce-product-gallery__trigger {
				background-color: ' . $h3qtcms1_theme_mods['button_background_color'] . ';
				color: ' . $h3qtcms1_theme_mods['button_text_color'] . ';
			}

			.single-product div.product .woocommerce-product-gallery .woocommerce-product-gallery__trigger:hover {
				background-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['button_background_color'], $darken_factor ) . ';
				border-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['button_background_color'], $darken_factor ) . ';
				color: ' . $h3qtcms1_theme_mods['button_text_color'] . ';
			}

			.button.added_to_cart:focus,
			.button.wc-forward:focus {
				outline-color: ' . $h3qtcms1_theme_mods['accent_color'] . ';
			}

			.added_to_cart,
			.site-header-cart .widget_shopping_cart a.button,
			.wc-block-grid__products .wc-block-grid__product .wp-block-button__link {
				background-color: ' . $h3qtcms1_theme_mods['button_background_color'] . ';
				border-color: ' . $h3qtcms1_theme_mods['button_background_color'] . ';
				color: ' . $h3qtcms1_theme_mods['button_text_color'] . ';
			}

			.added_to_cart:hover,
			.site-header-cart .widget_shopping_cart a.button:hover,
			.wc-block-grid__products .wc-block-grid__product .wp-block-button__link:hover {
				background-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['button_background_color'], $darken_factor ) . ';
				border-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['button_background_color'], $darken_factor ) . ';
				color: ' . $h3qtcms1_theme_mods['button_text_color'] . ';
			}

			.added_to_cart.alt, .added_to_cart, .widget a.button.checkout {
				background-color: ' . $h3qtcms1_theme_mods['button_alt_background_color'] . ';
				border-color: ' . $h3qtcms1_theme_mods['button_alt_background_color'] . ';
				color: ' . $h3qtcms1_theme_mods['button_alt_text_color'] . ';
			}

			.added_to_cart.alt:hover, .added_to_cart:hover, .widget a.button.checkout:hover {
				background-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['button_alt_background_color'], $darken_factor ) . ';
				border-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['button_alt_background_color'], $darken_factor ) . ';
				color: ' . $h3qtcms1_theme_mods['button_alt_text_color'] . ';
			}

			.button.loading {
				color: ' . $h3qtcms1_theme_mods['button_background_color'] . ';
			}

			.button.loading:hover {
				background-color: ' . $h3qtcms1_theme_mods['button_background_color'] . ';
			}

			.button.loading:after {
				color: ' . $h3qtcms1_theme_mods['button_text_color'] . ';
			}

			@media screen and ( min-width: 768px ) {
				.site-header-cart .widget_shopping_cart,
				.site-header .product_list_widget li .quantity {
					color: ' . $h3qtcms1_theme_mods['header_text_color'] . ';
				}

				.site-header-cart .widget_shopping_cart .buttons,
				.site-header-cart .widget_shopping_cart .total {
					background-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['header_background_color'], -10 ) . ';
				}

				.site-header-cart .widget_shopping_cart {
					background-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['header_background_color'], -15 ) . ';
				}
			}';

			if ( ! class_exists( 'h3qtcms1_Product_Pagination' ) ) {
				$styles .= '
				.h3qtcms1-product-pagination a {
					color: ' . $h3qtcms1_theme_mods['text_color'] . ';
					background-color: ' . $h3qtcms1_theme_mods['background_color'] . ';
				}';
			}

			if ( ! class_exists( 'h3qtcms1_Sticky_Add_to_Cart' ) ) {
				$styles .= '
				.h3qtcms1-sticky-add-to-cart {
					color: ' . $h3qtcms1_theme_mods['text_color'] . ';
					background-color: ' . $h3qtcms1_theme_mods['background_color'] . ';
				}

				.h3qtcms1-sticky-add-to-cart a:not(.button) {
					color: ' . $h3qtcms1_theme_mods['header_link_color'] . ';
				}';
			}

			return apply_filters( 'h3qtcms1_customizer_woocommerce_css', $styles );
		}

		/**
		 * Add CSS in <head> for styles handled by the theme customizer
		 *
		 * @since 2.4.0
		 * @return void
		 */
		public function add_customizer_css() {
			wp_add_inline_style( 'h3qtcms1-woocommerce-style', $this->get_css() );
		}

	}

endif;

return new h3qtcms1_WooCommerce_Customizer();
