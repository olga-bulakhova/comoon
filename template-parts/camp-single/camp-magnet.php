<?php

$photo_ids = carbon_get_the_post_meta('room_photos');

$rooms_list = carbon_get_the_post_meta('room_complex');
$first_room = null;

if (!empty($rooms_list)) {
  $first_room = $rooms_list[0];
}


if (!empty($photo_ids)) : ?>
  <div class="camp-magnet">
    <div class="wrapper">

      <div class="<?php if (sizeof($photo_ids) > 1) echo 'camp-magnet-slider dots-top-large' ?> ">
        <?php foreach ($photo_ids as $id) :  ?>
          <div class="camp-magnet-item">
            <img src="<?php echo wp_get_attachment_image_url($id, size: wp_is_mobile() ? 'medium' : 'large')  ?>" width="100%" class="border-radius">
          </div>
        <?php endforeach; ?>
      </div>

      <div class="center">
        <h3 class="color-white"><?php echo carbon_get_the_post_meta('camp_magnet_title') ?></h3>
        <a href="#camp-rooms" class="btn btn-secondary btn-large"><?php echo carbon_get_theme_option('find_price_btn' . carbon_lang_prefix()) ?></a>
      </div>

    </div>
  </div>
<?php endif; ?>