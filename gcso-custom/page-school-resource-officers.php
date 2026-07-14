<?php
/**
 * Template Name: Division - School Resource Officers
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
                <p><?php esc_html_e('The School Resource Officer (SRO) program places certified law enforcement officers in Gordon County schools to ensure student safety, foster positive relationships, and provide mentorship.', 'gcso'); ?></p>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Role of an SRO', 'gcso'); ?></h3>
                    <ul class="gcso-info-card__list">
                        <li><?php esc_html_e('Ensuring the physical safety of students and staff', 'gcso'); ?></li>
                        <li><?php esc_html_e('Building positive relationships with students', 'gcso'); ?></li>
                        <li><?php esc_html_e('Educating students on law enforcement and safety', 'gcso'); ?></li>
                        <li><?php esc_html_e('Serving as a liaison between the school and law enforcement', 'gcso'); ?></li>
                        <li><?php esc_html_e('Assisting with emergency preparedness and response plans', 'gcso'); ?></li>
                    </ul>
                </div>

                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Community Engagement', 'gcso'); ?></h3>
                    <ul class="gcso-info-card__list">
                        <li><?php esc_html_e('Classroom presentations on safety topics', 'gcso'); ?></li>
                        <li><?php esc_html_e('Mentoring at-risk youth', 'gcso'); ?></li>
                        <li><?php esc_html_e('Coordinating school safety drills', 'gcso'); ?></li>
                        <li><?php esc_html_e('Participating in school events and activities', 'gcso'); ?></li>
                        <li><?php esc_html_e('Working with parents and school administration', 'gcso'); ?></li>
                    </ul>
                </div>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card gcso-info-card--full">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Contact', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p>
                            <?php esc_html_e('For questions about the SRO program, contact the Gordon County Sheriff\'s Office:', 'gcso'); ?>
                        </p>
                        <p>
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
