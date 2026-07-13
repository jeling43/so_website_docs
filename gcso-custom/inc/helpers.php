<?php
/**
 * Helper Functions
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

/**
 * Get SVG icon markup.
 *
 * @param string $name Icon name (filename without extension).
 * @param array  $args Optional. Additional arguments.
 * @return string SVG markup.
 */
function gcso_get_icon($name, $args = []) {
    $defaults = [
        'class'       => 'gcso-icon',
        'width'       => '24',
        'height'      => '24',
        'aria-hidden' => 'true',
    ];
    $args = wp_parse_args($args, $defaults);

    $file = GCSO_DIR . '/assets/icons/' . sanitize_file_name($name) . '.svg';
    if (file_exists($file)) {
        $svg = file_get_contents($file);
        // Add class and aria attributes
        $svg = str_replace('<svg', '<svg class="' . esc_attr($args['class']) . '" aria-hidden="' . esc_attr($args['aria-hidden']) . '"', $svg);
        return $svg;
    }

    return '';
}

/**
 * Output SVG icon.
 */
function gcso_icon($name, $args = []) {
    echo gcso_get_icon($name, $args); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

/**
 * Get customizer value with fallback.
 *
 * @param string $key     Customizer setting key.
 * @param mixed  $default Default value.
 * @return mixed
 */
function gcso_get_option($key, $default = '') {
    return get_theme_mod($key, $default);
}

/**
 * Display breadcrumbs.
 */
function gcso_breadcrumbs() {
    if (is_front_page()) {
        return;
    }

    echo '<nav class="gcso-breadcrumbs" aria-label="' . esc_attr__('Breadcrumb', 'gcso') . '">';
    echo '<ol class="gcso-breadcrumbs__list">';
    echo '<li class="gcso-breadcrumbs__item"><a href="' . esc_url(home_url('/')) . '">' . esc_html__('Home', 'gcso') . '</a></li>';

    if (is_category() || is_single()) {
        $categories = get_the_category();
        if ($categories) {
            echo '<li class="gcso-breadcrumbs__item"><a href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a></li>';
        }
        if (is_single()) {
            echo '<li class="gcso-breadcrumbs__item" aria-current="page">' . esc_html(get_the_title()) . '</li>';
        }
    } elseif (is_page()) {
        $ancestors = get_post_ancestors(get_the_ID());
        $ancestors = array_reverse($ancestors);
        foreach ($ancestors as $ancestor_id) {
            echo '<li class="gcso-breadcrumbs__item"><a href="' . esc_url(get_permalink($ancestor_id)) . '">' . esc_html(get_the_title($ancestor_id)) . '</a></li>';
        }
        echo '<li class="gcso-breadcrumbs__item" aria-current="page">' . esc_html(get_the_title()) . '</li>';
    } elseif (is_archive()) {
        echo '<li class="gcso-breadcrumbs__item" aria-current="page">' . esc_html(get_the_archive_title()) . '</li>';
    } elseif (is_search()) {
        echo '<li class="gcso-breadcrumbs__item" aria-current="page">' . esc_html__('Search Results', 'gcso') . '</li>';
    } elseif (is_404()) {
        echo '<li class="gcso-breadcrumbs__item" aria-current="page">' . esc_html__('Page Not Found', 'gcso') . '</li>';
    }

    echo '</ol>';
    echo '</nav>';
}

/**
 * Get social media links array.
 *
 * @return array
 */
function gcso_get_social_links() {
    $platforms = ['facebook', 'twitter', 'youtube', 'instagram'];
    $links = [];

    foreach ($platforms as $platform) {
        $url = get_theme_mod("gcso_social_{$platform}", '');
        if ($url) {
            $links[$platform] = $url;
        }
    }

    return $links;
}

/**
 * Render social media icons.
 */
function gcso_social_icons() {
    $links = gcso_get_social_links();
    if (empty($links)) {
        return;
    }

    echo '<div class="gcso-social">';
    foreach ($links as $platform => $url) {
        echo '<a href="' . esc_url($url) . '" class="gcso-social__link gcso-social__link--' . esc_attr($platform) . '" target="_blank" rel="noopener noreferrer" aria-label="' . esc_attr(ucfirst($platform)) . '">';
        gcso_icon($platform);
        echo '</a>';
    }
    echo '</div>';
}

/**
 * Estimated reading time.
 *
 * @param int $post_id Post ID.
 * @return int Minutes to read.
 */
function gcso_reading_time($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    $content = get_post_field('post_content', $post_id);
    $word_count = str_word_count(wp_strip_all_tags($content));
    return max(1, (int) ceil($word_count / 200));
}

/**
 * Footer fallback menu callback.
 */
function gcso_footer_fallback_menu() {
    echo '<ul class="gcso-footer__links">';
    echo '<li><a href="' . esc_url(home_url('/inmate-information')) . '">' . esc_html__('Inmate Information', 'gcso') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/sex-offender-registry')) . '">' . esc_html__('Sex Offender Registry', 'gcso') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/most-wanted')) . '">' . esc_html__('Most Wanted', 'gcso') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/tip-line')) . '">' . esc_html__('Tip Line', 'gcso') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/request-a-report')) . '">' . esc_html__('Request a Report', 'gcso') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact')) . '">' . esc_html__('Contact Us', 'gcso') . '</a></li>';
    echo '</ul>';
}
