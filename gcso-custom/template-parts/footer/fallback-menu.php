<?php
/**
 * Footer fallback menu when no menu is assigned.
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

function gcso_footer_fallback_menu() {
    echo '<ul class="gcso-footer__links">';
    echo '<li><a href="' . esc_url(home_url('/inmate-information')) . '">' . esc_html__('Inmate Information', 'gcso') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/sex-offender-registry')) . '">' . esc_html__('Sex Offender Registry', 'gcso') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/most-wanted')) . '">' . esc_html__('Most Wanted', 'gcso') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/tip-line')) . '">' . esc_html__('Tip Line', 'gcso') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/request-a-report')) . '">' . esc_html__('Request a Report', 'gcso') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact')) . '">' . esc_html__('Contact Us', 'gcso') . '</a></li>';
    echo '</ul>';
}
