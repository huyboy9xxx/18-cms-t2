<?php
/**
 * Template used to display post content.
 *
 * @package h3qtcms1
 */

?>
<?php get_template_part('modules/2/2', 'content' ); ?>
<?php get_template_part('modules/3/3', 'content' ); ?>
<?php get_template_part('modules/4/4', 'content' ); ?>
<?php get_template_part('modules/5/5', 'content' ); ?>
<?php get_template_part('modules/6/6', 'content' ); ?>
<?php get_template_part('modules/7/7', 'content' ); ?>
<?php get_template_part('modules/8/8', 'content' ); ?>
<?php //do_action( 'homepage' );?> <!-- chứa các danh mục sản phẩm -->
<?php //h3qtcms1_product_categories(20); ?>

<!-- <article id="post-<?php //the_ID(); ?>" <?php //post_class(); ?>> -->

	<?php
	/**
	 * Functions hooked in to h3qtcms1_loop_post action.
	 *
	 * @hooked h3qtcms1_post_header          - 10
	 * @hooked h3qtcms1_post_content         - 30
	 */
	// do_action( 'h3qtcms1_loop_post' );
	?>

<!-- </article> -->
