<?php
/**
 * h3qtcms1 Admin Class
 *
 * @package  h3qtcms1
 * @since    2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'h3qtcms1_Admin' ) ) :
	/**
	 * The h3qtcms1 admin class
	 */
	class h3qtcms1_Admin {

		/**
		 * Setup class.
		 *
		 * @since 1.0
		 */
		public function __construct() {
			add_action( 'admin_menu', array( $this, 'welcome_register_menu' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'welcome_style' ) );
		}

		/**
		 * Load welcome screen css
		 *
		 * @param string $hook_suffix the current page hook suffix.
		 * @return void
		 * @since  1.4.4
		 */
		public function welcome_style( $hook_suffix ) {
			global $h3qtcms1_version;

			if ( 'appearance_page_h3qtcms1-welcome' === $hook_suffix ) {
				wp_enqueue_style( 'h3qtcms1-welcome-screen', get_template_directory_uri() . '/assets/css/admin/welcome-screen/welcome.css', $h3qtcms1_version );
				wp_style_add_data( 'h3qtcms1-welcome-screen', 'rtl', 'replace' );
			}
		}

		/**
		 * Creates the dashboard page
		 *
		 * @see  add_theme_page()
		 * @since 1.0.0
		 */
		public function welcome_register_menu() {
			add_theme_page( 'h3qtcms1', 'h3qtcms1', 'activate_plugins', 'h3qtcms1-welcome', array( $this, 'h3qtcms1_welcome_screen' ) );
		}

		/**
		 * The welcome screen
		 *
		 * @since 1.0.0
		 */
		public function h3qtcms1_welcome_screen() {
			require_once ABSPATH . 'wp-load.php';
			require_once ABSPATH . 'wp-admin/admin.php';
			require_once ABSPATH . 'wp-admin/admin-header.php';

			global $h3qtcms1_version;
			?>

			<div class="h3qtcms1-wrap">
				<section class="h3qtcms1-welcome-nav">
					<span class="h3qtcms1-welcome-nav__version">h3qtcms1 <?php echo esc_attr( $h3qtcms1_version ); ?></span>
					<ul>
						<li><a href="https://wordpress.org/support/theme/h3qtcms1" target="_blank"><?php esc_attr_e( 'Support', 'h3qtcms1' ); ?></a></li>
						<li><a href="https://docs.woocommerce.com/documentation/themes/h3qtcms1/" target="_blank"><?php esc_attr_e( 'Documentation', 'h3qtcms1' ); ?></a></li>
						<li><a href="https://woocommerce.wordpress.com/category/h3qtcms1/" target="_blank"><?php esc_attr_e( 'Development blog', 'h3qtcms1' ); ?></a></li>
					</ul>
				</section>

				<div class="h3qtcms1-logo">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/admin/h3qtcms1-icon.svg" alt="h3qtcms1" />
				</div>

				<div class="h3qtcms1-intro">
					<?php
					/**
					 * Display a different message when the user visits this page when returning from the guided tour
					 */
					$referrer = wp_get_referer();

					if ( strpos( $referrer, 'sf_starter_content' ) !== false ) {
						/* translators: 1: HTML, 2: HTML */
						echo '<h1>' . sprintf( esc_attr__( 'Setup complete %1$sYour h3qtcms1 adventure begins now 🚀%2$s ', 'h3qtcms1' ), '<span>', '</span>' ) . '</h1>';
						echo '<p>' . esc_attr__( 'One more thing... You might be interested in the following h3qtcms1 extensions and designs.', 'h3qtcms1' ) . '</p>';
					} else {
						echo '<p>' . esc_attr__( 'Hello! You might be interested in the following h3qtcms1 extensions and designs.', 'h3qtcms1' ) . '</p>';
					}
					?>
				</div>

				<div class="h3qtcms1-enhance">
					<div class="h3qtcms1-enhance__column h3qtcms1-bundle">
						<h3><?php esc_attr_e( 'h3qtcms1 Extensions Bundle', 'h3qtcms1' ); ?></h3>
						<span class="bundle-image">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/admin/welcome-screen/h3qtcms1-bundle-hero.png" alt="h3qtcms1 Extensions Hero" />
						</span>

						<p>
							<?php esc_attr_e( 'All the tools you\'ll need to define your style and customize h3qtcms1.', 'h3qtcms1' ); ?>
						</p>

						<p>
							<?php esc_attr_e( 'Make it yours without touching code with the h3qtcms1 Extensions bundle. Express yourself, optimize conversions, delight customers.', 'h3qtcms1' ); ?>
						</p>


						<p>
							<a href="https://woocommerce.com/products/h3qtcms1-extensions-bundle/?utm_source=h3qtcms1&utm_medium=product&utm_campaign=h3qtcms1addons" class="h3qtcms1-button" target="_blank"><?php esc_attr_e( 'Read more and purchase', 'h3qtcms1' ); ?></a>
						</p>
					</div>
					<div class="h3qtcms1-enhance__column h3qtcms1-child-themes">
						<h3><?php esc_attr_e( 'Alternate designs', 'h3qtcms1' ); ?></h3>
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/admin/welcome-screen/child-themes.jpg" alt="h3qtcms1 Powerpack" />

						<p>
							<?php esc_attr_e( 'Quickly and easily transform your shops appearance with h3qtcms1 child themes.', 'h3qtcms1' ); ?>
						</p>

						<p>
							<?php esc_attr_e( 'Each has been designed to serve a different industry - from fashion to food.', 'h3qtcms1' ); ?>
						</p>

						<p>
							<?php esc_attr_e( 'Of course they are all fully compatible with each h3qtcms1 extension.', 'h3qtcms1' ); ?>
						</p>

						<p>
							<a href="https://woocommerce.com/product-category/themes/h3qtcms1-child-theme-themes/?utm_source=h3qtcms1&utm_medium=product&utm_campaign=h3qtcms1addons" class="h3qtcms1-button" target="_blank"><?php esc_attr_e( 'Check \'em out', 'h3qtcms1' ); ?></a>
						</p>
					</div>
				</div>

				<div class="automattic">
					<p>
					<?php
						/* translators: %s: Automattic branding */
						printf( esc_html__( 'An %s project', 'h3qtcms1' ), '<a href="https://automattic.com/"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/admin/welcome-screen/automattic.png" alt="Automattic" /></a>' );
					?>
					</p>
				</div>
			</div>
			<?php
		}

		/**
		 * Welcome screen intro
		 *
		 * @since 1.0.0
		 */
		public function welcome_intro() {
			require_once get_template_directory() . '/inc/admin/welcome-screen/component-intro.php';
		}

		/**
		 * Output a button that will install or activate a plugin if it doesn't exist, or display a disabled button if the
		 * plugin is already activated.
		 *
		 * @param string $plugin_slug The plugin slug.
		 * @param string $plugin_file The plugin file.
		 */
		public function install_plugin_button( $plugin_slug, $plugin_file ) {
			if ( current_user_can( 'install_plugins' ) && current_user_can( 'activate_plugins' ) ) {
				if ( is_plugin_active( $plugin_slug . '/' . $plugin_file ) ) {
					// The plugin is already active.
					$button = array(
						'message' => esc_attr__( 'Activated', 'h3qtcms1' ),
						'url'     => '#',
						'classes' => 'disabled',
					);
				} elseif ( $this->_is_plugin_installed( $plugin_slug ) ) {
					$url = $this->_is_plugin_installed( $plugin_slug );

					// The plugin exists but isn't activated yet.
					$button = array(
						'message' => esc_attr__( 'Activate', 'h3qtcms1' ),
						'url'     => $url,
						'classes' => 'activate-now',
					);
				} else {
					// The plugin doesn't exist.
					$url    = wp_nonce_url(
						add_query_arg(
							array(
								'action' => 'install-plugin',
								'plugin' => $plugin_slug,
							), self_admin_url( 'update.php' )
						), 'install-plugin_' . $plugin_slug
					);
					$button = array(
						'message' => esc_attr__( 'Install now', 'h3qtcms1' ),
						'url'     => $url,
						'classes' => ' install-now install-' . $plugin_slug,
					);
				}
				?>
				<a href="<?php echo esc_url( $button['url'] ); ?>" class="h3qtcms1-button <?php echo esc_attr( $button['classes'] ); ?>" data-originaltext="<?php echo esc_attr( $button['message'] ); ?>" data-slug="<?php echo esc_attr( $plugin_slug ); ?>" aria-label="<?php echo esc_attr( $button['message'] ); ?>"><?php echo esc_attr( $button['message'] ); ?></a>
				<a href="https://wordpress.org/plugins/<?php echo esc_attr( $plugin_slug ); ?>" target="_blank"><?php esc_attr_e( 'Learn more', 'h3qtcms1' ); ?></a>
				<?php
			}
		}

		/**
		 * Check if a plugin is installed and return the url to activate it if so.
		 *
		 * @param string $plugin_slug The plugin slug.
		 */
		public function _is_plugin_installed( $plugin_slug ) {
			if ( file_exists( WP_PLUGIN_DIR . '/' . $plugin_slug ) ) {
				$plugins = get_plugins( '/' . $plugin_slug );
				if ( ! empty( $plugins ) ) {
					$keys        = array_keys( $plugins );
					$plugin_file = $plugin_slug . '/' . $keys[0];
					$url         = wp_nonce_url(
						add_query_arg(
							array(
								'action' => 'activate',
								'plugin' => $plugin_file,
							), admin_url( 'plugins.php' )
						), 'activate-plugin_' . $plugin_file
					);
					return $url;
				}
			}
			return false;
		}
		/**
		 * Welcome screen enhance section
		 *
		 * @since 1.5.2
		 */
		public function welcome_enhance() {
			require_once get_template_directory() . '/inc/admin/welcome-screen/component-enhance.php';
		}

		/**
		 * Welcome screen contribute section
		 *
		 * @since 1.5.2
		 */
		public function welcome_contribute() {
			require_once get_template_directory() . '/inc/admin/welcome-screen/component-contribute.php';
		}

		/**
		 * Get product data from json
		 *
		 * @param  string $url       URL to the json file.
		 * @param  string $transient Name the transient.
		 * @return [type]            [description]
		 */
		public function get_h3qtcms1_product_data( $url, $transient ) {
			$raw_products = wp_safe_remote_get( $url );
			$products     = json_decode( wp_remote_retrieve_body( $raw_products ) );

			if ( ! empty( $products ) ) {
				set_transient( $transient, $products, DAY_IN_SECONDS );
			}

			return $products;
		}
	}

endif;

return new h3qtcms1_Admin();
