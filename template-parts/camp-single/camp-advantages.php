<?php
$camp_advantages = carbon_get_the_post_meta('camp_advantages');

if (!empty($camp_advantages)) : ?>

  <div class="camp-advantages pb-18 pb-6-mobile">
    <div class="wrapper">
      <div class="advantages-list center">

        <?php foreach ($camp_advantages as $adv) : ?>

          <div class="advantages-item">
            <div class="advantages-icon">
              <img src="<?php echo COMOON_DIR_URI . ADVANTAGES_ICON_URL . $adv['camp_advantages_icon'] . '.svg'; ?>" alt="">
            </div>
            <div class="advantages-text color-dark"><?php echo $adv['camp_advantages_text']; ?></div>
          </div>

        <?php endforeach; ?>

      </div>
    </div>
  </div>
<?php endif; ?>