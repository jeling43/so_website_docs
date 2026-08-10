<?php
/**
 * Template Name: Public Records
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="main-content" class="gcso-main gcso-open-records-page" role="main">
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
                        <p><?php esc_html_e('Public Records Requests must be submitted in writing. You may submit your request:', 'gcso'); ?></p>
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
                <div class="gcso-info-card gcso-info-card--full">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Fees', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p><strong><?php esc_html_e('Effective August 15, 2026', 'gcso'); ?></strong></p>
                        <p><?php esc_html_e('Pursuant to GCSO ORR Policy No. 33 and O.C.G.A. § 50-18-71(c)(1)-(2), the hourly rate used to calculate search, retrieval, redaction, and transmission fees is $21.68 per hour. This rate does not exceed the salary of the lowest-paid full-time GCSO employee with the necessary skill and training to perform the request.', 'gcso'); ?></p>
                        <p><?php esc_html_e('Records will be transmitted electronically whenever possible. Copying fees may apply: $0.10 per paper page, $0.25 per disk, and $5.00 or $10.00 per thumb drive, depending on the drive size.', 'gcso'); ?></p>
                        <p><?php esc_html_e('The first 15 minutes of search, retrieval, redaction, and transmission time are provided at no charge. After the first 15 minutes, each additional 15-minute increment is billed at $5.42.', 'gcso'); ?></p>
                        <ul class="gcso-info-card__list">
                            <li><?php esc_html_e('15 minutes total: $0.00', 'gcso'); ?></li>
                            <li><?php esc_html_e('30 minutes total: $5.42', 'gcso'); ?></li>
                            <li><?php esc_html_e('45 minutes total: $10.84', 'gcso'); ?></li>
                            <li><?php esc_html_e('60 minutes total: $16.26', 'gcso'); ?></li>
                        </ul>
                        <p><?php esc_html_e('Invoices for amounts under $30.00 will be sent with the records and are due within 90 days of the date of electronic transmission or receipt. If the anticipated cost exceeds $25.00, the requester will be notified and must either provide written confirmation that payment will be made within 90 days or prepay the anticipated cost. Prepayment is required when the anticipated cost exceeds $500.00.', 'gcso'); ?></p>
                        <p><em><?php esc_html_e('Fees are subject to change based on salary increases and applicable law or policy updates.', 'gcso'); ?></em></p>
                    </div>
                </div>

                <div class="gcso-info-card gcso-info-card--full">
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
                            <?php esc_html_e('Attn: Public Records', 'gcso'); ?><br>
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
