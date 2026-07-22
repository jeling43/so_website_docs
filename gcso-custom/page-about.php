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

        <div class="gcso-service-page gcso-about-page">
            <section class="gcso-about-hero" aria-labelledby="about-hero-heading">
                <div class="gcso-about-hero__badge">
                    <img src="<?php echo esc_url(GCSO_URI . '/assets/images/badge-Photoroom.png'); ?>" alt="<?php esc_attr_e('Gordon County Sheriff’s Office badge', 'gcso'); ?>" width="180" height="180" loading="lazy">
                </div>
                <div class="gcso-about-hero__content">
                    <span class="gcso-about-hero__eyebrow"><span aria-hidden="true"></span><?php esc_html_e('About the Sheriff’s Office', 'gcso'); ?></span>
                    <h2 id="about-hero-heading"><?php esc_html_e('Leadership, Mission, and Service', 'gcso'); ?></h2>
                    <p><?php esc_html_e('Learn about the people, principles, and organizational structure behind the Gordon County Sheriff’s Office.', 'gcso'); ?></p>
                </div>
            </section>

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
