<div class="camp-heading mb-5_6 mb-4-mobile mt-1_6-mobile" style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>)">
  <div class="camp-heading-content event-heading-content center">
    <h1 class="color-white camp__title"><?php the_title(); ?></h1>

    <div class="badge-list-container">
      <div class="badges-list badges-list-top">
        <div class="badge badge-calendar"><?php echo convert_date_time(carbon_get_the_post_meta('event_date_time'))  ?></div>
        <div class="badge badge-place"><?php echo carbon_get_the_post_meta('event_location') ?></div>

        <?php if (!empty(carbon_get_the_post_meta('number_of_seats')) && carbon_get_the_post_meta('number_of_seats') <= 5) : ?>
          <div class="badge badge-blue badge-lightning">
            <?php echo pll__('Осталось мест') . ' - ' .  carbon_get_the_post_meta('number_of_seats'); ?>
          </div>
        <?php endif; ?>

        <?php if (carbon_get_the_post_meta('number_of_seats') == 0) : ?>
          <div class="badge badge-red badge-no-icon"><?php echo pll__('Мест нет')  ?></div>
        <?php endif; ?>
      </div>
    </div>

    <?php if (!empty(carbon_get_the_post_meta('event_register'))): ?>
      <a href="<?php echo carbon_get_the_post_meta('event_register') ?>" class="btn btn-secondary" target="_blank" rel="nofollow"><?php pll_e('Записаться на ивент')  ?></a>
    <?php endif; ?>
  </div>
</div>