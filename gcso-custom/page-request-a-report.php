<?php
/**
 * Template Name: Request a Report
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
                <p><?php esc_html_e('Request a copy of an incident report or accident report from the Gordon County Sheriff\'s Office. Please review the requirements below before submitting your request.', 'gcso'); ?></p>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Who Can Request a Report', 'gcso'); ?></h3>
                    <ul class="gcso-info-card__list">
                        <li><?php esc_html_e('Victims or involved parties', 'gcso'); ?></li>
                        <li><?php esc_html_e('Insurance companies (with authorization)', 'gcso'); ?></li>
                        <li><?php esc_html_e('Attorneys representing involved parties', 'gcso'); ?></li>
                        <li><?php esc_html_e('Other authorized individuals', 'gcso'); ?></li>
                    </ul>
                </div>

                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Information Needed', 'gcso'); ?></h3>
                    <ul class="gcso-info-card__list">
                        <li><?php esc_html_e('Case number or incident date', 'gcso'); ?></li>
                        <li><?php esc_html_e('Your name and contact information', 'gcso'); ?></li>
                        <li><?php esc_html_e('Your relationship to the incident', 'gcso'); ?></li>
                        <li><?php esc_html_e('Valid government-issued ID', 'gcso'); ?></li>
                    </ul>
                </div>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card gcso-info-card--full gcso-info-card--highlight">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('How to Request', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <!-- TODO: VERIFY BEFORE PRODUCTION - Report request fees and process -->
                        <p><?php esc_html_e('Reports may be requested in person at the Gordon County Sheriff\'s Office or by mail. A fee may apply for copies.', 'gcso'); ?></p>
                        <p>
                            <strong><?php esc_html_e('In Person:', 'gcso'); ?></strong><br>
                            <?php echo esc_html(gcso_get_option('gcso_address', '100 Public Safety Way, Calhoun, GA 30701')); ?>
                        </p>
                        <p>
                            <strong><?php esc_html_e('By Phone:', 'gcso'); ?></strong><br>
                            <a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1244')); ?>"><?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1244')); ?></a>
                        </p>
                        <p>
                            <strong><?php esc_html_e('What Happens Next:', 'gcso'); ?></strong><br>
                            <?php esc_html_e('Once your request is received, the Records Division will process it. Processing times may vary depending on the type of report and current volume.', 'gcso'); ?>
                        </p>
                    </div>
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
