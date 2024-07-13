<div class="wrapper">
  <div class="camp-heading" style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>)">
    <div class="camp-heading-content center">
      <h1 class="color-white"><?php the_title(); ?></h1>
      <div class="badges-list">
        <div class="badge badge-calendar"><?php echo convert_date_format(carbon_get_the_post_meta('event_start'))  . '-' . convert_date_format(carbon_get_the_post_meta('event_end'))  ?></div>
        <div class="badge badge-place"><?php echo carbon_get_the_post_meta('event_place') ?></div>
        <div class="badge badge-user"><?php echo carbon_get_the_post_meta('number_of_persons') ?></div>

        <?php if (!empty(carbon_get_the_post_meta('event_places_left'))) : ?>
          <div class="badge badge-blue badge-lightning"><?php echo carbon_get_theme_option('places_left' . carbon_lang_prefix()) . ' - ' . carbon_get_the_post_meta('event_places_left') ?></div>
        <?php endif; ?>

      </div>

      <a href="#camp-rooms" class="btn btn-secondary btn-large"><?php echo carbon_get_theme_option('book_btn' . carbon_lang_prefix()) ?></a>
    </div>
  </div>
</div>