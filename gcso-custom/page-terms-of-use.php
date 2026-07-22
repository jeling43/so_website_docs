<?php
/**
 * Template Name: Terms of Use
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

        <article class="gcso-page-content gcso-legal-page">
            <div class="gcso-page-content__body gcso-content">
                <p><?php esc_html_e('By using this website, you agree to these Terms of Use. If you do not agree with these terms, please do not use the website.', 'gcso'); ?></p>

                <h2><?php esc_html_e('1. Website Purpose', 'gcso'); ?></h2>
                <p><?php esc_html_e('This website is provided by the Gordon County Sheriff’s Office to share public information, explain services, provide official notices, and offer online access to selected government services.', 'gcso'); ?></p>

                <h2><?php esc_html_e('2. Informational Use', 'gcso'); ?></h2>
                <p><?php esc_html_e('Website content is provided for general informational purposes. It may not include every applicable requirement, deadline, form, fee, policy, or legal exception. Official records, laws, court orders, and agency instructions control when they differ from information on this website.', 'gcso'); ?></p>

                <h2><?php esc_html_e('3. No Legal Advice or Emergency Service', 'gcso'); ?></h2>
                <p><?php esc_html_e('Information on this website is not legal advice and does not create an attorney-client relationship. This website is not monitored as an emergency communication service. For emergencies, call 911. Do not use website forms or email to report an emergency or request an immediate law-enforcement response.', 'gcso'); ?></p>

                <h2><?php esc_html_e('4. Acceptable Use', 'gcso'); ?></h2>
                <p><?php esc_html_e('You agree to use this website lawfully and not to interfere with its operation, attempt unauthorized access, introduce malicious code, misuse forms or services, impersonate another person, or submit information that is knowingly false, threatening, abusive, or unlawful.', 'gcso'); ?></p>

                <h2><?php esc_html_e('5. Forms and Submissions', 'gcso'); ?></h2>
                <p><?php esc_html_e('Information submitted through this website must be accurate to the best of your knowledge and relevant to the service requested. Submissions may be retained, reviewed, used for official purposes, and disclosed as required or permitted by law, including applicable public-records requirements.', 'gcso'); ?></p>

                <h2><?php esc_html_e('6. External Websites and Services', 'gcso'); ?></h2>
                <p><?php esc_html_e('This website may link to or include services operated by third parties, including online forms, maps, social media, inmate-search services, and payment services. External services are governed by their own terms and privacy policies. The Gordon County Sheriff’s Office does not control or guarantee the availability, accuracy, security, or accessibility of third-party services.', 'gcso'); ?></p>

                <h2><?php esc_html_e('7. Content and Availability', 'gcso'); ?></h2>
                <p><?php esc_html_e('We work to keep website information current and the website available, but content may contain errors, omissions, or outdated information, and access may be interrupted for maintenance, security, technical problems, or circumstances outside our control. We may change, suspend, or remove content or features without notice.', 'gcso'); ?></p>

                <h2><?php esc_html_e('8. Copyright and Government Records', 'gcso'); ?></h2>
                <p><?php esc_html_e('Unless otherwise noted, website materials are provided by the Gordon County Sheriff’s Office. Government records and other materials may be subject to separate copyright, licensing, trademark, privacy, and public-records requirements. Do not assume that all material may be copied or reused without restriction.', 'gcso'); ?></p>

                <h2><?php esc_html_e('9. Disclaimer and Limitation of Liability', 'gcso'); ?></h2>
                <p><?php esc_html_e('To the extent permitted by law, the Gordon County Sheriff’s Office disclaims warranties regarding the completeness, accuracy, reliability, availability, or fitness of website content and services. Use of this website is at your own risk. Nothing in these terms waives any immunity, defense, or protection available to Gordon County or the Sheriff’s Office under applicable law.', 'gcso'); ?></p>

                <h2><?php esc_html_e('10. Changes to These Terms', 'gcso'); ?></h2>
                <p><?php esc_html_e('These Terms of Use may be updated periodically to reflect changes in the website, services, technology, or applicable requirements. Updates will be posted on this page.', 'gcso'); ?></p>

                <h2><?php esc_html_e('11. Contact', 'gcso'); ?></h2>
                <p>
                    <strong><?php esc_html_e('Gordon County Sheriff’s Office', 'gcso'); ?></strong><br>
                    <?php echo esc_html(gcso_get_option('gcso_address', '2700 Highway 41 North, Calhoun, Georgia 30701')); ?><br>
                    <?php esc_html_e('Phone:', 'gcso'); ?> <a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1245')); ?>"><?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1245')); ?></a><br>
                    <?php esc_html_e('Email:', 'gcso'); ?> <a href="mailto:<?php echo esc_attr(gcso_get_option('gcso_email', 'info@gordonsheriff.org')); ?>"><?php echo esc_html(gcso_get_option('gcso_email', 'info@gordonsheriff.org')); ?></a>
                </p>
            </div>
        </article>
    </div>
</main>

<?php get_footer(); ?>
