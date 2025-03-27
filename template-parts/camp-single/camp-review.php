<?php
global $post;

$query = new WP_Query([
  'post_type' => 'reviews',
  'post_status' => 'publish',
  'posts_per_page' => COMOON_IS_MOBILE ? 1 : 3,
  'orderby' => 'rand',
]);

if ($query->have_posts()) : ?>
  <section class="camp-review light-background  green-image-background-mobile pb-9 pb-6-mobile">
    <div class="wrapper">

      <div class="review-list">
        <?php while ($query->have_posts()) : $query->the_post();  ?>
          <?php get_template_part('template-parts/review'); ?>
        <?php endwhile; ?>
      </div>

      <a href="<?php echo get_post_type_archive_link('reviews'); ?>" class="review-more-link"><?php echo pll__('Больше отзывов')  ?></a>

    </div>
  </section>
<?php endif;
wp_reset_postdata(); ?>