<section class="camps-list-container camps-list-container-past pt-14 pb-14 pt-6-mobile pb-6-mobile">
  <div class="wrapper">
    <div class="camps-past-info">
      <h2 class="title-48-600 color-dark center-mobile"><?php echo carbon_get_theme_option('past_camps' . carbon_lang_prefix()) ?></h2>
      <?php if (carbon_get_theme_option('past_camps_text' . carbon_lang_prefix())) : ?>
        <div class="camps-past-text">
          <?php echo wpautop(carbon_get_theme_option('past_camps_text' . carbon_lang_prefix()))  ?>
        </div>
      <?php endif; ?>
    </div>
    <div class="camps-list past-camps-list">
      <?php
      global $post;

      $query = new WP_Query([
        'post_type' => 'camps',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'meta_query' => [
          [
            'key' => 'event_end',
            'value' => date("Y-m-d"),
            'compare' => '<',
            'type' => 'DATE'
          ]
        ]
      ]);

      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
      ?>

          <a class="camps-item" href="<?php echo get_the_permalink() ?>" style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>)">
            <div class="camps-content">
              <div class="camps-header badges-list">
                <div class="badge badge-place"><?php echo carbon_get_the_post_meta('event_place') ?></div>
              </div>
              <div class="camps-footer">
                <h3 class="title-24-600 color-white"><?php the_title() ?></h3>
              </div>
            </div>
          </a>

      <?php }
      }

      wp_reset_postdata();

      ?>
    </div>

  </div>
</section>