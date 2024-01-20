<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Defining_Point
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php
		if ( is_sticky() && is_home() && ! is_paged() ) {
			printf( '%s', esc_html_x( 'Featured', 'post', 'defining_point' ) );
		}
		the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		?>
	</header><!-- .entry-header -->

	<?php dp__post_thumbnail(); ?>

	<div <?php dp__content_class( 'entry-content' ); ?>>
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php dp__entry_footer(); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-${ID} -->
