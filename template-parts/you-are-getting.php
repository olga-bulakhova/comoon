<?php

$img_1 = carbon_get_theme_option('you_are_getting_photo_1');
$img_2 = carbon_get_theme_option('you_are_getting_photo_2');
$img_3 = carbon_get_theme_option('you_are_getting_photo_3');
$img_4 = carbon_get_theme_option('you_are_getting_photo_4');

?>

<section class="you-are-getting">
  <div class="wrapper">
    <h2 class="color-dark title-48-600">
      <?php echo carbon_get_theme_option('you_are_getting_block_title' . carbon_lang_prefix()) ?>
    </h2>
    <div class="you-are-getting-list">
      <div class="you-are-getting-item">
        <img src="<?php echo wp_get_attachment_image_url($img_1, size: 'medium')  ?>" alt="" width="100%">
        <h3 class="color-dark title-24-600"><?php echo carbon_get_theme_option('you_are_getting_title_1' . carbon_lang_prefix()) ?></h3>
        <div><?php echo carbon_get_theme_option('you_are_getting_text_1' . carbon_lang_prefix())  ?></div>
      </div>

      <div class="you-are-getting-item">
        <img src="<?php echo wp_get_attachment_image_url($img_2, size: 'medium')  ?>" alt="" width="100%">
        <h3 class="color-dark title-24-600"><?php echo carbon_get_theme_option('you_are_getting_title_2' . carbon_lang_prefix()) ?></h3>
        <div><?php echo carbon_get_theme_option('you_are_getting_text_2' . carbon_lang_prefix())  ?></div>
      </div>

      <div class="you-are-getting-item">
        <img src="<?php echo wp_get_attachment_image_url($img_3, size: 'medium')  ?>" alt="" width="100%">
        <h3 class="color-dark title-24-600"><?php echo carbon_get_theme_option('you_are_getting_title_3' . carbon_lang_prefix()) ?></h3>
        <div><?php echo carbon_get_theme_option('you_are_getting_text_3' . carbon_lang_prefix())  ?></div>
      </div>

      <div class="you-are-getting-item">
        <img src="<?php echo wp_get_attachment_image_url($img_4, size: 'medium')  ?>" alt="" width="100%">
        <h3 class="color-dark title-24-600"><?php echo carbon_get_theme_option('you_are_getting_title_4' . carbon_lang_prefix()) ?></h3>
        <div><?php echo carbon_get_theme_option('you_are_getting_text_4' . carbon_lang_prefix())  ?></div>
      </div>
    </div>
  </div>
</section>