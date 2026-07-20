<?php
/**
 * Template Name: Enforcement Bureau
 *
 * Gordon County Sheriff's Office Enforcement Bureau information and contacts.
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

        <div class="gcso-service-page gcso-enforcement-page">
            <div class="gcso-service-page__intro">
                <p><?php esc_html_e('The Enforcement Bureau is responsible for patrol, criminal investigations, school safety, community watch, and specialized law-enforcement services throughout Gordon County.', 'gcso'); ?></p>
                <p><?php esc_html_e('The Bureau is subdivided into the Uniform Patrol Division, Detective Division, School Resource Officer Unit, Community Watch Unit, and specialized units.', 'gcso'); ?></p>
            </div>

            <section aria-labelledby="enforcement-units-heading">
                <h2 id="enforcement-units-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Enforcement Units', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <div class="gcso-info-cards">
                    <div class="gcso-info-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Uniform Patrol Division', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p><?php esc_html_e('Patrols State and County roads to suppress and detect crime, arrest violators, and provide the first response to requests for service.', 'gcso'); ?></p>
                        </div>
                    </div>

                    <div class="gcso-info-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Detective Division', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p><?php esc_html_e('Provides follow-up investigations into reported crimes and detects, arrests, and prosecutes violators.', 'gcso'); ?></p>
                        </div>
                    </div>

                    <div class="gcso-info-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('School Resource Officer Unit', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p><?php esc_html_e('Provides safety and security for the Gordon County Public Schools System.', 'gcso'); ?></p>
                        </div>
                    </div>

                    <div class="gcso-info-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Community Watch Unit', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p><?php esc_html_e('Concentrates on suppressing illegal drug activity in Gordon County and arresting and prosecuting violators.', 'gcso'); ?></p>
                        </div>
                    </div>
                </div>
            </section>

            <section aria-labelledby="enforcement-contacts-heading">
                <h2 id="enforcement-contacts-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Enforcement Bureau Contacts', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <div class="gcso-info-cards gcso-jail-command gcso-enforcement-contacts">
                    <div class="gcso-info-card gcso-jail-command-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Major Ritchie Harris', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p class="gcso-jail-command-card__role"><?php esc_html_e('Commanding Officer, Enforcement Bureau', 'gcso'); ?></p>
                            <p class="gcso-jail-command-card__description"><?php esc_html_e('For information regarding Enforcement Bureau services, Patrol Division operations, and Detective Division operations.', 'gcso'); ?></p>
                            <div class="gcso-jail-command-card__contact">
                                <a href="tel:+17066291244">706-629-1244</a>
                                <a href="mailto:ritchie.harris@gordoncountyga.gov">ritchie.harris@gordoncountyga.gov</a>
                            </div>
                        </div>
                    </div>

                    <div class="gcso-info-card gcso-jail-command-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Captain Ben Worley', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p class="gcso-jail-command-card__role"><?php esc_html_e('Commander, Uniform Patrol Division', 'gcso'); ?></p>
                            <p class="gcso-jail-command-card__description"><?php esc_html_e('For patrol operations, traffic enforcement, calls for service, traffic citations, ordinance violations, investigative services, School Resource Officer Unit operations, and Community Watch Unit operations.', 'gcso'); ?></p>
                            <div class="gcso-jail-command-card__contact">
                                <a href="tel:+17066291244">706-629-1244</a>
                                <a href="mailto:ben.worley@gordoncountyga.gov">ben.worley@gordoncountyga.gov</a>
                            </div>
                        </div>
                    </div>

                    <div class="gcso-info-card gcso-jail-command-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Captain Jack Jenkins', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p class="gcso-jail-command-card__role"><?php esc_html_e('Commander, School Resource Officer Unit', 'gcso'); ?></p>
                            <p class="gcso-jail-command-card__description"><?php esc_html_e('For information regarding the Sheriff’s Office School Resource Officer program in the county school system.', 'gcso'); ?></p>
                            <div class="gcso-jail-command-card__contact">
                                <a href="tel:+17066291244">706-629-1244</a>
                                <a href="mailto:jack.jenkins@gordoncountyga.gov">jack.jenkins@gordoncountyga.gov</a>
                            </div>
                        </div>
                    </div>

                    <div class="gcso-info-card gcso-jail-command-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Captain Dayln Pulliam', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p class="gcso-jail-command-card__role"><?php esc_html_e('Commander, Detective Division', 'gcso'); ?></p>
                            <p class="gcso-jail-command-card__description"><?php esc_html_e('For criminal investigations, reports and case files, nonprofit organization raffle licensing, and other matters concerning referrals to detectives.', 'gcso'); ?></p>
                            <div class="gcso-jail-command-card__contact">
                                <a href="tel:+17068795418">706-879-5418</a>
                            </div>
                        </div>
                    </div>

                    <div class="gcso-info-card gcso-jail-command-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Captain Chuck Kirby', 'gcso'); ?></h3>
                        <div class="gcso-jail-command-card__body gcso-info-card__body">
                            <p class="gcso-jail-command-card__role"><?php esc_html_e('Commander, Special Operations', 'gcso'); ?></p>
                            <div class="gcso-jail-command-card__contact">
                                <a href="tel:+17068795494">706-879-5494</a>
                                <a href="mailto:chuck.kirby@gordoncountyga.gov">chuck.kirby@gordoncountyga.gov</a>
                            </div>
                        </div>
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
