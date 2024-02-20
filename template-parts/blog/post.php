<a href="<?php the_permalink() ?>" class="post-item">
  <div class="post-item-image-wrapper">
    <div class="post-item-image">
      <img class="border-radius" src="<?php echo get_the_post_thumbnail_url($post->ID) ?>" alt="<?php the_title(); ?>">
    </div>
  </div>

  <div class="post-item-title color-dark">
    <?php the_title(); ?>
  </div>
</a>