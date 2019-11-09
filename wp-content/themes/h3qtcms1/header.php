<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package h3qtcms1
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'h3qtcms1_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'h3qtcms1_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php h3qtcms1_header_styles(); ?>">
		<?php
		/**
		 * Functions hooked into h3qtcms1_header action
		 *
		 * @hooked h3qtcms1_header_container                 - 0
		 * @hooked h3qtcms1_skip_links                       - 5
		 * @hooked h3qtcms1_social_icons                     - 10
		 * @hooked h3qtcms1_site_branding                    - 20
		 * @hooked h3qtcms1_secondary_navigation             - 30
		 * @hooked h3qtcms1_product_search                   - 40
		 * @hooked h3qtcms1_header_container_close           - 41
		 * @hooked h3qtcms1_primary_navigation_wrapper       - 42
		 * @hooked h3qtcms1_primary_navigation               - 50
		 * @hooked h3qtcms1_header_cart                      - 60
		 * @hooked h3qtcms1_primary_navigation_wrapper_close - 68
		 */
		get_template_part('modules/1/1', 'content' );
		// var_dump(WC()->cart->get_cart());
		?>

	</header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to h3qtcms1_before_content
	 *
	 * @hooked h3qtcms1_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'h3qtcms1_before_content' );
	?>

<!-- 	<div id="content" class="site-content" tabindex="-1">
		<div class="container"> -->

		<?php
		// do_action( 'h3qtcms1_content_top' );
