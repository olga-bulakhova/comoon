<?php
$instagram = carbon_get_theme_option('instagram' . carbon_lang_prefix());
if (!empty($instagram)) : ?>

  <section class="comoonity-insta pt-9 pb-5_6 pt-6-mobile pb-4-mobile light-background green-image-background-mobile">
    <div class="wrapper">
      <h2 class="color-dark color-white-mobile title-48-600 mb-5_6"><?php echo pll__('Взгляни на прошлые кемпы')  ?></h2>

      <div class="comoonity-insta-list mb-5_6 mb-4-mobile">
        <?php foreach ($instagram as $item) : ?>
          <a href="<?php echo $item['instagram_url'] ?>" class="comoonity-insta-item border-radius" target="_blank">
            <div class="insta-item-container border-radius">
              <video src="<?php echo wp_get_attachment_url($item['instagram_video']) ?>" class="border-radius" preload="none" autoplay loop muted playsinline></video>

              <div class="insta-item-top">
                <span class="icon"></span>
                <span class="text">@comoon.io</span>
              </div>
            </div>
          </a>
        <?php endforeach; ?>
      </div>

      <div class="center-mobile">
        <a href=" <?php echo carbon_get_theme_option('instagram_url' . carbon_lang_prefix()) ?>" class="btn btn-primary comoonity-insta-link" target="_blank">
          <span class="icon"></span><span>@comoon.io</span>
        </a>
      </div>
    </div>
  </section>

<?php endif; ?>