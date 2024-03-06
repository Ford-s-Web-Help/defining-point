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
				<div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
				<?php
    $posts = get_posts([
        "posts_per_page" => 5,
        "post_type" => "slides",
    ]);
    if ($posts): ?>
				<div id="slider" class="carousel-inner">
				    <div id="slide-overlay" style="position: absolute; background-color: rgba(58, 86, 165, 0.5); top:0; bottom: 0; left:0; right:100px;">
					<?php foreach ($posts as $post):
					   setup_postdata($post);
                        $slideImage =get_field("slide_image");
                        $slideTitle = get_field("slide_title");?>
								<div style="position:relative; height: auto; width: 100%; background-color: #000;" class="carousel-item">
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
									<a class="text-decoration-none" href="<?php the_permalink(); ?>">
										<div class="card">
											<div class="row">
												<div class="card-img-container col-12 col-md-4">
													<?php if ($solutionClass === "globe"): ?>
													<div class="solutions-icon">
														<div class="live-icon <?php echo esc_html_e($solutionClass); ?> livicon-evo-holder" style="visibility: visible; width: 100px;"><div class="lievo-svg-wrapper"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60 60" xml:space="preserve" data-shift="xy" data-animoptions="{'duration':'0.7', 'repeat':'3', 'repeatDelay':'0'}" preserveAspectRatio="xMinYMin meet" style="left: 0.5px; top: 0.375px;"><g class="lievo-setrotation"><g class="lievo-setsharp" data-svg-origin="30 30" transform="matrix(1,0,0,1,0,0)" style="transform-origin: 0px 0px 0px;"><g class="lievo-setflip"><g class="lievo-main">
														<g class="lievo-lineicon lievo-filledicon">
															<defs>
																<mask id="livicon_globe_1">
																	<circle class="lievo-donotdraw lievo-nohovercolor lievo-nohoverstroke lievo-savefill" fill="#ffffff" cx="30" cy="30" r="23.9" stroke="none" style="stroke-width: 0;"></circle>
																</mask>
															</defs>
															<circle transform="rotate(-90, 30, 30)" stroke="#aacf3b" stroke-width="0" fill="none" cx="30" cy="30" r="24" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 0; stroke-dasharray: none; stroke: rgb(170, 207, 59);"></circle>
															<g mask="url(#livicon_globe_1)">
																<g>
																	<line class="lievo-altstroke" fill="none" stroke="#aacf3b" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="8" y1="20" x2="52" y2="20" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 0; stroke-dasharray: none; stroke: rgb(170, 207, 59);"></line>
																	<line class="lievo-altstroke" fill="none" stroke="#aacf3b" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="6" y1="30" x2="56" y2="30" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 0; stroke-dasharray: none; stroke: rgb(170, 207, 59);"></line>
																	<line class="lievo-altstroke" fill="none" stroke="#aacf3b" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="8" y1="40" x2="52" y2="40" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 0; stroke-dasharray: none; stroke: rgb(170, 207, 59);"></line>
																</g>
																<g>
																	<path class="lievo-altstroke" fill="none" stroke="#aacf3b" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M29.95,55C21.85,50.08,16,40.17,16,30c0-10.17,5.85-20.08,13.95-25" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 0; stroke-dasharray: none; stroke: rgb(170, 207, 59);" data-original="M30,55C16.19,55,5,43.81,5,30C5,16.19,16.19,5,30,5"></path>
																					<path class="lievo-altstroke" fill="none" stroke="#aacf3b" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M30,55c0-7.68,0-14.41,0-25c0-10.59,0-16.24,0-25" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 0; stroke-dasharray: none; stroke: rgb(170, 207, 59);" data-original="M29.95,55C21.85,50.08,16,40.17,16,30c0-10.17,5.85-20.08,13.95-25"></path>
																					<path class="lievo-altstroke" fill="none" stroke="#aacf3b" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M30,55c8.1-4.92,14-14.83,14-25c0-10.17-5.9-20.08-14-25" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 0; stroke-dasharray: none; stroke: rgb(170, 207, 59);" data-original="M30,55c0-7.68,0-14.41,0-25c0-10.59,0-16.24,0-25"></path>
																					<path class="lievo-altstroke" fill="none" stroke="#aacf3b" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M30,5c13.81,0,25,11.19,25,25c0,13.81-11.19,25-25,25" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 0; stroke-dasharray: none; stroke: rgb(170, 207, 59);" data-original="M30,55c8.1-4.92,14-14.83,14-25c0-10.17-5.9-20.08-14-25"></path>
																				</g>
																			</g>
																			<circle class="lievo-altstroke" transform="rotate(-90, 30, 30)" fill="none" stroke="#aacf3b" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" cx="30" cy="30" r="24" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 0; stroke-dasharray: none; stroke: rgb(170, 207, 59);"></circle>
																		</g>


															<rect x="-20" y="-20" width="4" height="4" fill="none" stroke="#aacf3b" style="stroke-width: 2; stroke-linecap: butt; stroke-linejoin: round; opacity: 0;" class="lievo-checkshift lievo-donotdraw lievo-nohoverstroke lievo-nohovercolor"></rect></g></g></g></g>

														<desc>LivIcons Evolution</desc></svg></div></div>
													</div>
														<?php elseif ($solutionClass === "blub"): ?>
															<div class="solutions-icon"><div class="live-icon <?php echo esc_html_e($solutionClass); ?> livicon-evo-holder" style="visibility: visible; width: 100px;"><div class="lievo-svg-wrapper"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60 60" xml:space="preserve" data-animoptions="{'duration':'0.7', 'repeat':'2', 'repeatDelay':'0'}" preserveAspectRatio="xMinYMin meet" style="left: 0.5px; top: 0.375px;"><g class="lievo-setrotation"><g class="lievo-setsharp"><g class="lievo-setflip"><g class="lievo-main">


		<g class="lievo-lineicon">
			<path fill="none" stroke="#0b6aaf" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M30,45h5v2c0,2.21-2,3-3,4h-4c-1-1-3-1.79-3-4v-2H30" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 0; stroke-dasharray: none; stroke: rgb(11, 106, 175);"></path>

			<path fill="none" stroke="#0b6aaf" stroke-width="2" stroke-linecap="square" stroke-linejoin="round" stroke-miterlimit="10" d="M25,41c0-4.58-6-8.92-6-15c0-6.07,4.93-11,11-11c6.08,0,11,4.93,11,11c0,6.08-6,10.42-6,15" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 0; stroke-dasharray: none; stroke: rgb(11, 106, 175);"></path>

			<path class="lievo-savelinecap lievo-altstroke" fill="none" stroke="#0b6aaf" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M30,37l-5-12l3,2l2-2l2,2l3-2L30,37" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 0; stroke-dasharray: none; stroke: rgb(11, 106, 175);"></path>
		</g>



		<g class="lievo-common" data-svg-origin="30 26" transform="matrix(1,0,0,1,0,0)" style="transform-origin: 0px 0px 0px;">
			<line class="lievo-altstroke" fill="none" stroke="#0b6aaf" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="17.37" y1="37.38" x2="14.39" y2="40.05" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 1e-05; stroke-dasharray: none; stroke: rgb(11, 106, 175); opacity: 1;"></line>

			<line class="lievo-altstroke" fill="none" stroke="#0b6aaf" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="13.21" y1="28.66" x2="9.26" y2="29.28" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 1e-05; stroke-dasharray: none; stroke: rgb(11, 106, 175); opacity: 1;"></line>

			<line class="lievo-altstroke" fill="none" stroke="#0b6aaf" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="14.47" y1="19.08" x2="10.82" y2="17.46" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 1e-05; stroke-dasharray: none; stroke: rgb(11, 106, 175); opacity: 1;"></line>

			<line class="lievo-altstroke" fill="none" stroke="#0b6aaf" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="20.74" y1="11.74" x2="18.56" y2="8.39" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 1e-05; stroke-dasharray: none; stroke: rgb(11, 106, 175); opacity: 1;"></line>

			<line class="lievo-altstroke" fill="none" stroke="#0b6aaf" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="30" y1="9" x2="30" y2="5" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 1e-05; stroke-dasharray: none; stroke: rgb(11, 106, 175); opacity: 1;"></line>

			<line class="lievo-altstroke" fill="none" stroke="#0b6aaf" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="39.26" y1="11.74" x2="41.44" y2="8.39" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 1e-05; stroke-dasharray: none; stroke: rgb(11, 106, 175); opacity: 1;"></line>

			<line class="lievo-altstroke" fill="none" stroke="#0b6aaf" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="45.53" y1="19.08" x2="49.18" y2="17.46" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 1e-05; stroke-dasharray: none; stroke: rgb(11, 106, 175); opacity: 1;"></line>

			<line class="lievo-altstroke" fill="none" stroke="#0b6aaf" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="46.79" y1="28.66" x2="50.74" y2="29.29" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 1e-05; stroke-dasharray: none; stroke: rgb(11, 106, 175); opacity: 1;"></line>

			<line class="lievo-altstroke" fill="none" stroke="#0b6aaf" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="42.63" y1="37.37" x2="45.61" y2="40.05" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 1e-05; stroke-dasharray: none; stroke: rgb(11, 106, 175); opacity: 1;"></line>
		</g>
	<rect x="-19" y="-19" width="4" height="4" fill="none" stroke="#0b6aaf" class="lievo-checkshift lievo-donotdraw lievo-nohoverstroke lievo-nohovercolor" style="stroke-width: 2; stroke-linecap: butt; stroke-linejoin: round; opacity: 0;"></rect></g></g></g></g>

<desc>LivIcons Evolution</desc><defs></defs></svg></div></div></div>
														<?php elseif ($solutionClass === "responsive"): ?>
															<div class="solutions-icon"><div class="live-icon <?php echo esc_html_e($solutionClass); ?> livicon-evo-holder" style="visibility: visible; width: 100px;"><div class="lievo-svg-wrapper"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60 60" xml:space="preserve" data-animoptions="{'duration':'2.8', 'repeat':'0', 'repeatDelay':'0.7'}" preserveAspectRatio="xMinYMin meet" style="left: 0.5px; top: 0.375px;"><g class="lievo-setrotation"><g class="lievo-setsharp"><g class="lievo-setflip"><g class="lievo-main">


		<g class="lievo-lineicon">
			<defs>
				<clipPath id="livicon_responsive_l_4">
					<rect class="lievo-donotdraw lievo-nohovercolor lievo-nohoverstroke" x="11" y="15" width="34" height="30" stroke="none" fill="none" style="stroke-width: 0;"></rect>
				</clipPath>
			</defs>

			<g data-svg-origin="30 30" transform="matrix(1,0,0,1,0,0)" style="transform-origin: 0px 0px 0px;">
				<path fill="none" stroke="#f37048" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M53,13v34c0,1.1-0.9,2-2,2H9c-1.1,0-2-0.9-2-2V13c0-1.1,0.9-2,2-2h42C52.1,11,53,11.9,53,13z" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 0; stroke-dasharray: none; stroke: rgb(243, 112, 72);"></path>

				<g clip-path="url(#livicon_responsive_l_4)">
					<g>
						<path class="lievo-donotdraw lievo-likestroke lievo-altstroke" fill="#f37048" stroke="#f37048" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" d="M35,29H21V19h14V29z M35,19L35,19 M35,23L35,23 M35,29L35,29 M21,33h14 M21,37h14 M21,41h14" opacity="0" style="opacity: 0; transform-origin: 0px 0px 0px;" data-original="M35,29H21V19h14V29z M35,19L35,19 M35,23L35,23 M35,29L35,29 M21,33h14 M21,37h14 M21,41h14" data-svg-origin="30 30" transform="matrix(1,0,0,1,0,0)"></path>
						<g data-svg-origin="16 21" transform="matrix(1,0,0,1,0,0)" style="opacity: 1;">
							<line fill="none" stroke="#f37048" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="23" y1="21" x2="23" y2="37" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 0; stroke-dasharray: none; stroke: rgb(243, 112, 72);"></line>
							<line class="lievo-savelinecap" fill="none" stroke="#f37048" stroke-width="2" stroke-miterlimit="10" x1="23" y1="29" x2="16" y2="29" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 0; stroke-dasharray: none; stroke: rgb(243, 112, 72);"></line>
							<polyline fill="none" stroke="#f37048" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points="19,26 16,29 19,32" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 0; stroke-dasharray: none; stroke: rgb(243, 112, 72);"></polyline>
						</g>
						<g data-svg-origin="31 21" transform="matrix(1,0,0,1,0,0)" style="opacity: 1;">
							<line fill="none" stroke="#f37048" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" x1="31" y1="21" x2="31" y2="37" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 0; stroke-dasharray: none; stroke: rgb(243, 112, 72);"></line>
							<line class="lievo-savelinecap" fill="none" stroke="#f37048" stroke-width="2" stroke-miterlimit="10" x1="31" y1="29" x2="38" y2="29" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 0; stroke-dasharray: none; stroke: rgb(243, 112, 72);"></line>
							<polyline fill="none" stroke="#f37048" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" points="35,26 38,29 35,32" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 0; stroke-dasharray: none; stroke: rgb(243, 112, 72);"></polyline>
						</g>
					</g>
				</g>
				<rect x="11" y="15" fill="none" stroke="#f37048" stroke-width="2" stroke-linecap="square" stroke-miterlimit="10" width="34" height="30" style="fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 0; stroke-dasharray: none; stroke: rgb(243, 112, 72);"></rect>
				<circle class="lievo-likestroke lievo-altstroke" fill="#f37048" cx="49" cy="30" r="2" stroke="#f37048" style="stroke-width: 0.6; fill-opacity: 1; stroke-opacity: 1; stroke-dashoffset: 0; stroke-dasharray: none; stroke: rgba(255, 255, 255, 0);"></circle>
			</g>
		</g>


	<rect x="-19" y="-19" width="4" height="4" fill="none" stroke="#f37048" class="lievo-checkshift lievo-donotdraw lievo-nohoverstroke lievo-nohovercolor" style="stroke-width: 2; stroke-linecap: butt; stroke-linejoin: round; opacity: 0;"></rect></g></g></g></g>

<desc>LivIcons Evolution</desc></svg></div></div></div>
														<?php
														elseif ($solutionClass === "camera"): ?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/broadcast.svg" alt="Broadcast Icon" />
													<?php endif; ?>
												</div>
												<div class="card-body text-center text-md-start align-text-bottom col-12 col-md-8">
													<h5 class="card-title"><?php the_title(""); ?></h5>
													<p class="card-text"><?php echo $solutionSummary; ?></p>
												</div>
											</div>
										</div>
									</a>
								</div>
							<?php
       endforeach; ?>
							</div>
							<div class="row">
								<a class="btn btn btn-outline-secondary" href="/services">Explore Our Services</a>
							</div>
						</div>


						<?php wp_reset_postdata(); ?>

					<?php endif;
    ?>
			</div>
		</div>

		<?php
  $posts = get_posts(["posts_per_page" => 1, "post_type" => "promos"]);
  if ($posts): ?>
					<?php foreach ($posts as $post):
         setup_postdata($post); ?>
						<div class="promos container-fluid justify-content-around text-center" style="background-image:url('<?php the_field(
          "promo_image"
      ); ?>')">
						<div class="row">
							<div class="col-12">
							 <div class="promos-container">
								<div class="row">
									<div class="promo-box">
										<h3 class="promo-title">
											<?php the_field("promo_title"); ?>
										</h3>
										<h4 class="promo-subtitle">
											<?php the_field("promo_subtitle"); ?>
										</h4>
									</div>
									<div class="promo-btn">
										<button class="btn btn btn-outline-secondary" href="<?php the_field(
              "promo_link"
          ); ?>" role="button"><?php the_field("promo_link_text"); ?></button>
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
