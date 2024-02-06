<?php

/**
 * Укажем пространства имен. Их лучше прописать в самом верху файла
 **/

use Carbon_Fields\Container;
use Carbon_Fields\Field;

if (!defined('ABSPATH')) {
  exit;
}

add_action('carbon_fields_register_fields', 'crb_attach_post_meta');

function crb_attach_post_meta()
{
  Container::make('post_meta', 'Параметры')
    ->where('post_type', '=', 'camps')
    ->add_fields(array(
      Field::make('date', 'event_start', 'Дата начала события')
        ->set_width(33)
        ->set_storage_format('Y/m/d'),
      Field::make('date', 'event_end', 'Дата окончания события')
        ->set_width(33)
        ->set_storage_format('Y/m/d'),
      Field::make('text', 'number_of_persons', 'Количество человек')
        ->set_width(33),
      Field::make('textarea', 'description', 'Краткое описание')
    ));
}
