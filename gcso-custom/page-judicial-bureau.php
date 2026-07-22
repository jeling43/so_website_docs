<?php
/**
 * Template Name: Judicial Bureau
 *
 * Gordon County Sheriff's Office Judicial Bureau information and contacts.
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

        <div class="gcso-service-page gcso-judicial-page">
            <section aria-labelledby="judicial-divisions-heading">
                <h2 id="judicial-divisions-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Judicial Bureau Divisions', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <div class="gcso-info-cards">
                    <div class="gcso-info-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Jail Division', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p><?php esc_html_e('The Jail Division is responsible for the safe and secure operation of the county jail and its inmate occupants, and for maintaining the required records of incarcerated persons.', 'gcso'); ?></p>
                            <p class="gcso-bureau-card__action">
                                <a href="<?php echo esc_url(home_url('/jail/')); ?>" class="gcso-btn gcso-btn--gold">
                                    <?php esc_html_e('View Jail Division', 'gcso'); ?>
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="gcso-info-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Court Services Division', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body">
                            <p><?php esc_html_e('The Court Services Division receives and serves all court process, including warrants, civil actions, and summonses; transports inmates; and provides physical security for the Superior Court and judges.', 'gcso'); ?></p>
                        </div>
                    </div>
                </div>
            </section>

            <section aria-labelledby="judicial-contacts-heading">
                <h2 id="judicial-contacts-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Judicial Bureau Leadership', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>
                <div class="gcso-info-cards gcso-judicial-contacts">
                    <div class="gcso-info-card"><h3 class="gcso-info-card__title"><?php esc_html_e('Major Pat Bedford', 'gcso'); ?></h3><div class="gcso-info-card__body"><p><?php esc_html_e('Commanding Officer, Judicial Bureau', 'gcso'); ?></p></div></div>
                    <div class="gcso-info-card"><h3 class="gcso-info-card__title"><?php esc_html_e('Captain Dylan Nicholas', 'gcso'); ?></h3><div class="gcso-info-card__body"><p><?php esc_html_e('Commander, Jail Division', 'gcso'); ?></p></div></div>
                    <div class="gcso-info-card"><h3 class="gcso-info-card__title"><?php esc_html_e('Captain Keith Henson', 'gcso'); ?></h3><div class="gcso-info-card__body"><p><?php esc_html_e('Commander, Court Services Division', 'gcso'); ?></p></div></div>
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
