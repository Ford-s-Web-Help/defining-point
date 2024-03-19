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
				<div class="row page-title text-center" style="background: url('<?php echo get_template_directory_uri(); ?>/img/headers/work-header-bg.png'); background-size: cover; background-position: center;">
					<div class="col-12">
						<h1 class="entry-title"><?php post_type_archive_title(); ?></h1>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row work">
					<div class="container">
						<div class="row text-center">
							<div class="col-12">
								<h2>The Defining Point</h2>
								<h3>News</h3>
							</div>
						</div>
					
						<div class="row">
                            <div class="col-md-12">
                                <div class="list-group list-group-horizontal filters-list-group">
                                    <button class="list-group-item" data-filter="*">show all
                                    </button>
                                    <?php

                                    $categories = get_categories(array(
                                        'orderby' => 'name',
                                        'order' => 'ASC',
                                        'exclude' => 1
                                    ));

                                    foreach ($categories as $category) {

                                        $termName = strtolower($category->name);
                                        $cleanSpace = preg_replace('/\s+/u', '-', $termName);

                                        echo '<button class="list-group-item" data-filter=".category-'
                                            .$cleanSpace.'">' . $termName. '</button> ';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-12 grid">
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

                                else :

                                    get_template_part( 'template-parts/content', 'none' );

                                endif;
                                ?>
                            </div>
						</div>
					</div>
				</div>
			</div>
	</main><!-- #main -->

<?php
get_footer();
