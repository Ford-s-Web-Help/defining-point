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
				<div class="carousel-inner">
					<div class="carousel-item active">
					<img src="..." class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
					<img src="..." class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item">
					<img src="..." class="d-block w-100" alt="...">
					</div>
				</div>
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
		<div class="box solutions">
			<div class="container">
			<div class="row">
					<div class="box-title col-12 text-center">
						<h3>We Create</h3>
						<h4>Strategic Solutions</h4>
					</div>
				</div>
			</div>
			<div class="row">
					<div class="col-4">
						events
					</div>
					<div class="col-4">
						creative
					</div>
					<div class="col-4">
						tech
					</div>
					<div class="col-4">
						broadcast
					</div>
				</div>
			</div>
		</div>
	</main><!-- #main -->
<?php
get_footer();
