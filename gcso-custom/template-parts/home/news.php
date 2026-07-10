<?php
/**
 * Latest News Section Template Part
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

$news_query = new WP_Query([
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
]);
?>

<section class="gcso-news" aria-labelledby="news-heading">
    <div class="gcso-container">
        <div class="gcso-news__header">
            <h2 id="news-heading" class="gcso-section-heading">
                <span class="gcso-section-heading__line"></span>
                <?php esc_html_e('Latest News & Press Releases', 'gcso'); ?>
                <span class="gcso-section-heading__line"></span>
            </h2>
            <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="gcso-btn gcso-btn--outline-navy">
                <?php esc_html_e('View All News', 'gcso'); ?>
            </a>
        </div>

        <?php if ($news_query->have_posts()) : ?>
            <div class="gcso-news__grid">
                <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                    <article class="gcso-news__card">
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" class="gcso-news__image">
                                <?php the_post_thumbnail('gcso-news-thumb', ['loading' => 'lazy']); ?>
                            </a>
                        <?php endif; ?>
                        <div class="gcso-news__content">
                            <h3 class="gcso-news__title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p class="gcso-news__excerpt"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 18)); ?></p>
                            <div class="gcso-news__meta">
                                <time class="gcso-news__date" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                    <svg class="gcso-icon" aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3h-1V1h-2v2H8V1H6v2H5c-1.1 0-2 .9-2 2v14a2 2 0 002 2h14a2 2 0 002-2V5c0-1.1-.9-2-2-2zm0 16H5V8h14v11z"/></svg>
                                    <?php echo esc_html(get_the_date('M j, Y')); ?>
                                </time>
                                <a href="<?php the_permalink(); ?>" class="gcso-news__read-more">
                                    <?php esc_html_e('Read More', 'gcso'); ?>
                                    <span aria-hidden="true">&rarr;</span>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p><?php esc_html_e('No news articles found.', 'gcso'); ?></p>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>
    </div>
</section>
