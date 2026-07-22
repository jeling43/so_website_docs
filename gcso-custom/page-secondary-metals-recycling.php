<?php
/**
 * Template Name: Secondary Metals Recycling
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
                <p><?php esc_html_e('Georgia law requires all secondary metals recyclers operating within Gordon County to register with the Sheriff\'s Office. Review the requirements and registration process below.', 'gcso'); ?></p>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Requirements', 'gcso'); ?></h3>
                    <ul class="gcso-info-card__list">
                        <li><?php esc_html_e('Must register with the Gordon County Sheriff\'s Office', 'gcso'); ?></li>
                        <li><?php esc_html_e('Must maintain transaction records', 'gcso'); ?></li>
                        <li><?php esc_html_e('Must obtain valid identification from all sellers', 'gcso'); ?></li>
                        <li><?php esc_html_e('Must hold purchased materials for the required holding period', 'gcso'); ?></li>
                        <li><?php esc_html_e('Must report transactions as required by Georgia law', 'gcso'); ?></li>
                    </ul>
                </div>

                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Registration', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <!-- TODO: VERIFY BEFORE PRODUCTION - Secondary metals registration process and fees -->
                        <p><?php esc_html_e('To register your business, contact the Gordon County Sheriff\'s Office for the required forms and documentation.', 'gcso'); ?></p>
                        <p>
                            <strong><?php esc_html_e('Phone:', 'gcso'); ?></strong>
                            <a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1245')); ?>"><?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1245')); ?></a>
                        </p>
                        <p>
                            <strong><?php esc_html_e('Address:', 'gcso'); ?></strong><br>
                            <?php echo esc_html(gcso_get_option('gcso_address', '2700 Highway 41 North, Calhoun, Georgia 30701')); ?>
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
