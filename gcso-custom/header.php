<?php
/**
 * Header Template
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="gcso-skip-link" href="#main-content"><?php esc_html_e('Skip to main content', 'gcso'); ?></a>

<?php
// Emergency notice
if (get_theme_mod('gcso_emergency_active', false)) :
    $emergency_msg = get_theme_mod('gcso_emergency_message', '');
    if ($emergency_msg) : ?>
        <div class="gcso-emergency-bar" role="alert">
            <div class="gcso-container">
                <p class="gcso-emergency-bar__message"><?php echo wp_kses_post($emergency_msg); ?></p>
                <button class="gcso-emergency-bar__close" aria-label="<?php esc_attr_e('Dismiss notice', 'gcso'); ?>">&times;</button>
            </div>
        </div>
    <?php endif;
endif; ?>

<?php get_template_part('template-parts/header/utility-bar'); ?>

<header class="gcso-header" role="banner">
    <div class="gcso-container gcso-header__inner">
        <?php get_template_part('template-parts/header/branding'); ?>
        <?php get_template_part('template-parts/header/navigation'); ?>
    </div>
</header>

<?php get_template_part('template-parts/header/mobile-nav'); ?>
