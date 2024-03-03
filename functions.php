<?php

/**
 * Theme Support
 */

 add_theme_support('menus');
 add_theme_support('custom-logo', array(
   'height'               => 32,
   'width'                => 300,
   'flex-height'          => true,
   'flex-width'           => true,
   'header-text'          => array( 'site-title', 'site-description' ),
   'unlink-homepage-logo' => false,
   ) );

/**
 * Styles & Scripts
 */

 function bdocs_styles_and_scripts() {

    wp_enqueue_style( 'main', get_stylesheet_uri(), array(), '1.0' );
    wp_enqueue_script( 'header-scroll', get_template_directory_uri() . '/src/js/headerScroll.js', array(), '1.0', true );
    wp_enqueue_script( 'menu', get_template_directory_uri() . '/src/js/menu.js', array(), '1.0', true );
    wp_enqueue_script( 'sidebar', get_template_directory_uri() . '/src/js/sidebar.js', array(), '1.0', true );
    wp_enqueue_script( 'theme-toggle', get_template_directory_uri() . '/src/js/themeToggle.js', array(), '1.0', true );
    wp_enqueue_script( 'search', get_template_directory_uri() . '/src/js/search.js', array(), '1.0', true );
    
 }

 add_action('wp_enqueue_scripts', 'bdocs_styles_and_scripts');


 /**
  * Register Menus
  */

function bdocs_register_nav_menus(){
   register_nav_menus( array(
      'top_menu' => __( 'Top menu', 'bdocs-theme' ),
      'sidebar_menu' => __( 'Sidebar menu', 'bdocs-theme' ),
      'footer_menu'  => __( 'Footer Menu', 'bdocs-theme' ),
   ) );
}

add_action( 'after_setup_theme', 'bdocs_register_nav_menus', 0 );



/**
 * Add a sidebar.
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 */
function bdocs_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Documentation Sidebar', 'bdocs-theme' ),
		'id'            => 'doc-sidebar',
		'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'bdocs-theme' ),
		'before_widget' => '<div class="chapter">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="chapter__title">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'bdocs_widgets_init' );