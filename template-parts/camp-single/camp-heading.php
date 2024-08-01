<div class="wrapper">
  <div class="camp-heading" style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>)">
    <div class="camp-heading-content center">
      <h1 class="color-white camp__title"><?php the_title(); ?></h1>
      <div class="badges-list">
        <div class="badge badge-calendar"><?php echo convert_date_format(carbon_get_the_post_meta('event_start'))  . '-' . convert_date_format(carbon_get_the_post_meta('event_end'))  ?></div>
        <div class="badge badge-place"><?php echo carbon_get_the_post_meta('event_place') ?></div>
        <div class="badge badge-user"><?php echo carbon_get_the_post_meta('number_of_persons') ?></div>

        <?php if (!empty(carbon_get_the_post_meta('event_language'))) : ?>
          <div class="badge badge-no-icon" style="text-transform: uppercase"><?php echo carbon_get_the_post_meta('event_language') ?></div>
        <?php endif; ?>

        <?php if (!empty(carbon_get_the_post_meta('event_places_left'))) : ?>
          <div class="badge badge-blue badge-lightning"><?php echo carbon_get_theme_option('places_left' . carbon_lang_prefix()) . ' - ' . carbon_get_the_post_meta('event_places_left') ?></div>
        <?php endif; ?>

        <?php if (carbon_get_the_post_meta('event_places_left') == 0) : ?>
          <div class="badge badge-red badge-no-icon">SOLD OUT</div>
        <?php endif; ?>

      </div>

      <?php if (carbon_get_the_post_meta('event_places_left') != 0) : ?>
        <a href="#camp-rooms" class="btn btn-secondary btn-large"><?php echo carbon_get_theme_option('book_btn' . carbon_lang_prefix()) ?></a>

      <?php else :

        $separator = ICL_LANGUAGE_CODE === 'pl' ? '_' : '|';

      ?>

        <a href="<?php echo  carbon_get_theme_option('wait_list_link' . carbon_lang_prefix()) . $separator . 'camp=' . $post->post_name . get_urm_to_tg() ?>" class="btn btn-secondary btn-large" target="_blank"> <?php echo carbon_get_theme_option('sign_up_for_the_list_btn' . carbon_lang_prefix()) ?></a>

      <?php endif; ?>
    </div>
  </div>
</div>