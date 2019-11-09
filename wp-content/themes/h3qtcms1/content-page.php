<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package h3qtcms1
 */

?>

<article class="container" style="padding-right: 0; padding-left: 0" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	/**
	 * Functions hooked in to h3qtcms1_page add_action
	 *
	 * @hooked h3qtcms1_page_header          - 10
	 * @hooked h3qtcms1_page_content         - 20
	 */
	do_action( 'h3qtcms1_page' );
	?>
</article> <!--#post-## -->
