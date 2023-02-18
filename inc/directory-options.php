<?php

// Control core classes for avoid errors
if (class_exists('CSF')) {

    //
    // Set a unique slug-like ID
    $prefix = 'directory_opt';

    //
    // Create options
    CSF::createOptions($prefix, array(
        'menu_title'      => 'Directory Settings',
        'menu_slug'       => 'directory_options',
        'menu_position'   => 2,
        'framework_title' => 'Directory Settings <small>by Codestar</small>',
    ));

    //
    // Header section
    CSF::createSection($prefix, array(
        'title'  => 'Header Settings',
        'fields' => array(

            //
            // A text field
            array(
                'id'      => 'site_title',
                'type'    => 'text',
                'title'   => 'Website Title',
                'default' => 'Directory',
            ),
            array(
                'id'      => 'site_desc',
                'type'    => 'textarea',
                'title'   => 'Website Description',
                'default' => 'Please Add Your Description',
            ),

        ),
    ));
    // Footer section
    CSF::createSection($prefix, array(
        'title'  => 'Footer Settings',
        'fields' => array(

            //
            // A text field
            array(
                'id'      => 'copyright_text',
                'type'    => 'text',
                'title'   => 'Copyright Text',
                'default' => 'all rights reserved by',
            ),
            array(
                'id'      => 'copyright_link_text',
                'type'    => 'text',
                'title'   => 'Copyright Link Text',
                'default' => 'Directory',
            ),
            array(
                'id'      => 'copyright_link_text_url',
                'type'    => 'text',
                'title'   => 'Copyright Link Text Url',
                'default' => '#',
            ),

        ),
    ));

    // Page section
    CSF::createSection($prefix, array(
        'title'  => 'Page Settings',
        'fields' => array(

            // A textarea field
            array(
                'id'             => 'all_page_image',
                'type'           => 'media',
                'title'          => 'Page Image',
                'default'        => ['url' => get_theme_file_uri('assets/img/internal-cctv-camera.jpg')],
                'library'        => 'image',
                'preview_size'   => 'full',
                'preview_width'  => 200,
                'preview_height' => 200,
            ),

        ),
    ));

}