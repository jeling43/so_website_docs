<?php
/**
 * Template Name: Privacy Policy
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
                <p><?php esc_html_e('The Gordon County Sheriff’s Office respects the privacy of all visitors to this website. This Privacy Policy explains what information we collect, how we use it, and how we protect your data.', 'gcso'); ?></p>

                <h2><?php esc_html_e('1. Information We Collect', 'gcso'); ?></h2>
                <p><?php esc_html_e('When you use this website, we may collect:', 'gcso'); ?></p>
                <ul>
                    <li><?php esc_html_e('Information you provide directly, such as when you fill out forms, submit requests, or contact the Sheriff’s Office.', 'gcso'); ?></li>
                    <li><?php esc_html_e('Technical information, such as your IP address, browser type, operating system, and pages visited, collected automatically through server logs and our website host.', 'gcso'); ?></li>
                    <li><?php esc_html_e('Cookies, which are small text files used to improve site functionality and user experience.', 'gcso'); ?></li>
                </ul>
                <p><?php esc_html_e('We do not collect personal information unless you choose to provide it voluntarily.', 'gcso'); ?></p>

                <h2><?php esc_html_e('2. How We Use Your Information', 'gcso'); ?></h2>
                <p><?php esc_html_e('We use the information collected to:', 'gcso'); ?></p>
                <ul>
                    <li><?php esc_html_e('Provide and improve access to public information and services.', 'gcso'); ?></li>
                    <li><?php esc_html_e('Respond to inquiries or service requests.', 'gcso'); ?></li>
                    <li><?php esc_html_e('Monitor website performance and security.', 'gcso'); ?></li>
                    <li><?php esc_html_e('Ensure accessibility, usability, and reliability of the website.', 'gcso'); ?></li>
                </ul>
                <p><?php esc_html_e('We do not use your information for commercial purposes, advertising, or profiling.', 'gcso'); ?></p>

                <h2><?php esc_html_e('3. How We Share Information', 'gcso'); ?></h2>
                <p><?php esc_html_e('We do not sell, rent, or trade your personal information. Information may be shared only:', 'gcso'); ?></p>
                <ul>
                    <li><?php esc_html_e('With authorized website and technology service providers who need it to provide services.', 'gcso'); ?></li>
                    <li><?php esc_html_e('With other government agencies when required to fulfill a public service request.', 'gcso'); ?></li>
                    <li><?php esc_html_e('As required by law.', 'gcso'); ?></li>
                </ul>
                <p><?php esc_html_e('Under the Georgia Open Records Act, information submitted through this website, including emails and form submissions, may be considered public record and subject to disclosure upon request.', 'gcso'); ?></p>

                <h2><?php esc_html_e('4. Data Security', 'gcso'); ?></h2>
                <p><?php esc_html_e('We take appropriate measures to protect the confidentiality, integrity, and availability of information collected on this website. However, no method of electronic storage or transmission is 100% secure.', 'gcso'); ?></p>

                <h2><?php esc_html_e('5. Third-Party Services', 'gcso'); ?></h2>
                <p><?php esc_html_e('Some pages on this website may include links to or services from third parties, including online forms, maps, social media, inmate-search services, and payment services. We are not responsible for the privacy practices of external sites. We encourage you to review their privacy policies before providing personal information.', 'gcso'); ?></p>

                <h2><?php esc_html_e('6. Children’s Privacy', 'gcso'); ?></h2>
                <p><?php esc_html_e('This website is intended to provide information and services to the public and is not directed toward children under the age of 13. We do not knowingly collect personal information from children.', 'gcso'); ?></p>

                <h2><?php esc_html_e('7. Your Choices', 'gcso'); ?></h2>
                <p><?php esc_html_e('You may disable cookies through your browser settings or choose not to provide personal information when requested, although this may limit access to certain services.', 'gcso'); ?></p>

                <h2><?php esc_html_e('8. Changes to This Privacy Policy', 'gcso'); ?></h2>
                <p><?php esc_html_e('We may update this Privacy Policy periodically to reflect changes in technology, law, or our practices. Updates will be posted on this page.', 'gcso'); ?></p>
            </div>
        </article>
    </div>
</main>

<?php get_footer(); ?>
