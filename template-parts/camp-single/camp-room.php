<?php
$room_complex = carbon_get_the_post_meta('room_complex');

if (!empty($room_complex)) : ?>

  <section class="camp-rooms mt-18 mt-6-mobile mb-18 mb-6-mobile">
    <a id="camp-rooms"></a>
    <div class="wrapper">
      <h2 class="title-48-600 color-dark mb-5_6 mb-4-mobile center-mobile"><?php echo carbon_get_theme_option('price_title' . carbon_lang_prefix()) ?></h2>

      <div class="rooms-list">

        <?php foreach ($room_complex as $item) : ?>

          <div class="rooms-item">
            <div>
              <div class="rooms-image-wrapper">
                <div class="rooms-image">
                  <img class="border-radius" src="<?php echo wp_get_attachment_image_url($item['room_photo'], 'medium') ?>" alt="" width="100%">
                </div>
              </div>
              <h3 class="color-dark title-32-600"><?php echo $item['room_title']; ?></h3>
              <div class="text-18-40 mt-1_6"><?php echo $item['room_text']; ?></div>
            </div>

            <div class="rooms-action">
              <div class="rooms-price color-dark"><?php echo $item['room_price']; ?></div>
              <div class="rooms-button">
                <button class="btn btn-secondary open-modal-form"><?php echo carbon_get_theme_option('book_btn' . carbon_lang_prefix()) ?></button>
              </div>
            </div>
          </div>

        <?php endforeach; ?>

      </div>
    </div>
  </section>

<?php endif; ?>