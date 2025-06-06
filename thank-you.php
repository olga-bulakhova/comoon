<?php /* Template Name: Thank You */ ?>


<?php get_header(); ?>

<div class="light-background light-bg-overlay thank-you">
  <div class="wrapper">
    <div class="breadcrumbs">
      <a class="home-page-link" href="<?php echo get_home_url(); ?>"></a>
      <span>/</span>
    </div>

    <div class="center thank-heading pb-8 pb-12-mobile">
      <h1 class="color-dark mb-4"><?php echo carbon_get_theme_option('thank_you_title' . carbon_lang_prefix()) ?></h1>

      <div class="text-18-400 thank-text">
        <?php echo carbon_get_theme_option('thank_you_text_1' . carbon_lang_prefix()) ?>
      </div>

      <div class="mb-4">
        <iframe src="<?php echo carbon_get_theme_option('thank_you_iframe_src' . carbon_lang_prefix()) ?>" title="Pipedrive Scheduler Embed" frameborder="0" height="810px" width="100%" style="max-width: 800px" allowfullscreen></iframe>
      </div>

      <div class="text-18-400 thank-text">
        <?php echo carbon_get_theme_option('thank_you_text_2' . carbon_lang_prefix()) ?>
      </div>

      <div class="thank-social">
        <?php if (!empty(carbon_get_theme_option('instagram_url' . carbon_lang_prefix()))) : ?>
          <a class="insta" href="<?php echo carbon_get_theme_option('instagram_url' . carbon_lang_prefix()) ?>" target="_blank"></a>
        <?php endif; ?>
        <?php if (!empty(carbon_get_theme_option('youtube_url' . carbon_lang_prefix()))) : ?>
          <a class="youtube" href="<?php echo carbon_get_theme_option('youtube_url' . carbon_lang_prefix()) ?>" target="_blank"></a>
        <?php endif; ?>
      </div>
    </div>

    <?php
    global $post;

    $query = new WP_Query([
      'post_type' => 'reviews',
      'posts_per_page' => 3
    ]);

    if ($query->have_posts()) : ?>
      <section class="camp-review light-background  pb-18 pb-6-mobile">

        <h2 class="title-48-600 color-dark mb-5_6 mb-4-mobile center-mobile"><?php echo carbon_get_theme_option('reviews_title' . carbon_lang_prefix()) ?></h2>
        <div class="review-list">
          <?php while ($query->have_posts()) : $query->the_post(); ?>
            <?php get_template_part('template-parts/review'); ?>
          <?php endwhile; ?>
        </div>

      </section>
    <?php endif;
    wp_reset_postdata(); ?>

  </div>
</div>




<?php get_footer(); ?>