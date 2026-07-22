<?php
/**
 * Template Name: Division - Patrol
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
                <p><?php esc_html_e('The Patrol Division is the largest division of the Gordon County Sheriff\'s Office, providing 24-hour law enforcement services to the unincorporated areas of Gordon County.', 'gcso'); ?></p>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Responsibilities', 'gcso'); ?></h3>
                    <ul class="gcso-info-card__list">
                        <li><?php esc_html_e('Responding to emergency and non-emergency calls for service', 'gcso'); ?></li>
                        <li><?php esc_html_e('Proactive patrol of unincorporated Gordon County', 'gcso'); ?></li>
                        <li><?php esc_html_e('Traffic enforcement and accident investigation', 'gcso'); ?></li>
                        <li><?php esc_html_e('Criminal investigations at the patrol level', 'gcso'); ?></li>
                        <li><?php esc_html_e('Community engagement and crime prevention', 'gcso'); ?></li>
                        <li><?php esc_html_e('Warrant service', 'gcso'); ?></li>
                    </ul>
                </div>

                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Services', 'gcso'); ?></h3>
                    <ul class="gcso-info-card__list">
                        <li><?php esc_html_e('House watch / vacation checks', 'gcso'); ?></li>
                        <li><?php esc_html_e('Fingerprinting services', 'gcso'); ?></li>
                        <li><?php esc_html_e('Vehicle identification number (VIN) inspections', 'gcso'); ?></li>
                        <li><?php esc_html_e('Accident report requests', 'gcso'); ?></li>
                        <li><?php esc_html_e('Community safety presentations', 'gcso'); ?></li>
                    </ul>
                </div>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card gcso-info-card--full">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Contact Patrol', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p>
                            <strong><?php esc_html_e('Non-Emergency:', 'gcso'); ?></strong>
                            <!-- TODO: VERIFY BEFORE PRODUCTION - Non-emergency phone number -->
                            <a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1245')); ?>"><?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1245')); ?></a>
                        </p>
                        <p>
                            <strong><?php esc_html_e('Emergency:', 'gcso'); ?></strong>
                            <a href="tel:911">911</a>
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
