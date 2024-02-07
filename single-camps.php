<?php get_header();

$is_future_date = is_future_date(carbon_get_the_post_meta('event_start'));

?>



<div class="<?php echo $is_future_date ? 'light-background light-bg-overlay' : ''; ?>">
  <div class="wrapper">
    <div class="breadcrumbs">
      <a class="home-page-link" href="<?php echo get_url_path(); ?>"></a>
      <span>/</span>
      <a href="<?php echo get_url_path() . 'camps'; ?>"><?php echo carbon_get_theme_option('camps' . carbon_lang_prefix()) ?></a>
      <span>/</span>
      <span><?php the_title(); ?></span>
    </div>
  </div>
</div>

<?php if ($is_future_date) : ?>
  <div class="light-background">
    <?php get_template_part('template-parts/camp-single/camp-heading'); ?>

    <div class="mt-12 pb-18 mt-6-mobile pb-8-mobile">
      <?php get_template_part('template-parts/you-are-getting'); ?>
    </div>

  </div>
<?php endif; ?>

<div class="<?php echo $is_future_date ? 'mt-18 mt-6-mobile' : ''; ?> mb-18 mb-6-mobile">
  <?php get_template_part('template-parts/camp-single/camp-info'); ?>
</div>


<?php get_footer(); ?>