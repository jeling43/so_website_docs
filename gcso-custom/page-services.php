<?php
/**
 * Template Name: Services Landing
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="main-content" class="gcso-main gcso-services-main" role="main">
    <?php get_template_part('template-parts/content/page-banner'); ?>

    <div class="gcso-container gcso-content-area gcso-content-area--wide">
        <?php gcso_breadcrumbs(); ?>

        <div class="gcso-service-page">
            <div class="gcso-service-page__intro">
                <p><?php esc_html_e('Find a service quickly using the categories below. Select a service to view requirements, instructions, or the next step.', 'gcso'); ?></p>
            </div>

            <nav class="gcso-services-page__nav" aria-label="Service categories">
                <a href="#reports-heading"><?php esc_html_e('Reports and records', 'gcso'); ?></a>
                <a href="#safety-heading"><?php esc_html_e('Public safety', 'gcso'); ?></a>
                <a href="#permits-heading"><?php esc_html_e('Permits and licensing', 'gcso'); ?></a>
                <a href="#court-services-heading"><?php esc_html_e('Court services', 'gcso'); ?></a>
            </nav>

            <!-- Reports & Records -->
            <section aria-labelledby="reports-heading">
                <h2 id="reports-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Reports and Records', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <div class="gcso-info-cards gcso-info-cards--services">
                    <a href="<?php echo esc_url(home_url('/services/request-a-report')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Request a Report', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p><?php esc_html_e('Request a copy of an incident or accident report.', 'gcso'); ?></p>
                            <span class="gcso-card-action"><?php esc_html_e('View report request', 'gcso'); ?> <span aria-hidden="true">→</span></span>
                        </div>
                    </a>

                    <div class="gcso-info-card gcso-info-card--full gcso-info-card--notice">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Public Records', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p><?php esc_html_e('Captain Chuck Kirby is the Gordon County Sheriff’s Office Custodian of Records. Public records requests should be addressed to the Custodian of Records.', 'gcso'); ?></p>
                            <span class="gcso-card-note"><?php esc_html_e('Information only', 'gcso'); ?></span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Public Safety -->
            <section aria-labelledby="safety-heading">
                <h2 id="safety-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Public Safety', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <div class="gcso-info-cards gcso-info-cards--services">

                    <a href="<?php echo esc_url(home_url('/services/submit-a-tip')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Submit a Tip', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p><?php esc_html_e('Report suspicious activity or provide anonymous crime information.', 'gcso'); ?></p>
                            <span class="gcso-card-action"><?php esc_html_e('Submit a tip', 'gcso'); ?> <span aria-hidden="true">→</span></span>
                        </div>
                    </a>
                </div>

                <div class="gcso-info-cards gcso-info-cards--services">
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

                <div class="gcso-info-cards gcso-info-cards--services">
                    <a href="<?php echo esc_url(home_url('/raffle-licenses/')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Raffle Licenses', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p><?php esc_html_e('Review raffle-license requirements and request information.', 'gcso'); ?></p>
                            <span class="gcso-card-action"><?php esc_html_e('View raffle licenses', 'gcso'); ?> <span aria-hidden="true">→</span></span>
                        </div>
                    </a>

                    <a href="<?php echo esc_url(home_url('/services/secondary-metals-recycling')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Secondary Metals Recycling', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p><?php esc_html_e('Registration and requirements for secondary metals recyclers.', 'gcso'); ?></p>
                            <span class="gcso-card-action"><?php esc_html_e('View requirements', 'gcso'); ?> <span aria-hidden="true">→</span></span>
                        </div>
                    </a>
                </div>
            </section>

            <!-- Court Services -->
            <section aria-labelledby="court-services-heading">
                <h2 id="court-services-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Court Services', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <div class="gcso-info-card gcso-info-card--full gcso-fees-card">
                    <div class="gcso-info-card__body">
                        <p class="gcso-service-page__section-intro"><?php esc_html_e('Common court-service fees are listed below for reference. Fees and payment requirements may change; confirm current details before submitting documents.', 'gcso'); ?></p>
                        <dl class="gcso-fee-list">
                            <?php
                            $court_services_fees = array(
                                'Service of Civil Process' => '$50.00',
                                'Subpoena' => '$10.00',
                                'Writ of Fieri Facias (Fi. Fa.)' => '$50.00',
                                'Levy' => '$50.00',
                                'Nulla Bona' => '$20.00',
                                'Garnishments' => '$50.00',
                                'Funeral Transports (Off Duty)' => '$65.00 per hour for each deputy (paid to deputy) and $0.67 per mile (paid to county)',
                            );
                            foreach ($court_services_fees as $service => $fee) :
                            ?>
                                <div class="gcso-fee-list__row">
                                    <dt><?php echo esc_html($service); ?></dt>
                                    <dd><?php echo esc_html($fee); ?></dd>
                                </div>
                            <?php endforeach; ?>
                        </dl>
                    </div>
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
