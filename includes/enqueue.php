<?php
/**
 * Created by Ahmed Dabak
 * Date: 26.12.2017
 * Time: 01:09
 */

if ( ! function_exists( 'asset' ) ) {
	function asset( $path ) {
		$theme_directory = get_stylesheet_directory_uri();
		$manifest        = json_decode( file_get_contents( get_stylesheet_directory_uri() . '/assets/manifest.json' ), true );

		return sprintf( "%s/%s", $theme_directory, $manifest[ $path ] );
	}
}

function understrap_remove_scripts() {
	wp_dequeue_style( 'understrap-styles' );
	wp_deregister_style( 'understrap-styles' );
	wp_dequeue_script( 'understrap-scripts' );
	wp_deregister_script( 'understrap-scripts' );
	wp_dequeue_script( 'jquery' );
	wp_deregister_script( 'jquery' );
	wp_dequeue_script( 'popper-scripts' );
	wp_deregister_script( 'popper-scripts' );
}

add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

function theme_enqueue_styles() {
	wp_enqueue_style( 'theme', asset( 'theme.css' ), array(), null );
	wp_enqueue_script( 'vendor', asset( 'vendor.js' ), array(), null );
	wp_enqueue_script( 'theme', asset( 'theme.js' ), array(), null, true );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
