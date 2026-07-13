<?php
/**
 * Template Name: Inmate Information
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="main-content" class="gcso-main" role="main">
    <?php get_template_part('template-parts/content/page-banner'); ?>

    <div class="gcso-container gcso-content-area">
        <?php gcso_breadcrumbs(); ?>

        <div class="gcso-service-page">
            <div class="gcso-service-page__intro">
                <p><?php esc_html_e('Search for inmates currently held at the Gordon County Jail or find information about visitation, bonding, and inmate services.', 'gcso'); ?></p>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Visitation Information', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('Visitation is conducted via video. Please check with the facility for the current visitation schedule and rules.', 'gcso'); ?></p>
                        <ul class="gcso-info-card__list">
                            <li><?php esc_html_e('Valid government-issued ID required', 'gcso'); ?></li>
                            <li><?php esc_html_e('Visitors must be on the approved visitation list', 'gcso'); ?></li>
                            <li><?php esc_html_e('Proper dress code enforced', 'gcso'); ?></li>
                        </ul>
                    </div>
                </div>

                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Bonding Information', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('Bonds may be posted at the Gordon County Jail 24 hours a day, 7 days a week. Accepted forms of payment vary.', 'gcso'); ?></p>
                        <p>
                            <strong><?php esc_html_e('Contact the Jail:', 'gcso'); ?></strong><br>
                            <a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1244')); ?>"><?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1244')); ?></a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card gcso-info-card--full">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Inmate Services', 'gcso'); ?></h3>
                    <ul class="gcso-info-card__list gcso-info-card__list--columns">
                        <li><?php esc_html_e('Commissary', 'gcso'); ?></li>
                        <li><?php esc_html_e('Inmate phone services', 'gcso'); ?></li>
                        <li><?php esc_html_e('Mail and correspondence', 'gcso'); ?></li>
                        <li><?php esc_html_e('Medical services', 'gcso'); ?></li>
                        <li><?php esc_html_e('Religious services', 'gcso'); ?></li>
                        <li><?php esc_html_e('Educational programs', 'gcso'); ?></li>
                    </ul>
                </div>
            </div>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if (get_the_content()) : ?>
                    <article class="gcso-page-content">
                        <div class="gcso-page-content__body gcso-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endif; ?>
            <?php endwhile; endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
