<?php
/**
 * Template Name: Jail
 *
 * Comprehensive jail page with all inmate services, policies, and external links.
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
                <p><?php esc_html_e('The Gordon County Jail is operated by the Gordon County Sheriff\'s Office. Find information about inmate services, visitation, bonds, and other jail-related services below.', 'gcso'); ?></p>
            </div>

            <!-- Primary Actions - External Services -->
            <section class="gcso-jail-actions" aria-labelledby="jail-actions-heading">
                <h2 id="jail-actions-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Quick Actions', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <div class="gcso-info-cards">
                    <div class="gcso-info-card gcso-info-card--highlight">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Search Current Inmates', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body gcso-info-card__body--center">
                            <p><?php esc_html_e('Look up inmates currently held at the Gordon County Jail.', 'gcso'); ?></p>
                            <p>
                                <!-- TODO: VERIFY BEFORE PRODUCTION - Confirm inmate search external URL -->
                                <a href="<?php echo esc_url(gcso_get_option('gcso_hero_btn1_url', '#')); ?>" class="gcso-btn gcso-btn--gold" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Search Current Inmates (opens external site)', 'gcso'); ?>">
                                    <?php esc_html_e('Search Inmates', 'gcso'); ?>
                                    <svg class="gcso-icon gcso-icon--external" aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/></svg>
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="gcso-info-card gcso-info-card--highlight">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Schedule Visitation', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body gcso-info-card__body--center">
                            <p><?php esc_html_e('Visitation is conducted via video. Schedule your visit online.', 'gcso'); ?></p>
                            <p>
                                <!-- TODO: VERIFY BEFORE PRODUCTION - Confirm visitation service URL -->
                                <a href="#" class="gcso-btn gcso-btn--gold" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Schedule Visitation (opens external site)', 'gcso'); ?>">
                                    <?php esc_html_e('Schedule Visit', 'gcso'); ?>
                                    <svg class="gcso-icon gcso-icon--external" aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/></svg>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="gcso-info-cards">
                    <div class="gcso-info-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Add Inmate Funds', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body gcso-info-card__body--center">
                            <p><?php esc_html_e('Add money to an inmate\'s commissary account.', 'gcso'); ?></p>
                            <p>
                                <!-- TODO: VERIFY BEFORE PRODUCTION - Confirm inmate funds service URL -->
                                <a href="#" class="gcso-btn gcso-btn--outline-navy" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Add Inmate Funds (opens external site)', 'gcso'); ?>">
                                    <?php esc_html_e('Add Funds', 'gcso'); ?>
                                    <svg class="gcso-icon gcso-icon--external" aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/></svg>
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="gcso-info-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Phone & Messaging', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body gcso-info-card__body--center">
                            <p><?php esc_html_e('Set up a phone or messaging account to communicate with an inmate.', 'gcso'); ?></p>
                            <p>
                                <!-- TODO: VERIFY BEFORE PRODUCTION - Confirm phone/messaging service URL -->
                                <a href="#" class="gcso-btn gcso-btn--outline-navy" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Phone and Messaging Account (opens external site)', 'gcso'); ?>">
                                    <?php esc_html_e('Phone Account', 'gcso'); ?>
                                    <svg class="gcso-icon gcso-icon--external" aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/></svg>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Visitation Information -->
            <section aria-labelledby="visitation-heading">
                <h2 id="visitation-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Visitation Information', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <div class="gcso-info-cards">
                    <div class="gcso-info-card gcso-info-card--full">
                        <div class="gcso-info-card__body">
                            <p><?php esc_html_e('Visitation at the Gordon County Jail is conducted via video. Please review the following rules before scheduling your visit.', 'gcso'); ?></p>
                            <ul class="gcso-info-card__list gcso-info-card__list--columns">
                                <li><?php esc_html_e('Valid government-issued photo ID required', 'gcso'); ?></li>
                                <li><?php esc_html_e('Visitors must be on the approved visitation list', 'gcso'); ?></li>
                                <li><?php esc_html_e('Proper dress code enforced', 'gcso'); ?></li>
                                <li><?php esc_html_e('No cell phones or recording devices', 'gcso'); ?></li>
                                <li><?php esc_html_e('Children must be accompanied by an adult', 'gcso'); ?></li>
                                <li><?php esc_html_e('Visits may be monitored and recorded', 'gcso'); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Bond Information -->
            <section aria-labelledby="bonds-heading">
                <h2 id="bonds-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Bond Information', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <div class="gcso-info-cards">
                    <div class="gcso-info-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Types of Bonds', 'gcso'); ?></h3>
                        <ul class="gcso-info-card__list">
                            <li><?php esc_html_e('Cash Bond – Full bond amount paid in cash', 'gcso'); ?></li>
                            <li><?php esc_html_e('Property Bond – Real property used as collateral', 'gcso'); ?></li>
                            <li><?php esc_html_e('Surety Bond – Through a licensed bonding company', 'gcso'); ?></li>
                        </ul>
                    </div>

                    <div class="gcso-info-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Payment Information', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p><?php esc_html_e('Bonds may be posted at the Gordon County Jail 24 hours a day, 7 days a week.', 'gcso'); ?></p>
                            <!-- TODO: VERIFY BEFORE PRODUCTION - Bond fees and accepted payment methods -->
                            <p><?php esc_html_e('Accepted forms of payment may include cash, money order, or certified check. Contact the jail to confirm accepted payment methods for your specific bond type.', 'gcso'); ?></p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Inmate Mail -->
            <section aria-labelledby="mail-heading">
                <h2 id="mail-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Inmate Mail', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <div class="gcso-info-cards">
                    <div class="gcso-info-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Mailing Address Format', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p><?php esc_html_e('All mail must be addressed as follows:', 'gcso'); ?></p>
                            <p>
                                <strong><?php esc_html_e('Inmate Full Name', 'gcso'); ?></strong><br>
                                <?php esc_html_e('Gordon County Jail', 'gcso'); ?><br>
                                <?php echo esc_html(gcso_get_option('gcso_address', '100 Public Safety Way, Calhoun, GA 30701')); ?>
                            </p>
                        </div>
                    </div>

                    <div class="gcso-info-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Mail Rules', 'gcso'); ?></h3>
                        <ul class="gcso-info-card__list">
                            <li><?php esc_html_e('All incoming mail is subject to inspection', 'gcso'); ?></li>
                            <li><?php esc_html_e('Must include sender\'s return address', 'gcso'); ?></li>
                            <li><?php esc_html_e('No glitter, stickers, lipstick, perfume, or crayon', 'gcso'); ?></li>
                            <li><?php esc_html_e('No packages without prior approval', 'gcso'); ?></li>
                            <li><?php esc_html_e('Photographs allowed (no Polaroids)', 'gcso'); ?></li>
                            <li><?php esc_html_e('No sexually explicit material', 'gcso'); ?></li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Scam Warning -->
            <div class="gcso-alert-box">
                <p>
                    <strong><?php esc_html_e('Scam Warning:', 'gcso'); ?></strong>
                    <?php esc_html_e('The Gordon County Sheriff\'s Office will never call you demanding immediate payment for a warrant or missed jury duty. If you receive such a call, hang up and report it to our office.', 'gcso'); ?>
                </p>
            </div>

            <!-- Contact the Jail -->
            <section aria-labelledby="jail-contact-heading">
                <h2 id="jail-contact-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Contact the Jail', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <div class="gcso-info-cards">
                    <div class="gcso-info-card gcso-info-card--full">
                        <div class="gcso-info-card__body">
                            <p>
                                <strong><?php esc_html_e('Phone:', 'gcso'); ?></strong>
                                <!-- TODO: VERIFY BEFORE PRODUCTION - Jail-specific phone number -->
                                <a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1244')); ?>"><?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1244')); ?></a>
                            </p>
                            <p>
                                <strong><?php esc_html_e('Address:', 'gcso'); ?></strong>
                                <?php echo esc_html(gcso_get_option('gcso_address', '100 Public Safety Way, Calhoun, GA 30701')); ?>
                            </p>
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
