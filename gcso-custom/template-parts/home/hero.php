<?php
/**
 * Hero Section Template Part — Carousel / Slider
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

// Build slides array — Slide 1 comes from existing customizer fields; slides 2 & 3 use their own settings.
$slides = [];
$primary_hero_image = gcso_get_option('gcso_hero_image', '');

if (empty($primary_hero_image)) {
    $primary_hero_image = GCSO_URI . '/assets/images/badge-hero.png';
}

// Slide 1 (primary – existing settings)
$slides[] = [
    'heading'     => gcso_get_option('gcso_hero_heading', 'Dedicated and Sworn to Serve Gordon County'),
    'description' => gcso_get_option('gcso_hero_description', 'Dedicated and Sworn to Serve'),
    'image'       => $primary_hero_image,
    'btn_text'    => gcso_get_option('gcso_hero_btn1_text', 'Inmate Search'),
    'btn_url'     => gcso_get_option('gcso_hero_btn1_url', '#'),
    'btn2_text'   => gcso_get_option('gcso_hero_btn2_text', 'Contact Us'),
    'btn2_url'    => gcso_get_option('gcso_hero_btn2_url', '#'),
];

// Slide 2
$s2_heading = gcso_get_option('gcso_hero_slide2_heading', 'On Patrol for Gordon County');
if ($s2_heading) {
    $slides[] = [
        'heading'     => $s2_heading,
        'description' => gcso_get_option('gcso_hero_slide2_description', 'Professional service, visible presence, and dedicated protection across our community.'),
        'image'       => gcso_get_option('gcso_hero_slide2_image', GCSO_URI . '/assets/images/hero-car-1.png'),
        'btn_text'    => gcso_get_option('gcso_hero_slide2_btn_text', 'Explore Patrol Services'),
        'btn_url'     => gcso_get_option('gcso_hero_slide2_btn_url', home_url('/patrol/')),
        'btn2_text'   => '',
        'btn2_url'    => '',
    ];
}

// Slide 3
$s3_heading = gcso_get_option('gcso_hero_slide3_heading', '');
if ($s3_heading) {
    $slides[] = [
        'heading'     => $s3_heading,
        'description' => gcso_get_option('gcso_hero_slide3_description', ''),
        'image'       => gcso_get_option('gcso_hero_slide3_image', ''),
        'btn_text'    => gcso_get_option('gcso_hero_slide3_btn_text', ''),
        'btn_url'     => gcso_get_option('gcso_hero_slide3_btn_url', '#'),
        'btn2_text'   => '',
        'btn2_url'    => '',
    ];
}

$slide_count = count($slides);
?>

<section class="gcso-hero-carousel" aria-label="<?php esc_attr_e('Hero', 'gcso'); ?>" aria-roledescription="carousel" tabindex="0">
    <div class="gcso-hero-carousel__track">
        <?php foreach ($slides as $index => $slide) : ?>
            <div class="gcso-hero-carousel__slide<?php echo $index === 0 ? ' is-active' : ''; ?>"
                 role="group"
                 aria-roledescription="slide"
                 aria-label="<?php printf(esc_attr__('Slide %1$d of %2$d', 'gcso'), $index + 1, $slide_count); ?>"
                 data-slide="<?php echo esc_attr($index); ?>">
                <?php if (!empty($slide['image'])) : ?>
                    <div class="gcso-hero-carousel__bg" style="background-image: url('<?php echo esc_url($slide['image']); ?>');" role="img" aria-label="<?php echo esc_attr($slide['heading']); ?>"></div>
                <?php endif; ?>
                <div class="gcso-hero-carousel__overlay"></div>
                <div class="gcso-container gcso-hero-carousel__content">
                    <h2 class="gcso-hero-carousel__heading"><?php echo esc_html($slide['heading']); ?></h2>
                    <?php if (!empty($slide['description'])) : ?>
                        <p class="gcso-hero-carousel__description"><?php echo esc_html($slide['description']); ?></p>
                    <?php endif; ?>
                    <div class="gcso-hero-carousel__actions">
                        <?php if (!empty($slide['btn_text'])) : ?>
                            <a href="<?php echo esc_url($slide['btn_url']); ?>" class="gcso-btn gcso-btn--gold"><?php echo esc_html($slide['btn_text']); ?></a>
                        <?php endif; ?>
                        <?php if (!empty($slide['btn2_text'])) : ?>
                            <a href="<?php echo esc_url($slide['btn2_url']); ?>" class="gcso-btn gcso-btn--outline-white"><?php echo esc_html($slide['btn2_text']); ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <?php if ($slide_count > 1) : ?>
        <!-- Arrows -->
        <button class="gcso-hero-carousel__arrow gcso-hero-carousel__arrow--prev" aria-label="<?php esc_attr_e('Previous slide', 'gcso'); ?>">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"/></svg>
        </button>
        <button class="gcso-hero-carousel__arrow gcso-hero-carousel__arrow--next" aria-label="<?php esc_attr_e('Next slide', 'gcso'); ?>">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 6 15 12 9 18"/></svg>
        </button>

        <!-- Dots -->
        <div class="gcso-hero-carousel__dots" role="tablist" aria-label="<?php esc_attr_e('Slide controls', 'gcso'); ?>">
            <?php for ($i = 0; $i < $slide_count; $i++) : ?>
                <button class="gcso-hero-carousel__dot<?php echo $i === 0 ? ' is-active' : ''; ?>"
                        role="tab"
                        aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>"
                        aria-label="<?php printf(esc_attr__('Go to slide %d', 'gcso'), $i + 1); ?>"
                        data-slide="<?php echo esc_attr($i); ?>"></button>
            <?php endfor; ?>
        </div>
    <?php endif; ?>
</section>
