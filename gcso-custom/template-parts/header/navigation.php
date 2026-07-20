<?php
/**
 * Header Navigation Template Part
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;
?>
<div class="gcso-header__nav-area">
    <nav class="gcso-primary-nav" aria-label="<?php esc_attr_e('Primary Navigation', 'gcso'); ?>">
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'gcso-primary-nav__list',
            'menu_id'        => 'primary-menu',
            'fallback_cb'    => false,
            'depth'          => 3,
        ]);
        ?>
    </nav>

    <div class="gcso-header__actions">
        <a href="<?php echo esc_url(gcso_get_inmate_search_url()); ?>" class="gcso-btn gcso-btn--gold gcso-btn--sm" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Search Inmates (opens external site)', 'gcso'); ?>">
            <svg class="gcso-icon" aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
            <?php esc_html_e('Inmate Search', 'gcso'); ?>
        </a>
        <a href="<?php echo esc_url(home_url('/services/request-a-report')); ?>" class="gcso-btn gcso-btn--navy gcso-btn--sm">
            <svg class="gcso-icon" aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8l-6-6zm4 18H6V4h7v5h5v11z"/></svg>
            <?php esc_html_e('Request a Report', 'gcso'); ?>
        </a>

        <button class="gcso-search-toggle" aria-label="<?php esc_attr_e('Open search', 'gcso'); ?>" aria-expanded="false" aria-controls="gcso-search-overlay">
            <svg class="gcso-icon" aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
        </button>
    </div>

    <button class="gcso-mobile-toggle" aria-label="<?php esc_attr_e('Open menu', 'gcso'); ?>" aria-expanded="false" aria-controls="gcso-mobile-menu">
        <span class="gcso-mobile-toggle__bar"></span>
        <span class="gcso-mobile-toggle__bar"></span>
        <span class="gcso-mobile-toggle__bar"></span>
    </button>
</div>

<!-- Search Overlay -->
<div class="gcso-search-overlay" id="gcso-search-overlay" role="dialog" aria-label="<?php esc_attr_e('Search', 'gcso'); ?>" aria-hidden="true">
    <div class="gcso-search-overlay__inner">
        <?php get_search_form(); ?>
        <button class="gcso-search-overlay__close" aria-label="<?php esc_attr_e('Close search', 'gcso'); ?>">&times;</button>
    </div>
</div>
