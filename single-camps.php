<?php get_header();

$is_future_date = is_future_date(carbon_get_the_post_meta('event_start'));

?>

<div class="<?php echo $is_future_date ? 'light-background pt-4-mobile' : ''; ?>">
  <div class="wrapper">
    <div class="breadcrumbs">
      <a class="home-page-link" href="<?php echo get_home_url(); ?>"></a>
      <span>/</span>
      <a href="<?php echo get_post_type_archive_link('camps'); ?>"><?php echo carbon_get_theme_option('camps' . carbon_lang_prefix()) ?></a>
      <span>/</span>
      <span><?php the_title(); ?></span>
    </div>
  </div>
</div>

<?php if ($is_future_date) : ?>
  <div class="light-background <?php if (carbon_get_the_post_meta('hide_blok_you_are_getting')) echo 'pb-8' ?>">
    <?php get_template_part('template-parts/camp-single/camp-heading'); ?>

    <?php if (!carbon_get_the_post_meta('hide_blok_you_are_getting')): ?>
      <div class="mt-12 pb-7 mt-6-mobile pb-6-mobile">
        <?php get_template_part('template-parts/you-are-getting'); ?>
      </div>
    <?php endif; ?>

  </div>
<?php endif; ?>

<?php if (!$is_future_date) : ?>
  <?php get_template_part('template-parts/camp-single/camp-report'); ?>
<?php endif; ?>

<?php get_template_part('template-parts/camp-single/camp-info'); ?>

<?php if ($is_future_date) :
  get_template_part('template-parts/camp-single/camp-program');
  get_template_part('template-parts/camp-single/camp-entertainment');
  get_template_part('template-parts/camp-single/camp-room');
  get_template_part('template-parts/camp-single/camp-faq');
  get_template_part('template-parts/camp-single/camp-admin');
  get_template_part('template-parts/camp-single/camp-relative');
  get_template_part('template-parts/camp-single/camp-insta');
?>
<?php endif; ?>

<?php get_template_part('template-parts/camp-single/camp-review'); ?>
<?php get_template_part('template-parts/camp-single/camp-comoonity'); ?>
<?php get_template_part('template-parts/camp-single/camp-offer'); ?>

<?php get_footer(); ?>