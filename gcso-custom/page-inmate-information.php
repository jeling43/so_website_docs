<?php
/**
 * Template Name: Inmate Information
 *
 * This page redirects to the main Jail page where all inmate services
 * are consolidated. Keeping as a redirect for legacy URL support.
 *
 * @package GCSO_Custom
 */

defined('ABSPATH') || exit;

// Redirect to the consolidated Jail page
wp_safe_redirect(home_url('/jail'), 301);
exit;
