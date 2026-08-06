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
            <aside class="gcso-policy-notice" role="note">
                <strong><?php esc_html_e('Important information', 'gcso'); ?></strong>
                <p><?php esc_html_e('This page is provided for general information and is not legal advice. Requirements, fees, forms, and procedures may change. Contact the Sheriff\'s Office before submitting a registration.', 'gcso'); ?></p>
            </aside>

            <div class="gcso-service-page__intro">
                <p><?php esc_html_e('Secondary metals recyclers who purchase regulated metal property in any quantity must register with the appropriate sheriff\'s office(s). Review the registration information and requirements below.', 'gcso'); ?></p>
            </div>

            <div class="gcso-info-cards gcso-info-cards--two">
                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Registration Information', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p><?php esc_html_e('Under Georgia law, a secondary metals recycler may not purchase regulated metal property without registering as required by O.C.G.A. § 10-1-359.1. Businesses generally register with the sheriff of each county where they maintain a place of business. Individuals register according to the requirements established by Georgia law.', 'gcso'); ?></p>
                        <p><?php esc_html_e('Registrations operate on a calendar-year basis and must be renewed annually by January 1. The Sheriff\'s Office maintains registration records and enters registration information into the statewide database.', 'gcso'); ?></p>
                    </div>
                </div>

                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Registration Requirements', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <ul>
                            <li><?php esc_html_e('Submit the registration form and any required supporting documents.', 'gcso'); ?></li>
                            <li><?php esc_html_e('Provide a current and valid business license when applicable.', 'gcso'); ?></li>
                            <li><?php esc_html_e('A registered agent registering for the first time may be required to complete a criminal background check and fingerprinting, with costs paid by the secondary metals recycler as provided by law.', 'gcso'); ?></li>
                            <li><?php esc_html_e('Provide the current database-contractor customer identification number when required.', 'gcso'); ?></li>
                            <li><?php esc_html_e('Pay the Gordon County Sheriff\'s Office $200.00 non-refundable registration fee before registration is considered.', 'gcso'); ?></li>
                            <li><?php esc_html_e('All checks returned for insufficient funds will be assessed a $30.00 charge.', 'gcso'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>

            <article class="gcso-page-content">
                <div class="gcso-page-content__body gcso-content">
                    <h2><?php esc_html_e('Transaction Reporting', 'gcso'); ?></h2>
                    <p><?php esc_html_e('Secondary metals recyclers must collect and retain the information required by Georgia law and submit required purchase-transaction information electronically to the Georgia Bureau of Investigation or its designated database provider. Under the applicable database rules, transaction information is generally uploaded within 48 hours of the purchase transaction.', 'gcso'); ?></p>
                    <p><?php esc_html_e('The GBI currently identifies LeadsOnline as the outside contractor that assists secondary metals recyclers with registration and transaction reporting.', 'gcso'); ?></p>

                    <h2><?php esc_html_e('Catalytic Converters and Regulated Materials', 'gcso'); ?></h2>
                    <p><?php esc_html_e('Georgia law includes additional restrictions for used, detached catalytic converters and certain other regulated materials. A person may not purchase, possess, transport, or sell a used, detached catalytic converter unless the person is authorized and has the documentation required by law.', 'gcso'); ?></p>
                    <p><?php esc_html_e('Cash-payment restrictions also apply. Current law limits cash payments and prohibits cash payments for certain materials, including used, detached catalytic converters, coils, used utility wire, used communications copper, copper wire, and batteries. Recyclers should review the current statute before completing a transaction.', 'gcso'); ?></p>

                    <h2><?php esc_html_e('Applicable Laws and Additional Information', 'gcso'); ?></h2>
                    <p><?php esc_html_e('The primary requirements are found in Title 10, Chapter 1, Article 14 of the Official Code of Georgia Annotated, including O.C.G.A. §§ 10-1-350 through 10-1-359.5. Other laws may apply to vehicle titles, records, and specific materials.', 'gcso'); ?></p>
                    <p><a href="https://gbi.georgia.gov/services/secondary-metals-recycling" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Georgia Bureau of Investigation: Secondary Metals Recycling information', 'gcso'); ?> <span aria-hidden="true">↗</span></a></p>
                    <p><a href="https://www.leadsonline.com/" target="_blank" rel="noopener noreferrer"><?php esc_html_e('LeadsOnline: registration and transaction-reporting assistance', 'gcso'); ?> <span aria-hidden="true">↗</span></a></p>
                    <p><?php esc_html_e('Recyclers may also consult the Georgia Recyclers Association for industry guidance. External guidance may not reflect the most recent law, so recyclers should confirm current requirements with the Sheriff\'s Office, GBI, or legal counsel.', 'gcso'); ?></p>
                    <p><strong><?php esc_html_e('Registration contact', 'gcso'); ?></strong><br>
                        <?php echo esc_html(gcso_get_option('gcso_address', '2700 Highway 41 North, Calhoun, Georgia 30701')); ?><br>
                        <?php esc_html_e('Phone:', 'gcso'); ?> <a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1245')); ?>"><?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1245')); ?></a>
                    </p>
                </div>
            </article>

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
