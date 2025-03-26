<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

if (!defined('ABSPATH')) {
  exit;
}


function get_admins()
{

  $admins = get_posts(array('post_type' => 'admins', 'posts_per_page' => -1,  'orderby' => 'post_title', 'order' => 'ASC'));

  $x = [];

  foreach ($admins as $admin) {
    $x[$admin->ID] = $admin->post_title;
  }

  return $x;
}

add_action('carbon_fields_register_fields', 'crb_attach_post_meta');



function crb_attach_post_meta()
{
  Container::make('post_meta', 'Основная информация')
    ->where('post_type', '=', 'camps')
    ->add_fields(array(
      Field::make('date', 'event_start', 'Дата начала события')
        ->set_required(true)
        ->set_width(20)
        ->set_storage_format('Y/m/d'),
      Field::make('date', 'event_end', 'Дата окончания события')
        ->set_required(true)
        ->set_width(20)
        ->set_storage_format('Y/m/d'),
      Field::make('text', 'number_of_persons', 'Количество человек')
        ->set_required(true)
        ->set_width(20),
      Field::make('text', 'event_place', 'Место проведения')
        ->set_required(true)
        ->set_width(20),
      Field::make('text', 'event_places_left', 'Осталось мест')
        ->set_attribute('type', 'number')
        ->set_width(10),

      Field::make('select', 'event_language', 'Язык')
        ->add_options(array(
          '' => '',
          'ru' => 'ru',
          'pl' => 'pl',
          'en' => 'en',
        ))
        ->set_width(10),

      Field::make('textarea', 'description', 'Краткое описание'),

      Field::make('checkbox', 'hide_blok_you_are_getting', 'Скрыть блок - Вы получаете'),


      Field::make('separator', 'camp_media_gallery_separator', 'Фотогалерея'),
      Field::make('media_gallery', 'camp_media_gallery')
        ->set_type(array('image')),


      Field::make('separator', 'camp_advantages_separator', 'Информация о кемпе'),

      Field::make('complex', 'camp_advantages', 'Преимущества и что доступно в кемпе')
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
              'archway' => COMOON_DIR_URI . ADVANTAGES_ICON_URL . 'archway.svg',
              'bath' => COMOON_DIR_URI . ADVANTAGES_ICON_URL . 'bath.svg',
              'compass' => COMOON_DIR_URI . ADVANTAGES_ICON_URL . 'compass.svg',
              'fire' => COMOON_DIR_URI . ADVANTAGES_ICON_URL . 'fire.svg',
              'high' => COMOON_DIR_URI . ADVANTAGES_ICON_URL . 'high.svg',
              'kayak' => COMOON_DIR_URI . ADVANTAGES_ICON_URL . 'kayak.svg',
              'laptop' => COMOON_DIR_URI . ADVANTAGES_ICON_URL . 'laptop.svg',
              'mountain' => COMOON_DIR_URI . ADVANTAGES_ICON_URL . 'mountain.svg',
              'neighbors' => COMOON_DIR_URI . ADVANTAGES_ICON_URL . 'neighbors.svg',
              'speaker' => COMOON_DIR_URI . ADVANTAGES_ICON_URL . 'speaker.svg',
              'swim' => COMOON_DIR_URI . ADVANTAGES_ICON_URL . 'swim.svg',
              'tree' => COMOON_DIR_URI . ADVANTAGES_ICON_URL . 'tree.svg',
              'water' => COMOON_DIR_URI . ADVANTAGES_ICON_URL . 'water.svg',
            )),
          Field::make('text', 'camp_advantages_text', 'Текст')
            ->set_width(50),
        ]),

      Field::make('separator', 'camp_program_separator', 'Программа'),
      Field::make('textarea', 'camp_program_description', 'Подзаголовок'),
      Field::make('complex', 'camp_program', 'Блоки - Программа')
        ->add_fields([
          Field::make('text', 'camp_program_title', 'Заголовок')
            ->set_width(20),
          Field::make('textarea', 'camp_program_text', 'Текст')
            ->set_width(80),

        ]),


      Field::make('separator', 'camp_entertainment_separator', 'Развлечения'),
      Field::make('complex', 'camp_entertainment', 'Блоки - Развлечения')
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

      Field::make('separator', 'faq_separator', 'FAQ'),
      Field::make('complex', 'faq_accommodation_complex', 'Проживание')
        ->add_fields([
          Field::make('text', 'faq_accommodation_question', 'Вопрос')
            ->set_width(40),
          Field::make('rich_text', 'faq_accommodation_answer', 'Ответ')
            ->set_width(60),
        ]),

      Field::make('complex', 'faq_entertainment_complex', 'Развлечения')
        ->add_fields([
          Field::make('text', 'faq_entertainment_question', 'Вопрос')
            ->set_width(40),
          Field::make('rich_text', 'faq_entertainment_answer', 'Ответ')
            ->set_width(60),
        ]),

      Field::make('complex', 'faq_job_complex', 'Работа')
        ->add_fields([
          Field::make('text', 'faq_job_question', 'Вопрос')
            ->set_width(40),
          Field::make('rich_text', 'faq_job_answer', 'Ответ')
            ->set_width(60),
        ]),

      Field::make('complex', 'faq_nutrition_complex', 'Питание')
        ->add_fields([
          Field::make('text', 'faq_nutrition_question', 'Вопрос')
            ->set_width(40),
          Field::make('rich_text', 'faq_nutrition_answer', 'Ответ')
            ->set_width(60),
        ]),

      Field::make('complex', 'faq_how_to_get_complex', 'Как добраться')
        ->add_fields([
          Field::make('text', 'faq_how_to_get_question', 'Вопрос')
            ->set_width(40),
          Field::make('rich_text', 'faq_how_to_get_answer', 'Ответ')
            ->set_width(60),
        ]),

      Field::make('separator', 'room_separator', 'Стоимость и размещение'),
      Field::make('complex', 'room_complex', 'Блоки - стоимость и размещение')
        ->add_fields([



          Field::make('media_gallery', 'room_gallery', 'Галерея')
            ->set_type(array('image', 'video'))
            ->set_width(80),
          Field::make('image', 'room_video_preview', 'Превью для видео')
            ->set_width(20),

          Field::make('image', 'room_photo', 'Фото')
            ->set_width(20),

          Field::make('text', 'room_title', 'Тип номера')
            ->set_width(17),
          Field::make('text', 'room_price', 'Цена')
            ->set_width(17),
          Field::make('text', 'room_price_text', 'Надпись под ценой')
            ->set_width(17),
          Field::make('text', 'room_price_2', 'Вторая цена')
            ->set_width(17),
          Field::make('text', 'room_price_text_2', 'Надпись под второй ценой')
            ->set_width(17),


          Field::make('checkbox', 'room_is_sold', 'Места проданы')
            ->set_width(15),

          Field::make('textarea', 'room_text', 'Описание')
            ->set_width(40),
          Field::make('text', 'room_additional_info', 'Дополнительная информация')
            ->set_width(40),

          Field::make('complex', 'room_mw_complex', 'Для кого')
            ->add_fields([
              Field::make('text', 'room_mw', 'Пол')
            ]),

        ]),

      Field::make('separator', 'admins_separator', 'Админы'),

      Field::make("multiselect", "camp_admins", "Админы кемпа")
        ->add_options(get_admins()),

      Field::make('separator', 'camp_report_separator', 'Фотоотчет'),
      Field::make('media_gallery', 'camp_photo')
        ->set_type(array('image', 'video'))

    ));
}
