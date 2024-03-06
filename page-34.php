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
		<div class="container-fluid">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>
		</div>
		<div class="container contact">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="row text-center">
				<div class="col-12">
					<h2><?php echo esc_html_e(get_field('heading')); ?></h2>
					<h3><?php echo esc_html_e(get_field('subtitle')); ?></h3>
				</div>
			</div>

			<div class="row mt-5 mb-5">
					<div class="col-12 col-md-6">
						<div class="contact-info">
							<div class="address contact-box">
								<div class="card mb-3" style="max-width: 380px;">
									<div class="row g-0 pt-2">
										<div class="col-md-3">
											<img src="<?php echo get_template_directory_uri(); ?>/img/contact/the-defining-point-address-icon.png" class="img-fluid rounded-start" alt=".Green Map Icon">
										</div>
										<div class="col-md-9">
											<div class="card-body">
												<h5 class="card-title mb-2">Address</h5>
												<p class="card-text"><?php echo esc_html_e(get_field('address')); ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="phone contact-box">
								<div class="card mb-3" style="max-width: 380px;">
									<div class="row g-0">
										<div class="col-md-3">
											<img src="<?php echo get_template_directory_uri(); ?>/img/contact/the-defining-point-phone-icon.png" class="img-fluid rounded-start" alt="Red Phone Icon">
										</div>
										<div class="col-md-9">
											<div class="card-body">
												<h5 class="card-title mb-2">Phone</h5>
												<p class="card-text"><?php echo esc_html_e(get_field('phone')); ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="email contact-box">
								<div class="card mb-3" style="max-width: 380px;">
									<div class="row g-0">
										<div class="col-md-3">
											<img src="<?php echo get_template_directory_uri(); ?>/img/contact/the-defining-point-email-icon.png" class="img-fluid rounded-start" alt="Blue Envelope Icon">
										</div>
										<div class="col-md-9">
											<div class="card-body">
												<h5 class="card-title mb-2">Email</h5>
												<p class="card-text"><?php echo esc_html_e(get_field('email')); ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="social contact-box">
								<div class="card mb-3" style="max-width: 380px;">
										<div class="row g-0">
											<div class="col-md-3">
												<img src="<?php echo get_template_directory_uri(); ?>/img/contact/the-defining-point-social-icon.png" class="img-fluid rounded-start" alt="Yellow Smart Phone Icon with notification icons">
											</div>
											<div class="col-md-9">
												<div class="card-body">
													<h5 class="card-title mb-2">Social</h5>
													<?php if( have_rows('social') ): ?>
														<?php while( have_rows('social') ): the_row(); ?>
															<ul class="list-group list-group-horizontal">
																<li class="list-group-item">
																	<a href="<?php the_sub_field('instagram'); ?>"></a>
																</li>
																<li class="list-group-item">
																	<a href="<?php the_sub_field('linkedIn'); ?>"></a>
																</li>
																<li class="list-group-item">
																	<a href="<?php the_sub_field('vimeo'); ?>"></a>
																</li>
															</ul>
														</div>
														<?php endwhile; ?>
													<?php endif; ?>
												</div>
											</div>
										</div>
									</div>
							</div>
						</div>
					<div class="col-12 col-md-6">
						<div class="contact-form">
							<?php echo get_field('form_embed'); ?>
						</div>
					</div>
			</div>

		<?php endwhile; // end of the loop. ?>
			
			
		</div>
	</main><!-- #main -->

<?php
get_footer();
