<div class="form-modal hidden">

  <div class="form-modal-content border-radius hidden animate__fadeInDown">
    <h2 class="color-white center"><?php echo carbon_get_theme_option('sign_up_btn' . carbon_lang_prefix()) ?></h2>
    <div class="form-modal-description"><?php echo pll__('Мы зарезервировали за тобой место! Чтобы подтвердить бронь, нам нужно провести с тобой звонок, где мы расскажем подробности.')  ?></div>
    <div class="form-modal-close">
      <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
        <path d="M7.40864 5.99915L11.7045 1.71268C12.0962 1.32088 12.0962 0.685649 11.7045 0.293849C11.3127 -0.0979498 10.6776 -0.0979498 10.2859 0.293849L6 4.59031L1.71414 0.293849C1.3224 -0.0979498 0.687256 -0.0979498 0.295513 0.293849C-0.0962308 0.685649 -0.0962308 1.32088 0.295513 1.71268L4.59136 5.99915L0.295513 10.2856C0.106383 10.4732 0 10.7286 0 10.995C0 11.2614 0.106383 11.5168 0.295513 11.7044C0.483098 11.8936 0.738447 12 1.00483 12C1.27121 12 1.52656 11.8936 1.71414 11.7044L6 7.40799L10.2859 11.7044C10.4734 11.8936 10.7288 12 10.9952 12C11.2616 12 11.5169 11.8936 11.7045 11.7044C11.8936 11.5168 12 11.2614 12 10.995C12 10.7286 11.8936 10.4732 11.7045 10.2856L7.40864 5.99915Z" fill="#CCD3D9" />
      </svg>
    </div>
    <?php

    echo do_shortcode(get_form_shortcode());

    ?>

    <div class="form-modal-cancel color-white"><?php echo carbon_get_theme_option('cancel_btn' . carbon_lang_prefix()) ?></div>
  </div>

</div>