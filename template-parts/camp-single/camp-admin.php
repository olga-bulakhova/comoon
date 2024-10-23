   <?php

    $admin_ids = carbon_get_the_post_meta('camp_admins');

    if (sizeof($admin_ids)) :

      $admins = get_posts([
        'post_type' => 'admins',
        'post__in' => $admin_ids
      ]);

    ?>

     <section class="camp-admin  wrapper-lg  <?php if (sizeof($admins) > 1) echo 'camp-admin-slider' ?>">
       <div class="wrapper" style="position:relative">

         <?php if (sizeof($admins) > 1) : ?>
           <div class="gallery__prev-arr-admin" style="left:0"></div>
           <div class="gallery__next-arr-admin" style="right:0"></div>
         <?php endif; ?>

         <div class="wrapper-md">
           <div class="<?php if (sizeof($admins) > 1) echo 'admins-gallery dots-top-large' ?>">

             <?php foreach ($admins as $admin) : ?>
               <div>
                 <div class="camp-admin-container">
                   <div class="camp-admin-photo border-radius" style="background-image: url(<?php echo get_the_post_thumbnail_url($admin->ID) ?>);"></div>
                   <div class="camp-admin-content">
                     <h2 class="title-48-600 color-white"><?php echo carbon_get_theme_option('admin_title' .  carbon_lang_prefix()) . ' - ' . $admin->post_title ?></h2>
                     <div class="text-18-400 color-white-opacity"><?php echo $admin->post_content; ?></div>
                   </div>
                 </div>
               </div>
             <?php endforeach; ?>

           </div>
         </div>
       </div>
     </section>

   <?php endif; ?>