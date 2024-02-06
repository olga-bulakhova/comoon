</div>
<footer class="footer">
  <div class="wrapper">

    <div class="footer-container">
      <a class="footer-logo" href="/">
        Comoon
      </a>

      <?php
      wp_nav_menu([
        'theme_location'  => 'header',
        'container'       => false,
        'menu_class'      => 'navbar-nav',
        'menu_id'         => false,
        'echo'            => true,
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
      ]);

      ?>

      <div class="footer-social">
        <?php if (!empty(carbon_get_theme_option('instagram_url' . carbon_lang_prefix()))) : ?>
          <a class="insta" href="<?php echo carbon_get_theme_option('instagram_url' . carbon_lang_prefix()) ?>" target="_blank"></a>
        <?php endif; ?>
        <?php if (!empty(carbon_get_theme_option('youtube_url' . carbon_lang_prefix()))) : ?>
          <a class="youtube" href="<?php echo carbon_get_theme_option('youtube_url' . carbon_lang_prefix()) ?>" target="_blank"></a>
        <?php endif; ?>
        <?php if (!empty(carbon_get_theme_option('email_url' . carbon_lang_prefix()))) : ?>
          <a class="youtube" href="<?php echo carbon_get_theme_option('email_url' . carbon_lang_prefix()) ?>" target="_blank"></a>
        <?php endif; ?>
      </div>
    </div>

    <div class="footer-copyright">
      <div>© Copyright <?php echo date("Y"); ?>, Comoon</div>
      <div><?php echo carbon_get_theme_option('footer_text' . carbon_lang_prefix()) ?></div>
    </div>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>