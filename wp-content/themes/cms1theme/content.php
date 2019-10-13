<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-thumbnail">
		<!--<?php //cms1hvh_thumbnail(); ?> -->
	</div>
	<div class="entry-header"></div>
	<div class="entry-content"></div>
</article>
  <div class="slide-swiper">
  	<!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="<?php echo THEME_URL_URI; ?>/images/1.jpg"></div>
      <div class="swiper-slide"><img src="<?php echo THEME_URL_URI; ?>/images/8.jpg"></div>
      <div class="swiper-slide"><img src="<?php echo THEME_URL_URI; ?>/images/10.jpg"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  </div>
  <div class="container">
  
<div class="row">
	<div class="col-md-8">

		<?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
 

 
    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
		
		<div class="card text-center">
		  <div class="card-header">
		    Featured
		  </div>
		  <div class="card-body">
		    <h5 class="card-title">Special title treatment</h5>
		    <p class="card-text"><?php the_content(); ?></p>
		    <a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php the_title(); ?></a>
		  </div>
		  <div class="card-footer text-muted">
		    2 days ago
		  </div>
		</div>
        
        


    <?php endwhile; ?>
    <!-- end of the loop -->
 

 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


		
	</div>
	<div class="col-md-4"></div>
</div>
