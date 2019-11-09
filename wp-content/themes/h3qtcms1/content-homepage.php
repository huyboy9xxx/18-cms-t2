<?php
/**
 * The template used for displaying page content in template-homepage.php
 *
 * @package h3qtcms1
 */

?>
<?php
$featured_image = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );
?>

<div class="container" style="padding-right: 0; padding-left: 0" id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="<?php h3qtcms1_homepage_content_styles(); ?>" data-featured-image="<?php echo esc_url( $featured_image ); ?>">
	<div class="container">
		<?php
		/**
		 * Functions hooked in to h3qtcms1_page add_action
		 *
		 * @hooked h3qtcms1_homepage_header      - 10
		 * @hooked h3qtcms1_page_content         - 20
		 */
		do_action( 'h3qtcms1_homepage' );
		?>
	</div>
</div><!-- #post-## -->
