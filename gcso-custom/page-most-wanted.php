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
                <p><?php esc_html_e('The following individuals are wanted by the Gordon County Sheriff\'s Office. If you have information about the location of any of these individuals, please contact us immediately. Do not attempt to apprehend any of these subjects yourself.', 'gcso'); ?></p>
            </div>

            <div class="gcso-alert-box">
                <p>
                    <strong><?php esc_html_e('Have Information?', 'gcso'); ?></strong>
                    <?php esc_html_e('Call', 'gcso'); ?>
                    <a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1244')); ?>"><?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1244')); ?></a>
                    <?php esc_html_e('or submit an anonymous tip.', 'gcso'); ?>
                </p>
            </div>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="gcso-page-content">
                    <div class="gcso-page-content__body gcso-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
