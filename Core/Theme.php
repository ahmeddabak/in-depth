<?php
/**
 * Created by Ahmed Dabak
 * Date: 24.12.2017
 * Time: 12:09
 */

namespace InDepth;


class Theme {


	public function run() {
		$this->enqueueStyles();
		$this->enqueueScripts();
	}

	private function enqueueStyles() {
		add_action( 'wp_enqueue_scripts', function () {
			wp_enqueue_style( 'theme', asset( 'theme.css' ), array(), null );

		} );
	}

	private function enqueueScripts() {
		add_action( 'wp_enqueue_scripts', function () {
			wp_enqueue_script( 'vendor', asset( 'vendor.js' ), array(), null );
			wp_enqueue_script( 'theme', asset( 'theme.js' ), array(), null, true );
		} );

	}


}