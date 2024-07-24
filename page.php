<?php get_header(); ?>

<article class="post-single">
   <div class="wrapper">
      <h1 class="color-dark title-48-600 center-mobile mt-5_6 mt-4-mobile"><?php the_title(); ?></h1>

      <?php if (has_post_thumbnail()) : ?>
         <div class="post-image mb-9">
            <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="border-radius">
         </div>
      <?php endif; ?>

      <div class="post-content">
         <?php the_content(); ?>
      </div>

   </div>
</article>



<?php get_footer(); ?>