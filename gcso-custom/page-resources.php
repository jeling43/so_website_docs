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

<main id="main-content" class="gcso-main" role="main">
    <?php get_template_part('template-parts/content/page-banner'); ?>

    <div class="gcso-container gcso-content-area">
        <?php gcso_breadcrumbs(); ?>

        <div class="gcso-service-page gcso-resources-page">
            <div class="gcso-service-page__intro">
                <p><?php esc_html_e('Find commonly requested services, public-safety information, forms, and community resources from the Gordon County Sheriff’s Office.', 'gcso'); ?></p>
            </div>

            <section aria-labelledby="resources-records-heading">
                <h2 id="resources-records-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Reports and Records', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>
                <div class="gcso-info-cards">
                    <a href="<?php echo esc_url(home_url('/services/request-a-report/')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Request a Report', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body"><p><?php esc_html_e('Request an incident or accident report online.', 'gcso'); ?></p></div>
                    </a>
                    <a href="<?php echo esc_url(home_url('/services/open-records/')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Open Records Request', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body"><p><?php esc_html_e('Submit a formal request for public records.', 'gcso'); ?></p></div>
                    </a>
                    <a href="<?php echo esc_url(home_url('/services/submit-additional-information/')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Submit Additional Information', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body"><p><?php esc_html_e('Provide information related to an existing report or case.', 'gcso'); ?></p></div>
                    </a>
                </div>
            </section>

            <section aria-labelledby="resources-safety-heading">
                <h2 id="resources-safety-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Public Safety', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>
                <div class="gcso-info-cards">
                    <a href="<?php echo esc_url(home_url('/services/submit-a-tip/')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Tip Line', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body"><p><?php esc_html_e('Submit confidential information regarding major crimes.', 'gcso'); ?></p></div>
                    </a>
                    <a href="<?php echo esc_url(home_url('/services/most-wanted/')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Most Wanted', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body"><p><?php esc_html_e('View individuals currently wanted by the Sheriff’s Office.', 'gcso'); ?></p></div>
                    </a>
                    <a href="<?php echo esc_url(home_url('/services/sex-offender-registry/')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Sex Offender Registry', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body"><p><?php esc_html_e('Access registration and community-safety information.', 'gcso'); ?></p></div>
                    </a>
                </div>
            </section>

            <section aria-labelledby="resources-community-heading">
                <h2 id="resources-community-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Jail, Permits, and Employment', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>
                <div class="gcso-info-cards">
                    <a href="<?php echo esc_url(home_url('/jail/')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Jail Information', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body"><p><?php esc_html_e('Find inmate, visitation, bonds, and jail-contact information.', 'gcso'); ?></p></div>
                    </a>
                    <a href="<?php echo esc_url(home_url('/contact/employment/')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Employment', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body"><p><?php esc_html_e('Learn about careers and employment applications.', 'gcso'); ?></p></div>
                    </a>
                    <a href="<?php echo esc_url(home_url('/services/raffle-licenses/')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Raffle Licenses', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body"><p><?php esc_html_e('Review nonprofit raffle-license requirements.', 'gcso'); ?></p></div>
                    </a>
                    <a href="<?php echo esc_url(home_url('/services/secondary-metals-recycling/')); ?>" class="gcso-info-card gcso-info-card--link">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Secondary Metals Recycling', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body"><p><?php esc_html_e('Review registration and transaction requirements.', 'gcso'); ?></p></div>
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
