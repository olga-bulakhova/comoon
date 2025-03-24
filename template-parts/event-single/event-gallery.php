<?php
$gal_ids = carbon_get_the_post_meta('event_media_gallery');

if (!empty($gal_ids)) : ?>
  <div class="event-gallery dots-top-large-desktop mt-5_6 mb-5_6 mt-4-mobile">
    <?php foreach ($gal_ids as $id) :  ?>
      <div>
        <div class="event-gallery-item border-radius" style="background-image: url(<?php echo wp_get_attachment_image_url($id, size: wp_is_mobile() ? 'large' : 'large')  ?>)">
        </div>
      </div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>