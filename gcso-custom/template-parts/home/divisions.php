<?php
/**
 * Divisions Section Template Part
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

$divisions = [
    [
        'title' => __('Administration', 'gcso'),
        'url'   => home_url('/divisions/administration/'),
        'image' => GCSO_URI . '/assets/images/admin.png',
    ],
    [
        'title' => __('Enforcement', 'gcso'),
        'url'   => home_url('/divisions/enforcement-bureau/'),
        'image' => GCSO_URI . '/assets/images/enforcement.png',
    ],
    [
        'title' => __('Judicial Services', 'gcso'),
        'url'   => home_url('/divisions/judicial-bureau/'),
        'image' => GCSO_URI . '/assets/images/judicial.png',
    ],
    [
        'title' => __('Jail Division', 'gcso'),
        'url'   => home_url('/jail/'),
        'image' => GCSO_URI . '/assets/images/jail.png',
    ],
];
?>

<section class="gcso-divisions" aria-labelledby="divisions-heading">
    <div class="gcso-container">
        <h2 id="divisions-heading" class="gcso-section-heading">
            <span class="gcso-section-heading__line"></span>
            <?php esc_html_e('Our Divisions', 'gcso'); ?>
            <span class="gcso-section-heading__line"></span>
        </h2>
        <div class="gcso-divisions__grid">
            <?php foreach ($divisions as $division) : ?>
                <a href="<?php echo esc_url($division['url']); ?>" class="gcso-divisions__card">
                    <div class="gcso-divisions__image">
                        <img src="<?php echo esc_url($division['image']); ?>" alt="<?php echo esc_attr($division['title']); ?>" loading="lazy" width="300" height="200">
                    </div>
                    <div class="gcso-divisions__info">
                        <span class="gcso-divisions__icon">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4z"/></svg>
                        </span>
                        <span class="gcso-divisions__title"><?php echo esc_html($division['title']); ?></span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
