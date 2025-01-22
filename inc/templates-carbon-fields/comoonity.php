<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

if (!defined('ABSPATH')) {
  exit;
}

add_action('carbon_fields_register_fields', 'comoonity_attach_post_meta');

function comoonity_attach_post_meta()
{
  Container::make('post_meta', 'COMOONity')
    ->where('post_type', '=', 'page')
    ->show_on_template('comoonity.php')
    ->add_fields(array(

      Field::make('separator', 'comoonity_values_separator', 'Ценности'),
      Field::make('complex', 'comoonity_values', 'Блоки')
        ->add_fields([
          Field::make('image', 'comoonity_values_photo', 'Фото')
            ->set_width(20),
          Field::make('text', 'comoonity_values_title', 'Заголовок')
            ->set_width(30),
          Field::make('text', 'comoonity_values_text', 'Текст')
            ->set_width(50),

        ]),
    ));
}
