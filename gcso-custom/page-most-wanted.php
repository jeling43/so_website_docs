<?php
/**
 * Template Name: Most Wanted
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
                <p><?php esc_html_e('The following individuals are wanted by the Gordon County Sheriff\'s Office. If you have information about the location of any of these individuals, please contact us immediately.', 'gcso'); ?></p>
            </div>

            <div class="gcso-alert-box">
                <p>
                    <strong><?php esc_html_e('Warning:', 'gcso'); ?></strong>
                    <?php esc_html_e('Do not attempt to apprehend any wanted individual yourself. Contact law enforcement immediately.', 'gcso'); ?>
                </p>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card gcso-info-card--highlight gcso-info-card--full">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Have Information?', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p>
                            <?php esc_html_e('Call', 'gcso'); ?>
                            <a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1244')); ?>"><?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1244')); ?></a>
                            <?php esc_html_e('or', 'gcso'); ?>
                            <a href="<?php echo esc_url(home_url('/services/submit-a-tip')); ?>"><?php esc_html_e('submit an anonymous tip', 'gcso'); ?></a>.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Currently Wanted Section -->
            <section aria-labelledby="currently-wanted-heading">
                <h2 id="currently-wanted-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Currently Wanted', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="gcso-page-content">
                        <div class="gcso-page-content__body gcso-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                <?php endwhile; endif; ?>
            </section>

            <!-- Captured Section -->
            <section aria-labelledby="captured-heading">
                <h2 id="captured-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Recently Captured', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>

                <p><?php esc_html_e('The following previously wanted individuals have been apprehended. Thank you to the community for your assistance.', 'gcso'); ?></p>
            </section>
        </div>
    </div>
</main>

<?php get_footer(); ?>
