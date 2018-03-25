<?php
    
/**
 * Initializes themes widgets.
 */
function rosengarden_widgets_init() {
    
    register_sidebar( array(
        'name'          => __( 'Footer Full Second', 'rosengarden' ),
        'id'            => 'footerfull-second',
        'description'   => 'Widget area below main footer',
        'before_widget'  => '<div id="%1$s" class="footer-widget %2$s '. 'olle' .'">', 
        'after_widget'   => '</div><!-- .footer-widget -->', 
        'before_title'   => '<h3 class="widget-title">', 
        'after_title'    => '</h3>', 
    ) );

    register_sidebar( array(
        'name'          => __( 'Header Full Second', 'rosengarden' ),
        'id'            => 'headerfull-second',
        'description'   => 'Widget area below main menu',
        'before_widget'  => '<div id="%1$s" class="header-widget %2$s '. 'olle' .'">', 
        'after_widget'   => '</div><!-- .header-widget -->', 
        'before_title'   => '<h3 class="widget-title">', 
        'after_title'    => '</h3>', 
    ) );

}

add_action( 'widgets_init', 'rosengarden_widgets_init' );