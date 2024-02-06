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
						<img src="<?php echo get_template_directory_uri(); ?>/img/assets/footer-logo.png" alt="footer logo" />
					</div>
					<div class="col col-md-2 col-sm-12">David@TheDefiningPoint.com 
404-354-8241</div>
					<div class="col col-md-5 col-sm-12">bacon</div>
				</div>
				<div class="row">
					<div class="col col-12 site-info">
						©2023 The Defining Point. All Rights Reserved.
					</div>
				</div>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
