<?php
global $post;

$query = new WP_Query([
  'post_type' => 'camps',
  'post_status' => 'publish',
  'posts_per_page' => 3,
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
  <section class="camp-relative mt-18 pb-18 mt-6-mobile pb-6-mobile">
    <div class="wrapper">
      <h2 class="title-48-600 color-dark mb-5_6 mb-6-mobile center-mobile">
        <?php echo carbon_get_theme_option('upcoming_camps' . carbon_lang_prefix()) ?>
      </h2>

      <div class="camps-list upcoming-camps-list camps-list-mobile-slider">

        <?php while ($query->have_posts()): $query->the_post(); ?>
          <div>
            <?php get_template_part('template-parts/camps/upcoming-camp'); ?>
          </div>
        <?php endwhile; ?>

      </div>
    </div>
  </section>
<?php endif; ?>