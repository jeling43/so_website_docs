<?php
/**
 * Single Post Template
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

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('gcso-single'); ?>>
                <header class="gcso-single__header">
                    <div class="gcso-single__meta">
                        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
                        <span class="gcso-single__reading-time"><?php printf(esc_html__('%d min read', 'gcso'), gcso_reading_time()); ?></span>
                    </div>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                    <figure class="gcso-single__featured-image">
                        <?php the_post_thumbnail('large', ['loading' => 'eager']); ?>
                    </figure>
                <?php endif; ?>

                <div class="gcso-single__content gcso-content">
                    <?php the_content(); ?>
                </div>

                <footer class="gcso-single__footer">
                    <?php
                    $categories = get_the_category();
                    if ($categories) : ?>
                        <div class="gcso-single__categories">
                            <strong><?php esc_html_e('Categories:', 'gcso'); ?></strong>
                            <?php foreach ($categories as $cat) : ?>
                                <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>"><?php echo esc_html($cat->name); ?></a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <nav class="gcso-single__navigation" aria-label="<?php esc_attr_e('Post navigation', 'gcso'); ?>">
                        <?php
                        the_post_navigation([
                            'prev_text' => '<span class="gcso-single__nav-label">' . esc_html__('Previous', 'gcso') . '</span> %title',
                            'next_text' => '<span class="gcso-single__nav-label">' . esc_html__('Next', 'gcso') . '</span> %title',
                        ]);
                        ?>
                    </nav>
                </footer>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>
