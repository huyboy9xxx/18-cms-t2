<?php // @codingStandardsIgnoreLine.
/**
 * Class to create a Customizer control for displaying information
 *
 * @package  h3qtcms1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * The 'more' h3qtcms1 control class
 */
class More_h3qtcms1_Control extends WP_Customize_Control {

	/**
	 * Render the content on the theme customizer page
	 */
	public function render_content() {
		?>
		<label style="overflow: hidden; zoom: 1;">

			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>

			<p>
				<?php
					/* translators: 1: h3qtcms1, 2: start <a> tag, 3: h3qtcms1, 4: end <a> tag */
					printf( esc_html__( 'There\'s a range of %1$s extensions available to put additional power in your hands. Check out the %2$s%3$s%4$s page in your dashboard for more information.', 'h3qtcms1' ), 'h3qtcms1', '<a href="' . esc_url( admin_url() . 'themes.php?page=h3qtcms1-welcome' ) . '">', 'h3qtcms1', '</a>' );
				?>
			</p>

			<span class="customize-control-title">
				<?php
					/* translators: %s: h3qtcms1 */
					printf( esc_html__( 'Enjoying %s?', 'h3qtcms1' ), 'h3qtcms1' );
				?>
			</span>

			<p>
				<?php
					/* translators: 1: start <a> tag, 2: end <a> tag */
					printf( esc_html__( 'Why not leave us a review on %1$sWordPress.org%2$s?  We\'d really appreciate it!', 'h3qtcms1' ), '<a href="https://wordpress.org/themes/h3qtcms1">', '</a>' );
				?>
			</p>

		</label>
		<?php
	}
}
