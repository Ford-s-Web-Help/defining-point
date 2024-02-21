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
									<img src="<?php the_field('slide_image'); ?>" class="d-block w-100 img-fluid" alt="<?php the_field('slide_title'); ?>">
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
			<div class="container text-center">
			   <div class="row">
					<div class="box-title col-12">
						<h3>We Create</h3>
						<h4>Strategic Solutions</h4>
					</div>
				</div>
				
				<?php 

					$posts = get_posts(array(
						'posts_per_page'    => 4,
						'post_type'         => 'services'
					));

					if( $posts ): ?>
						
						<div class="solutions-container">
							<div class="row">
							<?php foreach( $posts as $post ): 
								
								setup_postdata( $post );
								
								?>
								<div class="col-12 col-sm-6 col-xl-6">
									<a class="text-decoration-none" href="<?php the_permalink(); ?>">
										<div class="card">
											<div class="row">
												<div class="card-img-container col-4">
													<img src="<?php the_field('service_image'); ?>" class="card-img-top img-fluid" alt="<?php the_title(''); ?>">
												</div>
												<div class="card-body text-start align-text-bottom col-8">
													<h5 class="card-title"><?php the_title(''); ?></h5>
													<p class="card-text"><?php the_field('service_summary'); ?></p>
												</div>
											</div>
										</div>
									</a>
								</div>
							<?php endforeach; ?>
							</div>
							<div class="row">
								<button class="btn btn btn-outline-secondary">Explore Our Services</button>
							</div>
						</div>
						
						
						<?php wp_reset_postdata(); ?>

					<?php endif; ?>	
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
									<button class="btn btn-outline-light" href="<?php the_field('promo_link'); ?>" role="button"><?php the_field('promo_link_text'); ?></button>
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