<?php
/**
 * Template Name: Employment / Careers
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
                <p><?php esc_html_e('The Gordon County Sheriff\'s Office is always looking for dedicated men and women to join our team. We offer competitive pay, benefits, and the opportunity to serve your community.', 'gcso'); ?></p>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Why Join GCSO?', 'gcso'); ?></h3>
                    <ul class="gcso-info-card__list">
                        <li><?php esc_html_e('Competitive salary and benefits', 'gcso'); ?></li>
                        <li><?php esc_html_e('Retirement plan through Georgia Sheriffs\' Pension Fund', 'gcso'); ?></li>
                        <li><?php esc_html_e('Health, dental, and vision insurance', 'gcso'); ?></li>
                        <li><?php esc_html_e('Paid training and continuing education', 'gcso'); ?></li>
                        <li><?php esc_html_e('Opportunities for advancement', 'gcso'); ?></li>
                        <li><?php esc_html_e('Serve and protect your community', 'gcso'); ?></li>
                    </ul>
                </div>

                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Basic Requirements', 'gcso'); ?></h3>
                    <ul class="gcso-info-card__list">
                        <li><?php esc_html_e('Must be at least 21 years of age', 'gcso'); ?></li>
                        <li><?php esc_html_e('US Citizen', 'gcso'); ?></li>
                        <li><?php esc_html_e('High school diploma or GED', 'gcso'); ?></li>
                        <li><?php esc_html_e('Valid Georgia driver\'s license', 'gcso'); ?></li>
                        <li><?php esc_html_e('No felony convictions', 'gcso'); ?></li>
                        <li><?php esc_html_e('Pass background investigation, drug screening, and physical fitness test', 'gcso'); ?></li>
                    </ul>
                </div>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card gcso-info-card--full gcso-info-card--highlight">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('How to Apply', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('Applications may be picked up at the Gordon County Justice Center or downloaded below. Completed applications can be returned in person or mailed to:', 'gcso'); ?></p>
                        <p>
                            <strong><?php esc_html_e('Gordon County Sheriff\'s Office', 'gcso'); ?></strong><br>
                            <?php echo esc_html(gcso_get_option('gcso_address', '100 Public Safety Way, Calhoun, GA 30701')); ?>
                        </p>
                        <p>
                            <strong><?php esc_html_e('Questions?', 'gcso'); ?></strong>
                            <?php esc_html_e('Call', 'gcso'); ?>
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
