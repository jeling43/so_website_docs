<?php
/**
 * Template Name: Civil Process
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
                <p><?php esc_html_e('The Civil Process Division of the Gordon County Sheriff\'s Office is responsible for the service of all civil papers issued by the courts. This includes subpoenas, summons, garnishments, dispossessory warrants, and other civil documents.', 'gcso'); ?></p>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Documents We Serve', 'gcso'); ?></h3>
                    <ul class="gcso-info-card__list">
                        <li><?php esc_html_e('Subpoenas', 'gcso'); ?></li>
                        <li><?php esc_html_e('Summons & Complaints', 'gcso'); ?></li>
                        <li><?php esc_html_e('Garnishments', 'gcso'); ?></li>
                        <li><?php esc_html_e('Dispossessory Warrants', 'gcso'); ?></li>
                        <li><?php esc_html_e('Restraining Orders / TPOs', 'gcso'); ?></li>
                        <li><?php esc_html_e('Writs of Possession', 'gcso'); ?></li>
                        <li><?php esc_html_e('Levy & Fi. Fa.', 'gcso'); ?></li>
                    </ul>
                </div>

                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('How to Submit', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('Civil papers may be submitted in person at the Gordon County Justice Center or by mail. Please include all required fees with your submission.', 'gcso'); ?></p>
                        <p>
                            <strong><?php esc_html_e('Mailing Address:', 'gcso'); ?></strong><br>
                            <?php echo esc_html(gcso_get_option('gcso_address', '2700 Highway 41 North, Calhoun, Georgia 30701')); ?>
                        </p>
                        <p>
                            <strong><?php esc_html_e('Phone:', 'gcso'); ?></strong><br>
                            <a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1245')); ?>"><?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1245')); ?></a>
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
