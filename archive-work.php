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
            <div class="row text-center mt-4 mb-2 page-heading">
                <div class="col-12">
                    <h2>The Defining Point</h2>
                    <h3>News</h3>
                </div>
            </div>
            <div class="row">
                <div class="filtering col-sm-12 text-center">
                        <span class="active" data-filter="*">All
                        </span>
                        <?php

                        $categories = get_categories(array(
                            'orderby' => 'name',
                            'order' => 'ASC',
                            'exclude' => 1
                        ));

                        foreach ($categories as $category) {

                            $termNameLow = strtolower($category->name);
                            $termName = $category->name;
                            $cleanSpace = preg_replace('/\s+/u', '-', $termNameLow);

                            echo '<span class="" data-filter=".category-'
                                .$cleanSpace.'">' . $termName. '</span> ';
                        }
                        ?>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="grid">
                <div class="grid-sizer col-xs-4 col-md-4"></div>
                    <?php
                    /* Start the Loop */
                    $count = 1;
                    while ( have_posts() ) :
                        the_post();
                    ?>
                        <?php
                        $divClass="";
                        if ($count%2==0) {
                            $divClass="grid-item--height2";
                        }
                        else{
                            $divClass="";
                        }
                        ?>
                        <div id="post-<?php the_ID(); ?>" <?php post_class('col-xs-12 col-md-4 mb-2 interior work-item grid-item '.$divClass.'');?>>
                            <div class="grid-item-content">
                                <div class="card">
                                    <img src="<?php echo esc_html_e(get_field('work_image')); ?>" class="card-img" />
                                    <div class="card-body text-xs-center text-start">
                                        <h4 class="card-category"> <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></h4>
                                        <h5 class="card-title"><?php the_title(); ?></h5>
                                        <p class="card-text"><?php echo esc_html_e(wp_trim_words( get_field('work_body'),
                                                60 )); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn btn-outline-secondary">Follow</a>
                                    </div>
                                </div>
                            </div>      
                        </div>
                    <?php $count++; ?>
                    <?php endwhile;

                    the_posts_navigation();

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif;
                    ?>
            
            </div>
        </div>
</main><!-- #main -->

<?php
get_footer();
