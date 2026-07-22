<?php
/**
 * Template Name: Organization
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
            <section class="gcso-org-structure" aria-labelledby="org-chart-heading">
                <h2 id="org-chart-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Organizational Structure', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <p class="gcso-org-structure__intro"><?php esc_html_e('The Sheriff and Chief Deputy provide executive leadership across two bureaus, each with specialized divisions serving Gordon County.', 'gcso'); ?></p>

                <div class="gcso-org-structure__hierarchy">
                    <div class="gcso-org-structure__role gcso-org-structure__role--primary">
                        <span><?php esc_html_e('Executive Leadership', 'gcso'); ?></span>
                        <strong><?php esc_html_e('Sheriff', 'gcso'); ?></strong>
                    </div>
                    <div class="gcso-org-structure__connector" aria-hidden="true"></div>
                    <div class="gcso-org-structure__role">
                        <span><?php esc_html_e('Second in Command', 'gcso'); ?></span>
                        <strong><?php esc_html_e('Chief Deputy', 'gcso'); ?></strong>
                    </div>
                    <div class="gcso-org-structure__connector gcso-org-structure__connector--split" aria-hidden="true"></div>
                    <div class="gcso-org-structure__bureaus">
                        <article class="gcso-org-structure__bureau">
                            <div class="gcso-org-structure__bureau-header">
                                <span><?php esc_html_e('Enforcement', 'gcso'); ?></span>
                                <strong><?php esc_html_e('Bureau', 'gcso'); ?></strong>
                            </div>
                            <div class="gcso-org-structure__bureau-body">
                                <span class="gcso-org-structure__bureau-link"><?php esc_html_e('Enforcement Bureau', 'gcso'); ?></span>
                                <ul>
                                    <li><?php esc_html_e('Patrol Division', 'gcso'); ?></li>
                                    <li><?php esc_html_e('Criminal Investigations', 'gcso'); ?></li>
                                    <li><?php esc_html_e('School Resource Officers', 'gcso'); ?></li>
                                    <li><?php esc_html_e('Special Operations', 'gcso'); ?></li>
                                </ul>
                            </div>
                        </article>
                        <article class="gcso-org-structure__bureau">
                            <div class="gcso-org-structure__bureau-header">
                                <span><?php esc_html_e('Judicial', 'gcso'); ?></span>
                                <strong><?php esc_html_e('Bureau', 'gcso'); ?></strong>
                            </div>
                            <div class="gcso-org-structure__bureau-body">
                                <span class="gcso-org-structure__bureau-link"><?php esc_html_e('Judicial Bureau', 'gcso'); ?></span>
                                <ul>
                                    <li><?php esc_html_e('Court Services', 'gcso'); ?></li>
                                    <li><a href="<?php echo esc_url(home_url('/jail/')); ?>"><?php esc_html_e('Jail Division', 'gcso'); ?></a></li>
                                </ul>
                            </div>
                        </article>
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
