<?php
get_template_part('template-parts/camps/filters');
if (ICL_LANGUAGE_CODE === 'ru') {
}
?>

<section class="camps-list-container camps-list-container-filtered mb-14 mb-6-mobile">
  <div class="wrapper">
    <div class="camps-upcoming-info">
      <h2 class="title-48-600 color-dark center-mobile"><?php echo carbon_get_theme_option('upcoming_camps' . carbon_lang_prefix()) ?></h2>

      <?php if (carbon_get_theme_option('upcoming_camps_text' . carbon_lang_prefix())) : ?>
        <div class="camps-upcoming-text">
          <?php echo wpautop(carbon_get_theme_option('upcoming_camps_text' . carbon_lang_prefix()))  ?>
        </div>
      <?php endif; ?>
    </div>

    <div class="no-result text-18-500 hidden"><?php echo carbon_get_theme_option('filters_no_result' . carbon_lang_prefix())  ?></div>

    <div class="camps-list upcoming-camps-list">

      <?php
      global $post;

      $tax_query = [];
      $meta_query = [];
      $job_query = [];
      $date_query = null;

      if (isset($_GET['vibe'])) {
        $tax_query[] = [
          'taxonomy' => 'vibe',
          'field'    => 'slug',
          'terms' => $_GET['vibe']
        ];
      }

      if (isset($_GET['job'])) {
        $tax_query[] = [
          'taxonomy' => 'job',
          'field'    => 'slug',
          'terms' => $_GET['job']
        ];
      }

      if (isset($_GET['country'])) {
        $tax_query[] = [
          'taxonomy' => 'country',
          'field'    => 'slug',
          'terms' => $_GET['country']
        ];
      }

      if (isset($_GET['language'])) {
        $meta_query[] = [
          'key' => 'event_language',
          'value' => $_GET['language']
        ];
      }


      if (isset($_GET['date'])) {
        $date_query = $_GET['date'];
      }

      $query = new WP_Query([
        'post_type' => 'camps',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'tax_query' => $tax_query,
        'meta_query' => $meta_query
      ]);

      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();

          $event_date = carbon_get_the_post_meta('event_start');
          if (is_future_date($event_date)) {

            $event_end_date = carbon_get_the_post_meta('event_end');

            if (
              !isset($date_query)
              || convert_date_to_month_year($event_date, '-') == $date_query
              || convert_date_to_month_year($event_end_date, '-') == $date_query
            ) {
              get_template_part('template-parts/camps/upcoming-camp');
            }
          }
        }
      }

      wp_reset_postdata();

      ?>
    </div>

  </div>
</section>