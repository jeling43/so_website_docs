<?php
/**
 * Template Name: Submit a Tip
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
                <p><?php esc_html_e('Help keep Gordon County safe. If you have information about a crime or suspicious activity, you can submit a tip to the Sheriff\'s Office. All tips are reviewed and may be submitted anonymously.', 'gcso'); ?></p>
            </div>

            <div class="gcso-alert-box">
                <p>
                    <strong><?php esc_html_e('For emergencies, always call 911.', 'gcso'); ?></strong>
                    <?php esc_html_e('The tip line is not for reporting emergencies or crimes in progress.', 'gcso'); ?>
                </p>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card gcso-info-card--highlight">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Call the Tip Line', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body gcso-info-card__body--center">
                        <p class="gcso-tip-phone">
                            <!-- TODO: VERIFY BEFORE PRODUCTION - Confirm correct tip line number (706-879-5485 or 706-879-5515?) -->
                            <a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1244')); ?>">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="24" height="24"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24 11.36 11.36 0 003.58.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.36 11.36 0 00.57 3.58 1 1 0 01-.24 1.01l-2.2 2.2z"/></svg>
                                <?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1244')); ?>
                            </a>
                        </p>
                        <p><?php esc_html_e('Available 24 hours a day, 7 days a week', 'gcso'); ?></p>
                        <p><?php esc_html_e('Tips may be submitted anonymously.', 'gcso'); ?></p>
                    </div>
                </div>

                <div class="gcso-info-card gcso-info-card--highlight">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Non-Emergency Line', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body gcso-info-card__body--center">
                        <p class="gcso-tip-phone">
                            <a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1244')); ?>">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="24" height="24"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24 11.36 11.36 0 003.58.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.36 11.36 0 00.57 3.58 1 1 0 01-.24 1.01l-2.2 2.2z"/></svg>
                                <?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1244')); ?>
                            </a>
                        </p>
                        <p><?php esc_html_e('For non-emergency reports and questions', 'gcso'); ?></p>
                    </div>
                </div>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card gcso-info-card--full">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Types of Information You Can Report', 'gcso'); ?></h3>
                    <ul class="gcso-info-card__list gcso-info-card__list--columns">
                        <li><?php esc_html_e('Drug activity', 'gcso'); ?></li>
                        <li><?php esc_html_e('Suspicious persons or vehicles', 'gcso'); ?></li>
                        <li><?php esc_html_e('Wanted persons', 'gcso'); ?></li>
                        <li><?php esc_html_e('Theft or burglary', 'gcso'); ?></li>
                        <li><?php esc_html_e('Vandalism or property damage', 'gcso'); ?></li>
                        <li><?php esc_html_e('Child or elder abuse', 'gcso'); ?></li>
                        <li><?php esc_html_e('Animal cruelty', 'gcso'); ?></li>
                        <li><?php esc_html_e('Any criminal activity', 'gcso'); ?></li>
                    </ul>
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
