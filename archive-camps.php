<?php get_header(); ?>

<div class="wrapper">
  <div class="breadcrumbs">
    <a class="home-page-link" href="<?php echo get_home_url(); ?>"></a>
    <span>/</span>
    <span><?php echo carbon_get_theme_option('camps' . carbon_lang_prefix()) ?></span>
  </div>
</div>

<div class="pt-4-mobile">

  <?php get_template_part('template-parts/camps/upcoming-camps-list'); ?>

</div>

<?php get_template_part('template-parts/camps/past-camps-list'); ?>

<?php if (carbon_get_theme_option('what_is_cammon' . carbon_lang_prefix())) : ?>
  <section class="pt-14 pb-14 pt-6-mobile pb-6-mobile">
    <div class="wrapper">
      <h2 class="title-md-uppercase center mb-1_6"><?php echo carbon_get_theme_option('what_is_title' . carbon_lang_prefix()) ?></h2>
      <div class="text-lg-bold color-dark center"><?php echo carbon_get_theme_option('what_is_cammon' . carbon_lang_prefix()) ?></div>
    </div>
  </section>
<?php endif; ?>

<?php get_footer(); ?>