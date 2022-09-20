<?php
/**
 * Register meta box(es).
 */
function wp_test_register_meta_boxes() {
	add_meta_box( 'slider-shortcode-meta', __( 'Slider Shortcode', 'textdomain' ), 'wp_test_my_display_callback', 'sliders', 'side' );
}
add_action( 'add_meta_boxes', 'wp_test_register_meta_boxes' );

/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function wp_test_my_display_callback( $post ) {
    ?>
    <div>
        <p>Use this Shortcode to include this slider.</p>
        <p>Text Widget: <code>[wp_test_slider slider='<?=$post->ID?>']</code></p>
        <p>PHP: <code>echo do_shortcode("[wp_test_slider slider='<?=$post->ID?>']");</code></p>
    </div>
    <?php
}
