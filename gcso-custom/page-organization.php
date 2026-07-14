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
            <div class="gcso-service-page__intro">
                <p><?php esc_html_e('The Gordon County Sheriff\'s Office is organized into specialized divisions to efficiently serve and protect our community.', 'gcso'); ?></p>
            </div>

            <section class="gcso-org-chart" aria-labelledby="org-chart-heading">
                <h2 id="org-chart-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Organizational Structure', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <div class="gcso-org-chart__tree" role="img" aria-label="<?php esc_attr_e('Gordon County Sheriff Office organizational chart showing the Sheriff at top, followed by Chief Deputy, then Enforcement Bureau and Judicial Bureau', 'gcso'); ?>">
                    <div class="gcso-org-chart__level gcso-org-chart__level--top">
                        <div class="gcso-org-chart__node gcso-org-chart__node--primary">
                            <?php esc_html_e('Sheriff', 'gcso'); ?>
                        </div>
                    </div>
                    <div class="gcso-org-chart__connector" aria-hidden="true"></div>
                    <div class="gcso-org-chart__level">
                        <div class="gcso-org-chart__node">
                            <?php esc_html_e('Chief Deputy', 'gcso'); ?>
                        </div>
                    </div>
                    <div class="gcso-org-chart__connector gcso-org-chart__connector--split" aria-hidden="true"></div>
                    <div class="gcso-org-chart__level gcso-org-chart__level--branches">
                        <div class="gcso-org-chart__branch">
                            <div class="gcso-org-chart__node">
                                <?php esc_html_e('Enforcement Bureau', 'gcso'); ?>
                            </div>
                            <ul class="gcso-org-chart__units">
                                <li><a href="<?php echo esc_url(home_url('/divisions/patrol')); ?>"><?php esc_html_e('Patrol Division', 'gcso'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url('/divisions/criminal-investigations')); ?>"><?php esc_html_e('Criminal Investigations', 'gcso'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url('/divisions/school-resource-officers')); ?>"><?php esc_html_e('School Resource Officers', 'gcso'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url('/divisions/special-operations')); ?>"><?php esc_html_e('Special Operations', 'gcso'); ?></a></li>
                            </ul>
                        </div>
                        <div class="gcso-org-chart__branch">
                            <div class="gcso-org-chart__node">
                                <?php esc_html_e('Judicial Bureau', 'gcso'); ?>
                            </div>
                            <ul class="gcso-org-chart__units">
                                <li><a href="<?php echo esc_url(home_url('/divisions/court-services')); ?>"><?php esc_html_e('Court Services', 'gcso'); ?></a></li>
                                <li><a href="<?php echo esc_url(home_url('/jail')); ?>"><?php esc_html_e('Jail Division', 'gcso'); ?></a></li>
                            </ul>
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
