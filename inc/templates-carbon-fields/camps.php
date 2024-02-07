<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

if (!defined('ABSPATH')) {
  exit;
}

add_action('carbon_fields_register_fields', 'crb_attach_post_meta');

function crb_attach_post_meta()
{
  Container::make('post_meta', 'Основная информация')
    ->where('post_type', '=', 'camps')
    ->add_fields(array(
      Field::make('date', 'event_start', 'Дата начала события')
        ->set_width(25)
        ->set_storage_format('Y/m/d'),
      Field::make('date', 'event_end', 'Дата окончания события')
        ->set_width(25)
        ->set_storage_format('Y/m/d'),
      Field::make('text', 'number_of_persons', 'Количество человек')
        ->set_width(25),
      Field::make('text', 'event_place', 'Место проведения')
        ->set_width(25),
      Field::make('textarea', 'description', 'Краткое описание'),

      Field::make('separator', 'camp_info', 'Информация о кемпе'),
      Field::make('complex', 'camp_info_list', 'Блоки - заголовок, текст, фото')
        ->set_collapsed(true)
        ->add_fields([
          Field::make('image', 'camp_info_photo', 'Фото')
            ->set_width(40),
          Field::make('text', 'camp_info_title', 'Заголовок')
            ->set_width(60),
          Field::make('rich_text', 'camp_info_text', 'text')
        ])

    ));
}
