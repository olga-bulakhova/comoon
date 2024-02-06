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
        <a class="insta" href="" target="_blank"></a>
        <a class="youtube" href="" target="_blank"></a>
        <a class="email" href="" target="_blank"></a>
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