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
    <nav class="navbar navbar-default" role="navigation">
      <div class="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<?php cms1hvh_header(); ?>
			<div class="navbar-collapse collapse">
				  <div class="search-header">
				  	<?php get_search_form(); ?>
				  </div>
            <?php cms1hvh_menu('primary-menu'); ?>
          </div>
        </div>
      </div>
    </nav>
  </header>


			
			
		