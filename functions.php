<?php
/**
 * Twenty Seventeen Child Theme functions
 */

// Enqueue parent and child theme styles
function twentyseventeen_child_enqueue_styles() {
    // Enqueue parent theme style
    wp_enqueue_style(
        'twentyseventeen-parent-style',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme()->parent()->get('Version')
    );

    // Enqueue child theme style
    wp_enqueue_style(
        'twentyseventeen-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('twentyseventeen-parent-style'),
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'twentyseventeen_child_enqueue_styles');

/**
 * Enqueue scripts for the scroll down button
 */
function twentyseventeen_child_scroll_button_scripts() {
    if (is_front_page()) {
        wp_enqueue_script(
            'scroll-down-button',
            get_stylesheet_directory_uri() . '/assets/js/scroll-down.js',
            array('jquery'),
            '1.0.0',
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'twentyseventeen_child_scroll_button_scripts');