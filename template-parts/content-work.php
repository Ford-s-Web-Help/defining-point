<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Defining_Point
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('col-12 col-md-4 work');?>>
	<div class="card">
		<img src="<?php the_field('work_image'); ?>" class="card-img" />
		<div class="card-body">
			<h5 class="card-title"><?php the_title(); ?></h5>
			<p class="card-text"><?php the_field('work_body'); ?></p>
			<a href="<?php the_permalink(); ?>" class="btn btn-primary">Follow</a>
		</div>
	</div>
</div>