<?php
/**
 * Template Name: Submit Additional Information
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
                <p><?php esc_html_e('If you have additional information related to an existing case or report, you can submit it to the Gordon County Sheriff\'s Office. Your information could be critical to an investigation.', 'gcso'); ?></p>
            </div>

            <div class="gcso-alert-box">
                <p>
                    <strong><?php esc_html_e('For emergencies, call 911.', 'gcso'); ?></strong>
                    <?php esc_html_e('This form is for non-emergency supplemental information only.', 'gcso'); ?>
                </p>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('What You Need', 'gcso'); ?></h3>
                    <ul class="gcso-info-card__list">
                        <li><?php esc_html_e('Case number or report number', 'gcso'); ?></li>
                        <li><?php esc_html_e('Date of the original incident', 'gcso'); ?></li>
                        <li><?php esc_html_e('Your contact information', 'gcso'); ?></li>
                        <li><?php esc_html_e('Detailed description of the additional information', 'gcso'); ?></li>
                    </ul>
                </div>

                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('How to Submit', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('You may submit additional information by:', 'gcso'); ?></p>
                        <ul class="gcso-info-card__list">
                            <li><?php esc_html_e('Visiting the Sheriff\'s Office in person', 'gcso'); ?></li>
                            <li><?php esc_html_e('Calling the non-emergency line', 'gcso'); ?></li>
                            <li><?php esc_html_e('Requesting to speak with the assigned detective or deputy', 'gcso'); ?></li>
                        </ul>
                        <p>
                            <strong><?php esc_html_e('Non-Emergency:', 'gcso'); ?></strong>
                            <a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1244')); ?>"><?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1244')); ?></a>
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
