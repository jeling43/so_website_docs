<?php
/**
 * Template Name: Raffle Licenses
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
                <p><?php esc_html_e('Nonprofit organizations wishing to conduct a raffle in Gordon County must obtain a license from the Sheriff\'s Office. Review the eligibility requirements and application process below.', 'gcso'); ?></p>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Eligibility', 'gcso'); ?></h3>
                    <ul class="gcso-info-card__list">
                        <li><?php esc_html_e('Must be a registered 501(c) nonprofit organization', 'gcso'); ?></li>
                        <li><?php esc_html_e('Must have been in existence for at least two years', 'gcso'); ?></li>
                        <li><?php esc_html_e('Must operate within Gordon County', 'gcso'); ?></li>
                        <li><?php esc_html_e('Proceeds must benefit the nonprofit\'s stated purpose', 'gcso'); ?></li>
                    </ul>
                </div>

                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Required Documents', 'gcso'); ?></h3>
                    <ul class="gcso-info-card__list">
                        <li><?php esc_html_e('Completed raffle license application', 'gcso'); ?></li>
                        <li><?php esc_html_e('Proof of 501(c) tax-exempt status', 'gcso'); ?></li>
                        <li><?php esc_html_e('Description of the raffle (prizes, ticket price, dates)', 'gcso'); ?></li>
                        <li><?php esc_html_e('Application fee', 'gcso'); ?></li>
                    </ul>
                </div>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card gcso-info-card--full gcso-info-card--highlight">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('How to Apply', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <!-- TODO: VERIFY BEFORE PRODUCTION - Raffle license fees and process -->
                        <p><?php esc_html_e('Applications may be obtained at the Gordon County Sheriff\'s Office or downloaded below. Submit completed applications with all required documentation and fees to:', 'gcso'); ?></p>
                        <p>
                            <strong><?php esc_html_e('Gordon County Sheriff\'s Office', 'gcso'); ?></strong><br>
                            <?php echo esc_html(gcso_get_option('gcso_address', '100 Public Safety Way, Calhoun, GA 30701')); ?>
                        </p>
                        <p>
                            <strong><?php esc_html_e('Questions?', 'gcso'); ?></strong>
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
