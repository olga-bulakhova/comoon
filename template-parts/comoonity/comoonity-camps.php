      <?php global $post;

      $query = new WP_Query([
        'post_type' => 'camps',
        'post_status' => 'publish',
        'posts_per_page' => 9,
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

      if ($query->have_posts()) : ?>
      
        <section class="pt-9 pb-18 pt-6-mobile pb-9-mobile comoonity-camps">
          <div class="wrapper">
            <h2 class="title-md-uppercase center mb-1_6"><?php pll_e('жизнь на кемпах')  ?></h2>
            <div class="text-lg-bold color-dark center mb-10 mb-4-mobile"><?php echo pll_e('Посмотри, как жили и радовались ребята на прошедших кемпах.') ?></div>

            <div class="comoonity-camps-list">

              <?php while ($query->have_posts()) : $query->the_post(); ?>

                <div>
                  <a class="camp-heading" href="<?php echo get_the_permalink() ?>" style="display: block; background-image:url(<?php echo get_the_post_thumbnail_url() ?>)">
                    <div class="camp-heading-content camp-heading-content-comoonity center">
                      <h1 class="color-white camp__title"><?php the_title(); ?></h1>

                      <div class="badge-list-container">
                        <div class="badges-list badges-list-top">
                          <div class="badge badge-place"><?php echo carbon_get_the_post_meta('event_place') ?></div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="center-desktop mt-1_6"><?php echo carbon_get_the_post_meta('description') ?></div>
                </div>

              <?php endwhile; ?>

            </div>
          </div>
        </section>

      <?php endif;
      wp_reset_postdata(); ?>