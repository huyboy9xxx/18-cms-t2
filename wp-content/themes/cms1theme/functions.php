<?php
/** lay duong dan thu muc **/
define('THEME_URL', get_stylesheet_directory());
define('CORE', THEME_URL . "/core");
define('THEME_URL_URI', get_template_directory_uri());
define('PATH_MODULE', 'modules/');



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
		$static_style = array('bootstrap-3.3.7', 'swiper', 'fontawesome');
		$static_scripts = array('jquery-3.1.1', 'swiper', 'bootstrap-3.3.7');

		$list_module = get_name_module();
		$enque_module;
		for ($i=0; $i < count($list_module); $i++) { 
			wp_register_style('module-'.$list_module[$i], THEME_URL_URI . "/".PATH_MODULE.$list_module[$i]."/css/".$list_module[$i].".css", 'all');
			$enque_module[$i] = 'module-'.$list_module[$i];

			wp_register_script( 'module-'.$list_module[$i], THEME_URL_URI . "/".PATH_MODULE.$list_module[$i]."/js/".$list_module[$i].".js", 'all');

		}

		wp_register_style('bootstrap-3.3.7', THEME_URL_URI . "/css/bootstrap-3.3.7.min.css", 'all');
		wp_register_style('fontawesome', THEME_URL_URI . "/css/fontawesome.min.css", 'all');
		wp_register_style('swiper', THEME_URL_URI . "/css/swiper-5.0.2.min.css", 'all');

		wp_register_script( 'bootstrap-3.3.7', THEME_URL_URI . "/js/bootstrap-3.3.7.min.js", 'all');
		wp_register_script( 'swiper', THEME_URL_URI . "/js/swiper-5.0.4.min.js", 'all');
		wp_register_script( 'jquery-3.1.1', THEME_URL_URI . "/js/jquery-3.1.1.min.js", 'all');

		wp_enqueue_style($static_style);
		wp_enqueue_style($enque_module);

		wp_enqueue_script($static_scripts);
		wp_enqueue_script($enque_module);
	}

	add_action('wp_enqueue_scripts', 'cms1_style');
	function get_count_module()
	{
		$count_module;
		if ($handle = opendir(THEME_URL.'/modules')) {
		    while (false !== ($entry = readdir($handle))) {
		        if ($entry != "." && $entry != "..") {
		        	$count_module++;
		        }
		    }
		    closedir($handle);
		}

		return $count_module;
	}
	function get_name_module()
	{
		$modules;
		if ($handle = opendir(THEME_URL.'/modules')) {
		    while (false !== ($entry = readdir($handle))) {
		        if ($entry != "." && $entry != "..") {
		        	$modules[] = $entry;
		        }
		    }
		    closedir($handle);
		}
		return $modules;
	}
}