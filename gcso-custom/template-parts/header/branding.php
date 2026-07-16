<?php
/**
 * Header Branding Template Part
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

$sheriff_name = gcso_get_option('gcso_sheriff_name', 'Sheriff Mitch Ralston');
?>
<div class="gcso-header__branding">
    <div class="gcso-header__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <img src="<?php echo esc_url(GCSO_URI . '/assets/images/gold-badge.png'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" width="80" height="80">
        </a>
    </div>
    <div class="gcso-header__text">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="gcso-header__site-link" rel="home">
            <span class="gcso-header__site-name"><?php echo esc_html(get_bloginfo('name', 'display')); ?></span>
            <span class="gcso-header__tagline"><?php esc_html_e('Dedicated and Sworn to Serve', 'gcso'); ?></span>
        </a>
        <?php if ($sheriff_name) : ?>
            <span class="gcso-header__sheriff-name"><?php echo esc_html($sheriff_name); ?></span>
        <?php endif; ?>
    </div>
</div>
