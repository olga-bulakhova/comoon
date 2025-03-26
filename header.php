<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5H9MN5JP');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body <?php body_class(); ?>>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5H9MN5JP" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    }
    ?>

    <div class="container">
        <header class="header">
            <div class="wrapper">
                <div class="header-logo color-primary">
                    <a href="<?php echo get_url_path(); ?>">
                        <img src="<?php echo COMOON_DIR_URI . '/img/logo-white.svg' ?>" alt="">
                    </a>
                </div>
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

                    <div class="pll-languages">
                        <?php pll_the_languages(array('show_flags' => 0, 'display_names_as' => 'slug')); ?>
                    </div>

                    <button data-slug="<?php echo get_slug() ?>" class="btn btn-secondary btn-secondary-md open-modal-form"><?php echo carbon_get_theme_option('sign_up_btn' . carbon_lang_prefix()) ?></button>
                </div>

                <div class="header-burger toggle-menu">

                </div>
            </div>
        </header>

        <div class="mobile-menu hidden">
            <div class="mobile-menu-content light-background">
                <div class="mobile-menu-header">
                    <div class="header-logo color-primary">
                        <a href="<?php echo get_url_path(); ?>">
                            <img src="<?php echo COMOON_DIR_URI . '/img/logo-white.svg' ?>" alt="">
                        </a>
                    </div>
                    <div class="pll-languages">
                        <?php pll_the_languages(array('show_flags' => 0, 'display_names_as' => 'slug')); ?>
                    </div>
                    <div>
                        <div class="mobile-menu-close toggle-menu"></div>
                    </div>
                </div>

                <div class="mobile-menu-body">
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

                    <button data-slug="<?php echo get_slug() ?>" class="btn btn-primary open-modal-form"><?php echo carbon_get_theme_option('sign_up_btn' . carbon_lang_prefix()) ?></button>

                    <div class="mobile-menu-social">

                        <?php if (!empty(carbon_get_theme_option('instagram_url' . carbon_lang_prefix()))) : ?>
                            <a class="insta" href="<?php echo carbon_get_theme_option('instagram_url' . carbon_lang_prefix()) ?>" target="_blank"></a>
                        <?php endif; ?>

                        <?php if (!empty(carbon_get_theme_option('youtube_url' . carbon_lang_prefix()))) : ?>
                            <a class="youtube" href="<?php echo carbon_get_theme_option('youtube_url' . carbon_lang_prefix()) ?>" target="_blank"></a>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>

        <div id="content" class="site-content">