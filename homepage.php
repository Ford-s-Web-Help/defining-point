<?php
/* Template Name: Home Page */
?>
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
get_header(); ?>
<main id="primary" class="site-main">
	<div class="slideshow">
		<div class="container-fluid">
			<div id="carouselExampleControls"  class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
				<?php
				$posts = get_posts([
					"posts_per_page" => 5,
					"post_type" => "slides",
				]);
				if ($posts): ?>
				<div id="slideWrap" style="position: relative;height: auto;width: 100%;background-color: #000;">
				
					<div class="carousel-inner">
					
						<?php foreach ($posts as $post):
						setup_postdata($post);
						$slideImage =get_field("slide_image");
						$slideTitle = get_field("slide_title");
						?>
						
							<div  class="carousel-item">
							<div id="slideOverlay" style="position: absolute; background-color: rgba(58, 86, 165, 0.5); top:0; bottom: 0; left:0; right:100px;"></div>
									<img src="<?php echo  esc_html_e($slideImage); ?>" class="d-block w-100 img-fluid" alt="<?php echo  esc_html_e($slideTitle); ?>">
							</div>
							
						<?php endforeach; ?>
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
	
				<?php wp_reset_postdata(); ?>
				
			<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="box intro">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
						<h2>
						Let's Create something
						<span class="tlt animate-def">
						<ul class="texts" style="display: none;">
							<li class="current">defining</li>
						</ul>
						</span>
					</h2>
				</div>
			</div>
		</div>
	</div>
	<!-- Start Sizzle Reel -->
	<div class="box sizzle">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h3>Watch Our</h3>
					<h4>Sizzle Reel</h4>
				</div>
				<div class="col-12 text-center">
					<div class="down-icon">
					<img src="<?php echo get_template_directory_uri(); ?>/img/sizzle-icon.png" alt="Down Arrow" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 text-center">
				<?php
	$sizzleReel_Url = get_field("sizzle_reel", 7);
	while (have_posts()):
		the_post(); ?>
					<a class="sizzle-reel" href="<?php echo esc_html_e($sizzleReel_Url); ?>" target="_blank" title="Watch Our Sizzle Reel">
					<img src="<?php echo get_template_directory_uri(); ?>/img/sizzle-reel.jpg" alt="Sizzle Reel Image" />
				</a>
				<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
	<!-- End Sizzle Reel -->

	<!-- Start Services -->
	<div class="solutions box">
		<div class="container text-center">
			<div class="row">
				<div class="box-title col-12">
					<h3>We Create</h3>
					<h4>Strategic Solutions</h4>
				</div>
			</div>

		<?php
			$posts = get_posts([
				"posts_per_page" => 4,
				"post_type" => "solutions",
				"order" => "ASC",
			]);
			if ($posts): ?>

		<div class="solutions-container">
			<div class="row">
			<?php foreach ($posts as $post):

			setup_postdata($post);
			$solutionClass = get_field("solution_class");
			$solutionSummary = get_field("solution_summary");
			?>
				<div class="col-12 col-sm-6 col-xl-6">
					<div class="card">
						<div class="row">
							<div class="card-img-container col-12 col-md-4">
							<?php if ($solutionClass === "globe"): ?>
							<div class="solutions-icon">
							<div class="livicon-evo" data-options="name: globe.svg; style: lines; size: 100px; strokeStyle: original; strokeWidth: original; tryToSharpen: true; rotate: none; flipHorizontal: false; flipVertical: false; strokeColor: #a6cc59; strokeColorAction: #b3421b; strokeColorAlt: #F9B32F; strokeColorAltAction: #ab69c6; fillColor: #00549b; fillColorAction: #ff926b; solidColor: #00549b; solidColorAction: #4C5A69; solidColorBgAction: #ffffff; solidColorBg: #ffffff; colorsOnHover: none; colorsHoverTime: 0.3; colorsWhenMorph: none; brightness: 0.1; saturation: 0.07; morphState: start; morphImage: none; allowMorphImageTransform: false; strokeWidthFactorOnHover: none; strokeWidthOnHoverTime: 0.3; keepStrokeWidthOnResize: false; animated: true; eventType: hover; eventOn: self; autoPlay: false; delay: 0; duration: default; repeat: default; repeatDelay: default; drawOnViewport: false; viewportShift: oneHalf; drawDelay: 0; drawTime: 1; drawStagger: 0.1; drawStartPoint: middle; drawColor: same; drawColorTime: 1; drawReversed: false; drawEase: Power1.easeOut; eraseDelay: 0; eraseTime: 1; eraseStagger: 0.1; eraseStartPoint: middle; eraseReversed: true; eraseEase: Power1.easeOut; touchEvents: false "></div>
								</div>
				<?php elseif ($solutionClass === "blub"): ?>
				<div class="solutions-icon">
					<div class="livicon-evo" data-options=" name: bulb.svg; style: lines; size: 100px; strokeStyle: original; strokeWidth: original; tryToSharpen: true; rotate: none; flipHorizontal: false; flipVertical: false; strokeColor: #00549b; strokeColorAction: #b3421b; strokeColorAlt: #F9B32F; strokeColorAltAction: #ab69c6; fillColor: #00549b; fillColorAction: #ff926b; solidColor: #00549b; solidColorAction: #4C5A69; solidColorBgAction: #ffffff; solidColorBg: #ffffff; colorsOnHover: none; colorsHoverTime: 0.3; colorsWhenMorph: none; brightness: 0.1; saturation: 0.07; morphState: start; morphImage: none; allowMorphImageTransform: false; strokeWidthFactorOnHover: none; strokeWidthOnHoverTime: 0.3; keepStrokeWidthOnResize: false; animated: true; eventType: hover; eventOn: self; autoPlay: false; delay: 0; duration: default; repeat: default; repeatDelay: default; drawOnViewport: false; viewportShift: oneHalf; drawDelay: 0; drawTime: 1; drawStagger: 0.1; drawStartPoint: middle; drawColor: same; drawColorTime: 1; drawReversed: false; drawEase: Power1.easeOut; eraseDelay: 0; eraseTime: 1; eraseStagger: 0.1; eraseStartPoint: middle; eraseReversed: true; eraseEase: Power1.easeOut; touchEvents: false "></div>
				</div>
					<?php elseif ($solutionClass === "responsive")
						: ?>
					<div class="solutions-icon">
						<div class="livicon-evo" data-options=" name: responsive.svg; style: lines; size: 100px; strokeStyle: original; strokeWidth: original; tryToSharpen: true; rotate: none; flipHorizontal: false; flipVertical: false; strokeColor: #ed3e18; strokeColorAction: #b3421b; strokeColorAlt: #F9B32F; strokeColorAltAction: #ab69c6; fillColor: #00549b; fillColorAction: #ff926b; solidColor: #00549b; solidColorAction: #4C5A69; solidColorBgAction: #ffffff; solidColorBg: #ffffff; colorsOnHover: none; colorsHoverTime: 0.3; colorsWhenMorph: none; brightness: 0.1; saturation: 0.07; morphState: start; morphImage: none; allowMorphImageTransform: false; strokeWidthFactorOnHover: none; strokeWidthOnHoverTime: 0.3; keepStrokeWidthOnResize: false; animated: true; eventType: hover; eventOn: self; autoPlay: false; delay: 0; duration: default; repeat: default; repeatDelay: default; drawOnViewport: false; viewportShift: oneHalf; drawDelay: 0; drawTime: 1; drawStagger: 0.1; drawStartPoint: middle; drawColor: same; drawColorTime: 1; drawReversed: false; drawEase: Power1.easeOut; eraseDelay: 0; eraseTime: 1; eraseStagger: 0.1; eraseStartPoint: middle; eraseReversed: true; eraseEase: Power1.easeOut; touchEvents: false "></div>
					</div>
				<?php
				elseif ($solutionClass === "camera"): ?>
				<div class="solutions-icon">
					<div class="livicon-evo" data-options=" name: camcoder.svg; style: lines; size: 100px; strokeStyle: original; strokeWidth: original; tryToSharpen: true; rotate: none; flipHorizontal: true; flipVertical: false; strokeColor: #ecb355; strokeColorAction: #b3421b; strokeColorAlt: #F9B32F; strokeColorAltAction: #ab69c6; fillColor: #00549b; fillColorAction: #ff926b; solidColor: #00549b; solidColorAction: #4C5A69; solidColorBgAction: #ffffff; solidColorBg: #ffffff; colorsOnHover: none; colorsHoverTime: 0.3; colorsWhenMorph: none; brightness: 0.1; saturation: 0.07; morphState: start; morphImage: none; allowMorphImageTransform: false; strokeWidthFactorOnHover: none; strokeWidthOnHoverTime: 0.3; keepStrokeWidthOnResize: false; animated: true; eventType: hover; eventOn: self; autoPlay: false; delay: 0; duration: default; repeat: default; repeatDelay: default; drawOnViewport: false; viewportShift: oneHalf; drawDelay: 0; drawTime: 1; drawStagger: 0.1; drawStartPoint: middle; drawColor: same; drawColorTime: 1; drawReversed: false; drawEase: Power1.easeOut; eraseDelay: 0; eraseTime: 1; eraseStagger: 0.1; eraseStartPoint: middle; eraseReversed: true; eraseEase: Power1.easeOut; touchEvents: false "></div>
					</div>
			<?php endif; ?>
			</div>
			<div class="card-body text-center text-md-start align-text-bottom col-12 col-md-8">
				<h5 class="card-title"><?php the_title(""); ?></h5>
				<p class="card-text"><?php echo $solutionSummary; ?></p>
			</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
		</div>
            <div class="explore text-center p-4 mt-3 mb-5">
                <a class="btn btn btn-outline-secondary" href="/services" role="button">Explore Our Services</a>
            </div>
		</div>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>
	</div>
</div>
<!-- End Services -->

<!-- Start Promos -->
<?php $posts = get_posts(["posts_per_page" => 1, "post_type" => "promos"]);
  if ($posts): ?>
					<?php foreach ($posts as $post):
         setup_postdata($post); ?>
						<div class="promos container-fluid justify-content-around text-center" style="background-image:url('<?php echo esc_html_e(get_field(
          "promo_image")); ?>')">
						<div class="row">
							<div class="col-12">
							 <div class="promos-container">
								<div class="row">
									<div class="promo-box">
										<h3 class="promo-title">
											<?php echo esc_html_e(get_field("promo_title")); ?>
										</h3>
										<h4 class="promo-subtitle">
											<?php echo esc_html_e(get_field("promo_subtitle")); ?>
										</h4>
									</div>
									<div class="promo-btn">
										<a class="btn btn btn-outline-secondary" href="<?php echo esc_html_e(get_field("promo_link")); ?>" role="button"><?php echo esc_html_e(get_field("promo_link_text")); ?></a>
									</div>
								</div>
							</div>
							</div>
						</div>
						</div>
						</div>
						<?php
     endforeach; ?>
						</div>
				<?php wp_reset_postdata(); ?>
			<?php endif;
  ?>

	</main><!-- #main -->
<?php get_footer();
