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
<?php if($serviceTitle !== 'technology'): ?>
<div id="post-<?php the_ID(); ?>" <?php post_class($serviceClass);?>>
 <a data-bs-toggle="collapse" data-bs-target="#Service<?php echo $serviceTitle; ?>"
   data-bs-parent="#servicebox"
   href="#Service<?php echo $serviceTitle; ?>" role="button"
   aria-expanded="false" aria-controls="collapseExample<?php echo $serviceTitle; ?>">
	<div class="card">
		<img src="<?php echo esc_html_e(get_field('service_archive_image')); ?>" class="card-img" />
		<div class="card-img-overlay">
			<?php the_title( '<h2 class="card-title">', '</h2>' ); ?>
		</div>
	</div>
	</a>

	<div class="event-info collapse event-pos <?php echo $serviceTitle; ?>"
         id="collapseExample<?php echo $serviceTitle; ?>">

		<span>Icon Here</span><?php the_title( '<h3>', '</h3>' ); ?>
		<?php echo get_field('service_summary'); ?>

    </div>

    <div class="service-group">
            <div class="event-info collapse event-pos <?php echo $serviceTitle; ?>"
                 id="Service<?php echo $serviceTitle; ?>">
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
</div>
<?php else: ?>
<div id="post-<?php the_ID(); ?>" <?php post_class($serviceClass);?>>
    <a data-bs-toggle="collapse" data-bs-target="#Service<?php echo $serviceTitle; ?>"
       data-bs-parent="#servicebox"
       href="#Service<?php echo $serviceTitle; ?>" role="button"
       aria-expanded="false" aria-controls="collapseExample<?php echo $serviceTitle; ?>">
        <div class="card">
            <img src="<?php echo esc_html_e(get_field('service_archive_image')); ?>" class="card-img" />
            <div class="card-img-overlay">
                <?php the_title( '<h2 class="card-title">', '</h2>' ); ?>
            </div>
        </div>
    </a>
    <div class="service-group">
        <div class="event-info collapse event-pos <?php echo $serviceTitle; ?>"
             id="Service<?php echo $serviceTitle; ?>">
            <span>
                <img src="<?php echo esc_html_e(get_field('service_icon')); ?>"
                     class="card-icon" />
            </span>
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
</div>
<div class="col-md-12 mt-3 collapse <?php echo $serviceTitle; ?>"
         id="Service<?php echo $serviceTitle; ?>">
        <div class="tech-info mt-4">
            <?php
            $techy = get_field('tech_dropdown_info');
            if( $techy ): ?>
                <div class="row">
                    <div class="col-md-8">
                        <div class="tech-body">
                            <span class="p-2 tech-icon">
                                <img src="<?php echo esc_url( $techy['tech_icon']['url'] ); ?>" alt="<?php echo esc_attr( $techy['tech_icon']['alt'] ); ?>" /></span>
                                <?php the_title( '<h3>', '</h3>' ); ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <?php echo '<h4>'.$techy['sub_title'].'</h4>'; ?>
                                </div>
                                <div class="col-md-12">
                                    <?php echo $techy['summary']; ?>
                                </div>
                                <div class="col-md-6">
                                    <?php echo $techy['summary_list_one']; ?>
                                </div>
                                <div class="col-md-6">
                                    <?php echo $techy['summary_list_two']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 panel-img">
                        <div class="tech-img position-relative">
                            <div class="position-absolute play-btn">
                                <a href="<?php echo $techy['play_link']; ?>" target="_blank">
                                    <img src="<?php echo esc_url( $techy['play_button']['url'] ); ?>" alt="<?php echo esc_attr( $techy['play_button']['alt'] ); ?>" />
                                </a>
                            </div>
                            <div class="mt-5">
                                <img src="<?php echo esc_url( $techy['video_image']['url'] ); ?>" alt="<?php echo esc_attr( $techy['video_image']['alt'] ); ?>" />
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
</div>
<?php endif; ?>
