<section class="you-are-getting">
  <div class="wrapper">
    <h2 class="color-dark title-48-600">
      <?php echo carbon_get_theme_option('you_are_getting_block_title' . carbon_lang_prefix()) ?>
    </h2>
    <div class="you-are-getting-list">

      <?php foreach ([1, 2, 3, 4] as $item) : ?>
        <?php $img = carbon_get_theme_option('you_are_getting_photo_' . $item); ?>
        <div class="you-are-getting-item">
          <div class="you-are-getting-img-wrapper">
            <div class="you-are-getting-img">
              <img src="<?php echo wp_get_attachment_image_url($img, size: 'medium')  ?>" alt="" width="100%" class="border-radius">
            </div>
          </div>
          <h3 class="color-dark title-24-600"><?php echo carbon_get_theme_option('you_are_getting_title_' . $item . carbon_lang_prefix()) ?></h3>
          <div><?php echo carbon_get_theme_option('you_are_getting_text_' . $item . carbon_lang_prefix())  ?></div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</section>