<?php

$gal_ids = carbon_get_the_post_meta('camp_media_gallery');

if (!empty($gal_ids)) : ?>
  <div class="camp-gallery-container wrapper-lg_ mt-8  mb-8-mobile">
    <div class=" camp-gallery-wrapper">
      <div class="wrapper_" style="position: relative">
        <div class="gallery__prev-arr"></div>
        <div class="gallery__next-arr"></div>
        <div class="camp-gallery">

          <?php foreach ($gal_ids as $id) :  ?>

            <div class="camp-gallery-item" style="background-image: url(<?php echo wp_get_attachment_image_url($id, size: wp_is_mobile() ? 'large' : 'large')  ?>)">
              <div class="camp-gallery-item-wrapper"></div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>
    </div>
  </div>
<?php endif; ?>