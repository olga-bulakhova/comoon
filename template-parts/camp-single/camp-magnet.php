<?php

$photo_ids = carbon_get_the_post_meta('room_photos');

$rooms_list = carbon_get_the_post_meta('room_complex');

$rooms_list_filtered =
  array_filter($rooms_list, function ($var) {
    return ($var['room_is_sold'] == null);
  });

if (!empty($rooms_list_filtered)) : ?>
  <div class="camp-magnet mt-8">
    <div class="wrapper">

      <div class="<?php if (sizeof($rooms_list_filtered) > 1) echo 'camp-magnet-slider dots-top-large' ?> ">
        <?php foreach ($rooms_list_filtered as $room) :  ?>
          <div class="camp-magnet-item">

            <?php
            $id = $room['room_gallery'][0];

            if (wp_attachment_is('image', $id)) : ?>
              <img src="<?php echo wp_get_attachment_image_url($id, size: wp_is_mobile() ? 'medium' : 'large')  ?>" width="100%" class="border-radius">
            <?php else : ?>
              <div class="home-video border-radius" style="margin: 0; height: 100%">
                <video src="<?php echo wp_get_attachment_url($id) ?>" class="border-radius" poster="<?php echo wp_get_attachment_url($room['room_video_preview']) ?>"></video>
                <div class="overlay border-radius">
                  <div class="video-play video-play-white"></div>
                </div>
              </div>
            <?php endif; ?>


            <h3 class="color-white center"><?php echo $room['room_title'] ?></h3>


          </div>
        <?php endforeach; ?>
      </div>

      <div class="center">

        <a href="#camp-rooms" class="btn btn-secondary btn-large"><?php echo carbon_get_theme_option('find_price_btn' . carbon_lang_prefix()) ?></a>
      </div>

    </div>
  </div>
<?php endif; ?>