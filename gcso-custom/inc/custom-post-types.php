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
    // Staff / Command Staff
    register_post_type('gcso_staff', [
        'labels' => [
            'name'               => __('Staff', 'gcso'),
            'singular_name'      => __('Staff Member', 'gcso'),
            'add_new_item'       => __('Add New Staff Member', 'gcso'),
            'edit_item'          => __('Edit Staff Member', 'gcso'),
            'view_item'          => __('View Staff Member', 'gcso'),
            'search_items'       => __('Search Staff', 'gcso'),
            'not_found'          => __('No staff found.', 'gcso'),
        ],
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-groups',
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'rewrite'      => ['slug' => 'staff'],
        'show_in_rest' => true,
    ]);

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
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-building',
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes'],
        'rewrite'      => ['slug' => 'divisions'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'gcso_register_post_types');

/**
 * Add custom meta boxes for staff.
 */
function gcso_staff_meta_boxes() {
    add_meta_box(
        'gcso_staff_details',
        __('Staff Details', 'gcso'),
        'gcso_staff_details_callback',
        'gcso_staff',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'gcso_staff_meta_boxes');

/**
 * Staff details meta box callback.
 */
function gcso_staff_details_callback($post) {
    wp_nonce_field('gcso_staff_meta', 'gcso_staff_nonce');

    $title = get_post_meta($post->ID, '_gcso_staff_title', true);
    $rank  = get_post_meta($post->ID, '_gcso_staff_rank', true);

    echo '<p><label for="gcso_staff_rank"><strong>' . esc_html__('Rank', 'gcso') . '</strong></label><br>';
    echo '<input type="text" id="gcso_staff_rank" name="gcso_staff_rank" value="' . esc_attr($rank) . '" class="widefat"></p>';

    echo '<p><label for="gcso_staff_title"><strong>' . esc_html__('Position/Title', 'gcso') . '</strong></label><br>';
    echo '<input type="text" id="gcso_staff_title" name="gcso_staff_title" value="' . esc_attr($title) . '" class="widefat"></p>';
}

/**
 * Save staff meta.
 */
function gcso_save_staff_meta($post_id) {
    if (!isset($_POST['gcso_staff_nonce']) || !wp_verify_nonce($_POST['gcso_staff_nonce'], 'gcso_staff_meta')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['gcso_staff_title'])) {
        update_post_meta($post_id, '_gcso_staff_title', sanitize_text_field($_POST['gcso_staff_title']));
    }
    if (isset($_POST['gcso_staff_rank'])) {
        update_post_meta($post_id, '_gcso_staff_rank', sanitize_text_field($_POST['gcso_staff_rank']));
    }
}
add_action('save_post_gcso_staff', 'gcso_save_staff_meta');
