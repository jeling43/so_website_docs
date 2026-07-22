<?php
/**
 * Mobile Navigation Template Part
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;
?>
<div class="gcso-mobile-menu" id="gcso-mobile-menu" aria-hidden="true" role="dialog" aria-label="<?php esc_attr_e('Mobile Navigation', 'gcso'); ?>">
    <div class="gcso-mobile-menu__header">
        <span class="gcso-mobile-menu__title"><?php esc_html_e('Menu', 'gcso'); ?></span>
        <button class="gcso-mobile-menu__close" aria-label="<?php esc_attr_e('Close menu', 'gcso'); ?>">&times;</button>
    </div>
    <nav class="gcso-mobile-menu__nav" aria-label="<?php esc_attr_e('Mobile Navigation', 'gcso'); ?>">
        <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'gcso-mobile-menu__list',
            'menu_id'        => 'mobile-menu',
            'fallback_cb'    => false,
            'depth'          => 3,
        ]);
        ?>
    </nav>
    <div class="gcso-mobile-menu__actions">
        <a href="<?php echo esc_url(gcso_get_inmate_search_url()); ?>" class="gcso-btn gcso-btn--gold gcso-btn--block" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Search Inmates (opens external site)', 'gcso'); ?>"><?php esc_html_e('Search Inmates', 'gcso'); ?></a>
        <a href="<?php echo esc_url(home_url('/services/request-a-report')); ?>" class="gcso-btn gcso-btn--navy gcso-btn--block"><?php esc_html_e('Request a Report', 'gcso'); ?></a>
    </div>
    <div class="gcso-mobile-menu__contact">
        <p><strong><?php esc_html_e('Emergency:', 'gcso'); ?></strong> <?php echo esc_html(gcso_get_option('gcso_emergency_phone', '911')); ?></p>
        <p><strong><?php esc_html_e('Non-Emergency:', 'gcso'); ?></strong> <?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1245')); ?></p>
    </div>
</div>
<div class="gcso-mobile-menu__backdrop" aria-hidden="true"></div>
