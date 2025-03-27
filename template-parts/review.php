<div class="review-item-wrapper">
  <div class="review-item border-radius">
    <div>
      <h4 class="mb-1_6 dark-text review-title"><?php the_title() ?></h4>
      <div class="review-text">
        <?php the_content() ?>
      </div>
    </div>

    <div>
      <div class="review-info">
        <div class="review-author">
          <div class="review-avatar border-radius" style="background-image: url(<?php echo the_post_thumbnail_url('thumbnail'); ?>);">
          </div>
          <div>
            <div class="name dark-text"><?php echo carbon_get_the_post_meta('review_name') ?></div>
            <div class="job"><?php echo carbon_get_the_post_meta('review_job') ?></div>
          </div>
        </div>

        <?php if (!empty(carbon_get_the_post_meta('review_insta'))): ?>
          <a href="<?php echo carbon_get_the_post_meta('review_insta')  ?>" class="review-insta" target="_blank"></a>
        <?php endif; ?>
      </div>

      <?php $camp_id = $post->post_parent; ?>


      <a href="<?php echo get_the_permalink($camp_id) ?>" class="review-link"> <span><?php echo get_the_title($camp_id) ?></span> </a>


    </div>
  </div>
</div>