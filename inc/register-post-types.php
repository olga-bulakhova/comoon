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
    'show_in_rest'        => true, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-admin-multisite',
    'hierarchical'        => false,
    'supports'            => ['title', 'thumbnail', 'editor'],
    'has_archive'         => true,
    'rewrite'             => true,
    'query_var'           => true,
  ]);



  register_post_type('coliving', [
    'label'  => null,
    'labels' => [
      'name'               => 'Коливинг', // основное название для типа записи
      'singular_name'      => 'Коливинг', // название для одной записи этого типа
      'add_new'            => 'Добавить новый', // для добавления новой записи
      'add_new_item'       => 'Добавление нового коливинга', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование коливинга', // для редактирования типа записи
      'new_item'           => 'Новое ____', // текст новой записи
      'view_item'          => 'Смотреть ____', // для просмотра записи этого типа.
      'search_items'       => 'Искать ____', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'menu_name'          => 'Коливинг', // название меню
    ],
    'description'            => '',
    'public'                 => true,
    'show_in_menu'           => null, // показывать ли в меню админки
    'show_in_rest'        => true, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-admin-multisite',
    'hierarchical'        => false,
    'supports'            => ['title', 'thumbnail', 'editor'],
    'has_archive'         => true,
    'rewrite'             => true,
    'query_var'           => true,
  ]);



  register_post_type('reviews', [
    'label'  => null,
    'labels' => [
      'name'               => 'Отзывы', // основное название для типа записи
      'singular_name'      => 'Отзыв', // название для одной записи этого типа
      'add_new'            => 'Добавить новый', // для добавления новой записи
      'add_new_item'       => 'Добавление нового отзыва', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование отзыва', // для редактирования типа записи
      'new_item'           => 'Новое ____', // текст новой записи
      'view_item'          => 'Смотреть ____', // для просмотра записи этого типа.
      'search_items'       => 'Искать ____', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'menu_name'          => 'Отзывы', // название меню
    ],
    'description'            => '',
    'public'                 => true,
    'show_in_menu'           => null, // показывать ли в меню админки
    'show_in_rest'        => null, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-groups',
    'hierarchical'        => false,
    'supports'            => ['title', 'thumbnail', 'editor'],
    'has_archive'         => true,
    'rewrite'             => true,
    'query_var'           => true,
  ]);

  register_post_type('admins', [
    'label'  => null,
    'labels' => [
      'name'               => 'Админы', // основное название для типа записи
      'singular_name'      => 'Админ', // название для одной записи этого типа
      'add_new'            => 'Добавить новый', // для добавления новой записи
      'add_new_item'       => 'Добавление нового админа', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование админа', // для редактирования типа записи
      'new_item'           => 'Новое ____', // текст новой записи
      'view_item'          => 'Смотреть ____', // для просмотра записи этого типа.
      'search_items'       => 'Искать ____', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'menu_name'          => 'Админы', // название меню
    ],
    'description'            => '',
    'public'                 => true,
    'show_in_menu'           => null, // показывать ли в меню админки
    'show_in_rest'        => null, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-admin-users',
    'hierarchical'        => false,
    'supports'            => ['title', 'thumbnail', 'editor'],
    'has_archive'         => true,
    'rewrite'             => true,
    'query_var'           => true,
  ]);


  register_post_type('events', [
    'label'  => null,
    'labels' => [
      'name'               => 'Ивенты', // основное название для типа записи
      'singular_name'      => 'Ивент', // название для одной записи этого типа
      'add_new'            => 'Добавить новый', // для добавления новой записи
      'add_new_item'       => 'Добавление нового ивента', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование ивента', // для редактирования типа записи
      'new_item'           => 'Новое ____', // текст новой записи
      'view_item'          => 'Смотреть ____', // для просмотра записи этого типа.
      'search_items'       => 'Искать ____', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'menu_name'          => 'Ивенты', // название меню
    ],
    'description'            => '',
    'public'                 => true,
    'show_in_menu'           => null, // показывать ли в меню админки
    'show_in_rest'        => true, // добавить в REST API. C WP 4.7
    'rest_base'           => null, // $post_type. C WP 4.7
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-calendar',
    'hierarchical'        => false,
    'supports'            => ['title', 'thumbnail', 'editor', 'excerpt'],
    'has_archive'         => true,
    'rewrite'             => true,
    'query_var'           => true,
  ]);
}
