<?php

add_action('init', 'register_post_types');

function register_post_types()
{

  register_post_type('camps', [
    'label'  => null,
    'labels' => [
      'name'               => 'Кемпы', // основное название для типа записи
      'singular_name'      => 'Кемп', // название для одной записи этого типа
      'add_new'            => 'Добавить новый', // для добавления новой записи
      'add_new_item'       => 'Добавление нового кемпа', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование кемпа', // для редактирования типа записи
      'new_item'           => 'Новое ____', // текст новой записи
      'view_item'          => 'Смотреть ____', // для просмотра записи этого типа.
      'search_items'       => 'Искать ____', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'menu_name'          => 'Кемпы', // название меню
    ],
    'description'            => '',
    'public'                 => true,
    'show_in_menu'           => null, // показывать ли в меню админки
    'show_in_rest'        => null, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-admin-multisite',
    'hierarchical'        => false,
    'supports'            => ['title', 'thumbnail'],
    'has_archive'         => true,
    'rewrite'             => true,
    'query_var'           => true,
  ]);
}
