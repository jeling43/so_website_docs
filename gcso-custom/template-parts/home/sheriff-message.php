<?php
/**
 * Sheriff Message Section Template Part
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

$sheriff_name    = gcso_get_option('gcso_sheriff_name', 'Sheriff Mitch Ralston');
$sheriff_name    = trim((string) $sheriff_name) === 'Sheriff' ? 'Sheriff Mitch Ralston' : $sheriff_name;
$sheriff_photo   = gcso_get_option('gcso_sheriff_photo', GCSO_URI . '/assets/images/sheriff-placeholder.jpg');
$sheriff_message = gcso_get_option('gcso_sheriff_message', '<p>Sheriff Mitch Ralston and the men and women of the Gordon County Sheriff’s Office are committed to making Gordon County a safer place to live, work, and raise your family.</p><p>Our justice system begins with a partnership between the people of Gordon County and their law enforcement officers. Together, we can build a safer, stronger community.</p><p>“Dedicated and Sworn to Serve” reflects our core values of service, integrity, and professionalism. We are here for you and committed to protecting everyone equally, without fear or favor.</p>');
?>

<section class="gcso-sheriff-message" aria-labelledby="sheriff-heading">
    <div class="gcso-sheriff-message__bg-accent"></div>
    <div class="gcso-container gcso-sheriff-message__inner">
        <div class="gcso-sheriff-message__image">
            <?php if ($sheriff_photo) : ?>
                <img src="<?php echo esc_url($sheriff_photo); ?>" alt="<?php echo esc_attr($sheriff_name); ?>" loading="lazy" width="500" height="500">
            <?php endif; ?>
        </div>
        <div class="gcso-sheriff-message__content">
            <span class="gcso-sheriff-message__label">
                <span class="gcso-sheriff-message__label-bar"></span>
                <?php esc_html_e('Message from the Sheriff', 'gcso'); ?>
            </span>
            <h2 id="sheriff-heading" class="gcso-sheriff-message__heading"><?php esc_html_e('Welcome to the Gordon County Sheriff\'s Office', 'gcso'); ?></h2>
            <?php if ($sheriff_name) : ?>
                <p class="gcso-sheriff-message__name"><?php echo esc_html($sheriff_name); ?></p>
            <?php endif; ?>
            <div class="gcso-sheriff-message__text">
                <?php echo wp_kses_post($sheriff_message); ?>
            </div>
            <a href="<?php echo esc_url(home_url('/about/meet-the-sheriff/')); ?>" class="gcso-btn gcso-btn--navy">
                <?php esc_html_e('Meet the Sheriff', 'gcso'); ?>
                <svg class="gcso-icon" aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M10 6l6 6-6 6"/></svg>
            </a>
        </div>
    </div>
</section>
