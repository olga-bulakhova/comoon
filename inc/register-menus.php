<?php

add_action('init', 'comoon_menus');

function comoon_menus()
{

  $locations = array(
    'header' => 'Header Menu',
    'footer' => 'Footer Menu'
  );

  register_nav_menus($locations);
}
