<?php /* Template Name: Home Page */ ?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Defining_Point
 */

get_header();
?>
	<main id="primary" class="site-main">
		<div class="slideshow">
			<div class="container-fluid">
				<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
				<?php 

					$posts = get_posts(array(
						'posts_per_page'    => 5,
						'post_type'         => 'slides'
					));

					if( $posts ): ?>
						
							<div class="carousel-inner">
							<?php foreach( $posts as $post ): 
								
								setup_postdata( $post );
								
								?>
								<div class="carousel-item active">
									<div class="slide-overlay">
									</div>
									<img src="<?php the_field('slide_image'); ?>" class="d-block w-100" alt="<?php the_field('slide_title'); ?>">
								</div>
								
							<?php endforeach; ?>
							</div>
						
						<?php wp_reset_postdata(); ?>

					<?php endif; ?>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
		</div>
		<div class="box intro">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h2>Let's Creates Something <span>Defining</span></h2>
					</div>
				</div>
			</div>
		</div>
		<div class="box sizzle">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h3>Watch Our</h3>
						<h4>Sizzle Reel</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="solutions box">
			<div class="container justify-content-around text-center">
			   <div class="row">
					<div class="box-title col-12">
						<h3>We Create</h3>
						<h4>Strategic Solutions</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						events
					</div>
					<div class="col-6">
						creative
					</div>
					<div class="col-6">
						tech
					</div>
					<div class="col-6">
						broadcast
					</div>
				</div>
			</div>
		</div>
		
		<?php 
				$posts = get_posts(array(
					'posts_per_page'    => 1,
					'post_type'         => 'promos'
				));

				if( $posts ): ?>
				<div class="promos">	
						<?php foreach( $posts as $post ): 
							
							setup_postdata( $post );
							
							?>
							<div class="container justify-content-around text-center">
						<div class="row">
							<div class="col-12">
							 <div class="promos-container" style="background-image:url("<?php the_field('promo_image'); ?>")">
								<div class="promo-title">
									<?php the_field('promo_title'); ?>
								</div>
								<div class="promo-subtitle">
									<?php the_field('promo_subtitle'); ?>
								</div>
								<div class="promo-btn">
									<a class="btn btn-primary" href="<?php the_field('promo_link'); ?>" role="button"><?php the_field('promo_link_text'); ?></a>
								</div>
							</div>
							</div>
						</div>
						</div>
						</div>
						<?php endforeach; ?>
						</div>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		
	</main><!-- #main -->
<?php
get_footer();