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
