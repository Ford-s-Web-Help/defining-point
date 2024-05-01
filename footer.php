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
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-12 col-md-6 footer-logo">
					<?php dynamic_sidebar( 'footer_one' ); ?>
				</div>
				<div class="col-sm-12 col-md-6 footer-info">
					<?php dynamic_sidebar( 'footer_two' ); ?>
				</div>	
			</div>
			<div id="copyright">
				<?php dynamic_sidebar( 'footer_copyright' ); ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
