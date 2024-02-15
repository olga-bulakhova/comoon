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

function convert_date_format($source)
{
  $date = new DateTime($source);
  return $date->format('d/m');
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
    return '[contact-form-7 id="b20e59f" title="Contact Form en"]';
  }
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
    html{margin-bottom:32px !important}
    * html body{margin-bottom:32px !important}
    #wpadminbar{top:auto !important;bottom:0}
    #wpadminbar .menupop .ab-sub-wrapper{bottom:32px;-moz-box-shadow:2px -2px 5px rgba(0,0,0,.2);-webkit-box-shadow:2px -2px 5px rgba(0,0,0,.2);box-shadow:2px -2px 5px rgba(0,0,0,.2)}
    @media screen and ( max-width:782px ){
        html{margin-bottom:46px !important}
        * html body{margin-bottom:46px !important}
        #wpadminbar{position:fixed}
        #wpadminbar .menupop .ab-sub-wrapper{bottom:46px}
    }
    </style>
    ';
}

add_action('wp_head', 'true_move_admin_bar'); // на сайте
