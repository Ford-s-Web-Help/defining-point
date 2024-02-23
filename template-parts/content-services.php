<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Defining_Point
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('col-12 col-md-3 service');?>>
<a href="<?php the_permalink(); ?>">
	<div class="card">
		<img src="<?php the_field('archive_image'); ?>" class="card-img" />
		<div class="card-img-overlay">
			<?php the_title( '<h2 class="card-title">', '</h2>' ); ?>
		</div>
	</div>
</a>
</div>