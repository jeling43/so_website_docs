<?php
/**
 * Template Name: Divisions Landing
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

get_header();

$divisions = [
    [
        'title'       => __('Patrol Division', 'gcso'),
        'description' => __('Provides 24/7 law enforcement patrol services throughout Gordon County.', 'gcso'),
        'url'         => home_url('/divisions/patrol'),
    ],
    [
        'title'       => __('Criminal Investigations', 'gcso'),
        'description' => __('Investigates felony crimes, drug offenses, and complex criminal cases.', 'gcso'),
        'url'         => home_url('/divisions/criminal-investigations'),
    ],
    [
        'title'       => __('School Resource Officers', 'gcso'),
        'description' => __('Partners with local schools to ensure student safety and positive youth engagement.', 'gcso'),
        'url'         => home_url('/divisions/school-resource-officers'),
    ],
    [
        'title'       => __('Special Operations', 'gcso'),
        'description' => __('Specialized units including K-9, tactical operations, and traffic enforcement.', 'gcso'),
        'url'         => home_url('/divisions/special-operations'),
    ],
    [
        'title'       => __('Court Services', 'gcso'),
        'description' => __('Provides security for the Gordon County Justice Center and processes civil documents.', 'gcso'),
        'url'         => home_url('/divisions/court-services'),
    ],
];
?>

<main id="main-content" class="gcso-main" role="main">
    <?php get_template_part('template-parts/content/page-banner'); ?>

    <div class="gcso-container gcso-content-area">
        <?php gcso_breadcrumbs(); ?>

        <div class="gcso-service-page">
            <div class="gcso-service-page__intro">
                <p><?php esc_html_e('The Gordon County Sheriff\'s Office is organized into specialized divisions, each dedicated to a specific area of law enforcement and public service.', 'gcso'); ?></p>
            </div>

            <div class="gcso-division-grid">
                <?php foreach ($divisions as $division) : ?>
                    <a href="<?php echo esc_url($division['url']); ?>" class="gcso-division-grid__card">
                        <h3 class="gcso-division-grid__title"><?php echo esc_html($division['title']); ?></h3>
                        <p class="gcso-division-grid__desc"><?php echo esc_html($division['description']); ?></p>
                        <span class="gcso-division-grid__link" aria-hidden="true"><?php esc_html_e('Learn More', 'gcso'); ?> &rarr;</span>
                    </a>
                <?php endforeach; ?>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card gcso-info-card--full">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Jail Division', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('The Gordon County Jail is operated by the Sheriff\'s Office. For inmate information, visitation, bonds, and other jail services, visit the dedicated Jail page.', 'gcso'); ?></p>
                        <p>
                            <a href="<?php echo esc_url(home_url('/jail')); ?>" class="gcso-btn gcso-btn--navy">
                                <?php esc_html_e('Jail Information', 'gcso'); ?>
                            </a>
                        </p>
                    </div>
                </div>
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
