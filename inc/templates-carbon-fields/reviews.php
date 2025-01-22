<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

if (!defined('ABSPATH')) {
  exit;
}

add_action('carbon_fields_register_fields', 'review_attach_post_meta');

function review_attach_post_meta()
{
  Container::make('post_meta', 'Поля')
    ->where('post_type', '=', 'reviews')
    ->add_fields(array(
      Field::make('text', 'review_name', 'Имя')
        ->set_width(30),
      Field::make('text', 'review_job', 'Должность')
        ->set_width(30),
      Field::make('text', 'review_insta', 'Ссылка на инстаграм')
        ->set_width(30),

      Field::make('file', 'review_video', 'Видео')
        ->set_width(20)
        ->set_type(['video']),

      Field::make('image', 'review_video_poster', 'Превью для видео ')
        ->set_width(20),

      Field::make('rich_text', 'review_text', 'Текст для страницы COMOONity')
        ->set_width(60),

      Field::make('checkbox', 'review_display_in_comoonity', 'Отображать на странице COMOONity')
    ));
}
