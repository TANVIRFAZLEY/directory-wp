<?php get_header();?>

<?php
    while (have_posts()) {
        the_post();
        if (has_post_thumbnail()) {
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'directory_wp_front_image');
        }
    ?>

<div class="middle-area">
    <div class="container">
        <div class="pages-image-section">
            <div class="single-image-page" style="background-image:url(<?php echo esc_url($image[0]); ?>)">
            </div>
        </div>
        <div class="directory-page-content">
            <h3><?php the_title();?></h3>
            <?php the_content();?>
        </div>
    </div>
</div>
<?php }
?>

<?php get_footer();?>