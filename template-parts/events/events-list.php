<?php

$args = wp_parse_args(
  $args,
  ['query' => false]
);

$query = $args['query'];
?>

<div class="events-list">
  <?php while ($query->have_posts()) : $query->the_post(); ?>
    <div>
      <a href="<?php echo get_the_permalink() ?>" class="event border-radius">
        <div>
          <div class="event-image" style="<?php if (has_post_thumbnail()) {
                                            echo 'background-image:url(' . get_the_post_thumbnail_url() . ')';
                                          } ?>"></div>

          <div class="event-content">
            <div>
              <div class="event-title title-24-600 color-dark"><?php the_title() ?></div>
              <div class="event-date"><?php echo  convert_date_time_with_month_text(carbon_get_the_post_meta('event_date_time')) ?></div>
              <div class="event-location"><?php echo carbon_get_the_post_meta('event_location') ?></div>
            </div>
          </div>
        </div>

        <div class="event-badge">
          <?php if (!empty(carbon_get_the_post_meta('number_of_seats')) && carbon_get_the_post_meta('number_of_seats') <= 5) : ?>
            <div class="badge badge-blue badge-lightning badge-lightning-sm">
              <?php echo pll__('Осталось мест') . ' - ' .  carbon_get_the_post_meta('number_of_seats'); ?>
            </div>
          <?php endif; ?>

          <?php if (carbon_get_the_post_meta('number_of_seats') == 0) : ?>
            <div class="badge badge-red badge-no-icon badge-sm"><?php echo pll__('Мест нет')  ?></div>
          <?php endif; ?>
        </div>
      </a>
    </div>
  <?php endwhile; ?>
</div>