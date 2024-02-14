<?php
$camp_info_list = carbon_get_the_post_meta('camp_info_list');
$is_future_date = is_future_date(carbon_get_the_post_meta('event_start'));
$banner = carbon_get_the_post_meta('camp_info_banner');

if (!empty($camp_info_list)) : ?>

  <section class="camp-info <?php echo $is_future_date ? 'pt-18 pt-6-mobile' : ''; ?> mb-18 mb-6-mobile">
    <div class="wrapper">
      <div class="camp-info-banner center" style="background-image:url(<?php echo wp_get_attachment_image_url($banner, size: wp_is_mobile() ? 'medium' : 'large') ?>)">
        <div class="camp-info-logo">comoon</div>
        <h2 class="color-white"><?php echo carbon_get_theme_option('camps_info' . carbon_lang_prefix()) ?></h2>
      </div>

      <div class="camp-info-content">
        <?php foreach ($camp_info_list as $info) : ?>

          <div class="wrapper-sm">
            <h3 class="color-dark title-32-600 camp-info-title"><?php echo $info['camp_info_title'] ?></h3>
            <div class="text-18-400 camp-info-text"><?php echo $info['camp_info_text'] ?></div>
          </div>
          <?php if (!empty($info['camp_info_photo'])) : ?>
            <img class="camp-info-photo border-radius" src="<?php echo wp_get_attachment_image_url($info['camp_info_photo'], size: wp_is_mobile() ? 'medium' : 'large')  ?>" alt="" width="100%">
          <?php endif; ?>

        <?php endforeach; ?>
      </div>

    </div>
  </section>
<?php endif; ?>