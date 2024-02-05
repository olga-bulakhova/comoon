<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    }
    ?>

    <div class="container">
        <header class="header">
            <div class="wrapper">
                <div class="header-logo">COMOON</div>
                <div class="heder-action">
                    <?php
                    wp_nav_menu([
                        'theme_location'  => 'header',
                        'container'       => false,
                        'menu_class'      => 'navbar-nav',
                        'menu_id'         => false,
                        'echo'            => true,
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                    ]);
                    ?>
                    <button class="btn btn-primary">Записаться на кемп</button>
                </div>
            </div>
        </header>
        <div id="content" class="site-content">