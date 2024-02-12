<?php
$gal_img_ids = carbon_get_the_post_meta('camp_photo');
$gal_video_ids = carbon_get_the_post_meta('camp_video');

if (!empty($gal_img_ids) || !empty($gal_video_ids)) : ?>
  <section class="camp-report pb-18 pb-6-mobile">
    <div class="wrapper">
      <h2 class="title-48-600 color-dark mb-5_6 mb-4-mobile center-mobile"><?php echo carbon_get_theme_option('report_title' . carbon_lang_prefix()) ?></h2>

      <?php if (!empty($gal_img_ids)) : ?>
        <div class="img-list">
          <?php foreach ($gal_img_ids as $id) :  ?>
            <div class="img-item-wrapper">
              <div class="img-item">
                <img class="border-radius" src="<?php echo wp_get_attachment_image_url($id, size: 'medium')  ?>" alt="">
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>


      <?php if (!empty($gal_video_ids)) : ?>
        <div class="video-list">
          <?php foreach ($gal_video_ids as $id) :  ?>
            <div class="home-video">
              <video src="<?php echo wp_get_attachment_url($id) ?>"></video>
              <div class="overlay">
                <div class="video-play"></div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>


    </div>
  </section>




  <!-- <div class="camp-gallery-container">
    <div class=" camp-gallery-wrapper">
      <div class="gallery__prev-arr"></div>
      <div class="gallery__next-arr"></div>
      <div class="camp-gallery">
        <?php foreach ($gal_ids as $id) :  ?>
          <div class="camp-gallery-item">
            <img src="<?php echo wp_get_attachment_image_url($id, size: wp_is_mobile() ? 'medium' : 'large')  ?>" alt="">
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div> -->
<?php endif; ?>