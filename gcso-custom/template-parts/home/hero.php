<?php
/**
 * Hero Section Template Part
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

$hero_heading     = gcso_get_option('gcso_hero_heading', 'Serving and Protecting Gordon County');
$hero_description = gcso_get_option('gcso_hero_description', 'Dedicated professionals committed to safety, integrity, and community.');
$hero_image       = gcso_get_option('gcso_hero_image', GCSO_URI . '/assets/images/hero-default.jpg');
$btn1_text        = gcso_get_option('gcso_hero_btn1_text', 'Inmate Search');
$btn1_url         = gcso_get_option('gcso_hero_btn1_url', '#');
$btn2_text        = gcso_get_option('gcso_hero_btn2_text', 'Contact Us');
$btn2_url         = gcso_get_option('gcso_hero_btn2_url', '#');
?>

<section class="gcso-hero" aria-label="<?php esc_attr_e('Hero', 'gcso'); ?>">
    <?php if ($hero_image) : ?>
        <div class="gcso-hero__bg" style="background-image: url('<?php echo esc_url($hero_image); ?>');" role="img" aria-label="<?php esc_attr_e('Gordon County Sheriff\'s Office', 'gcso'); ?>"></div>
    <?php endif; ?>
    <div class="gcso-hero__overlay"></div>
    <div class="gcso-container gcso-hero__content">
        <h1 class="gcso-hero__heading">
            <?php echo esc_html($hero_heading); ?>
        </h1>
        <p class="gcso-hero__description">
            <?php echo esc_html($hero_description); ?>
        </p>
        <div class="gcso-hero__actions">
            <?php if ($btn1_text) : ?>
                <a href="<?php echo esc_url($btn1_url); ?>" class="gcso-btn gcso-btn--gold">
                    <svg class="gcso-icon" aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                    <?php echo esc_html($btn1_text); ?>
                </a>
            <?php endif; ?>
            <?php if ($btn2_text) : ?>
                <a href="<?php echo esc_url($btn2_url); ?>" class="gcso-btn gcso-btn--outline-white">
                    <svg class="gcso-icon" aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
                    <?php echo esc_html($btn2_text); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
