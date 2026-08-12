<?php
/**
 * Template Name: Meet the Sheriff
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

get_header();

$sheriff_name  = gcso_get_option('gcso_sheriff_name', 'Sheriff Mitch Ralston');
$sheriff_photo = gcso_get_option('gcso_sheriff_photo', GCSO_URI . '/assets/images/sheriff-placeholder.jpg');
?>

<main id="main-content" class="gcso-main" role="main">
    <?php get_template_part('template-parts/content/page-banner'); ?>

    <div class="gcso-container gcso-content-area">
        <?php gcso_breadcrumbs(); ?>

        <div class="gcso-service-page gcso-sheriff-profile">
            <section class="gcso-sheriff-profile__hero" aria-labelledby="sheriff-profile-heading">
                <div class="gcso-sheriff-profile__photo">
                    <img src="<?php echo esc_url($sheriff_photo); ?>" alt="<?php echo esc_attr($sheriff_name); ?>" loading="lazy">
                </div>
                <div class="gcso-sheriff-profile__intro">
                    <span class="gcso-sheriff-profile__eyebrow"><span aria-hidden="true"></span><?php esc_html_e('Meet the Sheriff', 'gcso'); ?></span>
                    <h2 id="sheriff-profile-heading"><?php echo esc_html($sheriff_name); ?></h2>
                    <p class="gcso-sheriff-profile__role"><?php esc_html_e('Gordon County Sheriff', 'gcso'); ?></p>
                    <p class="gcso-sheriff-profile__summary"><?php esc_html_e('Serving Gordon County with professionalism, integrity, and a commitment to public safety.', 'gcso'); ?></p>
                </div>
            </section>

            <section class="gcso-sheriff-profile__biography" aria-labelledby="sheriff-biography-heading">
                <div class="gcso-sheriff-profile__section-heading">
                    <h2 id="sheriff-biography-heading"><?php esc_html_e('Biography', 'gcso'); ?></h2>
                </div>
                <div class="gcso-sheriff-profile__text">
                    <p><?php esc_html_e('Sheriff Ralston is a native of Gordon County and has served as Sheriff since January 1, 2009. He is in his fifth term of office. Prior to serving as Sheriff, he retired from the Georgia State Patrol.', 'gcso'); ?></p>
                    <p><?php esc_html_e('Sheriff Ralston believes in a “community first” approach to public office and in being a good steward of the taxpayers’ money. He maintains quality relationships with the people here, our business community, and all of our other officials at the local and state level.', 'gcso'); ?></p>
                    <p><?php esc_html_e('“We serve the finest people in Georgia.”', 'gcso'); ?></p>
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
