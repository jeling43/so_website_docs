<?php
/**
 * Quick Links Section Template Part
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

$quick_links = [
    [
        'title' => __('Inmate Information', 'gcso'),
        'url'   => '#',
        'icon'  => '<svg viewBox="0 0 64 64" fill="currentColor" width="48" height="48"><rect x="18" y="8" width="28" height="40" rx="2" fill="none" stroke="currentColor" stroke-width="3"/><rect x="22" y="14" width="20" height="12" fill="none" stroke="currentColor" stroke-width="2"/><line x1="22" y1="32" x2="42" y2="32" stroke="currentColor" stroke-width="2"/><line x1="22" y1="38" x2="42" y2="38" stroke="currentColor" stroke-width="2"/><line x1="22" y1="44" x2="35" y2="44" stroke="currentColor" stroke-width="2"/><path d="M28 52h8v6h-8z" fill="currentColor"/></svg>',
    ],
    [
        'title' => __('Sex Offender Registry', 'gcso'),
        'url'   => '#',
        'icon'  => '<svg viewBox="0 0 64 64" fill="currentColor" width="48" height="48"><circle cx="32" cy="20" r="8" fill="none" stroke="currentColor" stroke-width="3"/><circle cx="24" cy="20" r="6" fill="none" stroke="currentColor" stroke-width="2"/><circle cx="40" cy="20" r="6" fill="none" stroke="currentColor" stroke-width="2"/><path d="M16 48c0-8 7-14 16-14s16 6 16 14" fill="none" stroke="currentColor" stroke-width="3"/></svg>',
    ],
    [
        'title' => __('Most Wanted', 'gcso'),
        'url'   => '#',
        'icon'  => '<svg viewBox="0 0 64 64" fill="currentColor" width="48" height="48"><circle cx="32" cy="32" r="24" fill="none" stroke="currentColor" stroke-width="3"/><circle cx="32" cy="32" r="16" fill="none" stroke="currentColor" stroke-width="2"/><circle cx="32" cy="32" r="8" fill="none" stroke="currentColor" stroke-width="2"/><circle cx="32" cy="32" r="2" fill="currentColor"/><line x1="32" y1="4" x2="32" y2="12" stroke="currentColor" stroke-width="2"/><line x1="32" y1="52" x2="32" y2="60" stroke="currentColor" stroke-width="2"/><line x1="4" y1="32" x2="12" y2="32" stroke="currentColor" stroke-width="2"/><line x1="52" y1="32" x2="60" y2="32" stroke="currentColor" stroke-width="2"/></svg>',
    ],
    [
        'title' => __('Tip Line', 'gcso'),
        'url'   => '#',
        'icon'  => '<svg viewBox="0 0 64 64" fill="currentColor" width="48" height="48"><path d="M48 16H16a4 4 0 00-4 4v20a4 4 0 004 4h8l8 8 8-8h8a4 4 0 004-4V20a4 4 0 00-4-4z" fill="none" stroke="currentColor" stroke-width="3"/></svg>',
    ],
    [
        'title' => __('Request a Report', 'gcso'),
        'url'   => '#',
        'icon'  => '<svg viewBox="0 0 64 64" fill="currentColor" width="48" height="48"><path d="M40 8H16a4 4 0 00-4 4v40a4 4 0 004 4h32a4 4 0 004-4V20L40 8z" fill="none" stroke="currentColor" stroke-width="3"/><path d="M40 8v12h12" fill="none" stroke="currentColor" stroke-width="3"/><line x1="20" y1="30" x2="44" y2="30" stroke="currentColor" stroke-width="2"/><line x1="20" y1="38" x2="44" y2="38" stroke="currentColor" stroke-width="2"/><line x1="20" y1="46" x2="36" y2="46" stroke="currentColor" stroke-width="2"/></svg>',
    ],
    [
        'title' => __('Employment', 'gcso'),
        'url'   => '#',
        'icon'  => '<svg viewBox="0 0 64 64" fill="currentColor" width="48" height="48"><rect x="8" y="20" width="48" height="34" rx="3" fill="none" stroke="currentColor" stroke-width="3"/><path d="M24 20v-6a4 4 0 014-4h8a4 4 0 014 4v6" fill="none" stroke="currentColor" stroke-width="3"/><line x1="8" y1="36" x2="56" y2="36" stroke="currentColor" stroke-width="2"/></svg>',
    ],
];
?>

<section class="gcso-quick-links" aria-label="<?php esc_attr_e('Quick Access Links', 'gcso'); ?>">
    <div class="gcso-container">
        <div class="gcso-quick-links__grid">
            <?php foreach ($quick_links as $link) : ?>
                <a href="<?php echo esc_url($link['url']); ?>" class="gcso-quick-links__card">
                    <div class="gcso-quick-links__icon">
                        <?php echo $link['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                    </div>
                    <span class="gcso-quick-links__title"><?php echo esc_html($link['title']); ?></span>
                    <span class="gcso-quick-links__underline"></span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
