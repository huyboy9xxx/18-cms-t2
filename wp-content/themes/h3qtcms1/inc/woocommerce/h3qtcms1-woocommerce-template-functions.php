<?php
/**
 * WooCommerce Template Functions.
 *
 * @package h3qtcms1
 */

if ( ! function_exists( 'h3qtcms1_before_content' ) ) {
	/**
	 * Before Content
	 * Wraps all WooCommerce content in wrappers which match the theme markup
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	function h3qtcms1_before_content() {
		?>
		<div id="primary" class="content-area container">
			<main id="main" class="site-main" role="main">
		<?php
	}
}

if ( ! function_exists( 'h3qtcms1_after_content' ) ) {
	/**
	 * After Content
	 * Closes the wrapping divs
	 *
	 * @since   1.0.0
	 * @return  void
	 */
	function h3qtcms1_after_content() {
		?>
			</main><!-- #main -->
		</div><!-- #primary -->

		<?php
		do_action( 'h3qtcms1_sidebar' );
	}
}

if ( ! function_exists( 'h3qtcms1_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments
	 * Ensure cart contents update when products are added to the cart via AJAX
	 *
	 * @param  array $fragments Fragments to refresh via AJAX.
	 * @return array            Fragments to refresh via AJAX
	 */
	function h3qtcms1_cart_link_fragment( $fragments ) {
		global $woocommerce;

		ob_start();
		h3qtcms1_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		ob_start();
		h3qtcms1_handheld_footer_bar_cart_link();
		$fragments['a.footer-cart-contents'] = ob_get_clean();

		return $fragments;
	}
}

/*if ( ! function_exists( 'h3qtcms1_cart_link' ) ) {
	/**
	 * Cart Link
	 * Displayed a link to the cart including the number of items present and the cart total
	 *
	 * @return void
	 * @since  1.0.0
	 */
	/*function h3qtcms1_cart_link() {
		?>
			<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'h3qtcms1' ); ?>">
				<?php /* translators: %d: number of items in cart */ ?>
				<?php /*echo wp_kses_post( WC()->cart->get_cart_subtotal() ); ?> <span class="count"><?php echo wp_kses_data( sprintf( _n( '%d', '%d', WC()->cart->get_cart_contents_count(), 'h3qtcms1' ), WC()->cart->get_cart_contents_count() ) ); ?></span>
			</a>
		<?php
	}
}*/

if ( ! function_exists( 'h3qtcms1_cart_link' ) ) {

	function h3qtcms1_cart_link() {
		?>
			<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'Xem danh sách s?n ph?m!', 'h3qtcms1' ); ?>">
				<?php /* translators: %d: number of items in cart */ ?>
				<?php echo wp_kses_post( WC()->cart->get_cart_subtotal() ); ?> <span class="count"><span><strong><?php echo wp_kses_data( sprintf( _n( '%d', '%d', WC()->cart->get_cart_contents_count(), 'h3qtcms1' ), WC()->cart->get_cart_contents_count() ) ); ?></strong></span></span>
			</a>
		<?php
	}
}

if ( ! function_exists( 'h3qtcms1_product_search' ) ) {
	/**
	 * Display Product Search
	 *
	 * @since  1.0.0
	 * @uses  h3qtcms1_is_woocommerce_activated() check if WooCommerce is activated
	 * @return void
	 */
	function h3qtcms1_product_search() {
		if ( h3qtcms1_is_woocommerce_activated() ) {
			?>
			<div class="site-search">
				<?php the_widget( 'WC_Widget_Product_Search', 'title=' ); ?>
			</div>
			<?php
		}
	}
}

if ( ! function_exists( 'h3qtcms1_header_cart' ) ) {
	/**
	 * Display Header Cart
	 *
	 * @since  1.0.0
	 * @uses  h3qtcms1_is_woocommerce_activated() check if WooCommerce is activated
	 * @return void
	 */
	function h3qtcms1_header_cart() {
		if ( h3qtcms1_is_woocommerce_activated() ) {
			if ( is_cart() ) {
				$class = 'current-menu-item';
			} else {
				$class = '';
			}
			?>
		<ul id="site-header-cart" class="nav navbar-nav">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php h3qtcms1_cart_link(); ?>
			</li>
<!--                        <li class="my-cart">
				<?php //the_widget( 'WC_Widget_Cart', 'title=' ); ?>
			</li>-->
		</ul>
			<?php
		}
	}
}

if ( ! function_exists( 'h3qtcms1_upsell_display' ) ) {
	/**
	 * Upsells
	 * Replace the default upsell function with our own which displays the correct number product columns
	 *
	 * @since   1.0.0
	 * @return  void
	 * @uses    woocommerce_upsell_display()
	 */
	function h3qtcms1_upsell_display() {
		$columns = apply_filters( 'h3qtcms1_upsells_columns', 3 );
		woocommerce_upsell_display( -1, $columns );
	}
}

if ( ! function_exists( 'h3qtcms1_sorting_wrapper' ) ) {
	/**
	 * Sorting wrapper
	 *
	 * @since   1.4.3
	 * @return  void
	 */
	function h3qtcms1_sorting_wrapper() {
		echo '<div class="h3qtcms1-sorting">';
	}
}

if ( ! function_exists( 'h3qtcms1_sorting_wrapper_close' ) ) {
	/**
	 * Sorting wrapper close
	 *
	 * @since   1.4.3
	 * @return  void
	 */
	function h3qtcms1_sorting_wrapper_close() {
		echo '</div>';
	}
}

if ( ! function_exists( 'h3qtcms1_product_columns_wrapper' ) ) {
	/**
	 * Product columns wrapper
	 *
	 * @since   2.2.0
	 * @return  void
	 */
	function h3qtcms1_product_columns_wrapper() {
		$columns = h3qtcms1_loop_columns();
		echo '<div class="columns-' . absint( $columns ) . '">';
	}
}

if ( ! function_exists( 'h3qtcms1_loop_columns' ) ) {
	/**
	 * Default loop columns on product archives
	 *
	 * @return integer products per row
	 * @since  1.0.0
	 */
	function h3qtcms1_loop_columns() {
		$columns = 3; // 3 products per row

		if ( function_exists( 'wc_get_default_products_per_row' ) ) {
			$columns = wc_get_default_products_per_row();
		}

		return apply_filters( 'h3qtcms1_loop_columns', $columns );
	}
}

if ( ! function_exists( 'h3qtcms1_product_columns_wrapper_close' ) ) {
	/**
	 * Product columns wrapper close
	 *
	 * @since   2.2.0
	 * @return  void
	 */
	function h3qtcms1_product_columns_wrapper_close() {
		echo '</div>';
	}
}

if ( ! function_exists( 'h3qtcms1_shop_messages' ) ) {
	/**
	 * h3qtcms1 shop messages
	 *
	 * @since   1.4.4
	 * @uses    h3qtcms1_do_shortcode
	 */
	function h3qtcms1_shop_messages() {
		if ( ! is_checkout() ) {
			echo wp_kses_post( h3qtcms1_do_shortcode( 'woocommerce_messages' ) );
		}
	}
}

if ( ! function_exists( 'h3qtcms1_woocommerce_pagination' ) ) {
	/**
	 * h3qtcms1 WooCommerce Pagination
	 * WooCommerce disables the product pagination inside the woocommerce_product_subcategories() function
	 * but since h3qtcms1 adds pagination before that function is excuted we need a separate function to
	 * determine whether or not to display the pagination.
	 *
	 * @since 1.4.4
	 */
	function h3qtcms1_woocommerce_pagination() {
		if ( woocommerce_products_will_display() ) {
			woocommerce_pagination();
		}
	}
}

if ( ! function_exists( 'h3qtcms1_product_categories' ) ) {
	/**
	 * Display Product Categories
	 * Hooked into the `homepage` action in the homepage template
	 *
	 * @since  1.0.0
	 * @param array $args the product section args.
	 * @return void
	 */
	function h3qtcms1_product_categories( $args ) {
		$args = apply_filters(
			'h3qtcms1_product_categories_args', array(
				'limit'            => 3,
				'columns'          => 3,
				'child_categories' => 0,
				'orderby'          => 'menu_order',
				'title'            => __( 'Shop by Category', 'h3qtcms1' ),
			)
		);

		$shortcode_content = h3qtcms1_do_shortcode(
			'product_categories', apply_filters(
				'h3qtcms1_product_categories_shortcode_args', array(
					'number'  => intval( $args['limit'] ),
					'columns' => intval( $args['columns'] ),
					'orderby' => esc_attr( $args['orderby'] ),
					'parent'  => esc_attr( $args['child_categories'] ),
				)
			)
		);

		/**
		 * Only display the section if the shortcode returns product categories
		 */
		if ( false !== strpos( $shortcode_content, 'product-category' ) ) {
			echo '<section class="h3qtcms1-product-section h3qtcms1-product-categories" aria-label="' . esc_attr__( 'Product Categories', 'h3qtcms1' ) . '">';

			do_action( 'h3qtcms1_homepage_before_product_categories' );

			echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

			do_action( 'h3qtcms1_homepage_after_product_categories_title' );

			echo $shortcode_content; // WPCS: XSS ok.

			do_action( 'h3qtcms1_homepage_after_product_categories' );

			echo '</section>';
		}
	}
}

if ( ! function_exists( 'h3qtcms1_recent_products' ) ) {
	/**
	 * Display Recent Products
	 * Hooked into the `homepage` action in the homepage template
	 *
	 * @since  1.0.0
	 * @param array $args the product section args.
	 * @return void
	 */
	function h3qtcms1_recent_products( $args ) {
		$args = apply_filters(
			'h3qtcms1_recent_products_args', array(
				'limit'   => 4,
				'columns' => 4,
				'orderby' => 'date',
				'order'   => 'desc',
				'title'   => __( 'New In', 'h3qtcms1' ),
			)
		);

		$shortcode_content = h3qtcms1_do_shortcode(
			'products', apply_filters(
				'h3qtcms1_recent_products_shortcode_args', array(
					'orderby'  => esc_attr( $args['orderby'] ),
					'order'    => esc_attr( $args['order'] ),
					'per_page' => intval( $args['limit'] ),
					'columns'  => intval( $args['columns'] ),
				)
			)
		);

		/**
		 * Only display the section if the shortcode returns products
		 */
		if ( false !== strpos( $shortcode_content, 'product' ) ) {
			echo '<section class="h3qtcms1-product-section h3qtcms1-recent-products" aria-label="' . esc_attr__( 'Recent Products', 'h3qtcms1' ) . '">';

			do_action( 'h3qtcms1_homepage_before_recent_products' );

			echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

			do_action( 'h3qtcms1_homepage_after_recent_products_title' );

			echo $shortcode_content; // WPCS: XSS ok.

			do_action( 'h3qtcms1_homepage_after_recent_products' );

			echo '</section>';
		}
	}
}

if ( ! function_exists( 'h3qtcms1_featured_products' ) ) {
	/**
	 * Display Featured Products
	 * Hooked into the `homepage` action in the homepage template
	 *
	 * @since  1.0.0
	 * @param array $args the product section args.
	 * @return void
	 */
	function h3qtcms1_featured_products( $args ) {
		$args = apply_filters(
			'h3qtcms1_featured_products_args', array(
				'limit'      => 4,
				'columns'    => 4,
				'orderby'    => 'date',
				'order'      => 'desc',
				'visibility' => 'featured',
				'title'      => __( 'We Recommend', 'h3qtcms1' ),
			)
		);

		$shortcode_content = h3qtcms1_do_shortcode(
			'products', apply_filters(
				'h3qtcms1_featured_products_shortcode_args', array(
					'per_page'   => intval( $args['limit'] ),
					'columns'    => intval( $args['columns'] ),
					'orderby'    => esc_attr( $args['orderby'] ),
					'order'      => esc_attr( $args['order'] ),
					'visibility' => esc_attr( $args['visibility'] ),
				)
			)
		);

		/**
		 * Only display the section if the shortcode returns products
		 */
		if ( false !== strpos( $shortcode_content, 'product' ) ) {
			echo '<section class="h3qtcms1-product-section h3qtcms1-featured-products" aria-label="' . esc_attr__( 'Featured Products', 'h3qtcms1' ) . '">';

			do_action( 'h3qtcms1_homepage_before_featured_products' );

			echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

			do_action( 'h3qtcms1_homepage_after_featured_products_title' );

			echo $shortcode_content; // WPCS: XSS ok.

			do_action( 'h3qtcms1_homepage_after_featured_products' );

			echo '</section>';
		}
	}
}

if ( ! function_exists( 'h3qtcms1_popular_products' ) ) {
	/**
	 * Display Popular Products
	 * Hooked into the `homepage` action in the homepage template
	 *
	 * @since  1.0.0
	 * @param array $args the product section args.
	 * @return void
	 */
	function h3qtcms1_popular_products( $args ) {
		$args = apply_filters(
			'h3qtcms1_popular_products_args', array(
				'limit'   => 4,
				'columns' => 4,
				'orderby' => 'rating',
				'order'   => 'desc',
				'title'   => __( 'Fan Favorites', 'h3qtcms1' ),
			)
		);

		$shortcode_content = h3qtcms1_do_shortcode(
			'products', apply_filters(
				'h3qtcms1_popular_products_shortcode_args', array(
					'per_page' => intval( $args['limit'] ),
					'columns'  => intval( $args['columns'] ),
					'orderby'  => esc_attr( $args['orderby'] ),
					'order'    => esc_attr( $args['order'] ),
				)
			)
		);

		/**
		 * Only display the section if the shortcode returns products
		 */
		if ( false !== strpos( $shortcode_content, 'product' ) ) {
			echo '<section class="h3qtcms1-product-section h3qtcms1-popular-products" aria-label="' . esc_attr__( 'Popular Products', 'h3qtcms1' ) . '">';

			do_action( 'h3qtcms1_homepage_before_popular_products' );

			echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

			do_action( 'h3qtcms1_homepage_after_popular_products_title' );

			echo $shortcode_content; // WPCS: XSS ok.

			do_action( 'h3qtcms1_homepage_after_popular_products' );

			echo '</section>';
		}
	}
}

if ( ! function_exists( 'h3qtcms1_on_sale_products' ) ) {
	/**
	 * Display On Sale Products
	 * Hooked into the `homepage` action in the homepage template
	 *
	 * @param array $args the product section args.
	 * @since  1.0.0
	 * @return void
	 */
	function h3qtcms1_on_sale_products( $args ) {
		$args = apply_filters(
			'h3qtcms1_on_sale_products_args', array(
				'limit'   => 4,
				'columns' => 4,
				'orderby' => 'date',
				'order'   => 'desc',
				'on_sale' => 'true',
				'title'   => __( 'On Sale', 'h3qtcms1' ),
			)
		);

		$shortcode_content = h3qtcms1_do_shortcode(
			'products', apply_filters(
				'h3qtcms1_on_sale_products_shortcode_args', array(
					'per_page' => intval( $args['limit'] ),
					'columns'  => intval( $args['columns'] ),
					'orderby'  => esc_attr( $args['orderby'] ),
					'order'    => esc_attr( $args['order'] ),
					'on_sale'  => esc_attr( $args['on_sale'] ),
				)
			)
		);

		/**
		 * Only display the section if the shortcode returns products
		 */
		if ( false !== strpos( $shortcode_content, 'product' ) ) {
			echo '<section class="h3qtcms1-product-section h3qtcms1-on-sale-products" aria-label="' . esc_attr__( 'On Sale Products', 'h3qtcms1' ) . '">';

			do_action( 'h3qtcms1_homepage_before_on_sale_products' );

			echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

			do_action( 'h3qtcms1_homepage_after_on_sale_products_title' );

			echo $shortcode_content; // WPCS: XSS ok.

			do_action( 'h3qtcms1_homepage_after_on_sale_products' );

			echo '</section>';
		}
	}
}

if ( ! function_exists( 'h3qtcms1_best_selling_products' ) ) {
	/**
	 * Display Best Selling Products
	 * Hooked into the `homepage` action in the homepage template
	 *
	 * @since 2.0.0
	 * @param array $args the product section args.
	 * @return void
	 */
	function h3qtcms1_best_selling_products( $args ) {
		$args = apply_filters(
			'h3qtcms1_best_selling_products_args', array(
				'limit'   => 4,
				'columns' => 4,
				'orderby' => 'popularity',
				'order'   => 'desc',
				'title'   => esc_attr__( 'Best Sellers', 'h3qtcms1' ),
			)
		);

		$shortcode_content = h3qtcms1_do_shortcode(
			'products', apply_filters(
				'h3qtcms1_best_selling_products_shortcode_args', array(
					'per_page' => intval( $args['limit'] ),
					'columns'  => intval( $args['columns'] ),
					'orderby'  => esc_attr( $args['orderby'] ),
					'order'    => esc_attr( $args['order'] ),
				)
			)
		);

		/**
		 * Only display the section if the shortcode returns products
		 */
		if ( false !== strpos( $shortcode_content, 'product' ) ) {
			echo '<section class="h3qtcms1-product-section h3qtcms1-best-selling-products" aria-label="' . esc_attr__( 'Best Selling Products', 'h3qtcms1' ) . '">';

			do_action( 'h3qtcms1_homepage_before_best_selling_products' );

			echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

			do_action( 'h3qtcms1_homepage_after_best_selling_products_title' );

			echo $shortcode_content; // WPCS: XSS ok.

			do_action( 'h3qtcms1_homepage_after_best_selling_products' );

			echo '</section>';
		}
	}
}

if ( ! function_exists( 'h3qtcms1_promoted_products' ) ) {
	/**
	 * Featured and On-Sale Products
	 * Check for featured products then on-sale products and use the appropiate shortcode.
	 * If neither exist, it can fallback to show recently added products.
	 *
	 * @since  1.5.1
	 * @param integer $per_page total products to display.
	 * @param integer $columns columns to arrange products in to.
	 * @param boolean $recent_fallback Should the function display recent products as a fallback when there are no featured or on-sale products?.
	 * @uses  h3qtcms1_is_woocommerce_activated()
	 * @uses  wc_get_featured_product_ids()
	 * @uses  wc_get_product_ids_on_sale()
	 * @uses  h3qtcms1_do_shortcode()
	 * @return void
	 */
	function h3qtcms1_promoted_products( $per_page = '2', $columns = '2', $recent_fallback = true ) {
		if ( h3qtcms1_is_woocommerce_activated() ) {

			if ( wc_get_featured_product_ids() ) {

				echo '<h2>' . esc_html__( 'Featured Products', 'h3qtcms1' ) . '</h2>';

				echo h3qtcms1_do_shortcode(
					'featured_products', array(
						'per_page' => $per_page,
						'columns'  => $columns,
					)
				); // WPCS: XSS ok.
			} elseif ( wc_get_product_ids_on_sale() ) {

				echo '<h2>' . esc_html__( 'On Sale Now', 'h3qtcms1' ) . '</h2>';

				echo h3qtcms1_do_shortcode(
					'sale_products', array(
						'per_page' => $per_page,
						'columns'  => $columns,
					)
				); // WPCS: XSS ok.
			} elseif ( $recent_fallback ) {

				echo '<h2>' . esc_html__( 'New In Store', 'h3qtcms1' ) . '</h2>';

				echo h3qtcms1_do_shortcode(
					'recent_products', array(
						'per_page' => $per_page,
						'columns'  => $columns,
					)
				); // WPCS: XSS ok.
			}
		}
	}
}

if ( ! function_exists( 'h3qtcms1_handheld_footer_bar' ) ) {
	/**
	 * Display a menu intended for use on handheld devices
	 *
	 * @since 2.0.0
	 */
	function h3qtcms1_handheld_footer_bar() {
		$links = array(
			'my-account' => array(
				'priority' => 10,
				'callback' => 'h3qtcms1_handheld_footer_bar_account_link',
			),
			'search'     => array(
				'priority' => 20,
				'callback' => 'h3qtcms1_handheld_footer_bar_search',
			),
			'cart'       => array(
				'priority' => 30,
				'callback' => 'h3qtcms1_handheld_footer_bar_cart_link',
			),
		);

		if ( wc_get_page_id( 'myaccount' ) === -1 ) {
			unset( $links['my-account'] );
		}

		if ( wc_get_page_id( 'cart' ) === -1 ) {
			unset( $links['cart'] );
		}

		$links = apply_filters( 'h3qtcms1_handheld_footer_bar_links', $links );
		?>
		<div class="h3qtcms1-handheld-footer-bar">
			<ul class="columns-<?php echo count( $links ); ?>">
				<?php foreach ( $links as $key => $link ) : ?>
					<li class="<?php echo esc_attr( $key ); ?>">
						<?php
						if ( $link['callback'] ) {
							call_user_func( $link['callback'], $key, $link );
						}
						?>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<?php
	}
}

if ( ! function_exists( 'h3qtcms1_handheld_footer_bar_search' ) ) {
	/**
	 * The search callback function for the handheld footer bar
	 *
	 * @since 2.0.0
	 */
	function h3qtcms1_handheld_footer_bar_search() {
		echo '<a href="">' . esc_attr__( 'Search', 'h3qtcms1' ) . '</a>';
		h3qtcms1_product_search();
	}
}

if ( ! function_exists( 'h3qtcms1_handheld_footer_bar_cart_link' ) ) {
	/**
	 * The cart callback function for the handheld footer bar
	 *
	 * @since 2.0.0
	 */
	function h3qtcms1_handheld_footer_bar_cart_link() {
		?>
			<a class="footer-cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'Xem danh sách s?n ph?m!', 'h3qtcms1' ); ?>">
				<span class="count"><?php echo wp_kses_data( WC()->cart->get_cart_contents_count() ); ?></span>
			</a>
		<?php
	}
}

if ( ! function_exists( 'h3qtcms1_handheld_footer_bar_account_link' ) ) {
	/**
	 * The account callback function for the handheld footer bar
	 *
	 * @since 2.0.0
	 */
	function h3qtcms1_handheld_footer_bar_account_link() {
		echo '<a href="' . esc_url( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) ) . '">' . esc_attr__( 'My Account', 'h3qtcms1' ) . '</a>';
	}
}

if ( ! function_exists( 'h3qtcms1_single_product_pagination' ) ) {
	/**
	 * Single Product Pagination
	 *
	 * @since 2.3.0
	 */
	function h3qtcms1_single_product_pagination() {
		if ( class_exists( 'h3qtcms1_Product_Pagination' ) || true !== get_theme_mod( 'h3qtcms1_product_pagination' ) ) {
			return;
		}

		// Show only products in the same category?
		$in_same_term   = apply_filters( 'h3qtcms1_single_product_pagination_same_category', true );
		$excluded_terms = apply_filters( 'h3qtcms1_single_product_pagination_excluded_terms', '' );
		$taxonomy       = apply_filters( 'h3qtcms1_single_product_pagination_taxonomy', 'product_cat' );

		$previous_product = h3qtcms1_get_previous_product( $in_same_term, $excluded_terms, $taxonomy );
		$next_product     = h3qtcms1_get_next_product( $in_same_term, $excluded_terms, $taxonomy );

		if ( ! $previous_product && ! $next_product ) {
			return;
		}

		?>
		<nav class="h3qtcms1-product-pagination" aria-label="<?php esc_attr_e( 'More products', 'h3qtcms1' ); ?>">
			<?php if ( $previous_product ) : ?>
				<a href="<?php echo esc_url( $previous_product->get_permalink() ); ?>" rel="prev">
					<?php echo wp_kses_post( $previous_product->get_image() ); ?>
					<span class="h3qtcms1-product-pagination__title"><?php echo wp_kses_post( $previous_product->get_name() ); ?></span>
				</a>
			<?php endif; ?>

			<?php if ( $next_product ) : ?>
				<a href="<?php echo esc_url( $next_product->get_permalink() ); ?>" rel="next">
					<?php echo wp_kses_post( $next_product->get_image() ); ?>
					<span class="h3qtcms1-product-pagination__title"><?php echo wp_kses_post( $next_product->get_name() ); ?></span>
				</a>
			<?php endif; ?>
		</nav><!-- .h3qtcms1-product-pagination -->
		<?php
	}
}

if ( ! function_exists( 'h3qtcms1_sticky_single_add_to_cart' ) ) {
	function h3qtcms1_sticky_single_add_to_cart() {
		global $product;

		if ( class_exists( 'h3qtcms1_Sticky_Add_to_Cart' ) || true !== get_theme_mod( 'h3qtcms1_sticky_add_to_cart' ) ) {
			return;
		}

		if ( ! is_product() ) {
			return;
		}

		$show = false;

		if ( $product->is_purchasable() && $product->is_in_stock() ) {
			$show = true;
		} else if ( $product->is_type( 'external' ) ) {
			$show = true;
		}

		if ( ! $show ) {
			return;
		}

		$params = apply_filters(
			'h3qtcms1_sticky_add_to_cart_params', array(
				'trigger_class' => 'entry-summary',
			)
		);

		wp_localize_script( 'h3qtcms1-sticky-add-to-cart', 'h3qtcms1_sticky_add_to_cart_params', $params );

		wp_enqueue_script( 'h3qtcms1-sticky-add-to-cart' );
		?>
			<section class="h3qtcms1-sticky-add-to-cart">
				<div class="container">
					<div class="h3qtcms1-sticky-add-to-cart__content">
						<?php echo wp_kses_post( woocommerce_get_product_thumbnail() ); ?>
						<div class="h3qtcms1-sticky-add-to-cart__content-product-info">
							<span class="h3qtcms1-sticky-add-to-cart__content-title"><?php esc_attr_e( 'You\'re viewing:', 'h3qtcms1' ); ?> <strong><?php the_title(); ?></strong></span>
							<span class="h3qtcms1-sticky-add-to-cart__content-price"><?php echo wp_kses_post( $product->get_price_html() ); ?></span>
							<?php echo wp_kses_post( wc_get_rating_html( $product->get_average_rating() ) ); ?>
						</div>
						<a href="<?php echo esc_url( $product->add_to_cart_url() ); ?>" class="h3qtcms1-sticky-add-to-cart__content-button button alt">
							<?php echo esc_attr( $product->add_to_cart_text() ); ?>
						</a>
					</div>
				</div>
			</section>
		<?php
	}
}

// if ( ! function_exists( 'h3qtcms1_woocommerce_brands_homepage_section' ) ) {
	/**
	 * Display WooCommerce Brands
	 * Hooked into the `homepage` action in the homepage template.
	 * Requires WooCommerce Brands.
	 *
	 * @since  2.3.0
	 * @link   https://woocommerce.com/products/brands/
	 * @uses   apply_filters()
	 * @uses   h3qtcms1_do_shortcode()
	 * @uses   wp_kses_post()
	 * @uses   do_action()
	 * @return void
	 */
	// function h3qtcms1_woocommerce_brands_homepage_section() {
	// 	$args = apply_filters(
	// 		'h3qtcms1_woocommerce_brands_args', array(
	// 			'number'     => 6,
	// 			'columns'    => 4,
	// 			'orderby'    => 'name',
	// 			'show_empty' => false,
	// 			'title'      => __( 'Shop by Brand', 'h3qtcms1' ),
	// 		)
	// 	);

	// 	$shortcode_content = h3qtcms1_do_shortcode(
	// 		'product_brand_thumbnails', apply_filters(
	// 			'h3qtcms1_woocommerce_brands_shortcode_args', array(
	// 				'number'     => absint( $args['number'] ),
	// 				'columns'    => absint( $args['columns'] ),
	// 				'orderby'    => esc_attr( $args['orderby'] ),
	// 				'show_empty' => (bool) $args['show_empty'],
	// 			)
	// 		)
	// 	);

	// 	echo '<section class="h3qtcms1-product-section h3qtcms1-woocommerce-brands" aria-label="' . esc_attr__( 'Product Brands', 'h3qtcms1' ) . '">';

	// 	do_action( 'h3qtcms1_homepage_before_woocommerce_brands' );

	// 	echo '<h2 class="section-title">' . wp_kses_post( $args['title'] ) . '</h2>';

	// 	do_action( 'h3qtcms1_homepage_after_woocommerce_brands_title' );

	// 	echo $shortcode_content; // WPCS: XSS ok.

	// 	do_action( 'h3qtcms1_homepage_after_woocommerce_brands' );

	// 	echo '</section>';
	//}
//}

// if ( ! function_exists( 'h3qtcms1_woocommerce_brands_archive' ) ) {
	/**
	 * Display brand image on brand archives
	 * Requires WooCommerce Brands.
	 *
	 * @since  2.3.0
	 * @link   https://woocommerce.com/products/brands/
	 * @uses   is_tax()
	 * @uses   wp_kses_post()
	 * @uses   get_brand_thumbnail_image()
	 * @uses   get_queried_object()
	 * @return void
	 */
// 	function h3qtcms1_woocommerce_brands_archive() {
// 		if ( is_tax( 'product_brand' ) ) {
// 			echo wp_kses_post( get_brand_thumbnail_image( get_queried_object() ) );
// 		}
// 	}
// }

if ( ! function_exists( 'h3qtcms1_woocommerce_brands_single' ) ) {
	/**
	 * Output product brand image for use on single product pages
	 * Requires WooCommerce Brands.
	 *
	 * @since  2.3.0
	 * @link   https://woocommerce.com/products/brands/
	 * @uses   h3qtcms1_do_shortcode()
	 * @uses   wp_kses_post()
	 * @return void
	 */
	function h3qtcms1_woocommerce_brands_single() {
		$brand = h3qtcms1_do_shortcode(
			'product_brand', array(
				'class' => '',
			)
		);

		if ( empty( $brand ) ) {
			return;
		}

		?>
		<div class="h3qtcms1-wc-brands-single-product">
			<?php echo wp_kses_post( $brand ); ?>
		</div>
		<?php
	}
}
