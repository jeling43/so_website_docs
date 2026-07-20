<?php
/**
 * Template Name: Services Landing
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
                <p><?php esc_html_e('Access commonly requested services from the Gordon County Sheriff\'s Office. Choose a service below to get started.', 'gcso'); ?></p>
            </div>

            <!-- Reports & Records -->
            <section aria-labelledby="reports-heading">
                <h2 id="reports-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Reports and Records', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <div class="gcso-info-cards">
                    <a href="<?php echo esc_url(home_url('/services/request-a-report')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Request a Report', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p><?php esc_html_e('Request a copy of an incident or accident report.', 'gcso'); ?></p>
                        </div>
                    </a>

                    <a href="<?php echo esc_url(home_url('/services/submit-additional-information')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Submit Additional Information', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p><?php esc_html_e('Provide additional information for an existing report or case.', 'gcso'); ?></p>
                        </div>
                    </a>
                </div>

                <div class="gcso-info-cards">
                    <a href="<?php echo esc_url(home_url('/services/open-records')); ?>" class="gcso-info-card gcso-info-card--link gcso-info-card--full">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Open Records Request', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p><?php esc_html_e('Submit a formal Open Records Request under Georgia law.', 'gcso'); ?></p>
                        </div>
                    </a>
                </div>
            </section>

            <!-- Public Safety -->
            <section aria-labelledby="safety-heading">
                <h2 id="safety-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Public Safety', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <div class="gcso-info-cards">
                    <a href="<?php echo esc_url(home_url('/services/most-wanted')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Most Wanted', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p><?php esc_html_e('View individuals currently wanted by the Gordon County Sheriff\'s Office.', 'gcso'); ?></p>
                        </div>
                    </a>

                    <a href="<?php echo esc_url(home_url('/services/submit-a-tip')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Submit a Tip', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p><?php esc_html_e('Report suspicious activity or provide anonymous crime information.', 'gcso'); ?></p>
                        </div>
                    </a>
                </div>

                <div class="gcso-info-cards">
                    <!-- Sex Offender Registry - Direct external link -->
                    <div class="gcso-info-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Sex Offender Search', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p><?php esc_html_e('Search the Georgia Sex Offender Registry for registered offenders in your area.', 'gcso'); ?></p>
                            <p>
                                <a href="https://gbi.georgia.gov/services/sex-offender-registry" class="gcso-btn gcso-btn--outline-navy" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Search Sex Offender Registry (opens GBI website)', 'gcso'); ?>">
                                    <?php esc_html_e('Search Registry', 'gcso'); ?>
                                    <svg class="gcso-icon gcso-icon--external" aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/></svg>
                                </a>
                            </p>
                        </div>
                    </div>

                    <!-- Inmate Search - Direct external link -->
                    <div class="gcso-info-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Inmate Search', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p><?php esc_html_e('Search for inmates currently held at the Gordon County Jail.', 'gcso'); ?></p>
                            <p>
                                <a href="<?php echo esc_url(gcso_get_inmate_search_url()); ?>" class="gcso-btn gcso-btn--outline-navy" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Search Current Inmates (opens external site)', 'gcso'); ?>">
                                    <?php esc_html_e('Search Inmates', 'gcso'); ?>
                                    <svg class="gcso-icon gcso-icon--external" aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/></svg>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Permits & Licensing -->
            <section aria-labelledby="permits-heading">
                <h2 id="permits-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Permits and Licensing', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <div class="gcso-info-cards">
                    <a href="<?php echo esc_url(home_url('/services/raffle-licenses')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Raffle Licenses', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p><?php esc_html_e('Apply for a raffle license for your nonprofit organization.', 'gcso'); ?></p>
                        </div>
                    </a>

                    <a href="<?php echo esc_url(home_url('/services/secondary-metals-recycling')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Secondary Metals Recycling', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p><?php esc_html_e('Registration and requirements for secondary metals recyclers.', 'gcso'); ?></p>
                        </div>
                    </a>
                </div>
            </section>

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
