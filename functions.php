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

if (!defined('ADVANTAGES_ICON_URL')) {
  define('ADVANTAGES_ICON_URL', '/img/advantages/');
}

if (!defined('AVAILABLE_ICON_URL')) {
  define('AVAILABLE_ICON_URL', '/img/available/');
}

require_once COMOON_DIR_PATH . '/inc/register-assets.php';
require_once COMOON_DIR_PATH . '/inc/register-menus.php';
require_once COMOON_DIR_PATH . '/inc/register-taxonomy.php';
require_once COMOON_DIR_PATH . '/inc/register-post-types.php';
require_once COMOON_DIR_PATH . '/inc/setup-theme.php';
require_once COMOON_DIR_PATH . '/inc/add-meta-boxes.php';
require_once COMOON_DIR_PATH . '/inc/helper.php';
require_once COMOON_DIR_PATH . '/inc/shortcodes.php';
require_once COMOON_DIR_PATH . '/inc/templates-carbon-fields/theme-options.php';
require_once COMOON_DIR_PATH . '/inc/templates-carbon-fields/camps.php';
require_once COMOON_DIR_PATH . '/inc/templates-carbon-fields/reviews.php';
