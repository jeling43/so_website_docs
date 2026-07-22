<?php
/**
 * Template Name: Accessibility Statement
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
                <h2><?php esc_html_e('Our Commitment', 'gcso'); ?></h2>
                <p><?php esc_html_e('The Gordon County Sheriff’s Office is committed to making this website accessible and usable for everyone, including people with disabilities. We work to provide an inclusive online experience and to improve the site as technology and accessibility guidance evolve.', 'gcso'); ?></p>

                <h2><?php esc_html_e('Accessibility Standards', 'gcso'); ?></h2>
                <p><?php esc_html_e('We use the Web Content Accessibility Guidelines (WCAG) 2.1 Level AA as a guide for designing, testing, and maintaining this website. Accessibility is an ongoing effort, and some content or third-party services may not yet fully conform to every guideline.', 'gcso'); ?></p>

                <h2><?php esc_html_e('Accessibility Features', 'gcso'); ?></h2>
                <ul>
                    <li><?php esc_html_e('Keyboard-accessible navigation and controls', 'gcso'); ?></li>
                    <li><?php esc_html_e('Skip-to-content navigation for keyboard users', 'gcso'); ?></li>
                    <li><?php esc_html_e('Semantic headings, landmarks, and labels for assistive technology', 'gcso'); ?></li>
                    <li><?php esc_html_e('Text alternatives for meaningful images', 'gcso'); ?></li>
                    <li><?php esc_html_e('Readable color contrast and responsive layouts', 'gcso'); ?></li>
                    <li><?php esc_html_e('Visible focus indicators for interactive elements', 'gcso'); ?></li>
                </ul>

                <h2><?php esc_html_e('Third-Party Content', 'gcso'); ?></h2>
                <p><?php esc_html_e('Some pages include content or services provided by third parties, such as embedded forms, maps, payment services, or external websites. We cannot control the accessibility of those services, but we encourage visitors to report any difficulty so we can help identify an alternative.', 'gcso'); ?></p>

                <h2><?php esc_html_e('Report an Accessibility Issue', 'gcso'); ?></h2>
                <p><?php esc_html_e('If you encounter an accessibility barrier, please contact us with the page address, a description of the problem, and the technology you were using. We will review the issue and work to provide the information or service in an accessible format.', 'gcso'); ?></p>
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
