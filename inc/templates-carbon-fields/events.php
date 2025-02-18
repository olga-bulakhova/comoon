<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

if (!defined('ABSPATH')) {
  exit;
}

add_action('carbon_fields_register_fields', 'events_attach_post_meta');


function events_attach_post_meta()
{
  Container::make('post_meta', 'Основная информация')
    ->where('post_type', '=', 'events')
    ->add_fields(array(
      Field::make('date_time', 'event_date_time', 'Дата и время')
        ->set_input_format('d M Y H:i', 'd M Y H:i')
        ->set_width(30),
      Field::make('text', 'event_location', 'Место проведения')
        ->set_required(true)
        ->set_width(20),
      Field::make('text', 'number_of_seats', 'Осталось мест')
        ->set_attribute('type', 'number')
        ->set_width(10),

    ));
}
