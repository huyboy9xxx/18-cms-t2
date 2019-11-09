<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package h3qtcms1
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) :
				the_post();

				do_action( 'h3qtcms1_page_before' );

				get_template_part( 'content', 'page' );

				/**
				 * Functions hooked in to h3qtcms1_page_after action
				 *
				 * @hooked h3qtcms1_display_comments - 10
				 */
				do_action( 'h3qtcms1_page_after' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'h3qtcms1_sidebar' );
get_footer();
