<?php get_header(); ?>

<div class="wrapper">
  <div class="breadcrumbs">
    <a class="home-page-link" href="<?php echo get_url_path(); ?>"></a>
    <span>/</span>
    <span><?php echo carbon_get_theme_option('camps' . carbon_lang_prefix()) ?></span>
  </div>
</div>

<div class="pt-4-mobile">

  <section class="camps-list-container mb-14 mb-6-mobile">
    <div class="wrapper">
      <div class="camps-upcoming-info">
        <h2 class="title-48-600 color-dark center-mobile"><?php echo carbon_get_theme_option('upcoming_camps' . carbon_lang_prefix()) ?></h2>

        <?php if (carbon_get_theme_option('upcoming_camps_text' . carbon_lang_prefix())) : ?>
          <div class="camps-upcoming-text">
            <?php echo wpautop(carbon_get_theme_option('upcoming_camps_text' . carbon_lang_prefix()))  ?>
          </div>
        <?php endif; ?>
      </div>

      <?php get_template_part('template-parts/camps/upcoming-camps-list'); ?>
    </div>
  </section>

  <section class="camps-list-container camps-list-container-past pt-14 pb-14 pt-6-mobile pb-6-mobile">
    <div class="wrapper">
      <div class="camps-past-info">
        <h2 class="title-48-600 color-dark center-mobile"><?php echo carbon_get_theme_option('past_camps' . carbon_lang_prefix()) ?></h2>
        <?php if (carbon_get_theme_option('past_camps_text' . carbon_lang_prefix())) : ?>
          <div class="camps-past-text">
            <?php echo wpautop(carbon_get_theme_option('past_camps_text' . carbon_lang_prefix()))  ?>
          </div>
        <?php endif; ?>
      </div>

      <?php get_template_part('template-parts/camps/past-camps-list'); ?>
    </div>
  </section>

  <?php if (carbon_get_theme_option('what_is_cammon' . carbon_lang_prefix())) : ?>
    <section class="pt-14 pb-14 pt-6-mobile pb-6-mobile">
      <div class="wrapper">
        <h2 class="title-md-uppercase center mb-1_6"><?php echo carbon_get_theme_option('what_is_title' . carbon_lang_prefix()) ?></h2>
        <div class="text-lg-bold color-dark center"><?php echo carbon_get_theme_option('what_is_cammon' . carbon_lang_prefix()) ?></div>
      </div>
    </section>
  <?php endif; ?>

</div>

<?php get_footer(); ?>