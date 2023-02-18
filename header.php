<!doctype html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <?php wp_body_open();?>
    <header class="header-area">
        <div class="container">
            <?php

                $directory_opts = get_option('directory_opt');

                //header top display or hide
                $site_title = isset($directory_opts['site_title']) ? $directory_opts['site_title'] : '';
                $site_desc  = isset($directory_opts['site_desc']) ? $directory_opts['site_desc'] : '';

            ?>
            <div class="site-title">
                <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html($site_title); ?></a></h1>
            </div>
            <div class="site-desc">
                <h2><?php echo esc_html($site_desc); ?></h2>
            </div>
        </div>

    </header>