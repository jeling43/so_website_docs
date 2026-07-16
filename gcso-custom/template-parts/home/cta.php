<?php
/**
 * Careers CTA Section Template Part
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

$cta_heading     = gcso_get_option('gcso_cta_heading', 'Making a Difference.');
$cta_subheading  = gcso_get_option('gcso_cta_subheading', 'Start Your Career with GCSO.');
$cta_description = gcso_get_option('gcso_cta_description', 'Join a team dedicated to service, leadership, and community.');
$cta_btn_text    = gcso_get_option('gcso_cta_btn_text', 'View Open Positions');
$cta_btn_url     = gcso_get_option('gcso_cta_btn_url', '#');
?>

<section class="gcso-cta" aria-label="<?php esc_attr_e('Career Opportunities', 'gcso'); ?>">
    <div class="gcso-container gcso-cta__inner">
        <div class="gcso-cta__badge" aria-hidden="true">
            <img src="<?php echo esc_url(GCSO_URI . '/assets/images/gold-badge.png'); ?>" alt="" width="60" height="60">
        </div>
        <div class="gcso-cta__text">
            <h2 class="gcso-cta__heading">
                <?php echo esc_html($cta_heading); ?><br>
                <span class="gcso-cta__subheading"><?php echo esc_html($cta_subheading); ?></span>
            </h2>
        </div>
        <p class="gcso-cta__description"><?php echo esc_html($cta_description); ?></p>
        <a href="<?php echo esc_url($cta_btn_url); ?>" class="gcso-btn gcso-btn--gold-outline">
            <?php echo esc_html($cta_btn_text); ?>
            <svg class="gcso-icon" aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M10 6l6 6-6 6"/></svg>
        </a>
    </div>
</section>
