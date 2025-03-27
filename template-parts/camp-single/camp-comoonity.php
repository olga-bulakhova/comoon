<section class="home-find-friends camp-events-link">
  <div class="wrapper">
    <div class="home-find-friends-content">
      <h2 class="color-white width-100"><?php pll_e('Присоединяйся к COMOONity!')  ?></h2>
      <a class="btn btn-primary" href="<?php echo get_post_type_archive_link('events'); ?>">
        <?php pll_e('Список оффлайн ивенов')  ?>
      </a>

      <a href="mailto:<?php echo carbon_get_theme_option('email_url' . carbon_lang_prefix()) ?>" target="_blank" class="camp-mail-link">
        <span class="icon"></span>
        <span>@comoon.io</span>
      </a>
    </div>
  </div>
</section>