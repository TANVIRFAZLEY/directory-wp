<?php

    $directory_opts = get_option('directory_opt');

    //header top display or hide
    $copyright_text          = isset($directory_opts['copyright_text']) ? $directory_opts['copyright_text'] : '';
    $copyright_link_text     = isset($directory_opts['copyright_link_text']) ? $directory_opts['copyright_link_text'] : '';
    $copyright_text_link_url = isset($directory_opts['copyright_link_text_url']) ? $directory_opts['copyright_link_text_url'] : '';

?>

<footer class="footer-area">
    <div class="container">
        <div class="copyright-text">
            <p><?php echo esc_html($copyright_text); ?><a
                    href="<?php echo esc_url($copyright_text_link_url); ?>"><?php echo esc_html($copyright_link_text); ?>
            </p>
        </div>
    </div>
</footer>

<?php wp_footer();?>

</body>

</html>