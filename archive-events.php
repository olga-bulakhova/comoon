<?php get_header();
global $post;

$query = new WP_Query([
  'post_type' => 'events',
  'posts_per_page' => -1,
  'orderby' => [
    'event_date' => 'ASC',
  ],
  'meta_query' => [
    'event_date' => [
      'key' => 'event_date_time',
      'value' => date("Y-m-d"),
      'compare' => '>=',
      'type' => 'DATE'
    ]
  ]
]);

if ($query->have_posts()) : ?>

  <section class="mb-9 mb-6-mobile">
    <div class="wrapper">
      <h1 class="color-dark title-48-600 center-mobile mt-5_6 mb-4 mt-4-mobile">
        <?php pll_e('Ивенты')  ?> COMOON
      </h1>

      <?php get_template_part('template-parts/events/events-list', null, ['query' => $query]); ?>
    </div>
  </section>
<?php endif;

wp_reset_postdata(); ?>

<?php get_footer(); ?>