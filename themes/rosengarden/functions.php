<?php
// Add your custom functions here

// Queue parent style followed by child/customized style
add_action( 'wp_enqueue_scripts', 'pique_enqueue_child_styles', 99);

function pique_enqueue_child_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_dequeue_style('pique-style');
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
    wp_enqueue_style( 'custom-child-style',
        get_stylesheet_directory_uri() . '/custom.css',
        array('parent-style')
    );
}

define("MYFORMAT", 'l - d F');
    
function displayWeekday($atts = [], $content = null, $tag = ''){
    // normalize attribute keys, lowercase
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
 
    // override default attributes with user attributes
    $wporg_atts = shortcode_atts(['day' => 'day-of-the-week'], $atts, $tag);

    return date_i18n(MYFORMAT, strtotime($wporg_atts['day'] . ' this week'));
    }
    add_shortcode('weekday', 'displayWeekday');
    
        
function displayweek(){
    return date('W');    
    }
    add_shortcode('week', 'displayweek');
    
    


?>
