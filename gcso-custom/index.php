<?php
/**
 * Main fallback template file.
 *
 * @package GCSO_Custom
 */

get_header();
?>
<main id="primary" class="site-main">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <article class="no-results not-found">
            <header class="entry-header">
                <h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'gcso' ); ?></h1>
            </header>
            <div class="entry-content">
                <p><?php esc_html_e( 'It seems we can\'t find what you\'re looking for.', 'gcso' ); ?></p>
            </div>
        </article>
    <?php endif; ?>
</main>
<?php
get_footer();
