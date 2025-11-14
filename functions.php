<?php
/**
 * TechyKoala Theme Functions
 *
 * @package TechyKoala
 */

// Theme setup
function techykoala_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'techykoala'),
        'footer' => __('Footer Menu', 'techykoala'),
    ));
}
add_action('after_setup_theme', 'techykoala_setup');

// Enqueue styles and scripts
function techykoala_scripts() {
    // Main stylesheet
    wp_enqueue_style('techykoala-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Custom scripts (if needed)
    // wp_enqueue_script('techykoala-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'techykoala_scripts');

// Register widget areas
function techykoala_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'techykoala'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'techykoala'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'techykoala_widgets_init');

// Custom excerpt length
function techykoala_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'techykoala_excerpt_length');
