<?php
/**
 * Template Name: Division - Criminal Investigations
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
                <p><?php esc_html_e('The Criminal Investigations Division (CID) is responsible for investigating felony crimes and complex criminal cases in Gordon County. Detectives work diligently to solve crimes and bring offenders to justice.', 'gcso'); ?></p>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Types of Investigations', 'gcso'); ?></h3>
                    <ul class="gcso-info-card__list">
                        <li><?php esc_html_e('Homicide and violent crimes', 'gcso'); ?></li>
                        <li><?php esc_html_e('Sexual assault and crimes against children', 'gcso'); ?></li>
                        <li><?php esc_html_e('Robbery and burglary', 'gcso'); ?></li>
                        <li><?php esc_html_e('Drug trafficking and narcotics', 'gcso'); ?></li>
                        <li><?php esc_html_e('Fraud and financial crimes', 'gcso'); ?></li>
                        <li><?php esc_html_e('Computer crimes', 'gcso'); ?></li>
                    </ul>
                </div>

                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('How You Can Help', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('If you have information about a crime or an active investigation, your help could make the difference.', 'gcso'); ?></p>
                        <ul class="gcso-info-card__list">
                            <li>
                                <a href="<?php echo esc_url(home_url('/services/submit-a-tip')); ?>">
                                    <?php esc_html_e('Submit a Tip', 'gcso'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(home_url('/services/request-a-report')); ?>">
                                    <?php esc_html_e('Provide Additional Case Information', 'gcso'); ?>
                                </a>
                            </li>
                        </ul>
                        <p><strong><?php esc_html_e('For emergencies, call 911.', 'gcso'); ?></strong></p>
                    </div>
                </div>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card gcso-info-card--full">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Contact Criminal Investigations', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p>
                            <strong><?php esc_html_e('Phone:', 'gcso'); ?></strong>
                            <!-- TODO: VERIFY BEFORE PRODUCTION - CID phone number -->
                            <a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1245')); ?>"><?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1245')); ?></a>
                        </p>
                        <p>
                            <strong><?php esc_html_e('Location:', 'gcso'); ?></strong>
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
