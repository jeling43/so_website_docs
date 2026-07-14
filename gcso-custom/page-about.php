<?php
/**
 * Template Name: About Landing
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
                <p><?php esc_html_e('The Gordon County Sheriff\'s Office is committed to protecting and serving the citizens of Gordon County. Learn about our leadership, mission, and organizational structure.', 'gcso'); ?></p>
            </div>

            <div class="gcso-info-cards">
                <a href="<?php echo esc_url(home_url('/about/meet-the-sheriff')); ?>" class="gcso-info-card gcso-info-card--link">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Meet the Sheriff', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('Learn about Sheriff\'s background, experience, and message to the community.', 'gcso'); ?></p>
                    </div>
                </a>

                <a href="<?php echo esc_url(home_url('/about/mission-and-values')); ?>" class="gcso-info-card gcso-info-card--link">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Mission and Values', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('Our mission statement, vision, and core values that guide everything we do.', 'gcso'); ?></p>
                    </div>
                </a>
            </div>

            <div class="gcso-info-cards">
                <a href="<?php echo esc_url(home_url('/about/command-staff')); ?>" class="gcso-info-card gcso-info-card--link">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Command Staff', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('Meet the leadership team of the Gordon County Sheriff\'s Office.', 'gcso'); ?></p>
                    </div>
                </a>

                <a href="<?php echo esc_url(home_url('/about/organization')); ?>" class="gcso-info-card gcso-info-card--link">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Organization', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('View our organizational structure and how our divisions work together.', 'gcso'); ?></p>
                    </div>
                </a>
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
