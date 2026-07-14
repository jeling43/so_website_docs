<?php
/**
 * Footer fallback menu when no menu is assigned.
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

function gcso_footer_fallback_menu() {
    echo '<ul class="gcso-footer__links">';
    echo '<li><a href="' . esc_url(home_url('/jail')) . '">' . esc_html__('Jail Information', 'gcso') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/services/most-wanted')) . '">' . esc_html__('Most Wanted', 'gcso') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/services/submit-a-tip')) . '">' . esc_html__('Submit a Tip', 'gcso') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/services/request-a-report')) . '">' . esc_html__('Request a Report', 'gcso') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact/employment')) . '">' . esc_html__('Employment', 'gcso') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact')) . '">' . esc_html__('Contact Us', 'gcso') . '</a></li>';
    echo '</ul>';
}
