<?php
/**
 * Custom Post Types
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

/**
 * Register custom post types.
 */
function gcso_register_post_types() {
    // Divisions
    register_post_type('gcso_division', [
        'labels' => [
            'name'               => __('Divisions', 'gcso'),
            'singular_name'      => __('Division', 'gcso'),
            'add_new_item'       => __('Add New Division', 'gcso'),
            'edit_item'          => __('Edit Division', 'gcso'),
            'view_item'          => __('View Division', 'gcso'),
            'search_items'       => __('Search Divisions', 'gcso'),
            'not_found'          => __('No divisions found.', 'gcso'),
        ],
        'public'       => true,
        'has_archive'  => false,
        'menu_icon'    => 'dashicons-building',
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes'],
        'rewrite'      => ['slug' => 'division', 'with_front' => false],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'gcso_register_post_types');
