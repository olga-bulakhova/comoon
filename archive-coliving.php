<?php get_header(); ?>

<div class="wrapper">
  <div class="breadcrumbs">
    <a class="home-page-link" href="<?php echo get_home_url(); ?>"></a>
    <span>/</span>
    <span>Коливинг</span>
  </div>
</div>

<div class="pt-4-mobile">
  <?php get_template_part('template-parts/coliving/coliving-list'); ?>
</div>

<?php get_footer(); ?>