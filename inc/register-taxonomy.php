<?php

add_action('init', 'camps_register_taxonomy');

function camps_register_taxonomy()
{

  $args_vibe = array(
    'labels' => array(
      'menu_name' => 'Вайб',
      'name' => 'Вайб',
      'singular_name' => 'Вайб'
    ),
    'public' => true,
    'show_in_rest' => true,
    'hierarchical' => true,
    'show_admin_column' => true
  );
  register_taxonomy('vibe', 'camps', $args_vibe);


  $args_country = array(
    'labels' => array(
      'menu_name' => 'Страна',
      'name' => 'Страна',
      'singular_name' => 'Страна'
    ),
    'public' => true,
    'show_in_rest' => true,
    'hierarchical' => true,
    'show_admin_column' => true
  );
  register_taxonomy('country', 'camps', $args_country);
}
