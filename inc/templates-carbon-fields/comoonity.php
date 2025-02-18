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

      Field::make('separator', 'comoonity_numbers_separator', 'COMOONity в цифрах'),
      Field::make('text', 'comoonity_numbers_1', 'Количество проведенных кемпов')
        ->set_attribute('type', 'number')
        ->set_width(30),
      Field::make('text', 'comoonity_numbers_2', 'Количество участников')
        ->set_attribute('type', 'number')
        ->set_width(30),
      Field::make('text', 'comoonity_numbers_3', 'Количество стран')
        ->set_attribute('type', 'number')
        ->set_width(30),

      Field::make('separator', 'comoonity_insta_separator', 'Лента инстаграм'),

      Field::make('complex', 'comoonity_insta', 'Рилсы')
        ->add_fields([
          Field::make('file', 'comoonity_insta_video', 'Видео')
            ->set_type(['video'])
            ->set_width(20),
          Field::make('text', 'comoonity_insta_url', 'Url видео в инстаграм')
            ->set_width(30),

        ]),
    ));
}
