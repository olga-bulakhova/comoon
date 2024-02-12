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

      Field::make('separator', 'front_page_video_separator', 'Видео для главной страницы'),
      Field::make('media_gallery', 'front_page_video')
        ->set_type(array('video')),



      Field::make('separator', 'find_friends', 'Найти друзей'),
      Field::make('text', 'find_friends_title' . carbon_lang_prefix(), 'Найти друзей - заголовок'),

      Field::make('separator', 'founders', 'Фаундеры'),
      Field::make('text', 'founders_title' . carbon_lang_prefix(), 'Заголовок')
        ->set_width(30),
      Field::make('rich_text', 'founders_text' . carbon_lang_prefix(), 'Жирный текст')
        ->set_width(70)
        ->set_help_text('Цвет выделения 657838'),

      Field::make('image', 'founder_photo_1', 'Фото 1')
        ->set_width(30),
      Field::make('text', 'founder_name_1' . carbon_lang_prefix(), 'Имя 1')
        ->set_width(35),
      Field::make('text', 'founder_insta_url_1' . carbon_lang_prefix(), 'Instagram URL 1')
        ->set_width(35),
      Field::make('textarea', 'founder_text_1' . carbon_lang_prefix(), 'Текст 1'),

      Field::make('image', 'founder_photo_2', 'Фото 2')
        ->set_width(30),
      Field::make('text', 'founder_name_2' . carbon_lang_prefix(), 'Имя 2')
        ->set_width(35),
      Field::make('text', 'founder_insta_url_2' . carbon_lang_prefix(), 'Instagram URL 2')
        ->set_width(35),
      Field::make('textarea', 'founder_text_2' . carbon_lang_prefix(), 'Текст 2'),


      Field::make('image', 'founder_photo_3', 'Фото 3')
        ->set_width(30),
      Field::make('text', 'founder_name_3' . carbon_lang_prefix(), 'Имя 3')
        ->set_width(35),
      Field::make('text', 'founder_insta_url_3' . carbon_lang_prefix(), 'Instagram URL 3')
        ->set_width(35),
      Field::make('textarea', 'founder_text_3' . carbon_lang_prefix(), 'Текст 3'),

      Field::make('image', 'founder_photo_4', 'Фото 4')
        ->set_width(30),
      Field::make('text', 'founder_name_4' . carbon_lang_prefix(), 'Имя 4')
        ->set_width(35),
      Field::make('text', 'founder_insta_url_4' . carbon_lang_prefix(), 'Instagram URL 4')
        ->set_width(35),
      Field::make('textarea', 'founder_text_4' . carbon_lang_prefix(), 'Текст 4'),

      Field::make('separator', 'last_block', 'Блок перед футером'),
      Field::make('rich_text', 'last_block_text' . carbon_lang_prefix(), 'Текст')
        ->set_help_text('Цвет выделения 657838'),

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
      Field::make('separator', 'titles', 'Заголовки'),
      Field::make('text', 'camps' . carbon_lang_prefix(), 'Kемпы')
        ->set_width(25),
      Field::make('text', 'upcoming_camps' . carbon_lang_prefix(), 'Предстоящие кемпы')
        ->set_width(25),
      Field::make('text', 'past_camps' . carbon_lang_prefix(), 'Прошедшие кемпы')
        ->set_width(25),
      Field::make('text', 'camps_info' . carbon_lang_prefix(), 'Информация о кемпе')
        ->set_width(25),

      Field::make('text', 'entertainment_title' . carbon_lang_prefix(), 'Развлечения')
        ->set_width(25),
      Field::make('text', 'available_at_camp_title' . carbon_lang_prefix(), 'В кемпе доступны')
        ->set_width(25),
      Field::make('text', 'faq_title' . carbon_lang_prefix(), 'FAQ')
        ->set_width(25),
      Field::make('text', 'price_title' . carbon_lang_prefix(), 'Стоимость и размещение')
        ->set_width(25),
      Field::make('text', 'reviews_title' . carbon_lang_prefix(), 'Отзывы')
        ->set_width(25),
      Field::make('text', 'report_title' . carbon_lang_prefix(), 'Фотоотчет')
        ->set_width(25),

      Field::make('separator', 'faq_titles', 'Заголовки для FAQ'),
      Field::make('text', 'faq_accommodation' . carbon_lang_prefix(), 'Проживание')
        ->set_width(20),
      Field::make('text', 'faq_entertainment' . carbon_lang_prefix(), 'Развлечения')
        ->set_width(20),
      Field::make('text', 'faq_job' . carbon_lang_prefix(), 'Работа')
        ->set_width(20),
      Field::make('text', 'faq_nutrition' . carbon_lang_prefix(), 'Питание')
        ->set_width(20),
      Field::make('text', 'faq_how_to_get' . carbon_lang_prefix(), 'Как добраться')
        ->set_width(20),

      Field::make('separator', 'buttons', 'Кнопки'),
      Field::make('text', 'sign_up_btn' . carbon_lang_prefix(), 'Записаться на кемп')
        ->set_width(33),
      Field::make('text', 'learn_about_the_next_btn' . carbon_lang_prefix(), 'Узнать о следующем кемпе')
        ->set_width(33),
      Field::make('text', 'book_btn' . carbon_lang_prefix(), 'Забронировать')
        ->set_width(33),

      Field::make('separator', 'footer', 'Футер'),
      Field::make('text', 'footer_text' . carbon_lang_prefix(), 'Политика конфиденциальности'),

      Field::make('separator', 'social', 'Соц сети'),
      Field::make('text', 'instagram_url' . carbon_lang_prefix(), 'Instagram URL')
        ->set_width(33),
      Field::make('text', 'youtube_url' . carbon_lang_prefix(), 'Youtube URL')
        ->set_width(33),
      Field::make('text', 'email_url' . carbon_lang_prefix(), 'Email URL')
        ->set_width(33),

    ]);
}
