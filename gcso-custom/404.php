<?php
/**
 * 404 Page Template
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="main-content" class="gcso-main" role="main">
    <div class="gcso-page-banner">
        <div class="gcso-container">
            <h1 class="gcso-page-banner__title"><?php esc_html_e('Page Not Found', 'gcso'); ?></h1>
        </div>
    </div>

    <div class="gcso-container gcso-content-area">
        <div class="gcso-404">
            <div class="gcso-404__content">
                <span class="gcso-404__code">404</span>
                <h2 class="gcso-404__heading"><?php esc_html_e("We couldn't find that page.", 'gcso'); ?></h2>
                <p class="gcso-404__description">
                    <?php esc_html_e('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'gcso'); ?>
                </p>
                <div class="gcso-404__actions">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="gcso-btn gcso-btn--navy"><?php esc_html_e('Return Home', 'gcso'); ?></a>
                </div>
                <div class="gcso-404__search">
                    <p><?php esc_html_e('Or try searching:', 'gcso'); ?></p>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
