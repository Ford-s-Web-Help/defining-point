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

				get_template_part( 'template-parts/content', 'about' );

			endwhile; // End of the loop.
			?>
		</div>
		<div class="container-fluid about">
			<div class="row justify-content-evenly">
					<?php
					$who = get_field('who_we_are');
					if( $who ): ?>
						<div class="order-0 col-12 col-md-5 text-center">
						<img src="<?php echo esc_url( $who['who_image']['url'] ); ?>" alt="<?php echo esc_attr( $who['who_image']['alt'] ); ?>" class="img-fluid" />
						</div>
						<div class="order-1 col-12 col-md-7">
							<h2><?php echo $who['who_title']; ?></h2>
							<p><?php echo $who['who_info']; ?></p>
						</div>
					<?php endif; ?>
			</div>
			<div class="row justify-content-evenly abt-grey">
				<?php
				$why = get_field('why_us');
				if( $why ): ?>
					<div class="order-1 order-md-0 col-12 col-md-7">
						<h2 class="text-md-end"><?php echo $why['why_title']; ?></h2>
						<p class="text-md-end"><?php echo $why['why_info']; ?></p>
					</div>
					<div class="order-0 order-md-1 col-12 col-md-5 text-center">
						<img src="<?php echo esc_url( $why['why_image']['url'] ); ?>" alt="<?php echo esc_attr( $why['why_image']['alt'] ); ?>" class="img-fluid" />
					</div>
				<?php endif; ?>
			</div>
			<div class="row justify-content-evenly">
				<?php
				$how = get_field('how_we_are_different');
				if( $how ): ?>
					<div class="order-0 col-12 col-md-5 text-center">
						<img src="<?php echo esc_url( $how['how_image']['url'] ); ?>" alt="<?php echo esc_attr( $how['how_image']['alt'] ); ?>" class="img-fluid" />
					</div>
					<div class="order-1 col-12 col-md-7">
						<h2><?php echo $how['how_title']; ?></h2>
						<p><?php echo $how['how_info']; ?></p>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row structure abt-grey">
				<h3 class="text-center">Our Corporate Structure & Philosophy</h3>
				<div class="container text-center">
					<div class="row justify-content-evenly">
					<?php if( have_rows('corporate_structure') ): ?>
					<?php while( have_rows('corporate_structure') ): the_row(); ?>
						<div class="col-12 col-md-3">
						<?php if( have_rows('structure_one') ): ?>
							<?php while( have_rows('structure_one') ): the_row(); 
							// Get sub field values.
							$structure_one_image = get_sub_field('structure_one_image');
							$structure_one_title = get_sub_field('structure_one_title');
							$structure_one_body = get_sub_field('structure_one_body');
							?>
							<div class="card">
								<img src="<?php echo esc_url( $structure_one_image['url'] ); ?>" alt="<?php echo esc_attr( $structure_one_image['alt'] ); ?>" class="card-img" />
								<div class="card-img-overlay structure-info red">
									<?php echo '<h2 class="card-title">'.$structure_one_title.'</h2>'; ?>
									<?php echo '<p class="card-text">'.$structure_one_body.'</p>'; ?>
								</div>
							</div>
							<?php endwhile; ?>
						<?php endif; ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php if( have_rows('corporate_structure') ): ?>
					<?php while( have_rows('corporate_structure') ): the_row(); ?>
						<div class="col-12 col-md-3">
						<?php if( have_rows('structure_two') ): ?>
							<?php while( have_rows('structure_two') ): the_row(); 
							// Get sub field values.
							$structure_two_image = get_sub_field('structure_two_image');
							$structure_two_title = get_sub_field('structure_two_title');
							$structure_two_body = get_sub_field('structure_two_body');
							?>
							<div class="card">
								<img src="<?php echo esc_url( $structure_two_image['url'] ); ?>" alt="<?php echo esc_attr( $structure_two_image['alt'] ); ?>" class="card-img" />
								<div class="card-img-overlay structure-info blue">
									<?php echo '<h2 class="card-title">'.$structure_two_title.'</h2>'; ?>
									<?php echo '<p class="card-text">'.$structure_two_body.'</p>'; ?>
								</div>
							</div>
							<?php endwhile; ?>
						<?php endif; ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php if( have_rows('corporate_structure') ): ?>
					<?php while( have_rows('corporate_structure') ): the_row(); ?>
						<div class="col-12 col-md-3">
						<?php if( have_rows('structure_three') ): ?>
							<?php while( have_rows('structure_three') ): the_row(); 
							// Get sub field values.
							$structure_three_image = get_sub_field('structure_three_image');
							$structure_three_title = get_sub_field('structure_three_title');
							$structure_three_body = get_sub_field('structure_three_body');
							?>
							<div class="card">
								<img src="<?php echo esc_url( $structure_three_image['url'] ); ?>" alt="<?php echo esc_attr( $structure_three_image['alt'] ); ?>" class="card-img" />
								<div class="card-img-overlay structure-info green">
									<?php echo '<h2 class="card-title">'.$structure_three_title.'</h2>'; ?>
									<?php echo '<p class="card-text">'.$structure_three_body.'</p>'; ?>
								</div>
							</div>
							<?php endwhile; ?>
						<?php endif; ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php if( have_rows('corporate_structure') ): ?>
					<?php while( have_rows('corporate_structure') ): the_row(); ?>
						<div class="col-12 col-md-3">
						<?php if( have_rows('structure_four') ): ?>
							<?php while( have_rows('structure_four') ): the_row(); 
							// Get sub field values.
							$structure_four_image = get_sub_field('structure_four_image');
							$structure_four_title = get_sub_field('structure_four_title');
							$structure_four_body = get_sub_field('structure_four_body');
							?>
							<div class="card">
								<img src="<?php echo esc_url( $structure_four_image['url'] ); ?>" alt="<?php echo esc_attr( $structure_four_image['alt'] ); ?>" class="card-img" />
								<div class="card-img-overlay structure-info gold">
									<?php echo '<h2 class="card-title">'.$structure_four_title.'</h2>'; ?>
									<?php echo '<p class="card-text">'.$structure_four_body.'</p>'; ?>
								</div>
							</div>
							<?php endwhile; ?>
						<?php endif; ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
