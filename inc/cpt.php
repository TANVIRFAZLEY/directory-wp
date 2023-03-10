<?php

function register_directory_wp_cpt_front_img() {

/**
 * Post Type: Front Images.
 */

    $labels = [
        "name"          => esc_html__("Front Images", "directory-wp"),
        "singular_name" => esc_html__("Front Image", "directory-wp"),
    ];

    $args = [
        "label"                 => esc_html__("Front Images", "directory-wp"),
        "labels"                => $labels,
        "description"           => "",
        "public"                => true,
        "publicly_queryable"    => true,
        "show_ui"               => true,
        "show_in_rest"          => true,
        "rest_base"             => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace"        => "wp/v2",
        "has_archive"           => false,
        "show_in_menu"          => true,
        "show_in_nav_menus"     => true,
        "delete_with_user"      => false,
        "exclude_from_search"   => false,
        "capability_type"       => "post",
        "map_meta_cap"          => true,
        "hierarchical"          => false,
        "can_export"            => false,
        "rewrite"               => ["slug" => "front_img", "with_front" => true],
        "query_var"             => true,
        "menu_icon"             => "dashicons-format-image",
        "supports"              => ["title", "thumbnail"],
        "show_in_graphql"       => false,
    ];

    register_post_type("front_img", $args);
}

add_action('init', 'register_directory_wp_cpt_front_img');