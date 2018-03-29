<?php

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    // Add custom styles. TODO: Build and minify theme with Gulp.
    wp_enqueue_style( 'child-rosengarden-styles', get_stylesheet_directory_uri() . '/style.css', array(), $the_theme->get( 'Version' ) );
}

/* Short codes */
define("MYFORMAT", 'l - d F');
    
function displayWeekday($atts = [], $content = null, $tag = ''){
    // normalize attribute keys, lowercase
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
 
    // override default attributes with user attributes
    $wporg_atts = shortcode_atts(['day' => 'day-of-the-week'], $atts, $tag);

    return date_i18n(MYFORMAT, strtotime($wporg_atts['day'] . ' this week'));
    }
    add_shortcode('weekday', 'displayWeekday');
    
function displayWeek(){
    return date('W');    
    }
    add_shortcode('week', 'displayWeek');

function displayContactInfo(){
    return apply_filters('the_content', get_page(187)->post_content);
    }
    add_shortcode('contact-info', 'displayContactInfo');  

function displayOpeningInfo(){
    return '<div class="opening-info">' . apply_filters('the_content', get_page(189)->post_content) . '</div>';
    }
    add_shortcode('opening-info', 'displayOpeningInfo');  
        
/* Menus */
function register_footer_menu() {
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
    }
    add_action( 'init', 'register_footer_menu' );

// Customize login page - https://premium.wpmudev.org/blog/customize-login-page/
function my_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/style-custom-login.css" />';
}
add_action('login_head', 'my_custom_login');

// Logout redirect
add_action('wp_logout','auto_redirect_external_after_logout');
function auto_redirect_external_after_logout(){
  wp_redirect( 'https://rosengardenmat.se' );
  exit();
}

// Login redirect
function admin_default_page() {
    return '/help';
  }
  
  add_filter('login_redirect', 'admin_default_page');