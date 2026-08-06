<?php
/**
 * Template Name: News & Alerts
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

get_header();

$news_query = new WP_Query([
    'post_type'      => 'post',
    'posts_per_page' => 7,
    'post_status'    => 'publish',
    // Keep registry and other administrative posts out of the public news feed.
    'category_name'  => 'press-release',
    'orderby'        => 'date',
    'order'          => 'DESC',
]);

$archive_url = home_url('/category/press-release/');
$press_release_category = get_category_by_slug('press-release');
if ($press_release_category) {
    $archive_url = get_category_link($press_release_category->term_id);
}

$social_links = gcso_get_social_links();
?>

<main id="main-content" class="gcso-main gcso-news-alerts-page" role="main">
    <?php get_template_part('template-parts/content/page-banner'); ?>

    <div class="gcso-container gcso-content-area gcso-content-area--wide">
        <?php gcso_breadcrumbs(); ?>

        <div class="gcso-news-alerts">
            <div class="gcso-service-page__intro">
                <p><?php esc_html_e('Announcements, public-safety notices, and community updates from the Gordon County Sheriff’s Office.', 'gcso'); ?></p>
            </div>

            <nav class="gcso-news-alerts__filters" aria-label="News categories">
                <a href="#latest-news"><?php esc_html_e('Press Releases', 'gcso'); ?></a>
            </nav>

            <?php if ($news_query->have_posts()) : ?>
                <?php $news_query->the_post(); ?>
                <section id="latest-news" aria-labelledby="latest-news-heading">
                    <h2 id="latest-news-heading" class="gcso-section-heading">
                        <span class="gcso-section-heading__line"></span>
                            <?php esc_html_e('Featured Press Release', 'gcso'); ?>
                        <span class="gcso-section-heading__line"></span>
                    </h2>

                    <article class="gcso-news__featured">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" class="gcso-news__featured-image">
                                <?php the_post_thumbnail('gcso-hero', ['loading' => 'lazy']); ?>
                            </a>
                        <?php endif; ?>
                        <div class="gcso-news__featured-content">
                            <span class="gcso-news__badge"><?php esc_html_e('Latest', 'gcso'); ?></span>
                            <h3 class="gcso-news__featured-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="gcso-news__featured-excerpt"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 35)); ?></p>
                            <div class="gcso-news__meta">
                                <time class="gcso-news__date" datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('M j, Y')); ?></time>
                                <a href="<?php the_permalink(); ?>" class="gcso-news__read-more"><?php esc_html_e('Read Announcement', 'gcso'); ?> <span aria-hidden="true">→</span></a>
                            </div>
                        </div>
                    </article>
                </section>

                <?php if ($news_query->have_posts()) : ?>
                    <section aria-labelledby="recent-news-heading">
                        <h2 id="recent-news-heading" class="gcso-section-heading">
                            <span class="gcso-section-heading__line"></span>
                            <?php esc_html_e('Recent Press Releases', 'gcso'); ?>
                            <span class="gcso-section-heading__line"></span>
                        </h2>
                        <div class="gcso-news-alerts__grid">
                            <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                                <article class="gcso-news__card">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <a href="<?php the_permalink(); ?>" class="gcso-news__image"><?php the_post_thumbnail('gcso-news-thumb', ['loading' => 'lazy']); ?></a>
                                    <?php endif; ?>
                                    <div class="gcso-news__content">
                                        <h3 class="gcso-news__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <time class="gcso-news__date" datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('M j, Y')); ?></time>
                                        <p class="gcso-news__excerpt"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 20)); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="gcso-news__read-more"><?php esc_html_e('Read More', 'gcso'); ?> <span aria-hidden="true">→</span></a>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                        </div>
                    </section>
                <?php endif; ?>
            <?php else : ?>
                <section class="gcso-news-alerts__empty" aria-labelledby="latest-news-heading">
                    <h2 id="latest-news-heading"><?php esc_html_e('No current announcements', 'gcso'); ?></h2>
                    <p><?php esc_html_e('This page will display press releases as they are published.', 'gcso'); ?></p>
                </section>
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

            <p class="gcso-news-alerts__archive-link"><a href="<?php echo esc_url($archive_url); ?>"><?php esc_html_e('View Older Posts', 'gcso'); ?> <span aria-hidden="true">→</span></a></p>

            <section class="gcso-news-alerts__social" aria-labelledby="social-updates-heading">
                <h2 id="social-updates-heading" class="gcso-section-heading">
                    <span class="gcso-section-heading__line"></span>
                    <?php esc_html_e('Follow for Time-Sensitive Updates', 'gcso'); ?>
                    <span class="gcso-section-heading__line"></span>
                </h2>
                <p><?php esc_html_e('Follow the Gordon County Sheriff’s Office on social media for timely alerts, community news, and safety information.', 'gcso'); ?></p>
                <?php if (!empty($social_links['facebook'])) : ?>
                    <a href="<?php echo esc_url($social_links['facebook']); ?>" class="gcso-btn gcso-btn--gold" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Follow Us on Facebook', 'gcso'); ?></a>
                <?php endif; ?>
            </section>
        </div>
    </div>
</main>

<?php get_footer(); ?>
