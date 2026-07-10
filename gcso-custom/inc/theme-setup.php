<?php
/**
 * Theme Setup
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function gcso_theme_setup() {
    // Dynamic document title
    add_theme_support('title-tag');

    // Featured images
    add_theme_support('post-thumbnails');

    // Custom logo
    add_theme_support('custom-logo', [
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // HTML5 markup
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
        'navigation-widgets',
    ]);

    // Responsive embeds
    add_theme_support('responsive-embeds');

    // Wide alignment
    add_theme_support('align-wide');

    // Editor styles
    add_theme_support('editor-styles');
    add_editor_style('assets/css/editor-style.css');

    // Automatic feed links
    add_theme_support('automatic-feed-links');

    // Custom image sizes
    add_image_size('gcso-hero', 1920, 800, true);
    add_image_size('gcso-card', 600, 400, true);
    add_image_size('gcso-news-thumb', 400, 280, true);
    add_image_size('gcso-sheriff', 600, 700, true);

    // Register navigation menus
    register_nav_menus([
        'utility' => __('Utility Navigation', 'gcso'),
        'primary' => __('Primary Navigation', 'gcso'),
        'footer'  => __('Footer Navigation', 'gcso'),
    ]);
}
add_action('after_setup_theme', 'gcso_theme_setup');

/**
 * Set content width.
 */
function gcso_content_width() {
    $GLOBALS['content_width'] = apply_filters('gcso_content_width', 1200);
}
add_action('after_setup_theme', 'gcso_content_width', 0);

/**
 * Register widget areas.
 */
function gcso_widgets_init() {
    register_sidebar([
        'name'          => __('Page Sidebar', 'gcso'),
        'id'            => 'sidebar-page',
        'description'   => __('Widgets in this area will appear on pages with sidebars.', 'gcso'),
        'before_widget' => '<div id="%1$s" class="gcso-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="gcso-widget__title">',
        'after_title'   => '</h3>',
    ]);

    register_sidebar([
        'name'          => __('Footer Column 1', 'gcso'),
        'id'            => 'footer-1',
        'description'   => __('Footer widget area 1.', 'gcso'),
        'before_widget' => '<div id="%1$s" class="gcso-footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="gcso-footer-widget__title">',
        'after_title'   => '</h4>',
    ]);
}
add_action('widgets_init', 'gcso_widgets_init');
