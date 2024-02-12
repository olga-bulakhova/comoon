<?php

/**
 * Front page template
 */


get_header();

$front_page_heading_video =  carbon_get_theme_option('front_page_heading_video');
$front_page_heading_video_url = '';
if (!empty($front_page_heading_video)) {
  $front_page_heading_video_url = wp_get_attachment_url($front_page_heading_video[0]);
}
?>

<div class="light-bg-overlay light-background"></div>

<section class="home-heading">
  <div class="wrapper">
    <div class="heading-wrapper">
      <div class="overlay"></div>
      <video src="<?php echo $front_page_heading_video_url ?>" autoplay loop muted></video>
      <div class="heading-content">
        <h1 class="color-white title-lg-uppercase">
          <?php echo carbon_get_theme_option('front_page_h1' . carbon_lang_prefix()) ?>
        </h1>
        <a href="/" class="btn btn-secondary"><?php echo carbon_get_theme_option('learn_about_the_next_btn' . carbon_lang_prefix()) ?></a>
      </div>
    </div>
  </div>
</section>

<section class="home-what-is">
  <div class="wrapper">
    <div class="wrapper-md">
      <h2 class="title-md-uppercase center"><?php echo carbon_get_theme_option('what_is_title' . carbon_lang_prefix()) ?></h2>
      <div class="text-lg-bold color-dark center"><?php echo carbon_get_theme_option('what_is_text' . carbon_lang_prefix()) ?></div>
    </div>

    <div class="what-is-grid mt-12 mt-6-mobile">
      <div class="what-is-item">
        <h3 class="title-32-600 color-white"><?php echo carbon_get_theme_option('for_whom_title' . carbon_lang_prefix()) ?></h3>
        <div class="text-18-500"><?php echo carbon_get_theme_option('for_whom_text' . carbon_lang_prefix()) ?></div>
      </div>
      <div class="what-is-item">
        <h3 class="title-32-600 color-dark"><?php echo carbon_get_theme_option('for_what_title' . carbon_lang_prefix()) ?></h3>
        <div class="text-18-500"><?php echo carbon_get_theme_option('for_what_text' . carbon_lang_prefix()) ?></div>
      </div>
    </div>
  </div>
</section>

<div class="mt-18 pb-18 mt-6-mobile pb-8-mobile">
  <?php get_template_part('template-parts/you-are-getting'); ?>
</div>

<section class="home-video">
  <?php
  $front_page_video =  carbon_get_theme_option('front_page_video');
  $front_page_video_url = '';
  if (!empty($front_page_video)) {
    $front_page_video_url = wp_get_attachment_url($front_page_video[0]);
  }

  ?>
  <video src="<?php echo $front_page_video_url; ?>"></video>
  <div class="overlay">
    <div class="video-play"></div>
  </div>
</section>

<section class="camps-list-container mt-18 mt-6-mobile">
  <div class="wrapper">
    <h2 class="title-48-600 color-dark mb-5_6 mb-4-mobile center-mobile"><?php echo carbon_get_theme_option('upcoming_camps' . carbon_lang_prefix()) ?></h2>
    <?php get_template_part('template-parts/camps/upcoming-camps-list'); ?>
  </div>
</section>

<section class="home-find-friends mt-18 mt-6-mobile">
  <div class="wrapper">
    <div class="home-find-friends-content">
      <h2 class="color-white"><?php echo carbon_get_theme_option('find_friends_title' . carbon_lang_prefix()) ?></h2>
      <a href="#contact-form" class="btn btn-secondary"><?php echo carbon_get_theme_option('sign_up_btn' . carbon_lang_prefix()) ?></a>
    </div>
  </div>
</section>

<section class="light-background pt-18 pb-18 pt-6-mobile pb-13-mobile">
  <div class="wrapper">
    <?php get_template_part('template-parts/founders'); ?>
  </div>
</section>


<a id="contact-form"></a>
<section class="form-container light-background">
  <div class="wrapper">
    <?php get_template_part('template-parts/forms/form-container'); ?>
  </div>
</section>

<div class="light-background pt-18 pb-18 pt-6-mobile pb-6-mobile">
  <div class="wrapper">
    <div class="text-lg-bold color-dark center">
      <?php echo carbon_get_theme_option('last_block_text' . carbon_lang_prefix()) ?>
    </div>
  </div>
</div>

<?php
get_footer();
