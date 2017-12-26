<?php
/**
 * Created by Ahmed Dabak
 * Date: 26.12.2017
 * Time: 01:10
 */

function requireUnyson() {
	return add_action( 'tgmpa_register', function () {
		$plugins = array(
			// This is an example of how to include a plugin from the WordPress Plugin Repository.
			array(
				'name'     => 'Unyson',
				'slug'     => 'unyson',
				'required' => true,
			),
		);
		$config  = array(
			'dismissable' => false,
			'menu'        => 'install-in-depth-plugins',
		);
		tgmpa( $plugins, $config );
	} );
}