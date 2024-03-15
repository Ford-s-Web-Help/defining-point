<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Defining_Point
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('col-12 col-md-4 work grid-item');?>>
	<div class="card">
		<img src="<?php echo esc_html_e(get_field('work_image')); ?>" class="card-img" />
		<div class="card-body">
			<h4 class="card-category"> <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></h4>
			<h5 class="card-title"><?php the_title(); ?></h5>
			<p class="card-text"><?php echo esc_html_e(wp_trim_words( get_field('work_body'), 100 )); ?></p>
			<a href="<?php the_permalink(); ?>" class="btn btn btn-outline-secondary">Follow</a>
		</div>
	</div>
</div>