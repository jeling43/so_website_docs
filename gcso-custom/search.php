<?php
/**
 * Search Results Template
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="main-content" class="gcso-main" role="main">
    <div class="gcso-page-banner gcso-page-banner--search">
        <div class="gcso-container">
            <h1 class="gcso-page-banner__title">
                <?php printf(esc_html__('Search Results for: %s', 'gcso'), '<span>' . esc_html(get_search_query()) . '</span>'); ?>
            </h1>
        </div>
    </div>

    <div class="gcso-container gcso-content-area">
        <?php gcso_breadcrumbs(); ?>

        <div class="gcso-search-results__form">
            <?php get_search_form(); ?>
        </div>

        <?php if (have_posts()) : ?>
            <p class="gcso-search-results__count">
                <?php printf(esc_html__('Found %d results', 'gcso'), (int) $wp_query->found_posts); ?>
            </p>
            <div class="gcso-search-results__list">
                <?php while (have_posts()) : the_post(); ?>
                    <article <?php post_class('gcso-search-results__item'); ?>>
                        <h2 class="gcso-search-results__title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <p class="gcso-search-results__excerpt"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 30)); ?></p>
                        <a href="<?php the_permalink(); ?>" class="gcso-search-results__link"><?php echo esc_url(get_permalink()); ?></a>
                    </article>
                <?php endwhile; ?>
            </div>

            <nav class="gcso-pagination" aria-label="<?php esc_attr_e('Search results navigation', 'gcso'); ?>">
                <?php the_posts_pagination(['mid_size' => 2]); ?>
            </nav>
        <?php else : ?>
            <div class="gcso-search-results__empty">
                <h2><?php esc_html_e('No results found', 'gcso'); ?></h2>
                <p><?php esc_html_e('Sorry, no results were found for your search. Please try again with different keywords.', 'gcso'); ?></p>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
