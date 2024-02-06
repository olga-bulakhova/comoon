<?php

$img_1 = carbon_get_theme_option('founder_photo_1');
$img_2 = carbon_get_theme_option('founder_photo_2');
$img_3 = carbon_get_theme_option('founder_photo_3');
$img_4 = carbon_get_theme_option('founder_photo_4');

?>



    <h2 class="title-md-uppercase center"><?php echo carbon_get_theme_option('founders_title' . carbon_lang_prefix()) ?></h2>
    <div class="text-lg-bold color-dark center mt-1_6"><?php echo carbon_get_theme_option('founders_text' . carbon_lang_prefix()) ?></div>

    <div class="founders-list mt-8 mt-6-mobile">

      <div class="founders-item">
        <div class="founders-item-photo" style="background-image: url(<?php echo wp_get_attachment_image_url($img_1, size: 'medium'); ?>);">
          <div class="founders-item-info">
            <div class="founders-item-name"><?php echo carbon_get_theme_option('founder_name_1' . carbon_lang_prefix())  ?></div>
            <a href="<?php echo carbon_get_theme_option('founder_insta_url_1' . carbon_lang_prefix())  ?>" class="founders-item-insta" target="_blank"></a>
          </div>
        </div>
        <div class="founders-item-text text-18-400"><?php echo carbon_get_theme_option('founder_text_1' . carbon_lang_prefix())  ?></div>
      </div>

      <div class="founders-item">
        <div class="founders-item-photo" style="background-image: url(<?php echo wp_get_attachment_image_url($img_2, size: 'medium'); ?>);">
          <div class="founders-item-info">
            <div class="founders-item-name"><?php echo carbon_get_theme_option('founder_name_2' . carbon_lang_prefix())  ?></div>
            <a href="<?php echo carbon_get_theme_option('founder_insta_url_2' . carbon_lang_prefix())  ?>" class="founders-item-insta" target="_blank"></a>
          </div>
        </div>
        <div class="founders-item-text text-18-400"><?php echo carbon_get_theme_option('founder_text_2' . carbon_lang_prefix())  ?></div>
      </div>

      <div class="founders-item">
        <div class="founders-item-photo" style="background-image: url(<?php echo wp_get_attachment_image_url($img_3, size: 'medium'); ?>);">
          <div class="founders-item-info">
            <div class="founders-item-name"><?php echo carbon_get_theme_option('founder_name_3' . carbon_lang_prefix())  ?></div>
            <a href="<?php echo carbon_get_theme_option('founder_insta_url_3' . carbon_lang_prefix())  ?>" class="founders-item-insta" target="_blank"></a>
          </div>
        </div>
        <div class="founders-item-text text-18-400"><?php echo carbon_get_theme_option('founder_text_3' . carbon_lang_prefix())  ?></div>
      </div>

      <div class="founders-item">
        <div class="founders-item-photo" style="background-image: url(<?php echo wp_get_attachment_image_url($img_4, size: 'medium'); ?>);">
          <div class="founders-item-info">
            <div class="founders-item-name"><?php echo carbon_get_theme_option('founder_name_4' . carbon_lang_prefix())  ?></div>
            <a href="<?php echo carbon_get_theme_option('founder_insta_url_4' . carbon_lang_prefix())  ?>" class="founders-item-insta" target="_blank"></a>
          </div>
        </div>
        <div class="founders-item-text text-18-400"><?php echo carbon_get_theme_option('founder_text_4' . carbon_lang_prefix())  ?></div>
      </div>

    </div>
