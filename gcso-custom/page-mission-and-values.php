<?php
/**
 * Template Name: Mission and Values
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
                <p><?php esc_html_e('The Gordon County Sheriff\'s Office is guided by a commitment to serve with integrity, professionalism, and respect for all members of our community.', 'gcso'); ?></p>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Our Mission', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <!-- TODO: VERIFY BEFORE PRODUCTION - Confirm official mission statement -->
                        <p><?php esc_html_e('To protect and serve the citizens of Gordon County through professional law enforcement, community partnership, and unwavering dedication to public safety.', 'gcso'); ?></p>
                    </div>
                </div>

                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Our Vision', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <!-- TODO: VERIFY BEFORE PRODUCTION - Confirm official vision statement -->
                        <p><?php esc_html_e('To be a nationally recognized law enforcement agency known for excellence, integrity, and community trust.', 'gcso'); ?></p>
                    </div>
                </div>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card gcso-info-card--full">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Core Values', 'gcso'); ?></h3>
                    <ul class="gcso-info-card__list gcso-info-card__list--columns">
                        <li><?php esc_html_e('Integrity', 'gcso'); ?></li>
                        <li><?php esc_html_e('Professionalism', 'gcso'); ?></li>
                        <li><?php esc_html_e('Accountability', 'gcso'); ?></li>
                        <li><?php esc_html_e('Respect', 'gcso'); ?></li>
                        <li><?php esc_html_e('Service', 'gcso'); ?></li>
                        <li><?php esc_html_e('Courage', 'gcso'); ?></li>
                    </ul>
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
