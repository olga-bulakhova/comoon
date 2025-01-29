<?php get_header(); ?>

<div class="light-background light-bg-overlay">

  <div class="wrapper">
    <!-- <div class="breadcrumbs">
      <a class="home-page-link" href="<?php echo get_url_path(); ?>"></a>
      <span>/</span>
      <span><?php echo carbon_get_theme_option('reviews_title' . carbon_lang_prefix()) ?></span>
    </div> -->

    <section class="mt-4 mt-1_6-mobile pb-9 pb-6-mobile">
      <h1 class="title-48-600 color-dark mb-4 mb-4-mobile center-mobile"><?php pll_e('Видео отзывы')  ?></h1>

      <?php

      get_template_part('template-parts/video-reviews');

      global $post;

      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $default_posts_per_page = get_option('posts_per_page');


      $query = new WP_Query([
        'post_type' => 'reviews',
        'posts_per_page' => $default_posts_per_page,
        'paged' => $paged,
      ]);


      if ($query->have_posts()) : ?>

        <h2 class="title-48-600 color-dark mb-4 mb-4-mobile mt-12 mt-4-mobile center-mobile"><?php pll_e('Больше отзывов')  ?></h2>

        <div class="review-list">
          <?php while ($query->have_posts()) : $query->the_post(); ?>
            <?php get_template_part('template-parts/review'); ?>
          <?php endwhile; ?>
        </div>

        <div class="pagination center">
          <?php my_pagenavi(); ?>
        </div>

    </section>
  <?php endif;
      wp_reset_postdata(); ?>
  </section>
  </div>


  <section class="home-find-friends comoonity-signup">
    <div class="wrapper">
      <div class="home-find-friends-content">
        <h2 class="color-white width-100"><?php pll_e('Присоединяйся к COMOONity!')  ?></h2>
        <button data-slug="<?php echo get_slug() ?>" class="btn btn-secondary open-modal-form">
          <?php echo carbon_get_theme_option('sign_up_btn' . carbon_lang_prefix()) ?>
        </button>
      </div>
    </div>
  </section>


</div>

<?php get_footer(); ?>