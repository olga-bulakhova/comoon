<?php
global $post;

$query = new WP_Query([
  'post_type' => 'reviews',
  'post_parent' => $post->ID,
]);

if ($query->have_posts()) : ?>
  <section class="camp-review light-background pt-14 pt-6-mobile pb-18 pb-6-mobile">
    <div class="wrapper">
      <h2 class="title-48-600 color-dark mb-5_6 mb-4-mobile center-mobile"><?php echo carbon_get_theme_option('reviews_title' . carbon_lang_prefix()) ?></h2>
      <div class="review-list">
        <?php while ($query->have_posts()) : $query->the_post(); ?>
          <?php get_template_part('template-parts/review'); ?>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
<?php endif;
wp_reset_postdata(); ?>