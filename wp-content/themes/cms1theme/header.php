<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<?php get_template_part( PATH_MODULE.'1/1', 'content' ); ?>
	<?php
	// $modules;
	// $moduleCss;
	// if ($handle = opendir(THEME_URL.'/modules')) {
	//     while (false !== ($entry = readdir($handle))) {
	//         if ($entry != "." && $entry != "..") {
	//         	$modules[] = $entry;
	//         }
	//     }
	//     closedir($handle);
	// }
	// for ($i=0; $i < count($modules); $i++) {
	// 	if ($listCss = opendir(THEME_URL.'/modules/'.$modules[$i].'/css')) {
	// 	    while (false !== ($css = readdir($listCss))) {
	// 	        if ($css != "." && $css != "..") {
	// 	        	$moduleCss[] = $css;
	// 	        }
	// 	    }
	// 	    closedir($listCss);
	// 	}
	// }

	// var_dump($moduleCss);
	?>
    <!-- <nav class="navbar navbar-default" role="navigation">
      <div class="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<?php //cms1hvh_header(); ?>
			<div class="navbar-collapse collapse">
				  <div class="search-header">
				  	<?php //get_search_form(); ?>
				  </div>
            <?php //cms1hvh_menu('primary-menu'); ?>
          </div>
        </div>
      </div>
    </nav> -->
  </header>


			
			
		