<?php get_header(); ?>
<div class="content">
	<div class="main-content">
		
		<?php get_template_part( 'content', get_post_format() ); ?>

		<!--<?php //cms1_phantrang(); ?>-->



	</div>
	<div class="sidebar">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>