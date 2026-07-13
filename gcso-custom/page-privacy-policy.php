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
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; else : ?>
                    <p class="gcso-legal-page__updated"><?php esc_html_e('Last updated:', 'gcso'); ?> <?php echo esc_html(date('F j, Y')); ?></p>

                    <h2><?php esc_html_e('Information We Collect', 'gcso'); ?></h2>
                    <p><?php esc_html_e('The Gordon County Sheriff\'s Office website may collect information that you voluntarily provide, such as your name, email address, and phone number when you submit a form or request. We do not collect personal information unless you choose to provide it.', 'gcso'); ?></p>

                    <h2><?php esc_html_e('How We Use Your Information', 'gcso'); ?></h2>
                    <p><?php esc_html_e('Information submitted through this website is used solely for the purpose for which it was provided, such as responding to inquiries, processing requests, or providing services. We do not sell or share your personal information with third parties for marketing purposes.', 'gcso'); ?></p>

                    <h2><?php esc_html_e('Cookies and Analytics', 'gcso'); ?></h2>
                    <p><?php esc_html_e('This website may use cookies and analytics tools to improve user experience and track site usage. These tools collect anonymous data such as pages visited, time on site, and browser type.', 'gcso'); ?></p>

                    <h2><?php esc_html_e('Third-Party Links', 'gcso'); ?></h2>
                    <p><?php esc_html_e('This website may contain links to external sites. The Gordon County Sheriff\'s Office is not responsible for the privacy practices or content of third-party websites.', 'gcso'); ?></p>

                    <h2><?php esc_html_e('Public Records', 'gcso'); ?></h2>
                    <p><?php esc_html_e('As a government entity, certain records maintained by the Gordon County Sheriff\'s Office are subject to the Georgia Open Records Act (O.C.G.A. § 50-18-70). Information submitted through this website may become a public record.', 'gcso'); ?></p>

                    <h2><?php esc_html_e('Contact Us', 'gcso'); ?></h2>
                    <p>
                        <?php esc_html_e('If you have questions about this privacy policy, contact:', 'gcso'); ?><br>
                        <strong><?php esc_html_e('Gordon County Sheriff\'s Office', 'gcso'); ?></strong><br>
                        <?php echo esc_html(gcso_get_option('gcso_address', '100 Public Safety Way, Calhoun, GA 30701')); ?><br>
                        <a href="tel:<?php echo esc_attr(gcso_get_option('gcso_phone', '706-629-1244')); ?>"><?php echo esc_html(gcso_get_option('gcso_phone', '706-629-1244')); ?></a>
                    </p>
                <?php endif; ?>
            </div>
        </article>
    </div>
</main>

<?php get_footer(); ?>
