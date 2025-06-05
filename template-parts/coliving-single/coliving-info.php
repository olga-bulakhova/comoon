<?php
$is_future_date = is_future_date(carbon_get_the_post_meta('event_start'));
?>

<section class="camp-info mb-7 mb-6-mobile <?php echo $is_future_date ? 'pt-7  pt-6-mobile' : 'pt-8 pb-8  pt-6-mobile'; ?> ">
  <div class="wrapper">
    <h2 class="center color-dark title-48-600"><?php echo pll__('Информация о коливинге') ?></h2>

    <?php
    $camp_advantages = carbon_get_the_post_meta('camp_advantages');
    $camp_available = carbon_get_the_post_meta('camp_available');

    if (!empty($camp_advantages) || !empty($camp_available)) : ?>
      <div class="camp-available mt-5_6 mb-4_8 mt-4-mobile mb-4-mobile">
        <div class="available-list badges-list justify-center">

          <?php foreach ($camp_advantages as $item) : ?>

            <div class=" badge-green-border" style="background-image: url(<?php echo COMOON_DIR_URI . ADVANTAGES_ICON_URL . $item['camp_advantages_icon'] . '.svg'; ?>);"><?php echo $item['camp_advantages_text'] ?></div>

          <?php endforeach; ?>

          <?php foreach ($camp_available as $item) : ?>

            <div class=" badge-green-border" style="background-image: url(<?php echo COMOON_DIR_URI . AVAILABLE_ICON_URL . $item['camp_available_icon'] . '.svg'; ?>);"><?php echo $item['camp_available_text'] ?></div>

          <?php endforeach; ?>

        </div>
      </div>
    <?php endif; ?>

    <?php

    function wp_first_paragraph_excerpt($id = null)
    {
      // Set $id to the current post by default
      if (!$id) {
        global $post;
        $id = get_the_id();
      }

      // Get the post content
      $content = get_post_field('post_content', $id);
      $content = apply_filters('the_content', strip_shortcodes($content));

      // Remove all tags, except paragraphs
      $excerpt = strip_tags($content, '<p></p>');

      // Remove empty paragraph tags
      $excerpt = force_balance_tags($excerpt);
      $excerpt = preg_replace('#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $excerpt);
      $excerpt = preg_replace('~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $excerpt);

      // Get the first paragraph
      $excerpt = substr($excerpt, 0, strpos($excerpt, '</p>') + 4);

      // Remove remaining paragraph tags
      $excerpt = strip_tags($excerpt);

      return $excerpt;
    }


    function the_content_without_first_paragraph()
    {
      $content = trim(apply_filters('the_content', get_the_content()));
      $content = preg_replace('#<[a-z]+>[^<]+</[a-z]+>#', '', $content, 1);
      echo $content;
    }


    ?>

    <div class="wrapper-sm text-16-400 mb-8 mb-4-mobile mt-4">
      <?php echo wp_first_paragraph_excerpt() ?>
    </div>

    <?php get_template_part('template-parts/coliving-single/coliving-gallery'); ?>

    <div class="center mt-7 mb-7 mb-6-mobile mt-4-mobile">
      <button class="btn btn-primary btn-toggle btn-toggle-content">
        <?php echo pll__('Больше о коливинге') ?>
      </button>
    </div>

    <div class="camp-info-content content-hidden-block hidden">
      <?php echo the_content_without_first_paragraph() ?>
    </div>
  </div>
</section>