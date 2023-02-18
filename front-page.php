<?php get_header();?>

<div class="middle-area">
    <div class="container">
        <div class="image-section">
            <?php

                $iargs = array(
                    'post_type'   => array('front_img'),
                    'post_status' => array('publish'),
                    'order'       => 'ASC',
                    'orderby'     => 'id',
                );
                $imagequery = new WP_Query($iargs);
                // The Loop directory_wp_front_image
                if ($imagequery->have_posts()) {
                    while ($imagequery->have_posts()) {
                        $imagequery->the_post();
                        if (has_post_thumbnail()) {
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'directory_wp_front_image');
                            //print_r($image);
                        ?>

            <div class="single-image">
                <img src="<?php echo esc_url($image[0]); ?>" alt="<?php the_title();?>">
            </div>

            <?php }}
                } else {
                    echo "<h2>" . __('Please update on Front Image post type.', 'directory_wp') . "</h2>";
                }

                // Restore original Post Data
                wp_reset_postdata();
            ?>

        </div>

        <div class="directory-search-box">
            <?php get_search_form();?>
        </div>
    </div>
</div>

<div class="main-menu">
    <div class="container">

        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'main-menu',
                    'menu_class'     => 'directory-nav',
                )
            );
        ?>
    </div>
</div>

<?php get_footer();?>