<?php
/**
 * Created by Ahmed Dabak
 * Date: 26.12.2017
 * Time: 17:15
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function in_depth_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'in-depth' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'in-depth' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'in_depth_widgets_init' );