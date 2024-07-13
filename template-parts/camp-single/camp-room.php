<?php
$room_complex = carbon_get_the_post_meta('room_complex');

if (!empty($room_complex)) : ?>

  <section class="camp-rooms mt-14 mt-6-mobile mb-14 mb-6-mobile">
    <a id="camp-rooms"></a>
    <div class="wrapper">
      <h2 class="title-48-600 color-dark mb-5_6 mb-4-mobile center-mobile"><?php echo carbon_get_theme_option('price_title' . carbon_lang_prefix()) ?></h2>

      <div class="rooms-list">

        <?php foreach ($room_complex as $item) :
          $room_gallery_ids = $item['room_gallery']; ?>

          <div class="rooms-item">
            <div>
              <div class="rooms-media <?php if ($item['room_is_sold']) echo 'room_is_sold'  ?>">

                <?php if (sizeof($room_gallery_ids)) : ?>

                  <div class="<?php if (sizeof($room_gallery_ids) > 1) echo 'rooms-gallery dots-top-large' ?>">

                    <?php foreach ($room_gallery_ids as $id) : ?>

                      <div>
                        <div class="rooms-image-wrapper">
                          <div class="rooms-image">
                            <?php if (wp_attachment_is('image', $id)) : ?>
                              <img class="border-radius" src="<?php echo wp_get_attachment_image_url($id, size: 'medium')  ?>" width="100%">
                            <?php else : ?>
                              <div class="home-video border-radius" style="margin: 0; height: 100%">
                                <video src="<?php echo wp_get_attachment_url($id) ?>" class="border-radius"></video>
                                <div class="overlay border-radius">
                                  <div class="video-play video-play-white"></div>
                                </div>
                              </div>
                            <?php endif; ?>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>

                <?php else : ?>
                  <div class="rooms-image-wrapper">
                    <div class="rooms-image">
                      <img class="border-radius" src="<?php echo wp_get_attachment_image_url($item['room_photo'], 'medium') ?>" alt="" width="100%">
                    </div>
                  </div>
                <?php endif; ?>

                <?php if (!$item['room_is_sold']) : ?>
                  <div class="rooms-info">
                    <?php $mw_complex = $item['room_mw_complex'];
                    if (sizeof($mw_complex)) : ?>
                      <div class="rooms-mw badges-list">
                        <?php foreach ($mw_complex as $mw) : ?>
                          <div class="badge badge-no-icon">
                            <?php echo $mw['room_mw'] ?>
                          </div>
                        <?php endforeach; ?>
                      </div>
                    <?php endif; ?>

                    <?php if (!empty($item['room_additional_info'])) : ?>
                      <div class="badge badge-no-icon badge-blue">
                        <?php echo $item['room_additional_info'] ?>
                      </div>
                    <?php endif; ?>
                  </div>
                <?php endif; ?>

                <?php if ($item['room_is_sold']) : ?>
                  <div class="rooms-is-sold border-radius">
                    <div class="badge badge-no-icon">SOLD OUT</div>
                  </div>
                <?php endif; ?>

              </div>

              <h3 class="color-dark title-32-600 camp__info"><?php echo $item['room_title']; ?></h3>
              <?php if (!$item['room_is_sold']) : ?>
                <div class="text-18-40 mt-1_6 camp__info"><?php echo $item['room_text']; ?></div>
              <?php endif; ?>
            </div>

            <?php if (!$item['room_is_sold']) : ?>
              <div class="rooms-action">
                <div class="rooms-price-list">
                  <div class="rooms-price-item">
                    <div class="rooms-price color-dark camp__info"><?php echo $item['room_price']; ?></div>

                    <?php if ($item['room_price_text']) : ?>
                      <div class="rooms-price-text"><?php echo $item['room_price_text'] ?></div>
                    <?php endif; ?>

                  </div>

                  <?php if ($item['room_price_2']) : ?>
                    <div class="rooms-price-item">
                      <div class="rooms-price color-dark camp__info"><?php echo $item['room_price_2']; ?></div>

                      <?php if ($item['room_price_text_2']) : ?>
                        <div class="rooms-price-text"><?php echo $item['room_price_text_2'] ?></div>
                      <?php endif; ?>

                    </div>
                  <?php endif; ?>

                </div>

                <div class="rooms-button">
                  <button class="btn btn-secondary open-modal-form"><?php echo carbon_get_theme_option('book_btn' . carbon_lang_prefix()) ?></button>
                </div>
              </div>
            <?php endif; ?>

          </div>

        <?php endforeach; ?>

      </div>
    </div>
  </section>

<?php endif; ?>