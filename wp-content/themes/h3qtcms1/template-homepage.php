<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package h3qtcms1
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

			<?php
			/**
			 * Functions hooked in to homepage action
			 *
			 * @hooked h3qtcms1_homepage_content      - 10
			 * @hooked h3qtcms1_product_categories    - 20
			 * @hooked h3qtcms1_recent_products       - 30
			 * @hooked h3qtcms1_featured_products     - 40
			 * @hooked h3qtcms1_popular_products      - 50
			 * @hooked h3qtcms1_on_sale_products      - 60
			 * @hooked h3qtcms1_best_selling_products - 70
			 */
			do_action( 'homepage' );
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
