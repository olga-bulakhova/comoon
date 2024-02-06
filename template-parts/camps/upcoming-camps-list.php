<?php
global $post;

$query = new WP_Query([
  'post_type' => 'camps',
]);

if ($query->have_posts()) {

  while ($query->have_posts()) {
    $query->the_post();

    $event_date = carbon_get_the_post_meta('event_start');
    if (is_future_date($event_date)) { ?>

      <div class="upcoming-camps-item">
        sdfdsff
      </div>

<?php }
  }
}

wp_reset_postdata();

?>