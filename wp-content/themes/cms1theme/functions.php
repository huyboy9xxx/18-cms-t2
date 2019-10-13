<?php
/** lay duong dan thu muc **/
define('THEME_URL', get_stylesheet_directory());
define('CORE', THEME_URL . "/core");
define('THEME_URL_URI', get_template_directory_uri());


/** nhung file init.php **/
require_once (CORE . "/init.php");
/** thiet lap chieu dai noi dung **/
if (!isset($content_width)) {
	$content_width = 620;
}
/** cac chuc nang cua theme **/
if (!function_exists("cms1_theme_setup")) {
	function cms1_theme_setup()
	{
		/* thiet lap text domain*/
		$languages_folder = THEME_URL . '/languages';
		load_theme_textdomain('cms1hvh', $languages_folder);
		/* tu dong them link rss len head*/
		add_theme_support('automatic-feed-links');
		/* them post thumbnail*/
		add_theme_support('post-thumbnails');
		/* them post thumbnail*/
		add_theme_support('post-formats', array(
			'image',
			'video',
			'gallery',
			'quote',
			'link'
		));
		/* them post title-tag*/
		add_theme_support('title-tag');
		/* them custom background */
		$default_background = array(
			'default-color' => '#e8e8e8'
		);
		add_theme_support('custom-background', $default_background);
		/* them menu */
		register_nav_menu('primary-menu', __('Primary Menu', 'cms1hvh'));
		/* tao sidebar */
		$sidebar = array(
			'name' => __('Main Sidebar', 'cms1hvh'),
			'id' => 'main-sidebar',
			'description' => __('default sidebar'),
			'class' => 'main-sidebar',
			'before_title' => '<h3 class="widgettile">',
			'after_title' => '</h3>'
		);
		register_sidebar($sidebar);

	}
	add_action("init", "cms1_theme_setup");

	if (!function_exists('cms1hvh_header')) {
		function cms1hvh_header(){?>
	        <div class="navbar-brand">
	        	
	        	<?php if(!is_home()): ?>
	        		<a><h1><span><?php wp_title(''); ?></span></h1></a>
	        		<?php else: ?>
	        			<?php printf('<a href="%1$s" title="%2$s"><h1><span>%3$s</span></h1></a>',
							get_bloginfo('url'),
							get_bloginfo('description'),
							get_bloginfo('sitename')
				); ?>
	        	<?php endif; ?>
	        	
	        </div>
	      </div>        
		<?php
		}
	}

	/* Menu*/
	if (!function_exists('cms1hvh_menu')) {
		function cms1hvh_menu()
		{
			$menu = array(
				'theme_location' => $menu,
				'container' => 'div',
				'container_class' => $menu
			);
			wp_nav_menu($menu);
		}
	}
	/**if (!function_exists('cms1_phantrang')) {
		function cms1_phantrang()
		{
			if ($GLOBALS['wp_query']->max_num_pages < 2) {
				return '';
			} ?>

			<nav class="pagination" role="navigation">
				<?php if (get_next_posts_link()):?>
					<div class="prev"><?php next_posts_link(__('Older Post', 'cms1hvh') ); ?></div>
				<?php endif; ?>

				<?php if(get_previous_post_link()): ?>
					<div class="next"><?php previous_posts_link(__('Newest Post', 'cms1hvh') ); ?></div>
				<?php endif; ?>
			</nav>

		<?php
		}
	}
	*/
	//thumbnail function
	// if (!function_exists('cms1hvh_thumbnail')) {
	// 	function cms1hvh_thumbnail()
	// 	{
			
	// 	}
	// }

	// Nhung css
	function cms1_style()
	{
		$list_styles = array('bootstrap', 'main-style', 'fontawesome', 'animate', 'prettyPhoto', 'swiper');
		$list_scripts = array('jquery-v3', 'migratejs', 'bootstrapjs', 'prettyPhotojs', 'isotopejs', 'wowjs', 'functionsjs', 'scriptjs', 'swiperjs');

		wp_register_style('main-style', THEME_URL_URI . "/style.css", 'all');
		wp_register_style('bootstrap', THEME_URL_URI . "/css/bootstrap.min.css", 'all');
		wp_register_style('fontawesome', THEME_URL_URI . "/css/font-awesome.min.css", 'all');
		wp_register_style('animate', THEME_URL_URI . "/css/animate.css", 'all');
		wp_register_style('prettyPhoto', THEME_URL_URI . "/css/prettyPhoto.css", 'all');
		wp_register_style('swiper', THEME_URL_URI . "/css/swiper.min.css", 'all');

		wp_register_script( 'jquery-v3', THEME_URL_URI . "/js/jquery.min.js", 'all');
		wp_register_script( 'migratejs', THEME_URL_URI . "/js/jquery-migrate.min.js", 'all');
		wp_register_script( 'bootstrapjs', THEME_URL_URI . "/js/bootstrap.min.js", 'all');
		wp_register_script( 'prettyPhotojs', THEME_URL_URI . "/js/jquery.prettyPhoto.js", 'all');
		wp_register_script( 'isotopejs', THEME_URL_URI . "/js/jquery.isotope.min.js", 'all');
		wp_register_script( 'wowjs', THEME_URL_URI . "/js/wow.min.js", 'all');
		wp_register_script( 'functionsjs', THEME_URL_URI . "/js/functions.js", 'all');
		wp_register_script( 'scriptjs', THEME_URL_URI . "/js/script.js", 'all');
		wp_register_script( 'swiperjs', THEME_URL_URI . "/js/swiper.min.js", 'all');

		wp_enqueue_style($list_styles);
		wp_enqueue_script($list_scripts);
	}
	add_action('wp_enqueue_scripts', 'cms1_style');
}