<?php
/**
 * Template Name: Divisions Landing
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

get_header();

$ranks = [
    __('Civilian Employee (Non-Sworn)', 'gcso'),
    __('Jailor', 'gcso'),
    __('Deputy Sheriff', 'gcso'),
    __('Detective', 'gcso'),
    __('Sergeant', 'gcso'),
    __('Sergeant First Class', 'gcso'),
    __('Lieutenant', 'gcso'),
    __('Captain', 'gcso'),
    __('Major', 'gcso'),
    __('Chief Deputy Sheriff', 'gcso'),
];
?>

<main id="main-content" class="gcso-main" role="main">
    <?php get_template_part('template-parts/content/page-banner'); ?>

    <div class="gcso-container gcso-content-area">
        <?php gcso_breadcrumbs(); ?>

        <div class="gcso-service-page gcso-divisions-page">
            <section class="gcso-divisions-overview" aria-labelledby="office-overview-heading">
                <div class="gcso-divisions-overview__content">
                    <p class="gcso-divisions-overview__eyebrow"><?php esc_html_e('Serving Gordon County Since 1850', 'gcso'); ?></p>
                    <h2 id="office-overview-heading"><?php esc_html_e('Office of the Sheriff', 'gcso'); ?></h2>
                    <p><?php esc_html_e('The elected Sheriff is the chief executive officer of the Sheriff’s Office. The Sheriff is a constitutional officer in Georgia elected to a four-year term by Gordon County voters and is defined by Georgia law as the county’s chief law-enforcement officer.', 'gcso'); ?></p>
                    <p><?php esc_html_e('The word “sheriff” originated in Great Britain during the Middle Ages, when the sheriff collected taxes and enforced the law for the king. The Office of Sheriff is the oldest law-enforcement position in the United States and has continued uninterrupted in Gordon County since 1850.', 'gcso'); ?></p>
                </div>
                <aside class="gcso-divisions-overview__stat" aria-label="Sheriff's Office staffing">
                    <img
                        class="gcso-divisions-overview__badge"
                        src="<?php echo esc_url(GCSO_URI . '/assets/images/badge-Photoroom.png'); ?>"
                        alt=""
                        width="108"
                        height="108"
                        loading="lazy"
                    >
                    <strong>122</strong>
                    <span><?php esc_html_e('Total Employees', 'gcso'); ?></span>
                    <small><?php esc_html_e('All positions are classified under the Gordon County Personnel System.', 'gcso'); ?></small>
                </aside>
            </section>

            <section aria-labelledby="duties-heading">
                <h2 id="duties-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Principal Duties', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <div class="gcso-duty-grid">
                    <article class="gcso-duty-card">
                        <span class="gcso-duty-card__number" aria-hidden="true">01</span>
                        <h3><?php esc_html_e('Preserve the Peace', 'gcso'); ?></h3>
                        <p><?php esc_html_e('Maintain peace and order throughout Gordon County by enforcing criminal laws, statutes, and ordinances.', 'gcso'); ?></p>
                    </article>
                    <article class="gcso-duty-card">
                        <span class="gcso-duty-card__number" aria-hidden="true">02</span>
                        <h3><?php esc_html_e('Operate the County Jail', 'gcso'); ?></h3>
                        <p><?php esc_html_e('Maintain and operate the Gordon County Jail safely, securely, and in accordance with applicable standards.', 'gcso'); ?></p>
                    </article>
                    <article class="gcso-duty-card">
                        <span class="gcso-duty-card__number" aria-hidden="true">03</span>
                        <h3><?php esc_html_e('Support the Courts', 'gcso'); ?></h3>
                        <p><?php esc_html_e('Act as the enforcement arm of Gordon County’s courts and provide security for courts, judges, and officials.', 'gcso'); ?></p>
                    </article>
                </div>
            </section>

            <section aria-labelledby="bureaus-heading">
                <h2 id="bureaus-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Our Two Bureaus', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <div class="gcso-bureau-grid">
                    <article class="gcso-bureau-card">
                        <div class="gcso-bureau-card__heading">
                            <span><?php esc_html_e('Enforcement', 'gcso'); ?></span>
                            <strong><?php esc_html_e('Bureau', 'gcso'); ?></strong>
                        </div>
                        <div class="gcso-bureau-card__body">
                                <p><?php esc_html_e('The Enforcement Bureau includes the Uniform Patrol Division, Detective Division, and specialized units.', 'gcso'); ?></p>
                            <h3><?php esc_html_e('Uniform Patrol Division', 'gcso'); ?></h3>
                            <p><?php esc_html_e('Patrols county roads to suppress and detect crime, arrest violators, and provide the first response to requests for service.', 'gcso'); ?></p>
                            <h3><?php esc_html_e('Detective Division', 'gcso'); ?></h3>
                            <p><?php esc_html_e('Provides follow-up investigations into reported crimes and detects, arrests, and prosecutes violators, including violations of the Georgia Controlled Substances Act.', 'gcso'); ?></p>
                            <p class="gcso-bureau-card__action">
                                <a href="<?php echo esc_url(home_url('/divisions/enforcement-bureau/')); ?>" class="gcso-btn gcso-btn--gold">
                                    <?php esc_html_e('View Enforcement Bureau', 'gcso'); ?>
                                </a>
                            </p>
                        </div>
                    </article>

                    <article class="gcso-bureau-card">
                        <div class="gcso-bureau-card__heading">
                            <span><?php esc_html_e('Judicial', 'gcso'); ?></span>
                            <strong><?php esc_html_e('Bureau', 'gcso'); ?></strong>
                        </div>
                        <div class="gcso-bureau-card__body">
                            <p><?php esc_html_e('The Judicial Bureau includes the Jail Operations Division and Court Services Division.', 'gcso'); ?></p>
                            <h3><?php esc_html_e('Court Services Division', 'gcso'); ?></h3>
                            <p><?php esc_html_e('Receives and serves court process—including warrants, civil actions, and summonses—transports inmates, and provides physical security for Superior Court and judges.', 'gcso'); ?></p>
                            <h3><?php esc_html_e('Jail Operations Division', 'gcso'); ?></h3>
                            <p><?php esc_html_e('Provides safe and secure operation of the county jail, safeguards inmate occupants, and maintains required incarceration records.', 'gcso'); ?></p>
                            <p class="gcso-bureau-card__action">
                                <a href="<?php echo esc_url(get_permalink(get_page_by_path('jail'))); ?>" class="gcso-btn gcso-btn--gold">
                                    <?php esc_html_e('View Jail Division', 'gcso'); ?>
                                </a>
                            </p>
                        </div>
                    </article>
                </div>
            </section>

            <section aria-labelledby="ranks-heading">
                <h2 id="ranks-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Positions & Ranks', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>
                <p class="gcso-ranks-intro"><?php esc_html_e('The Sheriff’s Office includes sworn, detention, and civilian positions across its operational and administrative functions.', 'gcso'); ?></p>
                <ul class="gcso-rank-list">
                    <?php foreach ($ranks as $rank) : ?>
                        <li><?php echo esc_html($rank); ?></li>
                    <?php endforeach; ?>
                </ul>
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
