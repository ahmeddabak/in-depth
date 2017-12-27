<?php
/**
 * Created by Ahmed Dabak
 * Date: 26.12.2017
 * Time: 01:09
 */

if ( ! function_exists( 'asset' ) ) {
	function asset( $path ) {
		return get_template_directory_uri() . '/assets/' . $path;
	}
}

function in_depth_enqueue_styles_and_scripts() {
	wp_enqueue_style( 'theme', asset( 'css/theme.css' ), array(), null );
	wp_enqueue_script( 'manifest', asset( 'js/manifest.js' ), array(), null );
	wp_enqueue_script( 'vendor', asset( 'js/vendor.js' ), array(), null );
	wp_enqueue_script( 'theme', asset( 'js/theme.js' ), array(), null, true );


//	wp_enqueue_style( 'in-depth-style', get_stylesheet_uri() );
//	wp_enqueue_script( 'in-depth-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
//	wp_enqueue_script( 'in-depth-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

//	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
//		wp_enqueue_script( 'comment-reply' );
//	}

}

add_action( 'wp_enqueue_scripts', 'in_depth_enqueue_styles_and_scripts' );