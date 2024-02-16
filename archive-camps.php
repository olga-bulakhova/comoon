<?php get_header(); ?>

<div class="wrapper">
  <div class="breadcrumbs">
    <a class="home-page-link" href="<?php echo get_url_path(); ?>"></a>
    <span>/</span>
    <span><?php echo carbon_get_theme_option('camps' . carbon_lang_prefix()) ?></span>
  </div>

  <div class="pt-4-mobile">

    <section class="camps-list-container mb-18 mb-6-mobile">
      <h2 class="title-48-600 color-dark mb-5_6 mb-4-mobile center-mobile"><?php echo carbon_get_theme_option('upcoming_camps' . carbon_lang_prefix()) ?></h2>
      <?php get_template_part('template-parts/camps/upcoming-camps-list'); ?>
    </section>

    <section class="camps-list-container">
      <h2 class="title-48-600 color-dark mb-4 center-mobile"><?php echo carbon_get_theme_option('past_camps' . carbon_lang_prefix()) ?></h2>
      <?php get_template_part('template-parts/camps/past-camps-list'); ?>
    </section>

  </div>
</div>

<section class="form-container mt-18 mb-18 mt-6-mobile mb-6-mobile">
  <div class="wrapper">
    <?php get_template_part('template-parts/forms/form-container'); ?>
  </div>
</section>

<?php get_footer(); ?>