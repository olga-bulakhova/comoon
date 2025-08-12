<?php get_header(); ?>

<div class="pt-4-mobile">
  <div class="wrapper">
    <div class="breadcrumbs">
      <a class="home-page-link" href="<?php echo get_home_url(); ?>"></a>
      <span>/</span>
      <a href="<?php echo get_post_type_archive_link('coliving'); ?>">Коливинг</a>
      <span>/</span>
      <span><?php the_title(); ?></span>
    </div>
  </div>
</div>

<?php
get_template_part('template-parts/coliving-single/coliving-heading');
get_template_part('template-parts/coliving-single/coliving-info');
get_template_part('template-parts/coliving-single/coliving-program');
get_template_part('template-parts/coliving-single/coliving-entertainment');
get_template_part('template-parts/coliving-single/coliving-room');
get_template_part('template-parts/coliving-single/coliving-faq');
?>

<?php get_footer(); ?>