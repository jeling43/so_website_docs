<?php
/**
 * Archive Template
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

        <?php if (have_posts()) : ?>
            <div class="gcso-archive__grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('gcso-archive__card'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" class="gcso-archive__image">
                                <?php the_post_thumbnail('gcso-news-thumb', ['loading' => 'lazy']); ?>
                            </a>
                        <?php endif; ?>
                        <div class="gcso-archive__content">
                            <h2 class="gcso-archive__title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <time class="gcso-archive__date" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                <?php echo esc_html(get_the_date()); ?>
                            </time>
                            <p class="gcso-archive__excerpt"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 20)); ?></p>
                            <a href="<?php the_permalink(); ?>" class="gcso-archive__read-more">
                                <?php esc_html_e('Read More', 'gcso'); ?> <span aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <nav class="gcso-pagination" aria-label="<?php esc_attr_e('Posts navigation', 'gcso'); ?>">
                <?php
                the_posts_pagination([
                    'mid_size'  => 2,
                    'prev_text' => esc_html__('&laquo; Previous', 'gcso'),
                    'next_text' => esc_html__('Next &raquo;', 'gcso'),
                ]);
                ?>
            </nav>
        <?php else : ?>
            <p><?php esc_html_e('No posts found.', 'gcso'); ?></p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
