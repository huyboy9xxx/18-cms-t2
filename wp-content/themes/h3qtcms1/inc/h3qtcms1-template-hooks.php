<?php
/**
 * h3qtcms1 hooks
 *
 * @package h3qtcms1
 */

/**
 * General
 *
 * @see  h3qtcms1_header_widget_region()
 * @see  h3qtcms1_get_sidebar()
 */
add_action( 'h3qtcms1_before_content', 'h3qtcms1_header_widget_region', 10 );
add_action( 'h3qtcms1_sidebar', 'h3qtcms1_get_sidebar', 10 );

/**
 * Header
 *
 * @see  h3qtcms1_skip_links()
 * @see  h3qtcms1_secondary_navigation()
 * @see  h3qtcms1_site_branding()
 * @see  h3qtcms1_primary_navigation()
 */
//add_action( 'h3qtcms1_header', 'h3qtcms1_header_container', 0 );
//add_action( 'h3qtcms1_header', 'h3qtcms1_skip_links', 5 );
//add_action( 'h3qtcms1_header', 'h3qtcms1_site_branding', 20 );
//add_action( 'h3qtcms1_header', 'h3qtcms1_secondary_navigation', 30 );
//add_action( 'h3qtcms1_header', 'h3qtcms1_header_container_close', 41 );
//add_action( 'h3qtcms1_header', 'h3qtcms1_primary_navigation_wrapper', 42 );
add_action( 'h3qtcms1_header', 'h3qtcms1_primary_navigation', 50 );
//add_action( 'h3qtcms1_header', 'h3qtcms1_primary_navigation_wrapper_close', 68 );

/**
 * Footer
 *
 * @see  h3qtcms1_footer_widgets()
 * @see  h3qtcms1_credit()
 */
add_action( 'h3qtcms1_footer', 'h3qtcms1_footer_widgets', 10 );
add_action( 'h3qtcms1_footer', 'h3qtcms1_credit', 20 );

/**
 * Homepage
 *
 * @see  h3qtcms1_homepage_content()
 */
add_action( 'homepage', 'h3qtcms1_homepage_content', 10 );

/**
 * Posts
 *
 * @see  h3qtcms1_post_header()
 * @see  h3qtcms1_post_meta()
 * @see  h3qtcms1_post_content()
 * @see  h3qtcms1_paging_nav()
 * @see  h3qtcms1_single_post_header()
 * @see  h3qtcms1_post_nav()
 * @see  h3qtcms1_display_comments()
 */
add_action( 'h3qtcms1_loop_post', 'h3qtcms1_post_header', 10 );
add_action( 'h3qtcms1_loop_post', 'h3qtcms1_post_content', 30 );
add_action( 'h3qtcms1_loop_post', 'h3qtcms1_post_taxonomy', 40 );
add_action( 'h3qtcms1_loop_after', 'h3qtcms1_paging_nav', 10 );
add_action( 'h3qtcms1_single_post', 'h3qtcms1_post_header', 10 );
add_action( 'h3qtcms1_single_post', 'h3qtcms1_post_content', 30 );
add_action( 'h3qtcms1_single_post_bottom', 'h3qtcms1_edit_post_link', 5 );
add_action( 'h3qtcms1_single_post_bottom', 'h3qtcms1_post_taxonomy', 5 );
add_action( 'h3qtcms1_single_post_bottom', 'h3qtcms1_post_nav', 10 );
add_action( 'h3qtcms1_single_post_bottom', 'h3qtcms1_display_comments', 20 );
add_action( 'h3qtcms1_post_header_before', 'h3qtcms1_post_meta', 10 );
add_action( 'h3qtcms1_post_content_before', 'h3qtcms1_post_thumbnail', 10 );

/**
 * Pages
 *
 * @see  h3qtcms1_page_header()
 * @see  h3qtcms1_page_content()
 * @see  h3qtcms1_display_comments()
 */
add_action( 'h3qtcms1_page', 'h3qtcms1_page_header', 10 );
add_action( 'h3qtcms1_page', 'h3qtcms1_page_content', 20 );
add_action( 'h3qtcms1_page', 'h3qtcms1_edit_post_link', 30 );
add_action( 'h3qtcms1_page_after', 'h3qtcms1_display_comments', 10 );

/**
 * Homepage Page Template
 *
 * @see  h3qtcms1_homepage_header()
 * @see  h3qtcms1_page_content()
 */
add_action( 'h3qtcms1_homepage', 'h3qtcms1_homepage_header', 10 );
add_action( 'h3qtcms1_homepage', 'h3qtcms1_page_content', 20 );
