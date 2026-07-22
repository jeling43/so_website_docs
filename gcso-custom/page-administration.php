<?php
/**
 * Template Name: Administration
 *
 * Gordon County Sheriff's Office Administration information and contacts.
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

        <div class="gcso-service-page gcso-administration-page">
            <section aria-labelledby="administration-contacts-heading">
                <h2 id="administration-contacts-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Administration', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <div class="gcso-info-cards gcso-administration-contacts">
                    <div class="gcso-info-card gcso-info-card--full gcso-administration-card--primary">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Mitch Ralston', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body"><p><?php esc_html_e('Sheriff', 'gcso'); ?></p></div>
                    </div>
                    <div class="gcso-info-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Robert L. Paris', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body"><p><?php esc_html_e('Chief Deputy Sheriff', 'gcso'); ?></p></div>
                    </div>
                    <div class="gcso-info-card">
                        <h3 class="gcso-info-card__title"><?php esc_html_e('Shirley Woodall', 'gcso'); ?></h3>
                        <div class="gcso-info-card__body"><p><?php esc_html_e('Sheriff’s Secretary', 'gcso'); ?></p></div>
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
