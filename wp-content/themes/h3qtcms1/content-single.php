<?php
/**
 * Template used to display post content on single pages.
 *
 * @package h3qtcms1
 */

?>

<article class="container" style="padding-right: 0; padding-left: 0" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	do_action( 'h3qtcms1_single_post_top' );

	/**
	Nhung cai nay la comment va post
	 * Functions hooked into h3qtcms1_single_post add_action
	 *
	 * @hooked h3qtcms1_post_header          - 10
	 * @hooked h3qtcms1_post_content         - 30
	 */
	do_action( 'h3qtcms1_single_post' );

	/**
	 * Functions hooked in to h3qtcms1_single_post_bottom action
	 *
	 * @hooked h3qtcms1_post_nav         - 10
	 * @hooked h3qtcms1_display_comments - 20
	 */
	do_action( 'h3qtcms1_single_post_bottom' );
	?>

</article> <!--#post-## -->
