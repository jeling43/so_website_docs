<?php
/**
 * Template Name: Command Staff
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
                <p><?php esc_html_e('Meet the leadership team of the Gordon County Sheriff\'s Office. Our command staff provides strategic direction and oversees all agency operations.', 'gcso'); ?></p>
            </div>

            <section class="gcso-staff-directory" aria-labelledby="command-staff-heading">
                <h2 id="command-staff-heading" class="screen-reader-text"><?php esc_html_e('Command Staff Members', 'gcso'); ?></h2>

                <div class="gcso-staff-directory__grid">
                    <?php
                    $staff_query = new WP_Query([
                        'post_type'      => 'gcso_staff',
                        'posts_per_page' => -1,
                        'orderby'        => 'menu_order',
                        'order'          => 'ASC',
                    ]);

                    if ($staff_query->have_posts()) :
                        while ($staff_query->have_posts()) : $staff_query->the_post();
                            $rank     = get_post_meta(get_the_ID(), '_gcso_staff_rank', true);
                            $position = get_post_meta(get_the_ID(), '_gcso_staff_title', true);
                    ?>
                        <div class="gcso-staff-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="gcso-staff-card__photo">
                                    <?php the_post_thumbnail('gcso-card', ['loading' => 'lazy']); ?>
                                </div>
                            <?php endif; ?>
                            <div class="gcso-staff-card__info">
                                <h3 class="gcso-staff-card__name"><?php the_title(); ?></h3>
                                <?php if ($rank) : ?>
                                    <p class="gcso-staff-card__rank"><?php echo esc_html($rank); ?></p>
                                <?php endif; ?>
                                <?php if ($position) : ?>
                                    <p class="gcso-staff-card__position"><?php echo esc_html($position); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else :
                    ?>
                        <!-- TODO: VERIFY BEFORE PRODUCTION - Command staff information -->
                        <p><?php esc_html_e('Command staff information will be available soon.', 'gcso'); ?></p>
                    <?php endif; ?>
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
