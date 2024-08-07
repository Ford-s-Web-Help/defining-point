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
<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row page-title text-center" style="background: url('<?php echo $featured_img_url; ?>'); background-size: cover; background-position: center;">
		<div class="col-12">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</div>

	<div class="entry-content">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->
</section><!-- #post-<?php the_ID(); ?> -->
