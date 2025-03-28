<?php
global $post;

$query = new WP_Query([
  'post_type' => 'camps',
  'post_status' => 'publish',
  'posts_per_page' => 2,
  'orderby' => 'menu_order',
  'order' => 'ASC',
  'post__not_in' => array($post->ID),
  'meta_query' => [
    [
      'key' => 'event_start',
      'value' => date("Y-m-d"),
      'compare' => '>=',
      'type' => 'DATE'
    ],
  ]
]);

if ($query->have_posts()): ?>
  <section class="camp-offer offer-js hidden">
    <div class="offer-container border-radius animate__opacity">
      <div class="offer-close offer-close-js">
        <img src="<?php echo COMOON_DIR_URI . '/img/close-cross.svg' ?>" alt="">
      </div>
      <h3 class="color-dark mb-1_6"><?php echo pll__('Не подходят даты этого кемпа?') ?></h3>
      <div class="mb-1_6"><?php echo pll__('Взгляни на другие предложения, они не менее классные!') ?></div>

      <div class="offer-list">

        <?php while ($query->have_posts()): $query->the_post(); ?>

          <a class="offer-item border-radius" href="<?php echo get_the_permalink() ?>" style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>)">


            <div class="camps-content offer-content">
              <div class="camps-header badges-list">
                <div>
                  <div class="badge badge-sm-icon badge-calendar"><?php echo convert_date_format(carbon_get_the_post_meta('event_start'))  . '-' . convert_date_format(carbon_get_the_post_meta('event_end'))  ?></div>
                </div>
                <div>
                  <div class="badge badge-sm-icon badge-place"><?php echo carbon_get_the_post_meta('event_place') ?></div>
                </div>
              </div>

              <div class="camps-footer">
                <h4 class="text-16-400 color-white"><?php the_title() ?></h4>

                <div class="offer-description">
                  <?php echo carbon_get_the_post_meta('description') ?>
                </div>
              </div>
            </div>
          </a>


        <?php endwhile; ?>

      </div>

      <div class="offer-button center mt-1_6">
        <a href="<?php echo get_post_type_archive_link('camps'); ?>" class="btn btn btn-primary">
          <?php echo pll__('Все кемпы COMOON') ?>
        </a>
      </div>
    </div>
  </section>
<?php endif;
wp_reset_postdata();
?>