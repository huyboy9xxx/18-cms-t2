<?php
/**
 * The template for displaying search results pages.
 *
 * @package h3qtcms1
 */


get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
						/* translators: %s: search term */
						printf( esc_attr__( 'Tìm kiếm cho từ khóa: %s', 'h3qtcms1' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
				<div class="md-form active-pink active-pink-2 mb-3 mt-0 search-custom ">
				  <?php get_search_form(); ?>
				</div>
			</header><!-- .page-header -->

			<?php

			get_template_part( 'loop' );

		else :

			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
do_action( 'h3qtcms1_sidebar' );
get_footer();
