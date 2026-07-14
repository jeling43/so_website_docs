<?php
/**
 * Template Name: Sex Offender Registry
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
                <p><?php esc_html_e('The Gordon County Sheriff\'s Office maintains a registry of sex offenders in compliance with Georgia law. The information below is provided as a public service to help citizens stay informed about registered sex offenders in their community.', 'gcso'); ?></p>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card gcso-info-card--full gcso-info-card--highlight">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Search the Registry', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('Use the Georgia Bureau of Investigation\'s Sex Offender Registry to search for registered sex offenders in Gordon County or throughout Georgia.', 'gcso'); ?></p>
                        <p>
                            <a href="https://gbi.georgia.gov/services/sex-offender-registry" class="gcso-btn gcso-btn--gold" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Search GBI Sex Offender Registry (opens external site)', 'gcso'); ?>">
                                <?php esc_html_e('Search GBI Sex Offender Registry', 'gcso'); ?>
                                <svg class="gcso-icon gcso-icon--external" aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/></svg>
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Registration Requirements', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('Georgia law requires all sex offenders to register with the Sheriff\'s Office in the county of their residence. Offenders must:', 'gcso'); ?></p>
                        <ul class="gcso-info-card__list">
                            <li><?php esc_html_e('Register within 72 hours of establishing residence', 'gcso'); ?></li>
                            <li><?php esc_html_e('Update information when changes occur', 'gcso'); ?></li>
                            <li><?php esc_html_e('Verify address annually (or more frequently, depending on classification)', 'gcso'); ?></li>
                        </ul>
                    </div>
                </div>

                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Community Notification', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('If you have questions about sex offenders in your area or would like to report a concern, please contact:', 'gcso'); ?></p>
                        <p>
                            <strong><?php esc_html_e('Gordon County Sheriff\'s Office', 'gcso'); ?></strong><br>
                            <a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1244')); ?>"><?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1244')); ?></a>
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
