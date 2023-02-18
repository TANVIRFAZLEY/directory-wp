<?php get_header();?>

<div class="middle-area">
    <div class="container">
        <div class="directory-wp-allpost-area">
            <?php
                if (have_posts()):
                    /* Start the Loop */
                    while (have_posts()):
                        the_post();
                        if (has_post_thumbnail()) {
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'directory_wp_front_image');
                        }
                    ?>


            <div class="directory-wp-single-post">

                <img src="<?php echo esc_url($image[0]); ?>" alt="">
                <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
            </div>
            <?php
                            endwhile;

                            the_posts_navigation();

                        else:

                            echo "<h2>" . __('No Post Found !', 'directory_wp') . "</h2>";

                        endif;
                    ?>
        </div>
    </div>
</div>

<?php get_footer();?>