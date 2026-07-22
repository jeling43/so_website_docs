<?php
/**
 * Template Name: Open Records Request
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
                <p><?php esc_html_e('Under the Georgia Open Records Act (O.C.G.A. § 50-18-70), the public has the right to inspect and copy public records. The Gordon County Sheriff\'s Office is committed to transparency and compliance with this law.', 'gcso'); ?></p>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('How to Submit a Request', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('Open Records Requests must be submitted in writing. You may submit your request:', 'gcso'); ?></p>
                        <ul class="gcso-info-card__list">
                            <li><?php esc_html_e('In person at the Sheriff\'s Office', 'gcso'); ?></li>
                            <li><?php esc_html_e('By mail', 'gcso'); ?></li>
                            <li><?php esc_html_e('By email', 'gcso'); ?></li>
                        </ul>
                    </div>
                </div>

                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Required Information', 'gcso'); ?></h3>
                    <ul class="gcso-info-card__list">
                        <li><?php esc_html_e('Your full name and contact information', 'gcso'); ?></li>
                        <li><?php esc_html_e('Specific records being requested', 'gcso'); ?></li>
                        <li><?php esc_html_e('Date range (if applicable)', 'gcso'); ?></li>
                        <li><?php esc_html_e('Preferred format (electronic or paper)', 'gcso'); ?></li>
                    </ul>
                </div>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Fees', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <!-- TODO: VERIFY BEFORE PRODUCTION - Open records fees -->
                        <p><?php esc_html_e('Fees may apply for searching, retrieving, and copying records. You will be notified of any charges before records are produced.', 'gcso'); ?></p>
                    </div>
                </div>

                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Response Time', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('Under Georgia law, the agency must respond within three (3) business days of receiving your request. The response may include the records, an estimated timeline for production, or a denial with legal basis.', 'gcso'); ?></p>
                    </div>
                </div>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card gcso-info-card--full gcso-info-card--highlight">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Custodian of Records', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <!-- TODO: VERIFY BEFORE PRODUCTION - Custodian of records contact information -->
                        <p>
                            <strong><?php esc_html_e('Gordon County Sheriff\'s Office', 'gcso'); ?></strong><br>
                            <?php esc_html_e('Attn: Open Records', 'gcso'); ?><br>
                            <?php echo esc_html(gcso_get_option('gcso_address', '2700 Highway 41 North, Calhoun, Georgia 30701')); ?>
                        </p>
                        <p>
                            <strong><?php esc_html_e('Phone:', 'gcso'); ?></strong>
                            <a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1245')); ?>"><?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1245')); ?></a>
                        </p>
                        <p>
                            <strong><?php esc_html_e('Email:', 'gcso'); ?></strong>
                            <a href="mailto:<?php echo esc_attr(gcso_get_option('gcso_email', 'info@gordonsheriff.org')); ?>"><?php echo esc_html(gcso_get_option('gcso_email', 'info@gordonsheriff.org')); ?></a>
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
