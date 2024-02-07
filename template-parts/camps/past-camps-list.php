<div class="camps-list past-camps-list">
  <?php
  global $post;

  $query = new WP_Query([
    'post_type' => 'camps',
  ]);

  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();

      $event_end_date = carbon_get_the_post_meta('event_end');
      if (!is_future_date($event_end_date)) {
  ?>

        <a class="camps-item" href="<?php echo get_the_permalink() ?>" style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>)">
          <div class="camps-content">
            <div class="camps-header badges-list">
              <div class="badge badge-user"><?php echo carbon_get_the_post_meta('number_of_persons') ?></div>
            </div>
            <div class="camps-footer">
              <h3 class="title-24-600 color-white"><?php the_title() ?></h3>
            </div>
          </div>
        </a>

  <?php }
    }
  }

  wp_reset_postdata();

  ?>
</div>