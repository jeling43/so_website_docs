<?php
/**
 * GCSO Custom Theme Functions
 *
 * @package GCSO_Custom
 * @version 1.0.0
 */

defined('ABSPATH') || exit;

// Theme constants
define('GCSO_VERSION', '1.0.0');
define('GCSO_DIR', get_template_directory());
define('GCSO_URI', get_template_directory_uri());

// Include theme files
require_once GCSO_DIR . '/inc/theme-setup.php';
require_once GCSO_DIR . '/inc/enqueue.php';
require_once GCSO_DIR . '/inc/customizer.php';
require_once GCSO_DIR . '/inc/custom-post-types.php';
require_once GCSO_DIR . '/inc/helpers.php';
