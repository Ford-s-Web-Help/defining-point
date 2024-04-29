<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Defining_Point
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>
			<div class="container-fluid">
				<div class="row page-title text-center" style="background: url('<?php echo get_template_directory_uri(); ?>/img/headers/services-header.jpg'); background-size: cover; background-position: center;">
					<div class="col-12">
						<h1 class="entry-title"><?php post_type_archive_title(); ?></h1>
					</div>
				</div>
			</div>
			<div class="text-center services page-heading">
				<h2>We Create</h2>
				<h3>Strategic Solutions</h3>
			</div>
			<section id="services">
				<div class="services container">
					<div id="servicebox" class="row justify-content-evenly">
					<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile;

						the_posts_navigation();
					?>
					</div>
				</div>
			</section>
		<?php endif; ?>
	</main><!-- #main -->
<?php
get_footer();