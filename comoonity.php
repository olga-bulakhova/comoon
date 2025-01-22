<?php /* Template Name: Comoonity */

get_header();

?>

<div class="light-background pt-4 pb-9 pb-6-mobile">
  <?php
  get_template_part('template-parts/comoonity/comoonity-heading');
  get_template_part('template-parts/comoonity/comoonity-values');
  get_template_part('template-parts/comoonity/comoonity-numbers');
  ?>

  <section class="home-find-friends comoonity-events">
    <div class="wrapper">
      <div class="home-find-friends-content">
        <h2 class="color-white width-100" style="max-width: 1150px;"><?php pll_e('Посещай наши offline встречи и становись частью этой крутой статистики!')  ?></h2>
        <a href="#events" class="btn btn-secondary">
          <?php echo esc_attr(pll__('Предстоящие встречи COMOON'))  ?>
        </a>
      </div>
    </div>
  </section>
</div>

<div class="white-background">
  <?php
  get_template_part('template-parts/comoonity/comoonity-people');
  get_template_part('template-parts/comoonity/comoonity-content');
  get_template_part('template-parts/comoonity/comoonity-events');
  get_template_part('template-parts/comoonity/comoonity-camps');
  ?>
</div>

<div class="light-background pb-9 pb-6-mobile">

  <?php echo do_shortcode('[instagram-feed]') ?>

  <section class="home-find-friends comoonity-signup">
    <div class="wrapper">
      <div class="home-find-friends-content">
        <h2 class="color-white width-100"><?php echo carbon_get_theme_option('find_friends_title' . carbon_lang_prefix()) ?></h2>
        <button data-slug="<?php echo get_slug() ?>" class="btn btn-secondary open-modal-form">
          <?php echo carbon_get_theme_option('sign_up_btn' . carbon_lang_prefix()) ?>
        </button>
      </div>
    </div>
  </section>
</div>

<?php get_footer();
