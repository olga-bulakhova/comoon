<section class="camps-list-container camps-list-container-filtered mb-14 mb-6-mobile">
  <div class="wrapper">
    <div class="camps-upcoming-info">
      <h2 class="title-48-600 color-dark center-mobile">Коливинг</h2>
    </div>

    <div class="camps-list upcoming-camps-list">

      <?php
      global $post;

      $query = new WP_Query([
        'post_type' => 'coliving',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC',
      ]);

      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();

          get_template_part('template-parts/coliving/coliving-item');
        }
      }

      wp_reset_postdata();

      ?>
    </div>

  </div>
</section>