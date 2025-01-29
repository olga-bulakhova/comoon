<?php global $post;

$query = new WP_Query([
  'post_type' => 'reviews',
  'posts_per_page' => -1,
  'meta_query' => [
    [
      'key' => 'review_video',
      'value'   => '',
      'compare' => '!=',
    ]
  ]
]);

if ($query->have_posts()) : ?>

  <div class="comoonity-people pb-9 pb-6-mobile delayed-display">

    <div class="comoonity-people-list <?php echo ($query->found_posts > 4) ? 'desktop-slider' : 'mobile-slider'; ?> ">

      <?php while ($query->have_posts()) :
        $query->the_post();
        $id = carbon_get_the_post_meta('review_video');
      ?>

        <div class="comoonity-people-item">
          <div class="people-item-photo people-item-reviews">
            <div class="home-video border-radius" style="margin: 0; height: 100%; position: absolute; top:0; right:0; bottom:0; left:0;">
              <video src="<?php echo wp_get_attachment_url($id) ?>" class="border-radius" poster="<?php echo wp_get_attachment_url(carbon_get_the_post_meta('review_video_poster')) ?>" style="object-fit:cover; overflow:hidden;width:100%; height:100%;"></video>
              <div class="overlay people-item-overlay border-radius">
                <div class="video-play video-play-transparent" style="width: 80px; height: 80px"></div>
              </div>
            </div>

            <div class="people-item-review-info">
              <div class="people-item-review-first">
                <div class="people-item-review-name"><?php echo carbon_get_the_post_meta('review_name')  ?></div>
                <?php if (!empty(carbon_get_the_post_meta('review_insta'))): ?>
                  <a href="<?php echo carbon_get_the_post_meta('review_insta')  ?>" class="people-item-insta" target="_blank"></a>
                <?php endif; ?>
              </div>

              <div class="people-item-review-second"><?php echo carbon_get_the_post_meta('review_job') ?></div>
              <div class="people-item-review-third"><?php echo carbon_get_the_post_meta('review_text') ?></div>
            </div>
          </div>
          <?php $camp_id = $post->post_parent; ?>
          <a href="<?php echo get_the_permalink($camp_id) ?>" class="review-link" style="margin-top: 0"> <span><?php echo get_the_title($camp_id) ?></span> </a>
        </div>

      <?php endwhile; ?>

    </div>

  </div>

<?php endif;
wp_reset_postdata(); ?>