<?php
/**
 * Search Form Template
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

$unique_id = wp_unique_id('search-form-');
?>
<form role="search" method="get" class="gcso-search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label for="<?php echo esc_attr($unique_id); ?>" class="screen-reader-text"><?php esc_html_e('Search for:', 'gcso'); ?></label>
    <input
        type="search"
        id="<?php echo esc_attr($unique_id); ?>"
        class="gcso-search-form__input"
        placeholder="<?php esc_attr_e('Search...', 'gcso'); ?>"
        value="<?php echo esc_attr(get_search_query()); ?>"
        name="s"
        required
    >
    <button type="submit" class="gcso-search-form__submit" aria-label="<?php esc_attr_e('Submit search', 'gcso'); ?>">
        <svg class="gcso-icon" aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
    </button>
</form>
