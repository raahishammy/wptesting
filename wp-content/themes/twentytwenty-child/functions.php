<?php
//Child Theme Functions File
add_action( "wp_enqueue_scripts", "enqueue_wp_child_theme" );
function enqueue_wp_child_theme() 
{
	wp_enqueue_style("parent-css", get_template_directory_uri()."/style.css" );
	
	wp_enqueue_style("slick-css", get_stylesheet_directory_uri()."/assets/css/slick.css");
	wp_enqueue_style("fontawesome-css", get_stylesheet_directory_uri()."/assets/css/fontawesome.min.css");
	wp_enqueue_script("slick-js", get_stylesheet_directory_uri()."/assets/js/slick.min.js", array( "jquery" ), "1.0", true );
	wp_enqueue_script("script-js", get_stylesheet_directory_uri()."/assets/js/script.js", array(), "1.0", true );
}
 
require_once __DIR__.'/inc/includes.php';