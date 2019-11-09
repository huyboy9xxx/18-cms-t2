<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package h3qtcms1
 */

?>

<div class="no-results not-found container" style="padding-left: 0; padding-right: 0">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Không tìm thấy!', 'h3qtcms1' ); ?></h1>
	</header>

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p>
				<?php
					/* translators: 1: URL */
					printf( wp_kses( __( 'Bạn đã sẵn sàng để đăng bài viết đầu tiên của bạn? <a href="%1$s">Get started here</a>.', 'h3qtcms1' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) );
				?>
			</p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, Bạn vừa tìm kiếm một thứ không tồn tại nơi dây ^^!.', 'h3qtcms1' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php esc_html_e( 'Có vẻ như chúng tôi không thể tìm thấy những gì bạn đang tìm kiếm. Có lẽ tìm kiếm có thể giúp đỡ.', 'h3qtcms1' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!--  .page-content -->
</div><!-- .no-results -->
