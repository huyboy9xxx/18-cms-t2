<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package h3qtcms1
 */

?>

		<!-- </div>.container -->
	<!-- </div>#content -->
	<br>
	<?php get_template_part('modules/9/9', 'content' ); ?>


	<?php //do_action( 'h3qtcms1_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
