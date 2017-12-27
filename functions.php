<?php
/**
 * In Depth functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package In_Depth
 */


/**
 * Load the autoloader
 */
require __DIR__ . '/vendor/autoload.php';

/**
 * Setup theme
 */
require get_template_directory() . '/includes/setup.php';

/**
 * Set the content width in pixels
 */
require get_template_directory() . '/includes/width.php';

/**
 * Register widget area.
 */
require get_template_directory() . '/includes/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/includes/enqueue.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/includes/woocommerce.php';
}

/**
 * Load Bootstrap 4 Nav Walker
 */
require get_template_directory() . '/classes/class-bs4_walker_nav_menu.php';


