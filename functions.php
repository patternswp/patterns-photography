<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Patterns Photography functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Patterns Photography
 */

/**
 * Current theme path.
 * Current theme url.
 * Current theme version.
 * Current theme name.
 * Current theme option name.
 */
define( 'PATTERNS_PHOTOGRAPHY_PATH', trailingslashit( get_template_directory() ) );
define( 'PATTERNS_PHOTOGRAPHY_URL', trailingslashit( get_template_directory_uri() ) );
define( 'PATTERNS_PHOTOGRAPHY_VERSION', '1.0.0' );
define( 'PATTERNS_PHOTOGRAPHY_THEME_NAME', 'patterns-photography' );
define( 'PATTERNS_PHOTOGRAPHY_OPTION_NAME', 'patterns-photography' );

/**
 * The core theme class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require PATTERNS_PHOTOGRAPHY_PATH . 'includes/main.php';

/**
 * Begins execution of the theme.
 *
 * @since    1.0.0
 */
function patterns_photography_run() {
	new Patterns_Photography();
}
patterns_photography_run();
