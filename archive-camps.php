<?php get_header(); ?>

<div class="wrapper">
  <h2 class="title-48-600 color-dark"><?php echo carbon_get_theme_option('upcoming_camps' . carbon_lang_prefix()) ?></h2>
  <div class="upcoming-camps-list">
    <?php get_template_part('template-parts/camps/upcoming-camps-list'); ?>
  </div>
</div>

<?php get_footer(); ?>