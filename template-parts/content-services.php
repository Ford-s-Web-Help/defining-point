<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Defining_Point
 */

 $serviceTitle = strtolower(get_the_title());

 $serviceClass = [
    'col-12',
    'col-md-3',
    'service',
    $serviceTitle
];

?>

<div id="post-<?php the_ID(); ?>" <?php post_class($serviceClass);?>>
<a data-bs-toggle="collapse" href="#collapseExample<?php echo $serviceTitle; ?>" role="button" aria-expanded="false" aria-controls="collapseExample<?php echo $serviceTitle; ?>">
	<div class="card">
		<img src="<?php echo esc_html_e(get_field('service_archive_image')); ?>" class="card-img" />
		<div class="card-img-overlay">
			<?php the_title( '<h2 class="card-title">', '</h2>' ); ?>
		</div>
	</div>
	</a>
	<div class="event-info collapse position-absolute <?php echo $serviceTitle; ?>" id="collapseExample<?php echo $serviceTitle; ?>">
		<span>Icon Here</span><?php the_title( '<h3>', '</h3>' ); ?>
		<p>I am some event info</p>
		<ul>
			<li>bacon</li>
		</ul>
	</div>
</div>