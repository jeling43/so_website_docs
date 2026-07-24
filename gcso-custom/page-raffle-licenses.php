<?php
/**
 * Template Name: Raffle Licenses
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
                <p><?php esc_html_e('The Gordon County Sheriff’s Office issues raffle licenses to qualifying nonprofit organizations and enforces Georgia’s raffle requirements.', 'gcso'); ?></p>
            </div>

            <div class="gcso-info-cards">
                <section class="gcso-info-card" aria-labelledby="raffle-authority-heading">
                    <h2 id="raffle-authority-heading" class="gcso-info-card__title"><?php esc_html_e('Raffle License Authority', 'gcso'); ?></h2>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('Under O.C.G.A. § 16-12-22.1, the sheriff is responsible for issuing raffle licenses to certain nonprofit organizations within Gordon County and enforcing the requirements of the law.', 'gcso'); ?></p>
                        <p><?php esc_html_e('A qualifying nonprofit, tax-exempt organization may include a church, school, civic organization, related support group, organization qualified under Section 501(c) of the Internal Revenue Code, or another bona fide nonprofit organization approved by the sheriff.', 'gcso'); ?></p>
                    </div>
                </section>

                <section class="gcso-info-card" aria-labelledby="raffle-requirements-heading">
                    <h2 id="raffle-requirements-heading" class="gcso-info-card__title"><?php esc_html_e('Important Requirements', 'gcso'); ?></h2>
                    <ul class="gcso-info-card__list">
                        <li><?php esc_html_e('The organization must have been in existence for at least 24 months before requesting a license.', 'gcso'); ?></li>
                        <li><?php esc_html_e('The license allows up to three raffles per calendar year.', 'gcso'); ?></li>
                        <li><?php esc_html_e('The sheriff must be notified in writing of each raffle winner and the value of all prizes.', 'gcso'); ?></li>
                        <li><?php esc_html_e('The sheriff may suspend or revoke a license for a violation of the law.', 'gcso'); ?></li>
                    </ul>
                </section>
            </div>

            <div class="gcso-info-cards">
                <section class="gcso-info-card gcso-info-card--full gcso-info-card--highlight" aria-labelledby="raffle-requests-heading">
                    <h2 id="raffle-requests-heading" class="gcso-info-card__title"><?php esc_html_e('Request a Raffle License', 'gcso'); ?></h2>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('Approved licenses may be picked up in person at the Sheriff’s Office, sent by email, or sent by U.S. Mail.', 'gcso'); ?></p>
                        <p><?php esc_html_e('Requests and questions should be directed to:', 'gcso'); ?></p>
                        <p>
                            <strong><?php esc_html_e('Ms. Tera Wilson', 'gcso'); ?></strong><br>
                            <a href="tel:7068795473">706-879-5473</a><br>
                            <a href="mailto:tera.wilson@gordoncountyga.gov">tera.wilson@gordoncountyga.gov</a>
                        </p>
                    </div>
                </section>
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
