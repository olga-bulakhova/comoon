<?php
$is_future_date = is_future_date(carbon_get_the_post_meta('event_start'));
$banner = carbon_get_the_post_meta('camp_info_banner'); ?>

<section class="camp-info <?php echo $is_future_date ? 'pt-18 pt-6-mobile' : ''; ?> mb-18 mb-6-mobile">
  <div class="wrapper">
    <div class="camp-info-banner center" style="background-image:url(<?php echo wp_get_attachment_image_url($banner, size: wp_is_mobile() ? 'medium' : 'large')  ?>)">
      <div class="camp-info-logo">comoon</div>
      <h2 class="color-white"><?php echo carbon_get_theme_option('camps_info' . carbon_lang_prefix()) ?></h2>
    </div>

    <div class="camp-info-content">
      <?php the_content() ?>
    </div>
  </div>
</section>


