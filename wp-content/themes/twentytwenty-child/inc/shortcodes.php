<?php
/**
 * Register Shortcodes
 * 
 */

function wp_test_render_slider($attr = []){
    if(!isset($attr['slider']) || empty($attr['slider']))
        return false;

    if ( is_admin()) 
        return false;

    $slides = get_field('slides_repeater', $attr['slider']);
    // echo '<pre>'; print_r($slides); die;

    ob_start();
    include_once get_stylesheet_directory()."/templates/slider.php";
    $content = ob_get_clean();
    return $content;
}
add_shortcode('wp_test_slider', 'wp_test_render_slider');
?>