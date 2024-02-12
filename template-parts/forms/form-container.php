<div class="form-grid">
  <div class="form-content">
    <h2 class="color-white mb-4 center-mobile"><?php echo carbon_get_theme_option('sign_up_btn' . carbon_lang_prefix()) ?></h2>

    <?php

    echo do_shortcode(get_form_shortcode());

    ?>


  </div>
  <div class="form-image"></div>
</div>