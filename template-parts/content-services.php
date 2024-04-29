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
     'service-group',
    $serviceTitle
];

?>
<div id="post-<?php the_ID(); ?>" <?php post_class($serviceClass);?>>
    <div class="service-btn" data-contentid="<?php echo $serviceTitle; ?>">
        <div class="card">
            <img src="<?php echo esc_html_e(get_field('service_archive_image')); ?>" class="card-img" />
            <div class="card-img-overlay">
                <?php the_title( '<h2 class="card-title">', '</h2>' ); ?>
            </div>
        </div>
    </div>

    <div class="event-info <?php echo $serviceTitle; ?>" id="Service<?php echo $serviceTitle; ?>">
        <img src="<?php echo esc_html_e(get_field('service_icon')); ?>"
                class="card-icon" />
        <?php the_title( '<h3>', '</h3>' ); ?>
        <div class="row">
            <div class="col-md-12">
                <?php echo get_field('service_summary'); ?>
            </div>
            <div class="col-md-6">
                <?php echo get_field('service_list_one'); ?>
            </div>
            <div class="col-md-6">
                <?php echo get_field('service_list_two'); ?>
            </div>
        </div>
    </div>
</div>
