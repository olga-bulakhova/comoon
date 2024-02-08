<?php
$camp_available = carbon_get_the_post_meta('camp_available');

if (!empty($camp_available)) : ?>

  <div class="camp-available pb-18 pb-6-mobile">
    <div class="wrapper">
      <h2 class="title-48-600 color-dark mb-5_6 mb-4-mobile center-mobile"><?php echo carbon_get_theme_option('available_at_camp_title' . carbon_lang_prefix()) ?></h2>
      <div class="available-list badges-list justify-center-mobile">

        <?php foreach ($camp_available as $item) : ?>

          <div class=" badge-green-border" style="background-image: url(<?php echo COMOON_DIR_URI . AVAILABLE_ICON_URL . $item['camp_available_icon'] . '.svg'; ?>);"><?php echo $item['camp_available_text'] ?></div>

        <?php endforeach; ?>

      </div>
    </div>
  </div>
<?php endif; ?>