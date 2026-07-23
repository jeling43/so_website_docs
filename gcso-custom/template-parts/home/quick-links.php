<?php
/**
 * Quick Links Section Template Part
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

$quick_links = [
    [
        'title'    => __('Search Inmates', 'gcso'),
        'url'      => gcso_get_inmate_search_url(),
        'icon'     => '<svg viewBox="0 0 64 64" fill="currentColor" width="48" height="48"><rect x="18" y="8" width="28" height="40" rx="2" fill="none" stroke="currentColor" stroke-width="3"/><rect x="22" y="14" width="20" height="12" fill="none" stroke="currentColor" stroke-width="2"/><line x1="22" y1="32" x2="42" y2="32" stroke="currentColor" stroke-width="2"/><line x1="22" y1="38" x2="42" y2="38" stroke="currentColor" stroke-width="2"/><line x1="22" y1="44" x2="35" y2="44" stroke="currentColor" stroke-width="2"/><path d="M28 52h8v6h-8z" fill="currentColor"/></svg>',
        'external' => true,
    ],
    [
        'title'    => __('Request a Report', 'gcso'),
        'url'      => home_url('/services/request-a-report'),
        'icon'     => '<svg viewBox="0 0 64 64" fill="currentColor" width="48" height="48"><path d="M40 8H16a4 4 0 00-4 4v40a4 4 0 004 4h32a4 4 0 004-4V20L40 8z" fill="none" stroke="currentColor" stroke-width="3"/><path d="M40 8v12h12" fill="none" stroke="currentColor" stroke-width="3"/><line x1="20" y1="30" x2="44" y2="30" stroke="currentColor" stroke-width="2"/><line x1="20" y1="38" x2="44" y2="38" stroke="currentColor" stroke-width="2"/><line x1="20" y1="46" x2="36" y2="46" stroke="currentColor" stroke-width="2"/></svg>',
        'external' => false,
    ],
    [
        'title'    => __('Resources', 'gcso'),
        'url'      => home_url('/resources/'),
        'icon'     => '<svg viewBox="0 0 64 64" fill="currentColor" width="48" height="48"><path d="M10 16a4 4 0 014-4h14l5 6h17a4 4 0 014 4v26a4 4 0 01-4 4H14a4 4 0 01-4-4V16z" fill="none" stroke="currentColor" stroke-width="3"/><path d="M10 22h44" fill="none" stroke="currentColor" stroke-width="3"/></svg>',
        'external' => false,
    ],
    [
        'title'    => __('Submit a Tip', 'gcso'),
        'url'      => home_url('/services/submit-a-tip'),
        'icon'     => '<svg viewBox="0 0 64 64" fill="currentColor" width="48" height="48"><path d="M48 16H16a4 4 0 00-4 4v20a4 4 0 004 4h8l8 8 8-8h8a4 4 0 004-4V20a4 4 0 00-4-4z" fill="none" stroke="currentColor" stroke-width="3"/></svg>',
        'external' => false,
    ],
    [
        'title'    => __('Sex Offender Registry', 'gcso'),
        'url'      => home_url('/services/sex-offender-registry/'),
        'icon'     => '<svg viewBox="0 0 64 64" fill="currentColor" width="48" height="48"><circle cx="32" cy="32" r="24" fill="none" stroke="currentColor" stroke-width="3"/><circle cx="32" cy="24" r="7" fill="none" stroke="currentColor" stroke-width="3"/><path d="M18 48c1-8 6-12 14-12s13 4 14 12" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"/></svg>',
        'external' => false,
    ],
    [
        'title'    => __('Jail Information', 'gcso'),
        'url'      => home_url('/jail'),
        'icon'     => '<svg viewBox="0 0 64 64" fill="currentColor" width="48" height="48"><rect x="12" y="8" width="40" height="48" rx="2" fill="none" stroke="currentColor" stroke-width="3"/><line x1="24" y1="8" x2="24" y2="56" stroke="currentColor" stroke-width="2"/><line x1="32" y1="8" x2="32" y2="56" stroke="currentColor" stroke-width="2"/><line x1="40" y1="8" x2="40" y2="56" stroke="currentColor" stroke-width="2"/><rect x="28" y="28" width="8" height="12" rx="1" fill="currentColor"/></svg>',
        'external' => false,
    ],
    [
        'title'    => __('Apply for Employment', 'gcso'),
        'url'      => home_url('/contact/employment'),
        'icon'     => '<svg viewBox="0 0 64 64" fill="currentColor" width="48" height="48"><rect x="8" y="20" width="48" height="34" rx="3" fill="none" stroke="currentColor" stroke-width="3"/><path d="M24 20v-6a4 4 0 014-4h8a4 4 0 014 4v6" fill="none" stroke="currentColor" stroke-width="3"/><line x1="8" y1="36" x2="56" y2="36" stroke="currentColor" stroke-width="2"/></svg>',
        'external' => false,
    ],
];
?>

<section class="gcso-quick-links" aria-label="<?php esc_attr_e('Quick Access Links', 'gcso'); ?>">
    <div class="gcso-container">
        <h2 class="gcso-section-heading">
            <span class="gcso-section-heading__line"></span>
            <?php esc_html_e('Quick Access', 'gcso'); ?>
            <span class="gcso-section-heading__line"></span>
        </h2>
        <div class="gcso-quick-links__grid">
            <?php foreach ($quick_links as $link) :
                $is_external = !empty($link['external']);
            ?>
                <a href="<?php echo esc_url($link['url']); ?>" class="gcso-quick-links__card"<?php if ($is_external) { echo ' target="_blank" rel="noopener noreferrer" aria-label="' . esc_attr($link['title'] . ' ' . __('(opens external site)', 'gcso')) . '"'; } ?>>
                    <div class="gcso-quick-links__icon">
                        <?php echo $link['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                    </div>
                    <span class="gcso-quick-links__title"><?php echo esc_html($link['title']); ?></span>
                    <?php if ($is_external) : ?>
                        <svg class="gcso-quick-links__external" aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6M15 3h6v6M10 14L21 3"/></svg>
                    <?php else : ?>
                        <span class="gcso-quick-links__arrow" aria-hidden="true">&rarr;</span>
                    <?php endif; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
