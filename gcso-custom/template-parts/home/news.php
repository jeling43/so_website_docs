<?php
/**
 * Press Releases Section Template Part
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;
?>

<section class="gcso-news gcso-news--feed" aria-labelledby="news-heading">
    <div class="gcso-container">
        <div class="gcso-news__header">
            <h2 id="news-heading" class="gcso-section-heading">
                <span class="gcso-section-heading__line"></span>
                <?php esc_html_e('Press Releases', 'gcso'); ?>
                <span class="gcso-section-heading__line"></span>
            </h2>
        </div>

        <div class="gcso-news__facebook-feed">
            <?php if (shortcode_exists('custom-facebook-feed')) : ?>
                <?php echo do_shortcode('[custom-facebook-feed feed=1]'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Trusted plugin shortcode returns sanitized feed markup. ?>
            <?php elseif (current_user_can('manage_options')) : ?>
                <p class="gcso-news__feed-fallback"><?php esc_html_e('The Press Releases feed will appear here when the Custom Facebook Feed plugin is enabled.', 'gcso'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
