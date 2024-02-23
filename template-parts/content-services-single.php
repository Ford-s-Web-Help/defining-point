<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Defining_Point
 */

?>
<?php $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full'); ?>
	<div class="row page-title text-center" style="background: url('<?php echo $featured_img_url; ?>'); background-size: cover; background-position: center;">
		<div class="col-12">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</div>
