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
        ->set_width(50),
      Field::make('text', 'review_job', 'Должность')
        ->set_width(50),
    ));
}
