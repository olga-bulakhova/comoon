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
