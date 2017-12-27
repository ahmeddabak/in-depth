<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package In_Depth
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="app">
<!--    TODO skip link-->
<!--    <a class="skip-link screen-reader-text" href="#content">--><?php //esc_html_e( 'Skip to content', 'in-depth' ); ?><!--</a>-->

    <header id="masthead" class="site-header">
        <div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                          rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                         rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
                <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
        </div><!-- .site-branding -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
			<?php
			wp_nav_menu( array(
				'theme_location'     => 'main-menu',
				'menu_class' => 'navbar-nav mr-auto',
				'walker'   => new Bs4_Walker_Nav_Menu(),
			) );
			?>
        </nav><!-- #site-navigation -->

    </header><!-- #masthead -->

    <div class="container-fluid">