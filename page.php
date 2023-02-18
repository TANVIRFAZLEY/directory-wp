<?php get_header();?>

<?php
    while (have_posts()) {
        the_post();
        $directory_opts = get_option('directory_opt');

        $breadcumb_image = isset($directory_opts['all_page_image']['url']) ? $directory_opts['all_page_image']['url'] : '';
    ?>
<div class="container">
    <div class="directory-search-box">
        <?php get_search_form();?>
    </div>
</div>
<div class="middle-area">
    <div class="container">
        <div class="pages-image-section">
            <div class="single-image-page" style="background-image:url(<?php echo esc_url($breadcumb_image); ?>)">

            </div>
        </div>
        <div class="directory-page-content">
            <?php the_content();?>
        </div>
    </div>
</div>

<div class="directory-comments-area">
    <div class="container">
        <?php comments_template();?>
    </div>
</div>
<?php }
?>

<?php get_footer();?>