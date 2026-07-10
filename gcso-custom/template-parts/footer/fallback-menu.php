<?php
/**
 * Footer fallback menu when no menu is assigned.
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

function gcso_footer_fallback_menu() {
    echo '<ul class="gcso-footer__links">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">' . esc_html__('Inmate Information', 'gcso') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/')) . '">' . esc_html__('Sex Offender Registry', 'gcso') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/')) . '">' . esc_html__('Most Wanted', 'gcso') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/')) . '">' . esc_html__('Tip Line', 'gcso') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/')) . '">' . esc_html__('Request a Report', 'gcso') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/')) . '">' . esc_html__('Public Records', 'gcso') . '</a></li>';
    echo '</ul>';
}
