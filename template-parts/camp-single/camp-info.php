<?php
$is_future_date = is_future_date(carbon_get_the_post_meta('event_start'));
?>

<section class="camp-info mb-6-mobile <?php echo $is_future_date ? 'pt-14 pt-6-mobile' : 'pt-8 pb-8  pt-6-mobile'; ?> ">
  <div class="wrapper">
    <div class="camp-info-heading">
      <h2 class="center color-dark title-48-600"><?php echo carbon_get_theme_option('camps_info' . carbon_lang_prefix()) ?></h2>
      <?php
      $camp_advantages = carbon_get_the_post_meta('camp_advantages');

      if (!empty($camp_advantages)) : ?>
        <div class="advantages-list center">

          <?php foreach ($camp_advantages as $adv) : ?>
            <div class="advantages-item-wrapper">
              <div class=" advantages-item border-radius">
                <div class="advantages-icon">
                  <img src="<?php echo COMOON_DIR_URI . ADVANTAGES_ICON_URL . $adv['camp_advantages_icon'] . '.svg'; ?>" alt="">
                </div>
                <div class="advantages-text color-dark"><?php echo $adv['camp_advantages_text']; ?></div>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      <?php endif; ?>

    </div>

    <div class="camp-info-content">
      <?php the_content() ?>
    </div>
  </div>
</section>