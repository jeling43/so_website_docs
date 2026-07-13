<?php
/**
 * Template Name: Court Security
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
                <p><?php esc_html_e('The Court Security Division ensures the safety and security of all persons within the Gordon County Justice Center. Deputies assigned to court security are responsible for maintaining order, screening visitors, and protecting judges, attorneys, jurors, and the public.', 'gcso'); ?></p>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Visitor Guidelines', 'gcso'); ?></h3>
                    <ul class="gcso-info-card__list">
                        <li><?php esc_html_e('All visitors are subject to screening upon entry', 'gcso'); ?></li>
                        <li><?php esc_html_e('Weapons, sharp objects, and electronic devices may be prohibited in courtrooms', 'gcso'); ?></li>
                        <li><?php esc_html_e('Follow all directions from court security deputies', 'gcso'); ?></li>
                        <li><?php esc_html_e('Proper attire is required in all courtrooms', 'gcso'); ?></li>
                        <li><?php esc_html_e('Children must be supervised at all times', 'gcso'); ?></li>
                    </ul>
                </div>

                <div class="gcso-info-card">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Prohibited Items', 'gcso'); ?></h3>
                    <ul class="gcso-info-card__list">
                        <li><?php esc_html_e('Firearms and weapons of any kind', 'gcso'); ?></li>
                        <li><?php esc_html_e('Knives and sharp instruments', 'gcso'); ?></li>
                        <li><?php esc_html_e('Mace or pepper spray', 'gcso'); ?></li>
                        <li><?php esc_html_e('Recording devices (without court approval)', 'gcso'); ?></li>
                        <li><?php esc_html_e('Food and beverages in courtrooms', 'gcso'); ?></li>
                    </ul>
                </div>
            </div>

            <div class="gcso-info-cards">
                <div class="gcso-info-card gcso-info-card--full">
                    <h3 class="gcso-info-card__title"><?php esc_html_e('Contact Court Security', 'gcso'); ?></h3>
                    <div class="gcso-info-card__body">
                        <p>
                            <strong><?php esc_html_e('Location:', 'gcso'); ?></strong>
                            <?php esc_html_e('Gordon County Justice Center', 'gcso'); ?><br>
                            <?php echo esc_html(gcso_get_option('gcso_address', '100 Public Safety Way, Calhoun, GA 30701')); ?>
                        </p>
                        <p>
                            <strong><?php esc_html_e('Phone:', 'gcso'); ?></strong>
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
