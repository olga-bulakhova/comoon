<?php
$gal_img_ids = carbon_get_the_post_meta('camp_photo');
$gal_video_ids = carbon_get_the_post_meta('camp_video'); ?>


<?php if (!empty($gal_img_ids) || !empty($gal_video_ids)) : ?>
  <section class="camp-report pb-8 pb-0-mobile mt-4">
    <div class="wrapper">
      <h2 class="title-48-600 color-dark mb-5_6 mb-4-mobile center-mobile"><?php echo carbon_get_theme_option('report_title' . carbon_lang_prefix()) ?></h2>


      <?php if (!empty($gal_img_ids)) : ?>
        <div class="grid">
          <?php foreach ($gal_img_ids as $id) : ?>
            <?php if (wp_attachment_is('image', $id)) : ?>
              <div class="grid-item">
                <img class="border-radius" src="<?php echo wp_get_attachment_image_url($id, size: 'medium')  ?>" alt="">
              </div>
            <?php else : ?>

              <div class="grid-item">
                <div class="home-video" style="margin: 0;">
                  <video src="<?php echo wp_get_attachment_url($id) ?>"></video>
                  <div class="overlay">
                    <div class="video-play"></div>
                  </div>
                </div>
              </div>

            <?php endif; ?>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>

<?php endif; ?>