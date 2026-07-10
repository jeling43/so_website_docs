<?php
/**
 * Sheriff Message Section Template Part
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

$sheriff_name    = gcso_get_option('gcso_sheriff_name', 'Sheriff');
$sheriff_photo   = gcso_get_option('gcso_sheriff_photo', GCSO_URI . '/assets/images/sheriff-placeholder.jpg');
$sheriff_message = gcso_get_option('gcso_sheriff_message', 'At the Gordon County Sheriff\'s Office, our mission is simple: to serve and protect every citizen with honor, integrity, and professionalism. We are committed to building strong partnerships, promoting safety, and improving the quality of life in our community.');
?>

<section class="gcso-sheriff-message" aria-labelledby="sheriff-heading">
    <div class="gcso-container gcso-sheriff-message__inner">
        <div class="gcso-sheriff-message__image">
            <?php if ($sheriff_photo) : ?>
                <img src="<?php echo esc_url($sheriff_photo); ?>" alt="<?php echo esc_attr($sheriff_name); ?>" loading="lazy" width="500" height="400">
            <?php endif; ?>
        </div>
        <div class="gcso-sheriff-message__content">
            <span class="gcso-sheriff-message__label">
                <span class="gcso-sheriff-message__label-bar"></span>
                <?php esc_html_e('Message from the Sheriff', 'gcso'); ?>
            </span>
            <h2 id="sheriff-heading" class="gcso-sheriff-message__heading"><?php esc_html_e('Welcome to the Gordon County Sheriff\'s Office', 'gcso'); ?></h2>
            <div class="gcso-sheriff-message__text">
                <?php echo wp_kses_post($sheriff_message); ?>
            </div>
            <a href="<?php echo esc_url(home_url('/about-gcso')); ?>" class="gcso-btn gcso-btn--navy">
                <?php esc_html_e('Meet the Sheriff', 'gcso'); ?>
                <svg class="gcso-icon" aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M10 6l6 6-6 6"/></svg>
            </a>
        </div>
    </div>
</section>
