<?php

if (!empty($post->post_parent)) :
  $admin = get_post($post->post_parent);
?>

  <section class="camp-admin">
    <div class="wrapper">
      <div class="wrapper-md">
        <div class="camp-admin-container">
          <div class="camp-admin-photo border-radius" style="background-image: url(<?php echo get_the_post_thumbnail_url($admin->ID) ?>);"></div>
          <div class="camp-admin-content">
            <h2 class="title-48-600 color-white"><?php echo carbon_get_theme_option('admin_title' .  carbon_lang_prefix()) . ' - ' . $admin->post_title ?></h2>
            <div class="text-18-400 color-white-opacity"><?php echo $admin->post_content; ?></div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php endif; ?>