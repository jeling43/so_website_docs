<?php
/**
 * Front Page Template
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

get_header();
?>

<main id="main-content" class="gcso-main" role="main">
    <?php get_template_part('template-parts/home/hero'); ?>
    <?php get_template_part('template-parts/home/quick-links'); ?>
    <?php get_template_part('template-parts/home/sheriff-message'); ?>
    <?php get_template_part('template-parts/home/divisions'); ?>
    <?php get_template_part('template-parts/home/news'); ?>
    <?php get_template_part('template-parts/home/cta'); ?>
</main>

<?php get_footer(); ?>
