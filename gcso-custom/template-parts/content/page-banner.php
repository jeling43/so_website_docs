<?php
/**
 * Page Banner Template Part
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

$title = '';
if (is_archive()) {
    $title = get_the_archive_title();
} elseif (is_search()) {
    $title = sprintf(esc_html__('Search Results for: %s', 'gcso'), get_search_query());
} elseif (is_singular()) {
    $title = get_the_title();
}
?>
<div class="gcso-page-banner">
    <div class="gcso-page-banner__overlay"></div>
    <div class="gcso-container gcso-page-banner__content">
        <h1 class="gcso-page-banner__title"><?php echo esc_html($title); ?></h1>
    </div>
</div>
