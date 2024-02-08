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
        ->set_required(true)
        ->set_width(25)
        ->set_storage_format('Y/m/d'),
      Field::make('date', 'event_end', 'Дата окончания события')
        ->set_required(true)
        ->set_width(25)
        ->set_storage_format('Y/m/d'),
      Field::make('text', 'number_of_persons', 'Количество человек')
        ->set_required(true)
        ->set_width(25),
      Field::make('text', 'event_place', 'Место проведения')
        ->set_required(true)
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
        ]),

      Field::make('separator', 'camp_media_gallery_separator', 'Фотогалерея'),
      Field::make('media_gallery', 'camp_media_gallery')
        ->set_type(array('image')),


      Field::make('separator', 'camp_advantages_separator', 'Преимущества'),

      Field::make('complex', 'camp_advantages', 'Блоки - Преимущества')
        ->set_collapsed(true)
        ->add_fields([
          Field::make('radio_image', 'camp_advantages_icon', 'Иконка')
            ->set_width(50)
            ->add_options(array(
              'bath' => COMOON_DIR_URI . ADVANTAGES_ICON_URL . 'bath.svg',
              'house' => COMOON_DIR_URI . ADVANTAGES_ICON_URL . 'house.svg',
              'mountain' => COMOON_DIR_URI . ADVANTAGES_ICON_URL . 'mountain.svg',
              'user' => COMOON_DIR_URI . ADVANTAGES_ICON_URL . 'user.svg',
              'water' => COMOON_DIR_URI . ADVANTAGES_ICON_URL . 'water.svg',
              'wifi' => COMOON_DIR_URI . ADVANTAGES_ICON_URL . 'wifi.svg',
            )),
          Field::make('text', 'camp_advantages_text', 'Текст')
            ->set_width(50),
        ]),

      Field::make('separator', 'camp_entertainment_separator', 'Развлечения'),
      Field::make('complex', 'camp_entertainment', 'Блоки - Развлечения')
        ->set_collapsed(true)
        ->add_fields([
          Field::make('image', 'camp_entertainment_photo', 'Фото')
            ->set_width(20),
          Field::make('text', 'camp_entertainment_title', 'Заголовок')
            ->set_width(30),
          Field::make('text', 'camp_entertainment_text', 'Текст')
            ->set_width(50),

        ]),

      Field::make('separator', 'camp_available_separator', 'В кемпе доступны'),
      Field::make('complex', 'camp_available', 'Блоки - Что доступно в кемпе')
        ->set_collapsed(true)
        ->add_fields([
          Field::make('radio_image', 'camp_available_icon', 'Иконка')
            ->set_width(70)
            ->add_options(array(
              'archway' => COMOON_DIR_URI . AVAILABLE_ICON_URL . 'archway.svg',
              'bath' => COMOON_DIR_URI . AVAILABLE_ICON_URL . 'bath.svg',
              'compass' => COMOON_DIR_URI . AVAILABLE_ICON_URL . 'compass.svg',
              'fire' => COMOON_DIR_URI . AVAILABLE_ICON_URL . 'fire.svg',
              'high' => COMOON_DIR_URI . AVAILABLE_ICON_URL . 'high.svg',
              'kayak' => COMOON_DIR_URI . AVAILABLE_ICON_URL . 'kayak.svg',
              'laptop' => COMOON_DIR_URI . AVAILABLE_ICON_URL . 'laptop.svg',
              'mountain' => COMOON_DIR_URI . AVAILABLE_ICON_URL . 'mountain.svg',
              'neighbors' => COMOON_DIR_URI . AVAILABLE_ICON_URL . 'neighbors.svg',
              'speaker' => COMOON_DIR_URI . AVAILABLE_ICON_URL . 'speaker.svg',
              'swim' => COMOON_DIR_URI . AVAILABLE_ICON_URL . 'swim.svg',
              'tree' => COMOON_DIR_URI . AVAILABLE_ICON_URL . 'tree.svg',
              'water' => COMOON_DIR_URI . AVAILABLE_ICON_URL . 'water.svg',
            )),
          Field::make('text', 'camp_available_text', 'Текст')
            ->set_width(30),
        ]),

    ));
}
