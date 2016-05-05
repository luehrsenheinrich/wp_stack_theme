<?php

/*
 * Definition of needed Constants
 */
if(!defined('WP_THEME_URL')) {
	define( 'WP_THEME_URL', get_bloginfo('stylesheet_directory'));
}

if(!defined('WP_JS_URL')) {
	define( 'WP_JS_URL' , get_bloginfo('template_url').'/js');
}

if(!defined('LANG_NAMESPACE')){
	define( 'LANG_NAMESPACE', "gds");
}


/*
 * Include needed files from the inc directory
 */
foreach ( glob( dirname( __FILE__ )."/inc/*.php" ) as $file )
    require_once( $file );


/**
 * Enqueue the needed scripts and styles in the frontend
 * Called by action "wp_enqueue_scripts"
 *
 * @author Hendrik Luehrsen
 * @since 1.0
 *
 * @return void
 */
function lh_enqueue_scripts(){
	// CSS
	wp_enqueue_style('style', WP_THEME_URL.'/style.css', NULL, '1.0', 'all');

	// Register Scripts used by the theme
	wp_register_script('main', (WP_JS_URL . "/main.min.js"), array("jquery"), '1', true);

	wp_enqueue_script('main');
}
add_action("wp_enqueue_scripts", "lh_enqueue_scripts");

/**
 * Add language support
 * Called by action "after_setup_theme"
 *
 * @author Hendrik Luehrsen
 * @since 1.0
 *
 * @return void
 */
function lh_load_theme_textdomain(){
    load_theme_textdomain("gds", get_template_directory() . '/lang');
}
add_action('after_setup_theme', 'lh_load_theme_textdomain');

function lh_theme_image(){
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1920, 1080, true );

}
add_action("init", "lh_theme_image");

/**
 * lh_register_menus function.
 *
 * @access public
 * @return void
 */
function lh_register_menus(){
	register_nav_menus( array(
		'main menu' 	=> __("Main Menu", "gds"),
		'footer-menu' 	=> __("Footer Menu", "gds"),
	) );
}
add_action('init', 'lh_register_menus');
