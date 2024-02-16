<?php get_header(); ?>

<div class="light-background light-bg-overlay">

  <div class="wrapper">
    <div class="breadcrumbs">
      <a class="home-page-link" href="<?php echo get_url_path(); ?>"></a>
      <span>/</span>
      <span><?php echo carbon_get_theme_option('reviews_title' . carbon_lang_prefix()) ?></span>
    </div>

    <section class="pb-18 pb-6-mobile pt-4-mobile">
      <h1 class="title-48-600 color-dark mb-5_6 mb-4-mobile center-mobile"><?php echo carbon_get_theme_option('reviews_title' . carbon_lang_prefix()) ?></h1>

      <?php
      global $post;

      $query = new WP_Query([
        'post_type' => 'reviews',
        'posts_per_page' => -1
      ]);


      if ($query->have_posts()) : ?>

        <div class="review-list">
          <?php while ($query->have_posts()) : $query->the_post(); ?>
            <?php get_template_part('template-parts/review'); ?>
          <?php endwhile; ?>
        </div>

    </section>
  <?php endif;
      wp_reset_postdata(); ?>

  </section>
  </div>
</div>

<?php get_footer(); ?>