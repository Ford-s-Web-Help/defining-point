<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Defining_Point
 */

?>

	<footer id="colophon" class="site-footer">
			<div class="container text-center">
				<div class="row  align-items-md-center">
					<div class="col col-md-5 col-sm-12">
						<?php dynamic_sidebar( 'footer_one' ); ?>
					</div>
					<div class="col col-md-2 col-sm-12">
						<?php dynamic_sidebar( 'footer_two' ); ?></div>
					<div class="col col-md-5 col-sm-12">
						<?php dynamic_sidebar( 'footer_three' ); ?>
					</div>
				</div>
				<div class="row">
					<div class="col col-12 site-info">
						<?php dynamic_sidebar( 'footer_copyright' ); ?>
					</div>
				</div>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
