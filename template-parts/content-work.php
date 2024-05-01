<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Defining_Point
 */

?>
<?php
$divclass="";
if ($counter%2==0) {
    $divclass="col-sm-12 col-lg-8";
}
else{
    $divclass="col-sm-6 col-lg-4";
}
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(''.$divclass.'mb-2 interior work-item grid-item');?>>
    <div class="grid-item-content">
        <div class="card">
            <?php $video = get_field('work_video'); ?>
            <?php if(!empty($video)) {?>
                <video src="<?php echo $video; ?>" class="card-img"></video>
            <?php } else { ?>
            <img src="<?php echo esc_html_e(get_field('work_image')); ?>" class="card-img" />
            <?php  } ?>
            <div class="card-body text-xs-center text-start">
                <h4 class="card-category"> <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></h4>
                <h5 class="card-title"><?php the_title(); ?></h5>
                <p class="card-text"><?php echo esc_html_e(wp_trim_words( get_field('work_body'),
                        80 )); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn btn btn-outline-secondary">Follow</a>
            </div>
        </div>
    </div>
</div>