<?php

add_action('wp_enqueue_scripts', 'register_styles');
add_action('wp_enqueue_scripts', 'register_scripts');

function register_styles()
{
  wp_enqueue_style('slick', COMOON_DIR_URI . '/lib/slick.css');
  wp_enqueue_style('slick-theme', COMOON_DIR_URI . '/lib/slick-theme.css');
  wp_enqueue_style('styles', COMOON_DIR_URI . '/dist/css/global.bundle.css', [], filemtime(COMOON_DIR_PATH . '/dist/css/global.bundle.css'), 'all');
}

function register_scripts()
{
  wp_enqueue_script('jquery');
  wp_enqueue_script('slick', COMOON_DIR_URI . '/lib/slick.min.js', array('jquery'));


  if (is_singular('camps')) {
    wp_enqueue_script('masonry', COMOON_DIR_URI . 'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array('jquery'));
    wp_enqueue_script('camp-single', COMOON_DIR_URI . '/dist/js/campSingle.bundle.js', ['jquery'], filemtime(COMOON_DIR_PATH . '/dist/js/campSingle.bundle.js'), true);
  }

  wp_enqueue_script('global', COMOON_DIR_URI . '/dist/js/global.bundle.js', ['jquery'], filemtime(COMOON_DIR_PATH . '/dist/js/global.bundle.js'), true);
}
