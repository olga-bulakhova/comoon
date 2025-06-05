<?php

function carbon_lang_prefix()
{
  $prefix = '';
  if (!defined('ICL_LANGUAGE_CODE')) {
    return $prefix;
  }
  $prefix = '_' . ICL_LANGUAGE_CODE;
  return $prefix;
}

function is_future_date($event_date)
{
  return new DateTime($event_date) > new DateTime();
}

function is_current_date($event_date)
{
  $current = strtotime(date("Y-m-d"));
  $date    = strtotime($event_date);
  $datediff = $date - $current;
  $difference = floor($datediff / (60 * 60 * 24));

  return $difference == 0;
}

function convert_date_format($source)
{
  $date = new DateTime($source);
  return $date->format('d/m');
}

function convert_date_to_month_year($source, $separator)
{
  $date = new DateTime($source);
  return $date->format('m' . $separator . 'Y');
}

function convert_date_time($source)
{
  $date = new DateTime($source);
  return $date->format('d/m H:i');
}


function convert_date_time_with_month_text($source)
{
  $month_labels = [
    'ru' => [
      1  => 'января',
      2  => 'февраля',
      3  => 'марта',
      4  => 'апреля',
      5  => 'мая',
      6  => 'июня',
      7  => 'июля',
      8  => 'августа',
      9  => 'сентября',
      10 => 'октября',
      11 => 'ноября',
      12 => 'декабря'
    ],
    'en' => [
      1  => 'January',
      2  => 'February',
      3  => 'March',
      4  => 'April',
      5  => 'May',
      6  => 'June',
      7  => 'July',
      8  => 'August',
      9  => 'September',
      10 => 'October',
      11 => 'November',
      12 => 'December'
    ]
  ];

  $timestamp = strtotime($source);
  $months = ICL_LANGUAGE_CODE === 'ru' ? $month_labels['ru'] : $month_labels['en'];

  return date('d', $timestamp) . ' ' . $months[date('n', $timestamp)] . ' ' . date('H', $timestamp) . ':' . date('i', $timestamp);
}

function get_url_path()

{
  if (ICL_LANGUAGE_CODE === 'en') {
    return '/';
  } else {
    return '/' . ICL_LANGUAGE_CODE . '/';
  }
}

function get_form_shortcode()
{
  if (ICL_LANGUAGE_CODE === 'ru') {
    return '[contact-form-7 id="372ad42" title="Contact Form  ru"]';
  } else if (ICL_LANGUAGE_CODE === 'pl') {
    return '[contact-form-7 id="1a89f33" title="Contact Form pl"]';
  } else {
    // return '[contact-form-7 id="6b291bb" title="Контактная форма 1"]';
    return '[contact-form-7 id="b20e59f" title="Contact Form en"]';
  }
}

function my_pagenavi()
{
  $big = 999999999; // need an unlikely integer
  echo paginate_links(array(
    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
    'format' => '?paged=%#%',
    'current' => max(1, get_query_var('paged')),
    'prev_next' => false,
    'mid_size' => 2,
    'show_all' => false,
  ));
}


function my_filter_head()
{
  remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('get_header', 'my_filter_head');

// CSS для прилепления админки к нижнему краю страницы
function true_move_admin_bar()
{
  echo '
    <style type="text/css">
    
    
    #wpadminbar{top:auto !important;bottom:0}
    #wpadminbar .menupop .ab-sub-wrapper{bottom:32px;-moz-box-shadow:2px -2px 5px rgba(0,0,0,.2);-webkit-box-shadow:2px -2px 5px rgba(0,0,0,.2);box-shadow:2px -2px 5px rgba(0,0,0,.2)}
    @media screen and ( max-width:782px ){
        #wpadminbar{position:fixed}
        #wpadminbar .menupop .ab-sub-wrapper{bottom:46px}
    }
    </style>
    ';
}

add_action('wp_head', 'true_move_admin_bar'); // на сайте


add_action('wp_head', 'add_social_cemps_image');

function add_social_cemps_image()
{


  if (is_archive()) {

    echo '<meta property="og:image" content="' . wp_get_attachment_url(carbon_get_theme_option('social_cemps_photo' . carbon_lang_prefix()))   . '"
    href="' . wp_get_attachment_url(carbon_get_theme_option('social_cemps_photo' . carbon_lang_prefix()))  . '"
    
    />';
  }
}

function get_urm_to_tg()
{
  $url = '';
  $separator = ICL_LANGUAGE_CODE === 'pl' ? '_' : '|';

  if (isset($_COOKIE['_deco_utmz'])) {
    $cookies = $_COOKIE['_deco_utmz'];
    $all_utm = explode("|", $cookies);
    $url = $separator . 'source=' . $all_utm[0] . $separator . 'medium=' . $all_utm[1] . $separator . 'campaign=' . $all_utm[3];
  }

  return $url;
}

function get_slug()
{
  $slug = '';

  if (is_front_page()) {
    $slug = 'front-page';
  } elseif (is_page() || is_single()) {
    $slug = get_queried_object()->post_name . '-page';
  } elseif (is_archive()) {
    $post_type = get_queried_object();
    $slug = $post_type->rewrite['slug'] . '-list';
  } else {
    $slug = 'posts-list';
  }

  return $slug;
}

if (! function_exists('pll__')) {
  function pll__($string)
  {
    return $string;
  }
}

if (! function_exists('pll_e')) {
  function pll_e($string)
  {
    echo $string;
  }
}
