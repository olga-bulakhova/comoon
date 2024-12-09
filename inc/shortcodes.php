<?php

function sign_up_for_camp()
{
  ob_start();
?>
  <div class="sign-up-for-camp border-radius center">
    <h2 class="color-white"><?php echo carbon_get_theme_option('blog_shortcode_title' . carbon_lang_prefix()) ?></h2>
    <button data-slug="<?php echo get_slug() ?>" class="btn btn-secondary open-modal-form"><?php echo carbon_get_theme_option('sign_up_btn' . carbon_lang_prefix()) ?></button>
  </div>
<?php
  return ob_get_clean();
}
add_shortcode('sign_up_for_camp', 'sign_up_for_camp');
