<?php

if (!defined('COMOON_DIR_PATH')) {
  define('COMOON_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (!defined('COMOON_DIR_URI')) {
  define('COMOON_DIR_URI', untrailingslashit(get_template_directory_uri()));
}

if (!defined('COMOON_IS_MOBILE')) {
  define('COMOON_IS_MOBILE', wp_is_mobile());
}

require_once COMOON_DIR_PATH . '/inc/register-assets.php';
require_once COMOON_DIR_PATH . '/inc/register-menus.php';
require_once COMOON_DIR_PATH . '/inc/register-post-types.php';
require_once COMOON_DIR_PATH . '/inc/setup-theme.php';
