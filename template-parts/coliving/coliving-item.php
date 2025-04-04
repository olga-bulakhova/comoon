<a class="camps-item" href="<?php echo get_the_permalink() ?>" style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>)">
  <div class="camps-content">
    <div class="camps-header badges-list">

      <?php if (!empty(carbon_get_the_post_meta('event_start'))) : ?>
        <div class="badge badge-calendar"><?php echo convert_date_format(carbon_get_the_post_meta('event_start'))  ?></div>
      <?php endif; ?>

      <div class="badge badge-user"><?php echo carbon_get_the_post_meta('number_of_persons') ?></div>
      <div class="badge badge-place"><?php echo carbon_get_the_post_meta('event_place') ?></div>

      <?php if (!empty(carbon_get_the_post_meta('event_language')) && carbon_get_the_post_meta('event_language') !== 'ru') : ?>
        <div class="badge badge-<?php echo carbon_get_the_post_meta('event_language') ?>" style="text-transform: uppercase"><?php echo carbon_get_the_post_meta('event_language') ?></div>
      <?php endif; ?>


      <?php if (!empty(carbon_get_the_post_meta('event_places_left'))) : ?>
        <div class="badge badge-blue badge-lightning"><?php echo carbon_get_theme_option('places_left' . carbon_lang_prefix()) . ' - ' . carbon_get_the_post_meta('event_places_left') ?></div>
      <?php endif; ?>

      <?php if (carbon_get_the_post_meta('event_places_left') == 0) : ?>
        <div class="badge badge-red badge-no-icon">SOLD OUT</div>
      <?php endif; ?>

    </div>

    <div class="camps-footer">
      <h3 class="title-32-600 color-white"><?php the_title() ?></h3>
      <div class="camps-description color-white-opacity text-18-400 mt-1_6"><?php echo carbon_get_the_post_meta('description') ?></div>
    </div>
  </div>
</a>