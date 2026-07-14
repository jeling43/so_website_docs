<?php
/**
 * Template Name: Meet the Sheriff
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

get_header();

$sheriff_name  = gcso_get_option('gcso_sheriff_name', 'Sheriff');
$sheriff_photo = gcso_get_option('gcso_sheriff_photo', '');
?>

<main id="main-content" class="gcso-main" role="main">
    <?php get_template_part('template-parts/content/page-banner'); ?>

    <div class="gcso-container gcso-content-area">
        <?php gcso_breadcrumbs(); ?>

        <div class="gcso-service-page">
            <section class="gcso-sheriff-bio" aria-labelledby="sheriff-bio-heading">
                <div class="gcso-sheriff-bio__layout">
                    <?php if ($sheriff_photo) : ?>
                        <div class="gcso-sheriff-bio__photo">
                            <img src="<?php echo esc_url($sheriff_photo); ?>" alt="<?php echo esc_attr($sheriff_name); ?>" loading="lazy">
                        </div>
                    <?php endif; ?>
                    <div class="gcso-sheriff-bio__content">
                        <h2 id="sheriff-bio-heading"><?php echo esc_html($sheriff_name); ?></h2>
                        <!-- TODO: VERIFY BEFORE PRODUCTION - Sheriff biography content -->
                        <p><?php esc_html_e('The Gordon County Sheriff\'s Office is led by a dedicated public servant committed to the safety and well-being of all Gordon County residents.', 'gcso'); ?></p>
                    </div>
                </div>
            </section>

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
