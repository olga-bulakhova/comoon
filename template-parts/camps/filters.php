<?php
$vibe_tax = get_terms(array(
  'taxonomy' => 'vibe',
  'hide_empty' => true
));

$country_tax = get_terms(array(
  'taxonomy' => 'country',
  'hide_empty' => true
));

$job_tax = get_terms(array(
  'taxonomy' => 'job',
  'hide_empty' => true,
));

// $languages = ['ru' => 'Ru', 'pl' => 'Pl', 'en' => 'En'];

$data_min = null;

$data_max = null;

$camps = get_posts([
  'post_type' => 'camps',
  'post_status' => 'publish',
  'posts_per_page' => -1,
]);

foreach ($camps as $camp) {
  $event_start = carbon_get_post_meta($camp->ID, 'event_start');
  $event_end = carbon_get_post_meta($camp->ID, 'event_end');

  if (is_future_date($event_start)) {
    if (!isset($data_min) || new DateTime($data_min) > new DateTime($event_start)) {
      $data_min = $event_start;
    }

    if (!isset($data_max) || new DateTime($data_max) < new DateTime($event_end)) {
      $data_max = $event_end;
    }
  }
}

?>

<div class="wrapper">
  <div class="filters">
    <div class="filters-container">

      <div class="filters-wrapper">
        <div class="mobile">
          <div class="filters-mobile-heading">
            <div class="color-dark"><?php echo carbon_get_theme_option('filters_filters' . carbon_lang_prefix())  ?></div>
            <div class="filters-close"></div>
          </div>
        </div>

        <div class="filters-item">
          <select name="country" id="country" class="custom-select" placeholder="<?php echo carbon_get_theme_option('filters_country' . carbon_lang_prefix())  ?>">
            <?php foreach ($country_tax as $tax) : ?>
              <option value="<?php echo $tax->slug ?>" data-selection="<?php if (isset($_GET['country']) &&  $_GET['country'] === $tax->slug) echo 'selection' ?>"><?php echo $tax->name ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="filters-item">
          <input id="monthpicker" type="text" placeholder="<?php echo carbon_get_theme_option('filters_month' . carbon_lang_prefix())  ?>" data-min="<?php echo convert_date_to_month_year($data_min, '/') ?>" data-max="<?php echo convert_date_to_month_year($data_max, '/') ?>" />
        </div>

        <div class="filters-item">
          <select name="vibe" id="vibe" class="custom-select" placeholder="<?php echo carbon_get_theme_option('filters_vibe' . carbon_lang_prefix())  ?>">
            <?php foreach ($vibe_tax as $tax) : ?>
              <option value="<?php echo $tax->slug ?>" data-selection="<?php if (isset($_GET['vibe']) &&  $_GET['vibe'] === $tax->slug) echo 'selection' ?>"><?php echo $tax->name ?></option>
            <?php endforeach; ?>
          </select>
        </div>


        <div class="filters-item">
          <select name="job" id="job" class="custom-select" placeholder="<?php echo carbon_get_theme_option('filters_job' . carbon_lang_prefix())  ?>">
            <?php foreach ($job_tax as $tax) : ?>
              <option value="<?php echo $tax->slug ?>" data-selection="<?php if (isset($_GET['job']) &&  $_GET['job'] === $tax->slug) echo 'selection' ?>"><?php echo $tax->name ?></option>
            <?php endforeach; ?>
          </select>
        </div>


        <!-- <div class="filters-item">
          <select name="language" id="language" class="custom-select" placeholder="<?php echo carbon_get_theme_option('filters_language' . carbon_lang_prefix())  ?>">
            <?php foreach ($languages as $key => $value) : ?>
              <option value="<?php echo $key ?>" data-selection="<?php if (isset($_GET['language']) &&  $_GET['language'] === $key) echo 'selection' ?>"><?php echo $value ?></option>
            <?php endforeach; ?>
          </select>
        </div> -->

        <div class="filters-item">
          <button class="reset-btn reset-filters-btn"><?php echo carbon_get_theme_option('filters_reset' . carbon_lang_prefix())  ?></button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="filters-open mobile"></div>