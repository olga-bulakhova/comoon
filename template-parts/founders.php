<h2 class="title-md-uppercase center"><?php echo carbon_get_theme_option('founders_title' . carbon_lang_prefix()) ?></h2>
<div class="text-lg-bold color-dark center mt-1_6"><?php echo carbon_get_theme_option('founders_text' . carbon_lang_prefix()) ?></div>

<div class="founders-list mt-8 mt-6-mobile">

  <?php foreach ([1, 2, 3, 4, 5] as $item) : ?>
    <?php $img = carbon_get_theme_option('founder_photo_' . $item . carbon_lang_prefix()); ?>

    <?php if (!empty($img)) : ?>
      <div class="founders-item">
        <div class="founders-item-photo" style="background-image: url(<?php echo wp_get_attachment_image_url($img, size: 'medium'); ?>);">
          <div class="founders-item-info">
            <div class="founders-item-name"><?php echo carbon_get_theme_option('founder_name_' . $item . carbon_lang_prefix())  ?></div>
            <a href="<?php echo carbon_get_theme_option('founder_insta_url_' . $item . carbon_lang_prefix())  ?>" class="founders-item-insta" target="_blank"></a>
          </div>
        </div>
        <div class="founders-item-text text-18-400"><?php echo carbon_get_theme_option('founder_text_' . $item . carbon_lang_prefix())  ?></div>
      </div>

    <?php endif; ?>



  <?php endforeach; ?>

</div>