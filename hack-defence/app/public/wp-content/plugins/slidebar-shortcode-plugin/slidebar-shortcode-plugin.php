<?php
/*
Plugin Name: Slidebar Shortcode Plugin
Description: A custom Slidebar shortcode plugin for WordPress.
Version: 1.0
Author: Anon
*/

    // Enqueue assets specifically for the 'slider.php' file
function slidebar_shortcode_enqueue_assets_on_slider_template($template) {
    // Get the path to the current template file
    $current_template = get_page_template();
    
    // Check if the current template is the '/bug-hunting' file located in your plugin's folder
    if ( strpos($_SERVER['REQUEST_URI'], 'bug-hunting') !== false )  {
        // Get the URL to your plugin's root directory
        $plugin_dir = plugin_dir_url(__FILE__);

     
        // Enqueue Owl Carousel CSS files
        wp_enqueue_style('owl-carousel-green', $plugin_dir . 'asset/owl.theme.green.min.css');
        wp_enqueue_style('owl-carousel-default', $plugin_dir . 'asset/owl.theme.default.min.css');
        wp_enqueue_style('owl-carousel', $plugin_dir . 'asset/owl.carousel.min.css');

        // Enqueue Owl Carousel JavaScript files
        wp_enqueue_script('owl-carousel', $plugin_dir . 'asset/owl.carousel.min.js', array('jquery'), '2.3.4', true);

        // Enqueue your custom slide_bar.js file
        wp_enqueue_script('slidebar-js', $plugin_dir . 'asset/slide_bar.js', array('jquery', 'owl-carousel'), '1.0', true);
    }

    return $template;
}

// Hook into the 'template_include' filter to enqueue assets when using 'slider.php' template from your plugin's folder
add_filter('template_include', 'slidebar_shortcode_enqueue_assets_on_slider_template');


// Shortcode callback function to display the slider
function slider_shortcode($atts) {
    // Extract attributes from the shortcode
    $atts = shortcode_atts(array(
        'title'    => '',
        'category' => '', // Default value for category is an empty string
    ), $atts);
    // category="Rewards"
    ob_start();
    // Include the slider.php file located in your plugin's directory
    include plugin_dir_path(__FILE__) . 'slider.php';
    return ob_get_clean();
}
add_shortcode('image_slider', 'slider_shortcode');