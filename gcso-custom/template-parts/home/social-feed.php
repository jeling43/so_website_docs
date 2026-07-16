<?php
/**
 * Social Media Feed Section Template Part
 *
 * Displays social media links and an optional embedded feed widget area.
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

$social_links = gcso_get_social_links();

$facebook_feed_url = '';
if (!empty($social_links['facebook'])) {
    $facebook_feed_url = add_query_arg([
        'href'                  => $social_links['facebook'],
        'tabs'                  => 'timeline',
        'width'                 => '500',
        'height'                => '600',
        'small_header'          => 'false',
        'adapt_container_width' => 'true',
        'hide_cover'            => 'false',
        'show_facepile'         => 'true',
    ], 'https://www.facebook.com/plugins/page.php');
}
?>

<section class="gcso-social-feed" aria-labelledby="social-heading">
    <div class="gcso-container">
        <h2 id="social-heading" class="gcso-section-heading">
            <span class="gcso-section-heading__line"></span>
            <?php esc_html_e('Stay Connected', 'gcso'); ?>
            <span class="gcso-section-heading__line"></span>
        </h2>
        <p class="gcso-social-feed__subtitle"><?php esc_html_e('Follow the Gordon County Sheriff\'s Office on social media for the latest updates, community news, and safety information.', 'gcso'); ?></p>

        <?php if ($facebook_feed_url) : ?>
            <div class="gcso-social-feed__content">
                <h3 class="gcso-social-feed__column-heading"><?php esc_html_e('Latest Updates', 'gcso'); ?></h3>
                <div class="gcso-social-feed__facebook">
                    <iframe
                        class="gcso-social-feed__facebook-frame"
                        src="<?php echo esc_url($facebook_feed_url); ?>"
                        title="<?php esc_attr_e('Gordon County Sheriff\'s Office Facebook feed', 'gcso'); ?>"
                        width="500"
                        height="600"
                        loading="lazy"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <a href="<?php echo esc_url($social_links['facebook']); ?>" class="gcso-btn gcso-btn--gold gcso-social-feed__view-all" target="_blank" rel="noopener noreferrer">
                    <?php esc_html_e('View All Posts on Facebook', 'gcso'); ?>
                </a>
            </div>
        <?php endif; ?>

        <?php if (is_active_sidebar('social-feed-1')) : ?>
            <div class="gcso-social-feed__widgets">
                <?php dynamic_sidebar('social-feed-1'); ?>
            </div>
        <?php endif; ?>
    </div>
</section>
