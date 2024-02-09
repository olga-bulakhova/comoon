<?php
$admin_photo_id = carbon_get_the_post_meta('camp_admin_photo');


if (!empty($admin_photo_id)) : ?>

  <section class="camp-admin">
    <div class="wrapper">
      <div class="wrapper-md">
        <div class="camp-admin-container">
          <div class="camp-admin-photo border-radius" style="background-image: url(<?php echo wp_get_attachment_image_url($admin_photo_id, 'medium') ?>);"></div>
          <div class="camp-admin-content">
            <h2 class="title-48-600 color-white"><?php echo carbon_get_the_post_meta('camp_admin_title') ?></h2>
            <div class="text-18-400 color-white-opacity"><?php echo carbon_get_the_post_meta('camp_admin_text') ?></div>
          </div>
        </div>
      </div>
    </div>

  </section>

<?php endif; ?>