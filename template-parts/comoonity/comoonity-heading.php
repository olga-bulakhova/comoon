<div class="comoonity-page-video">
  <?php
  $front_page_heading_video_id = carbon_get_theme_option('front_heading_video' . carbon_lang_prefix());
  $front_page_heading_video_url = wp_get_attachment_url($front_page_heading_video_id);
  ?>

  <div class="wrapper">
    <video src="<?php echo $front_page_heading_video_url ?>" class="comoonity-heading-video" autoplay loop muted playsinline></video>
  </div>
</div>

<section class="pt-12 pb-12 pt-6-mobile pb-6-mobile">
  <div class="wrapper">
    <h2 class="title-md-uppercase center mb-1_6"><?php pll_e('COMOON сейчас')  ?></h2>
    <div class="text-lg-bold color-dark center"><?php pll_e('Наша цель - создать комьюнити для удаленщиков по всему миру, где ты сможешь найти единомышленников, поддержку и дружбу.')  ?></div>
  </div>
</section>