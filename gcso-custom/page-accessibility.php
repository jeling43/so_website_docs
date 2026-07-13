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
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; else : ?>
                    <p class="gcso-legal-page__updated"><?php esc_html_e('Last updated:', 'gcso'); ?> <?php echo esc_html(wp_date('F j, Y')); ?></p>

                    <h2><?php esc_html_e('Our Commitment', 'gcso'); ?></h2>
                    <p><?php esc_html_e('The Gordon County Sheriff\'s Office is committed to ensuring that our website is accessible to all users, including those with disabilities. We strive to meet or exceed the Web Content Accessibility Guidelines (WCAG) 2.1 Level AA standards.', 'gcso'); ?></p>

                    <h2><?php esc_html_e('Accessibility Features', 'gcso'); ?></h2>
                    <ul>
                        <li><?php esc_html_e('Keyboard navigation support throughout the site', 'gcso'); ?></li>
                        <li><?php esc_html_e('Descriptive alt text for images', 'gcso'); ?></li>
                        <li><?php esc_html_e('Proper heading structure for screen readers', 'gcso'); ?></li>
                        <li><?php esc_html_e('Sufficient color contrast ratios', 'gcso'); ?></li>
                        <li><?php esc_html_e('Skip-to-content link for keyboard users', 'gcso'); ?></li>
                        <li><?php esc_html_e('ARIA labels and landmarks for assistive technology', 'gcso'); ?></li>
                        <li><?php esc_html_e('Responsive design for all device sizes', 'gcso'); ?></li>
                    </ul>

                    <h2><?php esc_html_e('Feedback', 'gcso'); ?></h2>
                    <p>
                        <?php esc_html_e('If you encounter any accessibility barriers on this website, please contact us so we can address the issue:', 'gcso'); ?><br>
                        <strong><?php esc_html_e('Gordon County Sheriff\'s Office', 'gcso'); ?></strong><br>
                        <?php echo esc_html(gcso_get_option('gcso_address', '100 Public Safety Way, Calhoun, GA 30701')); ?><br>
                        <?php esc_html_e('Phone:', 'gcso'); ?> <a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1244')); ?>"><?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1244')); ?></a><br>
                        <?php esc_html_e('Email:', 'gcso'); ?> <a href="mailto:<?php echo esc_attr(gcso_get_option('gcso_email', 'info@gordonsheriff.org')); ?>"><?php echo esc_html(gcso_get_option('gcso_email', 'info@gordonsheriff.org')); ?></a>
                    </p>
                <?php endif; ?>
            </div>
        </article>
    </div>
</main>

<?php get_footer(); ?>
