<?php
$comoonity_insta = carbon_get_the_post_meta('comoonity_insta');
if (!empty($comoonity_insta)) : ?>

  <section class="comoonity-insta pt-9 pb-9 pt-6-mobile pb-6-mobile">
    <div class="wrapper">
      <h2 class="color-dark title-48-600"><?php echo pll__('Следи за нами в Instagram')  ?></h2>

      <div class="mb-5_6 mt-5 mt-1_6-mobile mb-4-mobile">
        <?php echo pll__('Следи за нашими COMOONity в инсте, если еще не готов присоедениться.')  ?>
      </div>

      <div class="comoonity-insta-list mb-5_6 mb-4-mobile">
        <?php foreach ($comoonity_insta as $item) : ?>
          <a href="<?php echo $item['comoonity_insta_url'] ?>" class="comoonity-insta-item border-radius" target="_blank">
            <div class="insta-item-container border-radius">
              <video src="<?php echo wp_get_attachment_url($item['comoonity_insta_video']) ?>" class="border-radius" preload="none" autoplay loop muted playsinline></video>

              <div class="insta-item-top">
                <span class="icon"></span>
                <span class="text">@comoon.io</span>
              </div>
            </div>
          </a>
        <?php endforeach; ?>
      </div>

      <div class="center-mobile">
        <a href=" <?php echo carbon_get_theme_option('instagram_url' . carbon_lang_prefix()) ?>" class="btn btn-primary" target="_blank">@comoon.io</a>
      </div>
    </div>
  </section>

<?php endif; ?>