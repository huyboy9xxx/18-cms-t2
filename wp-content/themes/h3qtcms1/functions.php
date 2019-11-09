<?php
/**
 * h3qtcms1 engine room
 *
 * @package h3qtcms1
 */

/**
 * Assign the h3qtcms1 version to a var
 */
$theme              = wp_get_theme( 'h3qtcms1' );
$h3qtcms1_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

$h3qtcms1 = (object) array(
	'version'    => $h3qtcms1_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require 'inc/class-h3qtcms1.php',
	'customizer' => require 'inc/customizer/class-h3qtcms1-customizer.php',
);

require 'inc/h3qtcms1-functions.php';
require 'inc/h3qtcms1-template-hooks.php';
require 'inc/h3qtcms1-template-functions.php';

if ( class_exists( 'Jetpack' ) ) {
	$h3qtcms1->jetpack = require 'inc/jetpack/class-h3qtcms1-jetpack.php';
}

if ( h3qtcms1_is_woocommerce_activated() ) {
	$h3qtcms1->woocommerce            = require 'inc/woocommerce/class-h3qtcms1-woocommerce.php';
	$h3qtcms1->woocommerce_customizer = require 'inc/woocommerce/class-h3qtcms1-woocommerce-customizer.php';

	require 'inc/woocommerce/class-h3qtcms1-woocommerce-adjacent-products.php';

	require 'inc/woocommerce/h3qtcms1-woocommerce-template-hooks.php';
	require 'inc/woocommerce/h3qtcms1-woocommerce-template-functions.php';
	require 'inc/woocommerce/h3qtcms1-woocommerce-functions.php';
}

if ( is_admin() ) {
	$h3qtcms1->admin = require 'inc/admin/class-h3qtcms1-admin.php';

	require 'inc/admin/class-h3qtcms1-plugin-install.php';
}

/**
 * NUX
 * Only load if wp version is 4.7.3 or above because of this issue;
 * https://core.trac.wordpress.org/ticket/39610?cversion=1&cnum_hist=2
 */
if ( version_compare( get_bloginfo( 'version' ), '4.7.3', '>=' ) && ( is_admin() || is_customize_preview() ) ) {
	require 'inc/nux/class-h3qtcms1-nux-admin.php';
	require 'inc/nux/class-h3qtcms1-nux-guided-tour.php';

	if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.0.0', '>=' ) ) {
		require 'inc/nux/class-h3qtcms1-nux-starter-content.php';
	}
}

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woocommerce/theme-customisations
 */
