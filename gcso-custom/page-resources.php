<?php
/**
 * Template Name: Resources Landing
 *
 * Public resources and services for the Gordon County Sheriff's Office.
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

        <div class="gcso-service-page gcso-resources-page">
            <div class="gcso-service-page__intro">
                <p><?php esc_html_e('Find commonly requested services, public-safety information, forms, and community resources from the Gordon County Sheriff’s Office.', 'gcso'); ?></p>
            </div>

            <nav class="gcso-resource-jump" aria-label="Jump to a resource category">
                <a href="#resources-popular-heading"><?php esc_html_e('Most requested', 'gcso'); ?></a>
                <a href="#resources-records-heading"><?php esc_html_e('Reports and records', 'gcso'); ?></a>
                <a href="#resources-safety-heading"><?php esc_html_e('Public safety', 'gcso'); ?></a>
                <a href="#resources-permits-heading"><?php esc_html_e('Permits and employment', 'gcso'); ?></a>
                <a href="#court-services-fees-heading"><?php esc_html_e('Court services', 'gcso'); ?></a>
            </nav>

            <section aria-labelledby="resources-popular-heading">
                <h2 id="resources-popular-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Most Requested', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>
                <div class="gcso-info-cards gcso-info-cards--two">
                    <a href="<?php echo esc_url(home_url('/resources/request-a-report/')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Request a Report', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body"><p><?php esc_html_e('Learn how to request a copy of an incident or accident report.', 'gcso'); ?></p><span class="gcso-card-action"><?php esc_html_e('View request instructions', 'gcso'); ?> <span aria-hidden="true">→</span></span></div>
                    </a>
                    <a href="<?php echo esc_url(home_url('/jail/')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Jail Information', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body"><p><?php esc_html_e('Find inmate, visitation, bonds, and jail-contact information.', 'gcso'); ?></p><span class="gcso-card-action"><?php esc_html_e('View jail information', 'gcso'); ?> <span aria-hidden="true">→</span></span></div>
                    </a>
                </div>
            </section>

            <section aria-labelledby="resources-records-heading">
                <h2 id="resources-records-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Reports and Records', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>
                <div class="gcso-info-cards gcso-info-cards--two">
                    <div class="gcso-info-card gcso-info-card--full gcso-info-card--notice">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Public Records', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p><?php esc_html_e('Captain Chuck Kirby is the Gordon County Sheriff’s Office Custodian of Records. Public records requests should be addressed to the Custodian of Records.', 'gcso'); ?></p>
                        </div>
                    </div>
                </div>
            </section>

            <section aria-labelledby="resources-safety-heading">
                <h2 id="resources-safety-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Public Safety', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>
                <div class="gcso-info-cards gcso-info-cards--two">
                    <a href="<?php echo esc_url(home_url('/submit-a-tip/')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Tip Line', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body"><p><?php esc_html_e('Submit confidential information regarding major crimes.', 'gcso'); ?></p><span class="gcso-card-action"><?php esc_html_e('Submit a tip', 'gcso'); ?> <span aria-hidden="true">→</span></span></div>
                    </a>
                    <a href="<?php echo esc_url(home_url('/sex-offender-registry/')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Sex Offender Search', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body"><p><?php esc_html_e('Access registration and community-safety information.', 'gcso'); ?></p><span class="gcso-card-action"><?php esc_html_e('Search registry', 'gcso'); ?> <span aria-hidden="true">→</span></span></div>
                    </a>
                </div>
            </section>

            <section aria-labelledby="resources-permits-heading">
                <h2 id="resources-permits-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Permits and Employment', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>
                <div class="gcso-info-cards">
                    <a href="<?php echo esc_url(home_url('/contact/employment/')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Employment', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body"><p><?php esc_html_e('Learn about careers and employment applications.', 'gcso'); ?></p><span class="gcso-card-action"><?php esc_html_e('View employment information', 'gcso'); ?> <span aria-hidden="true">→</span></span></div>
                    </a>
                    <a href="<?php echo esc_url(home_url('/raffle-licenses/')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Raffle Licenses', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body"><p><?php esc_html_e('Review raffle-license requirements and request information.', 'gcso'); ?></p><span class="gcso-card-action"><?php esc_html_e('View raffle licenses', 'gcso'); ?> <span aria-hidden="true">→</span></span></div>
                    </a>
                    <a href="<?php echo esc_url(home_url('/services/secondary-metals-recycling/')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Secondary Metals Recycling', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body"><p><?php esc_html_e('Review registration and transaction requirements.', 'gcso'); ?></p><span class="gcso-card-action"><?php esc_html_e('View requirements', 'gcso'); ?> <span aria-hidden="true">→</span></span></div>
                    </a>
                </div>
            </section>

            <section aria-labelledby="court-services-fees-heading">
                <h2 id="court-services-fees-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Court Services Fees', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>
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
                <p class="gcso-fee-list__note">
                    <?php esc_html_e('Fees are provided by the Gordon County Sheriff’s Office for general information and may change. Confirm the current fee and payment requirements before submitting documents.', 'gcso'); ?>
                </p>
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
