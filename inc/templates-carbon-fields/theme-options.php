<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

if (!defined('ABSPATH')) {
  exit;
}


add_action('carbon_fields_register_fields', 'comoon_attach_theme_options');

function comoon_attach_theme_options()
{

  Container::make('theme_options', __('Theme Options'))
    ->add_tab('Главная страница', [
      Field::make('media_gallery', 'front_page_heading_video')
        ->set_type(array('image', 'video'))
        ->set_width(50),
      Field::make('text', 'front_page_h1' . carbon_lang_prefix(), 'Заголовок h1')
        ->set_width(50),
      Field::make('separator', 'what_is_block', 'Что такое Comoon'),

      Field::make('text', 'what_is_title' . carbon_lang_prefix(), 'Заголовок')
        ->set_width(30),
      Field::make('rich_text', 'what_is_text' . carbon_lang_prefix(), 'Жирный текст')
        ->set_width(70)
        ->set_help_text('Цвет выделения 657838'),

      Field::make('text', 'for_whom_title' . carbon_lang_prefix(), 'Для кого - заголовок')
        ->set_width(30),
      Field::make('text', 'for_whom_text' . carbon_lang_prefix(), 'Для кого - текст')
        ->set_width(70),

      Field::make('text', 'for_what_title' . carbon_lang_prefix(), 'Для чего - заголовок')
        ->set_width(30),
      Field::make('text', 'for_what_text' . carbon_lang_prefix(), 'Для чего - текст')
        ->set_width(70),

      Field::make('separator', 'find_friends', 'Найти друзей'),
      Field::make('text', 'find_friends_title' . carbon_lang_prefix(), 'Найти друзей - заголовок')

    ])

    ->add_tab('Вы получаете', [
      Field::make('text', 'you_are_getting_block_title' . carbon_lang_prefix(), 'Заголовок блока'),

      Field::make('image', 'you_are_getting_photo_1', 'Фото 1')
        ->set_width(50),
      Field::make('text', 'you_are_getting_title_1' . carbon_lang_prefix(), 'Заголовок_1')
        ->set_width(50),
      Field::make('textarea', 'you_are_getting_text_1' . carbon_lang_prefix(), 'Текст 1'),

      Field::make('image', 'you_are_getting_photo_2', 'Фото 2')
        ->set_width(50),
      Field::make('text', 'you_are_getting_title_2' . carbon_lang_prefix(), 'Заголовок_2')
        ->set_width(50),
      Field::make('textarea', 'you_are_getting_text_2' . carbon_lang_prefix(), 'Текст 2'),

      Field::make('image', 'you_are_getting_photo_3', 'Фото 3')
        ->set_width(50),
      Field::make('text', 'you_are_getting_title_3' . carbon_lang_prefix(), 'Заголовок_3')
        ->set_width(50),
      Field::make('textarea', 'you_are_getting_text_3' . carbon_lang_prefix(), 'Текст 3'),

      Field::make('image', 'you_are_getting_photo_4', 'Фото 4')
        ->set_width(50),
      Field::make('text', 'you_are_getting_title_4' . carbon_lang_prefix(), 'Заголовок_4')
        ->set_width(50),
      Field::make('textarea', 'you_are_getting_text_4' . carbon_lang_prefix(), 'Текст 4'),

    ])


    ->add_tab('Общие', [
      Field::make('separator', 'buttons', 'Кнопки'),
      Field::make('text', 'sign_up_btn' . carbon_lang_prefix(), 'Записаться на кемп')
        ->set_width(33),
      Field::make('text', 'learn_about_the_next_btn' . carbon_lang_prefix(), 'Узнать о следующем кемпе')
        ->set_width(33),


    ]);
}
