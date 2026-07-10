<?php
/**
 * Enqueue scripts and styles
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

/**
 * Enqueue front-end styles and scripts.
 */
function gcso_enqueue_assets() {
    // Google Fonts: Montserrat + Libre Baskerville
    wp_enqueue_style(
        'gcso-google-fonts',
        'https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Montserrat:wght@400;500;600;700;800;900&display=swap',
        [],
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'gcso-main',
        GCSO_URI . '/assets/css/main.css',
        ['gcso-google-fonts'],
        filemtime(GCSO_DIR . '/assets/css/main.css')
    );

    // Main script
    wp_enqueue_script(
        'gcso-main',
        GCSO_URI . '/assets/js/main.js',
        [],
        filemtime(GCSO_DIR . '/assets/js/main.js'),
        true
    );

    // Localize script with data
    wp_localize_script('gcso-main', 'gcsoData', [
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'siteUrl' => home_url('/'),
        'nonce'   => wp_create_nonce('gcso_nonce'),
    ]);
}
add_action('wp_enqueue_scripts', 'gcso_enqueue_assets');

/**
 * Preload critical assets.
 */
function gcso_preload_assets() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
    echo '<link rel="preload" href="' . esc_url(GCSO_URI . '/assets/css/main.css') . '" as="style">' . "\n";
}
add_action('wp_head', 'gcso_preload_assets', 1);
