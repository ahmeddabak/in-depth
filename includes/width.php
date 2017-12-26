<?php
/**
 * Created by Ahmed Dabak
 * Date: 26.12.2017
 * Time: 17:16
 */

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function in_depth_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'in_depth_content_width', 640 );
}
add_action( 'after_setup_theme', 'in_depth_content_width', 0 );