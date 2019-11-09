<?php
/**
 * h3qtcms1 Customizer Class
 *
 * @package  h3qtcms1
 * @since    2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'h3qtcms1_Customizer' ) ) :

	/**
	 * The h3qtcms1 Customizer class
	 */
	class h3qtcms1_Customizer {

		/**
		 * Setup class.
		 *
		 * @since 1.0
		 */
		public function __construct() {
			add_action( 'customize_register', array( $this, 'customize_register' ), 10 );
			add_filter( 'body_class', array( $this, 'layout_class' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'add_customizer_css' ), 130 );
			add_action( 'customize_controls_print_styles', array( $this, 'customizer_custom_control_css' ) );
			add_action( 'customize_register', array( $this, 'edit_default_customizer_settings' ), 99 );
			add_action( 'enqueue_block_assets', array( $this, 'block_editor_customizer_css' ) );
			add_action( 'init', array( $this, 'default_theme_mod_values' ), 10 );
		}

		/**
		 * Returns an array of the desired default h3qtcms1 Options
		 *
		 * @return array
		 */
		public function get_h3qtcms1_default_setting_values() {
			return apply_filters(
				'h3qtcms1_setting_default_values', $args = array(
					'h3qtcms1_heading_color'           => '#333333',
					'h3qtcms1_text_color'              => '#6d6d6d',
					'h3qtcms1_accent_color'            => '#96588a',
					'h3qtcms1_hero_heading_color'      => '#000000',
					'h3qtcms1_hero_text_color'         => '#000000',
					'h3qtcms1_header_background_color' => '#ffffff',
					'h3qtcms1_header_text_color'       => '#404040',
					'h3qtcms1_header_link_color'       => '#333333',
					'h3qtcms1_footer_background_color' => '#f0f0f0',
					'h3qtcms1_footer_heading_color'    => '#333333',
					'h3qtcms1_footer_text_color'       => '#6d6d6d',
					'h3qtcms1_footer_link_color'       => '#333333',
					'h3qtcms1_button_background_color' => '#eeeeee',
					'h3qtcms1_button_text_color'       => '#333333',
					'h3qtcms1_button_alt_background_color' => '#333333',
					'h3qtcms1_button_alt_text_color'   => '#ffffff',
					'h3qtcms1_layout'                  => 'right',
					'background_color'                   => 'ffffff',
				)
			);
		}

		/**
		 * Adds a value to each h3qtcms1 setting if one isn't already present.
		 *
		 * @uses get_h3qtcms1_default_setting_values()
		 */
		public function default_theme_mod_values() {
			foreach ( $this->get_h3qtcms1_default_setting_values() as $mod => $val ) {
				add_filter( 'theme_mod_' . $mod, array( $this, 'get_theme_mod_value' ), 10 );
			}
		}

		/**
		 * Get theme mod value.
		 *
		 * @param string $value Theme modification value.
		 * @return string
		 */
		public function get_theme_mod_value( $value ) {
			$key = substr( current_filter(), 10 );

			$set_theme_mods = get_theme_mods();

			if ( isset( $set_theme_mods[ $key ] ) ) {
				return $value;
			}

			$values = $this->get_h3qtcms1_default_setting_values();

			return isset( $values[ $key ] ) ? $values[ $key ] : $value;
		}

		/**
		 * Set Customizer setting defaults.
		 * These defaults need to be applied separately as child themes can filter h3qtcms1_setting_default_values
		 *
		 * @param  array $wp_customize the Customizer object.
		 * @uses   get_h3qtcms1_default_setting_values()
		 */
		public function edit_default_customizer_settings( $wp_customize ) {
			foreach ( $this->get_h3qtcms1_default_setting_values() as $mod => $val ) {
				$wp_customize->get_setting( $mod )->default = $val;
			}
		}

		/**
		 * Add postMessage support for site title and description for the Theme Customizer along with several other settings.
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 * @since  1.0.0
		 */
		public function customize_register( $wp_customize ) {

			// Move background color setting alongside background image.
			$wp_customize->get_control( 'background_color' )->section  = 'background_image';
			$wp_customize->get_control( 'background_color' )->priority = 20;

			// Change background image section title & priority.
			$wp_customize->get_section( 'background_image' )->title    = __( 'Background', 'h3qtcms1' );
			$wp_customize->get_section( 'background_image' )->priority = 30;

			// Change header image section title & priority.
			$wp_customize->get_section( 'header_image' )->title    = __( 'Header', 'h3qtcms1' );
			$wp_customize->get_section( 'header_image' )->priority = 25;

			// Selective refresh.
			if ( function_exists( 'add_partial' ) ) {
				$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
				$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

				$wp_customize->selective_refresh->add_partial(
					'custom_logo', array(
						'selector'        => '.site-branding',
						'render_callback' => array( $this, 'get_site_logo' ),
					)
				);

				$wp_customize->selective_refresh->add_partial(
					'blogname', array(
						'selector'        => '.site-title.beta a',
						'render_callback' => array( $this, 'get_site_name' ),
					)
				);

				$wp_customize->selective_refresh->add_partial(
					'blogdescription', array(
						'selector'        => '.site-description',
						'render_callback' => array( $this, 'get_site_description' ),
					)
				);
			}

			/**
			 * Custom controls
			 */
			require_once dirname( __FILE__ ) . '/class-h3qtcms1-customizer-control-radio-image.php';
			require_once dirname( __FILE__ ) . '/class-h3qtcms1-customizer-control-arbitrary.php';

			if ( apply_filters( 'h3qtcms1_customizer_more', true ) ) {
				require_once dirname( __FILE__ ) . '/class-h3qtcms1-customizer-control-more.php';
			}

			/**
			 * Add the typography section
			 */
			$wp_customize->add_section(
				'h3qtcms1_typography', array(
					'title'    => __( 'Typography', 'h3qtcms1' ),
					'priority' => 45,
				)
			);

			/**
			 * Heading color
			 */
			$wp_customize->add_setting(
				'h3qtcms1_heading_color', array(
					'default'           => apply_filters( 'h3qtcms1_default_heading_color', '#484c51' ),
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize, 'h3qtcms1_heading_color', array(
						'label'    => __( 'Heading color', 'h3qtcms1' ),
						'section'  => 'h3qtcms1_typography',
						'settings' => 'h3qtcms1_heading_color',
						'priority' => 20,
					)
				)
			);

			/**
			 * Text Color
			 */
			$wp_customize->add_setting(
				'h3qtcms1_text_color', array(
					'default'           => apply_filters( 'h3qtcms1_default_text_color', '#43454b' ),
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize, 'h3qtcms1_text_color', array(
						'label'    => __( 'Text color', 'h3qtcms1' ),
						'section'  => 'h3qtcms1_typography',
						'settings' => 'h3qtcms1_text_color',
						'priority' => 30,
					)
				)
			);

			/**
			 * Accent Color
			 */
			$wp_customize->add_setting(
				'h3qtcms1_accent_color', array(
					'default'           => apply_filters( 'h3qtcms1_default_accent_color', '#96588a' ),
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize, 'h3qtcms1_accent_color', array(
						'label'    => __( 'Link / accent color', 'h3qtcms1' ),
						'section'  => 'h3qtcms1_typography',
						'settings' => 'h3qtcms1_accent_color',
						'priority' => 40,
					)
				)
			);

			/**
			 * Hero Heading Color
			 */
			$wp_customize->add_setting(
				'h3qtcms1_hero_heading_color', array(
					'default'           => apply_filters( 'h3qtcms1_default_hero_heading_color', '#000000' ),
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize, 'h3qtcms1_hero_heading_color', array(
						'label'           => __( 'Hero heading color', 'h3qtcms1' ),
						'section'         => 'h3qtcms1_typography',
						'settings'        => 'h3qtcms1_hero_heading_color',
						'priority'        => 50,
					)
				)
			);

			/**
			 * Hero Text Color
			 */
			$wp_customize->add_setting(
				'h3qtcms1_hero_text_color', array(
					'default'           => apply_filters( 'h3qtcms1_default_hero_text_color', '#000000' ),
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize, 'h3qtcms1_hero_text_color', array(
						'label'           => __( 'Hero text color', 'h3qtcms1' ),
						'section'         => 'h3qtcms1_typography',
						'settings'        => 'h3qtcms1_hero_text_color',
						'priority'        => 60,
					)
				)
			);

			$wp_customize->add_control(
				new Arbitrary_h3qtcms1_Control(
					$wp_customize, 'h3qtcms1_header_image_heading', array(
						'section'  => 'header_image',
						'type'     => 'heading',
						'label'    => __( 'Header background image', 'h3qtcms1' ),
						'priority' => 6,
					)
				)
			);

			/**
			 * Header Background
			 */
			$wp_customize->add_setting(
				'h3qtcms1_header_background_color', array(
					'default'           => apply_filters( 'h3qtcms1_default_header_background_color', '#2c2d33' ),
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize, 'h3qtcms1_header_background_color', array(
						'label'    => __( 'Background color', 'h3qtcms1' ),
						'section'  => 'header_image',
						'settings' => 'h3qtcms1_header_background_color',
						'priority' => 15,
					)
				)
			);

			/**
			 * Header text color
			 */
			$wp_customize->add_setting(
				'h3qtcms1_header_text_color', array(
					'default'           => apply_filters( 'h3qtcms1_default_header_text_color', '#9aa0a7' ),
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize, 'h3qtcms1_header_text_color', array(
						'label'    => __( 'Text color', 'h3qtcms1' ),
						'section'  => 'header_image',
						'settings' => 'h3qtcms1_header_text_color',
						'priority' => 20,
					)
				)
			);

			/**
			 * Header link color
			 */
			$wp_customize->add_setting(
				'h3qtcms1_header_link_color', array(
					'default'           => apply_filters( 'h3qtcms1_default_header_link_color', '#d5d9db' ),
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize, 'h3qtcms1_header_link_color', array(
						'label'    => __( 'Link color', 'h3qtcms1' ),
						'section'  => 'header_image',
						'settings' => 'h3qtcms1_header_link_color',
						'priority' => 30,
					)
				)
			);

			/**
			 * Footer section
			 */
			$wp_customize->add_section(
				'h3qtcms1_footer', array(
					'title'       => __( 'Footer', 'h3qtcms1' ),
					'priority'    => 28,
					'description' => __( 'Customize the look & feel of your website footer.', 'h3qtcms1' ),
				)
			);

			/**
			 * Footer Background
			 */
			$wp_customize->add_setting(
				'h3qtcms1_footer_background_color', array(
					'default'           => apply_filters( 'h3qtcms1_default_footer_background_color', '#f0f0f0' ),
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize, 'h3qtcms1_footer_background_color', array(
						'label'    => __( 'Background color', 'h3qtcms1' ),
						'section'  => 'h3qtcms1_footer',
						'settings' => 'h3qtcms1_footer_background_color',
						'priority' => 10,
					)
				)
			);

			/**
			 * Footer heading color
			 */
			$wp_customize->add_setting(
				'h3qtcms1_footer_heading_color', array(
					'default'           => apply_filters( 'h3qtcms1_default_footer_heading_color', '#494c50' ),
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize, 'h3qtcms1_footer_heading_color', array(
						'label'    => __( 'Heading color', 'h3qtcms1' ),
						'section'  => 'h3qtcms1_footer',
						'settings' => 'h3qtcms1_footer_heading_color',
						'priority' => 20,
					)
				)
			);

			/**
			 * Footer text color
			 */
			$wp_customize->add_setting(
				'h3qtcms1_footer_text_color', array(
					'default'           => apply_filters( 'h3qtcms1_default_footer_text_color', '#61656b' ),
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize, 'h3qtcms1_footer_text_color', array(
						'label'    => __( 'Text color', 'h3qtcms1' ),
						'section'  => 'h3qtcms1_footer',
						'settings' => 'h3qtcms1_footer_text_color',
						'priority' => 30,
					)
				)
			);

			/**
			 * Footer link color
			 */
			$wp_customize->add_setting(
				'h3qtcms1_footer_link_color', array(
					'default'           => apply_filters( 'h3qtcms1_default_footer_link_color', '#2c2d33' ),
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize, 'h3qtcms1_footer_link_color', array(
						'label'    => __( 'Link color', 'h3qtcms1' ),
						'section'  => 'h3qtcms1_footer',
						'settings' => 'h3qtcms1_footer_link_color',
						'priority' => 40,
					)
				)
			);

			/**
			 * Buttons section
			 */
			$wp_customize->add_section(
				'h3qtcms1_buttons', array(
					'title'       => __( 'Buttons', 'h3qtcms1' ),
					'priority'    => 45,
					'description' => __( 'Customize the look & feel of your website buttons.', 'h3qtcms1' ),
				)
			);

			/**
			 * Button background color
			 */
			$wp_customize->add_setting(
				'h3qtcms1_button_background_color', array(
					'default'           => apply_filters( 'h3qtcms1_default_button_background_color', '#96588a' ),
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize, 'h3qtcms1_button_background_color', array(
						'label'    => __( 'Background color', 'h3qtcms1' ),
						'section'  => 'h3qtcms1_buttons',
						'settings' => 'h3qtcms1_button_background_color',
						'priority' => 10,
					)
				)
			);

			/**
			 * Button text color
			 */
			$wp_customize->add_setting(
				'h3qtcms1_button_text_color', array(
					'default'           => apply_filters( 'h3qtcms1_default_button_text_color', '#ffffff' ),
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize, 'h3qtcms1_button_text_color', array(
						'label'    => __( 'Text color', 'h3qtcms1' ),
						'section'  => 'h3qtcms1_buttons',
						'settings' => 'h3qtcms1_button_text_color',
						'priority' => 20,
					)
				)
			);

			/**
			 * Button alt background color
			 */
			$wp_customize->add_setting(
				'h3qtcms1_button_alt_background_color', array(
					'default'           => apply_filters( 'h3qtcms1_default_button_alt_background_color', '#2c2d33' ),
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize, 'h3qtcms1_button_alt_background_color', array(
						'label'    => __( 'Alternate button background color', 'h3qtcms1' ),
						'section'  => 'h3qtcms1_buttons',
						'settings' => 'h3qtcms1_button_alt_background_color',
						'priority' => 30,
					)
				)
			);

			/**
			 * Button alt text color
			 */
			$wp_customize->add_setting(
				'h3qtcms1_button_alt_text_color', array(
					'default'           => apply_filters( 'h3qtcms1_default_button_alt_text_color', '#ffffff' ),
					'sanitize_callback' => 'sanitize_hex_color',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Color_Control(
					$wp_customize, 'h3qtcms1_button_alt_text_color', array(
						'label'    => __( 'Alternate button text color', 'h3qtcms1' ),
						'section'  => 'h3qtcms1_buttons',
						'settings' => 'h3qtcms1_button_alt_text_color',
						'priority' => 40,
					)
				)
			);

			/**
			 * Layout
			 */
			$wp_customize->add_section(
				'h3qtcms1_layout', array(
					'title'    => __( 'Layout', 'h3qtcms1' ),
					'priority' => 50,
				)
			);

			$wp_customize->add_setting(
				'h3qtcms1_layout', array(
					'default'           => apply_filters( 'h3qtcms1_default_layout', $layout = is_rtl() ? 'left' : 'right' ),
					'sanitize_callback' => 'h3qtcms1_sanitize_choices',
				)
			);

			$wp_customize->add_control(
				new h3qtcms1_Custom_Radio_Image_Control(
					$wp_customize, 'h3qtcms1_layout', array(
						'settings' => 'h3qtcms1_layout',
						'section'  => 'h3qtcms1_layout',
						'label'    => __( 'General Layout', 'h3qtcms1' ),
						'priority' => 1,
						'choices'  => array(
							'right' => get_template_directory_uri() . '/assets/images/customizer/controls/2cr.png',
							'left'  => get_template_directory_uri() . '/assets/images/customizer/controls/2cl.png',
						),
					)
				)
			);

			/**
			 * More
			 */
			if ( apply_filters( 'h3qtcms1_customizer_more', true ) ) {
				$wp_customize->add_section(
					'h3qtcms1_more', array(
						'title'    => __( 'More', 'h3qtcms1' ),
						'priority' => 999,
					)
				);

				$wp_customize->add_setting(
					'h3qtcms1_more', array(
						'default'           => null,
						'sanitize_callback' => 'sanitize_text_field',
					)
				);

				$wp_customize->add_control(
					new More_h3qtcms1_Control(
						$wp_customize, 'h3qtcms1_more', array(
							'label'    => __( 'Looking for more options?', 'h3qtcms1' ),
							'section'  => 'h3qtcms1_more',
							'settings' => 'h3qtcms1_more',
							'priority' => 1,
						)
					)
				);
			}
		}

		/**
		 * Get all of the h3qtcms1 theme mods.
		 *
		 * @return array $h3qtcms1_theme_mods The h3qtcms1 Theme Mods.
		 */
		public function get_h3qtcms1_theme_mods() {
			$h3qtcms1_theme_mods = array(
				'background_color'            => h3qtcms1_get_content_background_color(),
				'accent_color'                => get_theme_mod( 'h3qtcms1_accent_color' ),
				'hero_heading_color'          => get_theme_mod( 'h3qtcms1_hero_heading_color' ),
				'hero_text_color'             => get_theme_mod( 'h3qtcms1_hero_text_color' ),
				'header_background_color'     => get_theme_mod( 'h3qtcms1_header_background_color' ),
				'header_link_color'           => get_theme_mod( 'h3qtcms1_header_link_color' ),
				'header_text_color'           => get_theme_mod( 'h3qtcms1_header_text_color' ),
				'footer_background_color'     => get_theme_mod( 'h3qtcms1_footer_background_color' ),
				'footer_link_color'           => get_theme_mod( 'h3qtcms1_footer_link_color' ),
				'footer_heading_color'        => get_theme_mod( 'h3qtcms1_footer_heading_color' ),
				'footer_text_color'           => get_theme_mod( 'h3qtcms1_footer_text_color' ),
				'text_color'                  => get_theme_mod( 'h3qtcms1_text_color' ),
				'heading_color'               => get_theme_mod( 'h3qtcms1_heading_color' ),
				'button_background_color'     => get_theme_mod( 'h3qtcms1_button_background_color' ),
				'button_text_color'           => get_theme_mod( 'h3qtcms1_button_text_color' ),
				'button_alt_background_color' => get_theme_mod( 'h3qtcms1_button_alt_background_color' ),
				'button_alt_text_color'       => get_theme_mod( 'h3qtcms1_button_alt_text_color' ),
			);

			return apply_filters( 'h3qtcms1_theme_mods', $h3qtcms1_theme_mods );
		}

		/**
		 * Get Customizer css.
		 *
		 * @see get_h3qtcms1_theme_mods()
		 * @return array $styles the css
		 */
		public function get_css() {
			$h3qtcms1_theme_mods = $this->get_h3qtcms1_theme_mods();
			$brighten_factor       = apply_filters( 'h3qtcms1_brighten_factor', 25 );
			$darken_factor         = apply_filters( 'h3qtcms1_darken_factor', -25 );

			$styles = '
			.main-navigation ul li a,
			.site-title a,
			ul.menu li a,
			.site-branding h1 a,
			.site-footer .h3qtcms1-handheld-footer-bar a:not(.button),
			button.menu-toggle,
			button.menu-toggle:hover,
			.handheld-navigation .dropdown-toggle {
				color: ' . $h3qtcms1_theme_mods['header_link_color'] . ';
			}

			button.menu-toggle,
			button.menu-toggle:hover {
				border-color: ' . $h3qtcms1_theme_mods['header_link_color'] . ';
			}

			.main-navigation ul li a:hover,
			.main-navigation ul li:hover > a,
			.site-title a:hover,
			.site-header ul.menu li.current-menu-item > a {
				color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['header_link_color'], 65 ) . ';
			}

			table:not( .has-background ) th {
				background-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['background_color'], -7 ) . ';
			}

			table:not( .has-background ) tbody td {
				background-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['background_color'], -2 ) . ';
			}

			table:not( .has-background ) tbody tr:nth-child(2n) td,
			fieldset,
			fieldset legend {
				background-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['background_color'], -4 ) . ';
			}

			.site-header,
			.secondary-navigation ul ul,
			.main-navigation ul.menu > li.menu-item-has-children:after,
			.secondary-navigation ul.menu ul,
			.h3qtcms1-handheld-footer-bar,
			.h3qtcms1-handheld-footer-bar ul li > a,
			.h3qtcms1-handheld-footer-bar ul li.search .site-search,
			button.menu-toggle,
			button.menu-toggle:hover {
				background-color: ' . $h3qtcms1_theme_mods['header_background_color'] . ';
			}

			p.site-description,
			.site-header,
			.h3qtcms1-handheld-footer-bar {
				color: ' . $h3qtcms1_theme_mods['header_text_color'] . ';
			}

			button.menu-toggle:after,
			button.menu-toggle:before,
			button.menu-toggle span:before {
				background-color: ' . $h3qtcms1_theme_mods['header_link_color'] . ';
			}

			h1, h2, h3, h4, h5, h6, .wc-block-grid__product-title {
				color: ' . $h3qtcms1_theme_mods['heading_color'] . ';
			}

			.widget h1 {
				border-bottom-color: ' . $h3qtcms1_theme_mods['heading_color'] . ';
			}

			body,
			.secondary-navigation a {
				color: ' . $h3qtcms1_theme_mods['text_color'] . ';
			}

			.widget-area .widget a,
			.hentry .entry-header .posted-on a,
			.hentry .entry-header .post-author a,
			.hentry .entry-header .post-comments a,
			.hentry .entry-header .byline a {
				color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['text_color'], 5 ) . ';
			}

			a {
				color: ' . $h3qtcms1_theme_mods['accent_color'] . ';
			}

		

		

			button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, .button:hover, .widget a.button:hover {
				background-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['button_background_color'], $darken_factor ) . ';
				border-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['button_background_color'], $darken_factor ) . ';
				color: ' . $h3qtcms1_theme_mods['button_text_color'] . ';
			}

			

			.pagination .page-numbers li .page-numbers.current {
				background-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['background_color'], $darken_factor ) . ';
				color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['text_color'], -10 ) . ';
			}

			#comments .comment-list .comment-content .comment-text {
				background-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['background_color'], -7 ) . ';
			}

			.site-footer {
				background-color: ' . $h3qtcms1_theme_mods['footer_background_color'] . ';
				color: ' . $h3qtcms1_theme_mods['footer_text_color'] . ';
			}

			.site-footer a:not(.button) {
				color: ' . $h3qtcms1_theme_mods['footer_link_color'] . ';
			}

			.site-footer h1, .site-footer h2, .site-footer h3, .site-footer h4, .site-footer h5, .site-footer h6 {
				color: ' . $h3qtcms1_theme_mods['footer_heading_color'] . ';
			}

			.page-template-template-homepage.has-post-thumbnail .type-page.has-post-thumbnail .entry-title {
				color: ' . $h3qtcms1_theme_mods['hero_heading_color'] . ';
			}

			.page-template-template-homepage.has-post-thumbnail .type-page.has-post-thumbnail .entry-content {
				color: ' . $h3qtcms1_theme_mods['hero_text_color'] . ';
			}

			@media screen and ( min-width: 768px ) {
				.secondary-navigation ul.menu a:hover {
					color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['header_text_color'], $brighten_factor ) . ';
				}

				.secondary-navigation ul.menu a {
					color: ' . $h3qtcms1_theme_mods['header_text_color'] . ';
				}

				.main-navigation ul.menu ul.sub-menu,
				.main-navigation ul.nav-menu ul.children {
					background-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['header_background_color'], -15 ) . ';
				}

				.site-header {
					border-bottom-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['header_background_color'], -15 ) . ';
				}
			}';

			return apply_filters( 'h3qtcms1_customizer_css', $styles );
		}

		/**
		 * Get Gutenberg Customizer css.
		 *
		 * @see get_h3qtcms1_theme_mods()
		 * @return array $styles the css
		 */
		public function gutenberg_get_css() {
			$h3qtcms1_theme_mods = $this->get_h3qtcms1_theme_mods();
			$darken_factor         = apply_filters( 'h3qtcms1_darken_factor', -25 );

			// Gutenberg.
			$styles = '
				.wp-block-button__link:not(.has-text-color) {
					color: ' . $h3qtcms1_theme_mods['button_text_color'] . ';
				}

				.wp-block-button__link:not(.has-text-color):hover,
				.wp-block-button__link:not(.has-text-color):focus,
				.wp-block-button__link:not(.has-text-color):active {
					color: ' . $h3qtcms1_theme_mods['button_text_color'] . ';
				}

				.wp-block-button__link:not(.has-background) {
					background-color: ' . $h3qtcms1_theme_mods['button_background_color'] . ';
				}

				.wp-block-button__link:not(.has-background):hover,
				.wp-block-button__link:not(.has-background):focus,
				.wp-block-button__link:not(.has-background):active {
					border-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['button_background_color'], $darken_factor ) . ';
					background-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['button_background_color'], $darken_factor ) . ';
				}

				.wp-block-quote footer,
				.wp-block-quote cite,
				.wp-block-quote__citation {
					color: ' . $h3qtcms1_theme_mods['text_color'] . ';
				}

				.wp-block-pullquote cite,
				.wp-block-pullquote footer,
				.wp-block-pullquote__citation {
					color: ' . $h3qtcms1_theme_mods['text_color'] . ';
				}

				.wp-block-image figcaption {
					color: ' . $h3qtcms1_theme_mods['text_color'] . ';
				}

				.wp-block-separator.is-style-dots::before {
					color: ' . $h3qtcms1_theme_mods['heading_color'] . ';
				}

				.wp-block-file a.wp-block-file__button {
					color: ' . $h3qtcms1_theme_mods['button_text_color'] . ';
					background-color: ' . $h3qtcms1_theme_mods['button_background_color'] . ';
					border-color: ' . $h3qtcms1_theme_mods['button_background_color'] . ';
				}

				.wp-block-file a.wp-block-file__button:hover,
				.wp-block-file a.wp-block-file__button:focus,
				.wp-block-file a.wp-block-file__button:active {
					color: ' . $h3qtcms1_theme_mods['button_text_color'] . ';
					background-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['button_background_color'], $darken_factor ) . ';
				}

				.wp-block-code,
				.wp-block-preformatted pre {
					color: ' . $h3qtcms1_theme_mods['text_color'] . ';
				}

				.wp-block-table:not( .has-background ):not( .is-style-stripes ) tbody tr:nth-child(2n) td {
					background-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['background_color'], -2 ) . ';
				}

				.wp-block-cover .wp-block-cover__inner-container h1,
				.wp-block-cover .wp-block-cover__inner-container h2,
				.wp-block-cover .wp-block-cover__inner-container h3,
				.wp-block-cover .wp-block-cover__inner-container h4,
				.wp-block-cover .wp-block-cover__inner-container h5,
				.wp-block-cover .wp-block-cover__inner-container h6 {
					color: ' . $h3qtcms1_theme_mods['hero_heading_color'] . ';
				}
			';

			return apply_filters( 'h3qtcms1_gutenberg_customizer_css', $styles );
		}

		/**
		 * Enqueue dynamic colors to use editor blocks.
		 *
		 * @since 2.4.0
		 */
		public function block_editor_customizer_css() {
			$h3qtcms1_theme_mods = $this->get_h3qtcms1_theme_mods();

			$styles = '';

			if ( is_admin() ) {
				$styles .= '
				.editor-styles-wrapper table:not( .has-background ) th {
					background-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['background_color'], -7 ) . ';
				}

				.editor-styles-wrapper table:not( .has-background ) tbody td {
					background-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['background_color'], -2 ) . ';
				}

				.editor-styles-wrapper table:not( .has-background ) tbody tr:nth-child(2n) td,
				.editor-styles-wrapper fieldset,
				.editor-styles-wrapper fieldset legend {
					background-color: ' . h3qtcms1_adjust_color_brightness( $h3qtcms1_theme_mods['background_color'], -4 ) . ';
				}

				.editor-post-title__block .editor-post-title__input,
				.editor-styles-wrapper h1,
				.editor-styles-wrapper h2,
				.editor-styles-wrapper h3,
				.editor-styles-wrapper h4,
				.editor-styles-wrapper h5,
				.editor-styles-wrapper h6 {
					color: ' . $h3qtcms1_theme_mods['heading_color'] . ';
				}

				.editor-styles-wrapper .editor-block-list__block {
					color: ' . $h3qtcms1_theme_mods['text_color'] . ';
				}

				.editor-styles-wrapper a,
				.wp-block-freeform.block-library-rich-text__tinymce a {
					color: ' . $h3qtcms1_theme_mods['accent_color'] . ';
				}

				.editor-styles-wrapper a:focus,
				.wp-block-freeform.block-library-rich-text__tinymce a:focus {
					outline-color: ' . $h3qtcms1_theme_mods['accent_color'] . ';
				}

				body.post-type-post .editor-post-title__block::after {
					content: "";
				}';
			}

			$styles .= $this->gutenberg_get_css();

			wp_add_inline_style( 'h3qtcms1-gutenberg-blocks', apply_filters( 'h3qtcms1_gutenberg_block_editor_customizer_css', $styles ) );
		}

		/**
		 * Add CSS in <head> for styles handled by the theme customizer
		 *
		 * @since 1.0.0
		 * @return void
		 */
		public function add_customizer_css() {
			wp_add_inline_style( 'h3qtcms1-style', $this->get_css() );
		}

		/**
		 * Layout classes
		 * Adds 'right-sidebar' and 'left-sidebar' classes to the body tag
		 *
		 * @param  array $classes current body classes.
		 * @return string[]          modified body classes
		 * @since  1.0.0
		 */
		public function layout_class( $classes ) {
			$left_or_right = get_theme_mod( 'h3qtcms1_layout' );

			$classes[] = $left_or_right . '-sidebar';

			return $classes;
		}

		/**
		 * Add CSS for custom controls
		 *
		 * This function incorporates CSS from the Kirki Customizer Framework
		 *
		 * The Kirki Customizer Framework, Copyright Aristeides Stathopoulos (@aristath),
		 * is licensed under the terms of the GNU GPL, Version 2 (or later)
		 *
		 * @link https://github.com/reduxframework/kirki/
		 * @since  1.5.0
		 */
		public function customizer_custom_control_css() {
			?>
			<style>
			.customize-control-radio-image input[type=radio] {
				display: none;
			}

			.customize-control-radio-image label {
				display: block;
				width: 48%;
				float: left;
				margin-right: 4%;
			}

			.customize-control-radio-image label:nth-of-type(2n) {
				margin-right: 0;
			}

			.customize-control-radio-image img {
				opacity: .5;
			}

			.customize-control-radio-image input[type=radio]:checked + label img,
			.customize-control-radio-image img:hover {
				opacity: 1;
			}

			</style>
			<?php
		}

		/**
		 * Get site logo.
		 *
		 * @since 2.1.5
		 * @return string
		 */
		public function get_site_logo() {
			return h3qtcms1_site_title_or_logo( false );
		}

		/**
		 * Get site name.
		 *
		 * @since 2.1.5
		 * @return string
		 */
		public function get_site_name() {
			return get_bloginfo( 'name', 'display' );
		}

		/**
		 * Get site description.
		 *
		 * @since 2.1.5
		 * @return string
		 */
		public function get_site_description() {
			return get_bloginfo( 'description', 'display' );
		}

		/**
		 * Check if current page is using the Homepage template.
		 *
		 * @since 2.3.0
		 * @return bool
		 */
		public function is_homepage_template() {
			$template = get_post_meta( get_the_ID(), '_wp_page_template', true );

			if ( ! $template || 'template-homepage.php' !== $template || ! has_post_thumbnail( get_the_ID() ) ) {
				return false;
			}

			return true;
		}

		/**
		 * Setup the WordPress core custom header feature.
		 *
		 * @deprecated 2.4.0
		 * @return void
		 */
		public function custom_header_setup() {
			if ( function_exists( 'wc_deprecated_function' ) ) {
				wc_deprecated_function( __FUNCTION__, '2.4.0' );
			} else {
				_deprecated_function( __FUNCTION__, '2.4.0' );
			}
		}

		/**
		 * Get Customizer css associated with WooCommerce.
		 *
		 * @deprecated 2.4.0
		 * @return void
		 */
		public function get_woocommerce_css() {
			if ( function_exists( 'wc_deprecated_function' ) ) {
				wc_deprecated_function( __FUNCTION__, '2.3.1' );
			} else {
				_deprecated_function( __FUNCTION__, '2.3.1' );
			}
		}

		/**
		 * Assign h3qtcms1 styles to individual theme mods.
		 *
		 * @deprecated 2.3.1
		 * @return void
		 */
		public function set_h3qtcms1_style_theme_mods() {
			if ( function_exists( 'wc_deprecated_function' ) ) {
				wc_deprecated_function( __FUNCTION__, '2.3.1' );
			} else {
				_deprecated_function( __FUNCTION__, '2.3.1' );
			}
		}
	}

endif;

return new h3qtcms1_Customizer();
