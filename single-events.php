<?php get_header(); ?>

<div class="wrapper">
  <div class="breadcrumbs">
    <a class="home-page-link" href="<?php echo get_url_path(); ?>"></a>
    <span>/</span>
    <a href="<?php echo get_url_path() . 'events'; ?>"><?php pll_e('Ивенты')  ?></a>
    <span>/</span>
    <span><?php the_title(); ?></span>
  </div>

  <?php get_template_part('template-parts/event-single/event-heading'); ?>

  <?php if (!empty(carbon_get_the_post_meta('event_description'))): ?>
    <div class="mt-5_6 mb-5_6 mt-4-mobile mb-4-mobile  post-content-width">
      <?php echo carbon_get_the_post_meta('event_description') ?>
    </div>
  <?php endif; ?>

  <?php get_template_part('template-parts/event-single/event-gallery'); ?>

  <div class="mt-5_6 mb-5_6 mt-4-mobile mb-4-mobile post-content post-content-light-text">
    <?php the_content() ?>
  </div>

  <?php if (!empty(carbon_get_the_post_meta('event_register'))): ?>
    <div class="mt-5_6 mb-9 mt-4-mobile mb-6-mobile center-mobile post-content-width">
      <a href="<?php echo carbon_get_the_post_meta('event_register') ?>" class="btn btn-secondary" target="_blank" rel="nofollow"><?php pll_e('Записаться на ивент')  ?></a>
    </div>
  <?php endif; ?>


</div>

<?php get_footer(); ?>