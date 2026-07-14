<?php
/**
 * Utility Bar Template Part
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

$phone     = gcso_get_option('gcso_phone', '706-629-1244');
$emergency = gcso_get_option('gcso_emergency_phone', '911');
?>
<div class="gcso-utility-bar">
    <div class="gcso-container gcso-utility-bar__inner">
        <ul class="gcso-utility-bar__list">
            <li class="gcso-utility-bar__item">
                <svg class="gcso-icon" aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24 11.36 11.36 0 003.58.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.36 11.36 0 00.57 3.58 1 1 0 01-.24 1.01l-2.2 2.2z"/></svg>
                <span><?php printf(esc_html__('Emergency: %s', 'gcso'), esc_html($emergency)); ?></span>
            </li>
            <li class="gcso-utility-bar__item">
                <svg class="gcso-icon" aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24 11.36 11.36 0 003.58.57 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.36 11.36 0 00.57 3.58 1 1 0 01-.24 1.01l-2.2 2.2z"/></svg>
                <span><?php printf(esc_html__('Non-Emergency: %s', 'gcso'), esc_html($phone)); ?></span>
            </li>
            <li class="gcso-utility-bar__item">
                <a href="<?php echo esc_url(home_url('/services/submit-a-tip')); ?>" class="gcso-utility-bar__link">
                    <svg class="gcso-icon" aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M20 2H4a2 2 0 00-2 2v12a2 2 0 002 2h4l4 4 4-4h4a2 2 0 002-2V4a2 2 0 00-2-2z"/></svg>
                    <span><?php esc_html_e('Submit a Tip', 'gcso'); ?></span>
                </a>
            </li>
        </ul>
    </div>
</div>
