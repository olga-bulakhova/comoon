<?php
$camp_entertainment = carbon_get_the_post_meta('camp_entertainment');

if (!empty($camp_entertainment)) : ?>

  <section class="camp-entertainment mt-18 mt-6-mobile mb-18 mb-9-mobile">
    <div class="wrapper">
      <h2 class="title-48-600 color-dark mb-5_6 mb-4-mobile center-mobile"><?php echo carbon_get_theme_option('entertainment_title' . carbon_lang_prefix()) ?></h2>
      <div class="entertainments-list">

        <?php foreach ($camp_entertainment as $item) : ?>

          <div>
            <div class="entertainment-item-wrapper">
              <div class="entertainment-item border-radius overflow" style="background-image: url(<?php echo wp_get_attachment_image_url($item['camp_entertainment_photo'], 'medium') ?>);">
                <div class="entertainment-item-bg">
                  <div class="entertainment-item-content">
                    <h3 class="color-white mb-1_6"><?php echo $item['camp_entertainment_title'] ?></h3>
                    <div><?php echo $item['camp_entertainment_text'] ?></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <?php endforeach; ?>

      </div>
    </div>
  </section>

<?php endif; ?>