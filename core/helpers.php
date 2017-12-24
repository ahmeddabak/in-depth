<?php
/**
 * Created by Ahmed Dabak
 * Date: 24.12.2017
 * Time: 16:30
 */


function dd( $variable ) {
	die( var_dump( $variable ) );
}

function asset( $path ) {
	$theme_directory = get_template_directory_uri();
	$manifest        = json_decode( file_get_contents( get_template_directory() . '/assets/manifest.json' ), true );

	return sprintf( "%s/%s", $theme_directory, $manifest[ $path ] );
}