<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package In_Depth
 */
?>

<article class="article">

    <header class="article-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="article-title">', '</h1>' );
		else :
			the_title( '<h2 class="article-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
            <div class="article-meta">
				<?php in_depth_posted_on(); ?>
            </div><!-- .article-meta -->
		<?php
		endif; ?>
    </header><!-- .article-header -->

    <div class="article-image">
        <img src="<?php the_post_thumbnail_url( ) ?>" class="img-fluid">
    </div>

    <div class="article-content">
		<?php
		the_content( sprintf(
			wp_kses(
			/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'in-depth' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'in-depth' ),
			'after'  => '</div>',
		) );
		?>
    </div><!-- .article-content -->

    <footer class="article-footer">
		<?php in_depth_entry_footer(); ?>
    </footer><!-- .article-footer -->
</article>


