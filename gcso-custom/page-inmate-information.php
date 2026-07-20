<?php
/**
 * Template Name: Inmate Information
 *
 * This page redirects to the Gordon County inmate information and lookup
 * service. Keeping this template preserves legacy URL support.
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

// Redirect legacy inmate-information requests to the official lookup service.
wp_redirect(esc_url_raw(gcso_get_inmate_search_url()), 301); // phpcs:ignore WordPress.Security.SafeRedirect.wp_redirect_wp_redirect
exit;
