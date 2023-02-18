<?php

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

require_once get_theme_file_path("/inc/codestar-framework-master/codestar-framework.php");
require_once get_theme_file_path("/inc/directory-options.php");

require_once get_theme_file_path("/inc/cpt.php");

function directory_wp_setup() {
    //text domain
    load_theme_textdomain('directory-wp', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    //title tag
    add_theme_support('title-tag');

    //post thumbnail
    add_theme_support('post-thumbnails');

    add_image_size('directory_wp_front_image', 600, 400, true);

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'main-menu' => esc_html__('Primary Menu', 'directory-wp'),
        )
    );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'directory_wp_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    //
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action('after_setup_theme', 'directory_wp_setup');

//content width
function directory_wp_content_width() {
    $GLOBALS['content_width'] = apply_filters('directory_wp_content_width', 640);
}
add_action('after_setup_theme', 'directory_wp_content_width', 0);

/**
 * Enqueue scripts and styles.
 */
function directory_wp_scripts() {
    //css file

    wp_enqueue_style('google-fonts',
        '//fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&display=swap');
    wp_enqueue_style('normalize-css', get_theme_file_uri('assets/css/normalize.css'));
    wp_enqueue_style('theme-css', get_theme_file_uri('assets/css/main.css'));
    wp_enqueue_style('directorywp-main-css', get_stylesheet_uri());

    //js file

    //wp_enqueue_script('bootstrap-js', get_theme_file_uri('assets/plugins/bootstrap/bootstrap.min.js'), ['jquery'], '4.5',true);
    //comments thread
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'directory_wp_scripts');