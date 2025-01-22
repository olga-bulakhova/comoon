<?php global $post;

$query = new WP_Query([
  'post_type' => 'reviews',
  'posts_per_page' => -1,
  'meta_query' => [
    [
      'key' => 'review_display_in_comoonity',
      'value' => 'yes'
    ]
  ]
]);

if ($query->have_posts()) : ?>

  <section class="comoonity-people pt-9 pb-9 pt-6-mobile pb-6-mobile">
    <div class="wrapper">
      <h2 class="title-md-uppercase center mb-1_6"><?php pll_e('Люди — это новая нефть!')  ?></h2>
      <div class="text-lg-bold color-dark center"><?php pll_e('Самое важное в комьюнити — это ты и твой опыт, твое желание делиться и принимать.')  ?></div>
      <div class="founders-list mt-8 mt-6-mobile">

        <?php while ($query->have_posts()) :
          $query->the_post();
          $id = carbon_get_the_post_meta('review_video');
        ?>

          <div class="founders-item ">
            <div class="founders-item-photo" style="position: relative">
              <div class="home-video border-radius" style="margin: 0; height: 100%; position: absolute; top:0; right:0; bottom:0; left:0;">
                <video src="<?php echo wp_get_attachment_url($id) ?>" class="border-radius" poster="<?php echo wp_get_attachment_url(carbon_get_the_post_meta('review_video_poster')) ?>" style="object-fit:cover; overflow:hidden;width:100%; height:100%;"></video>
                <div class="overlay border-radius" style="background-color: transparent">
                  <div class="video-play" style="width: 80px; height: 80px"></div>
                </div>
              </div>

              <div class="founders-item-info" style="position: absolute; right:0; bottom:0; left:0; padding: 26px; z-index:20">
                <div class="founders-item-name"><?php echo carbon_get_the_post_meta('review_name')  ?></div>
                <?php if (!empty(carbon_get_the_post_meta('review_insta'))): ?>
                  <a href="<?php echo carbon_get_the_post_meta('review_insta')  ?>" class="founders-item-insta" target="_blank"></a>
                <?php endif; ?>
              </div>
            </div>

            <div class="founders-item-text text-18-400"><?php echo carbon_get_the_post_meta('review_text') ?></div>
          </div>

        <?php endwhile; ?>

      </div>
    </div>
  </section>

<?php endif;
wp_reset_postdata(); ?>